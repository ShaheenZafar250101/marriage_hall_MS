<?php
include('include/config.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
}

$day = date('d');
$month = date('m');
// $month_name = date('F');

$month_check = "SELECT `sid`, `paid_month` FROM `staff`";
$process = mysqli_query($conn, $month_check);

while ($res = mysqli_fetch_assoc($process)) {
    $sid = $res['sid'];
    $paid_month = $res['paid_month'];

    if ($day == 14 && $paid_month != $month) {
        $update = "UPDATE `staff` SET `salary_status` = 'unpaid' WHERE `sid` = '$sid'";
        $run = mysqli_query($conn, $update);
        if (!$run) {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}



include('include/header.php');
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
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>View Gallery</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport2" style="width:100%;">
                        <thead>
                          <tr>
                          <th>Category</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Experiance</th>
                            <th>Salary</th>
                            <th>Salary Status</th>
                            <th>Last Paid</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Pay Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
            $sql = "SELECT * FROM staff WHERE `status`='approved'";
            $run = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($run)) {
            ?>
                <tr>
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['number'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['experiance'] ?></td>
                    <td><?php echo $row['salary'] ?></td>
                    <td><?php echo $row['salary_status'] ?></td>
                    <td><?php echo $row['paid_month']."-".date('y') ?></td>
                    <td><?php echo '<img src="../cv//'.($row["file"] ).'" height="50" width="50"/>' ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><a href="staff_update.php?uid=<?php echo $row['sid'] ?>" class="btn btn-primary">Update</a></td>
                    <td><a href="staff_delete.php?uid=<?php echo $row['sid'] ?>" class="btn btn-warning">Delete</a></td>
                    <td>
                      <?php
                      if ($row['salary_status'] == 'paid') {
                          echo '<button class="btn btn-secondary" disabled>Paid</button>';
                      } else {
                          echo '<a href="staff_salary.php?uid=' . $row['sid'] . '" class="btn btn-success">Pay</a>';
                      }
                      ?>
                  </td>                </tr>
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
  <?php
include('include/footer.php');
?>
	<!--app JS-->
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
                    columns: [0,1,2,3,4,5,6]
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
  