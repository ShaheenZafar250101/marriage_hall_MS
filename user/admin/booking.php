<?php
include('include/config.php');
include('include/header.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
}
?>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php
include('include/nav.php');
include('include/aside.php');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            
  <br>
  
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View Booking</h4>
                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport2" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Number</th>
                            <th>CNIC</th>
                            <th>Email</th>
                            <th>Hall</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Guests</th>
                            <th>Menu</th>
                            <th>Function</th>
                            <th>Per Head Price</th>
                            <th>Advance</th>
                            <th>SC</th>
                            <th>Totall Price</th>
                            <th>Status</th>
                            <th>Update Status</th>
                            <th>Invoice</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
            $sql = "SELECT * FROM booknow INNER JOIN hall ON hall.hid = booknow.hall";
            $run = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($run)) {
            ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['number'] ?></td>
                    <td><?php echo $row['cnic'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['hall'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['guest'] ?></td>
                    <td><?php
                    $menu=explode(',',$row['menu']);
                    foreach($menu as $m){
            $sql1 = "SELECT * FROM menu WHERE mid='$m'";
            $run1 = mysqli_query($conn, $sql1);
            while ($row1 = mysqli_fetch_array($run1)) {
              echo $row1['item'].",";
            }
          }
            ?></td>
                    <td><?php echo $row['function'] ?></td>
                  
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['advance'] ?></td>
                    <td><?php echo '<img src="../screenshoot/'.($row["screenshoot"] ).'" class="preview-image" height="50" width="50"/>' ?></td>
                    <td><?php echo $row['tprice'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <?php
                    if($row['status']=="approved"){
                      ?>
                      <td><form action ="bookapprove.php" method ="POST">
                    <input type = "hidden" name  ="uid" value = "<?php echo $row['id'];?>"/>
                    <input type = "hidden" name  ="uemail" value = "<?php echo $row['email'];?>"/>
                    <input type = "hidden" name  ="uprice" value = "<?php echo $row['price'];?>"/>
                    <input type = "hidden" name  ="uguest" value = "<?php echo $row['guest'];?>"/>
                    <input type = "hidden" name  ="udate" value = "<?php echo $row['date'];?>"/>
                    <input type = "hidden" name  ="status" value = "pending"/>
                                <input type = "submit" class="btn btn-danger" name  ="approve" value = "Approved"/>
                                
                            </form></td>
                            <?php
                    }else{
                      ?>
                      <td><form action ="bookapprove.php" method ="POST">
                    <input type = "hidden" name  ="uid" value = "<?php echo $row['id'];?>"/>
                    <input type = "hidden" name  ="uemail" value = "<?php echo $row['email'];?>"/>
                    <input type = "hidden" name  ="uprice" value = "<?php echo $row['price'];?>"/>
                    <input type = "hidden" name  ="uguest" value = "<?php echo $row['guest'];?>"/>
                    <input type = "hidden" name  ="udate" value = "<?php echo $row['date'];?>"/>
                    <input type = "hidden" name  ="status" value = "approved"/>
                                <input type = "submit" class="btn btn-primary" name  ="approve" value = "Approve"/>
                                
                            </form></td>
                            <?php
                    }
                    ?>
                    <td><a href="invoice.php?uid=<?php echo $row['id'] ?>" class="btn btn-primary">Invoice</a></td>
                    <td><a href="booking_update.php?uid=<?php echo $row['id'] ?>" class="btn btn-success">Update</a></td>                   
                    <td><a href="bookdelete.php?uid=<?php echo $row['id']?>" class="btn btn-warning delete">Delete</button></td>
                </tr>
            <?php
            }
            ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- The modal -->
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="previewImage">
</div>
  <?php
include('include/footer.php');

  ?>
  <!--app JS-->
  <!-- Add this JavaScript code to your HTML file -->
<script>
// Get the modal
var modal = document.getElementById("imageModal");

// Get the image and insert it inside the modal
var img = document.getElementById("previewImage");
var modalImg = document.getElementById("previewImage");
var captionText = document.getElementById("caption");
document.querySelectorAll('.preview-image').forEach(function(element) {
    element.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        modal.style.display = "flex";
        modal.style.alignItems = "center";
        modal.style.justifyContent = "center";
    }
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


</script>

  <script>
		$(document).ready(function() {
			var table = $('#tableExport2').DataTable( {
				lengthChange: false,
				"dom": 'Bfrtip',  
                "buttons": [ 
				{  
                        extend: 'copy',  
                        className: 'btn1',  
                        text: '<i class="fa-regular fa-copy icon"></i> Copy'  
                    }, 
                   
                    {  
                        extend: 'excel',  
                        className: 'btn2',  
                        text: '<i class="far fa-file-excel icon"></i> Excel'  
                    },  
                    {  
                        extend: 'pdf',  
                        className: 'btn3',  
                        text: '<i class="far fa-file-pdf icon"></i> Pdf'  
                    },  
                    {  
                        extend: 'csv',  
                        className: 'btn4',
                        text: '<i class="fas fa-file-csv icon"></i> CSV'  
                    },  
                    {  
                        extend: 'print',  
                        className: 'btn5',  
                        text: '<i class="fas fa-print icon"></i> Print',
						exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12]
						}     
                    },
                    {
                      extend:'colvis',
                      className: 'btn6',
                      text:'column visibility'
                    }   
                ]  
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
        </script>