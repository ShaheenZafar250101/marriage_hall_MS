<?php
include('include/config.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
  exit(); // Stop further execution
}
include('include/header.php');
$uid=mysqli_real_escape_string($conn,$_GET['uid']);
if(isset($_POST['update_booking'])){

    $hall=$_POST['hall'];
    $guest=$_POST['guest'];
    $bookingdate=$_POST['bookingdate'];
    $time=$_POST['time'];
    $menu=$_POST['menu'];
    $function=$_POST['function'];
    $price=$_POST['price']; 
    $capacity=$_POST['capacity'];  
    $advance=$_POST['advance']; 

    $date=date("Y-m-d");

    $tprice=$price*$guest;

    if($capacity < $guest){
        echo"<script>alert('Does not exceed the guests then Hall capacity')</script>";
    }else{

                $sqli = "SELECT * FROM booknow WHERE `date`='$bookingdate' AND (`hall`='2' OR `hall`='4' OR `hall`='5') AND `time`='$time'";
                $run=mysqli_query($conn,$sqli);
                $fet=mysqli_fetch_array($run);

                    if(@$fet['date'] == $bookingdate){
                        echo"<script>alert('Dubai Marriage Hall is already booked  in this date')</script>";
                        header('Refresh:0, url=booking_update.php?uid='.$uid);
                        exit(); // Stop further execution
                    }else{

                        $sch=implode(",",$menu);
    
                        $update="UPDATE `booknow` set `hall`=$hall, `date`='$bookingdate', `time`='$time', `guest`=$guest, `menu`='$sch', `function`='$function',`price`=$price,`tprice`=$tprice,`advance`=$advance WHERE `id` = $uid";
                          if (mysqli_query($conn, $update)) {
                            header('Refresh:0, url=booking.php');
                            exit(); // Stop further execution
                          } else {
                            echo "Error: " . $update. "<br>" . mysqli_error($conn);
                            exit(); // Stop further execution
                          }
    
             
    
              
    }

      }

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
          <?php
      $sql = "SELECT * FROM booknow WHERE `id`='$uid'";
            $run = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($run)) {
            ?>
            <div class="row">
            <div class=" col-md-3 col-lg-3">
            </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <form method="post" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Booking</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <?php
                        $date=date('Y-m-d');
                        // echo $date;
                        ?>
                        <label for="inputbookingdate" class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="inputbookingdate" required min="<?php echo $date ?>" value="<?php echo $row['date']; ?>" name="bookingdate">
                    </div>
                    <div class="form-group">
                        <label for="inputfunction" class="form-label">Time</label>
                        <select id="inputfunction" class="form-control"name="time" required>
                            <option selected disabled  value="">Select...</option>
                            <option value="morning" <?php echo $row['time']=="morning" ? "selected" : ""; ?>>Morning</option>
                            <option value="evening" <?php echo $row['time']=="evening" ? "selected" : ""; ?>>Evening</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Function</label>
                        <select name="function"  class="form-control" required>
                            <!-- <option selected disabled value="">Select Categorie</option> -->
                            <option value="Barat" <?php echo $row['function']=="Barat" ? "selected" : ""; ?>>Barat</option>
                            <option value="Mehndi" <?php echo $row['function']=="Mehndi" ? "selected" : ""; ?>>Mehndi</option>
                            <option value="Walima" <?php echo $row['function']=="Walima" ? "selected" : ""; ?>>Walima</option>
                            <option value="Birthday" <?php echo $row['function']=="Birthday" ? "selected" : ""; ?>>Birthday</option>
                            <option value="Other" <?php echo $row['function']=="Other" ? "selected" : ""; ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputfunction" class="form-label">Hall</label>
                        <select class="form-control" name="hall" id="halls" required value="Function">
                            <?php 
                                $s="SELECT * FROM hall";
                                $r=mysqli_query($conn,$s);
                                while($fets=mysqli_fetch_array($r)){
                            ?>
                            <option value="<?php echo $fets['hid'];?>" data-capacity="<?php echo $fets['capacity']; ?>" <?php echo $row['hall']==$fets['hid'] ? "selected" : ""; ?>><?php echo $fets['hall'];  ?> / [<?php echo $fets['capacity'];  ?>]</option>
                            <?php
                                }
                            ?>

                        </select>                      
                    </div>
                    <input type="text" hidden value="" id="cap" name="capacity">

                    <div class="form-group">
                        <label for="inputnumber" class="form-label"> Guest</label>
                        <input type="number" class="form-control" id="guest" max="" required placeholder="Guests" value="<?php echo $row['guest'];?>" name="guest">
                    </div>
                    <div class="form-group">
                        <label for="menu" class="form-label">Menu</label><br>
                        <?php 
                            $s = "SELECT * FROM menu";
                            $r = mysqli_query($conn, $s);
                            $selectedMenus = explode(",", $row['menu']); // Explode the string into an array
                            while($fets = mysqli_fetch_array($r)){
                        ?>
                            <input type="checkbox" name="menu[]" value="<?php echo $fets['mid'];?>" data-price="<?php echo $fets['price']; ?>" <?php echo in_array($fets['mid'], $selectedMenus) ? "checked":"";?> class="menu-checkbox"><span class="ms-3 mr-2"><?php echo $fets['item'];  ?>  / [<?php echo $fets['price'];  ?>] </span>
                        <?php
                            }
                        ?>

                    </div>


                    <div class="form-group">
                    <label for="price" class="form-label">Booking Per Guest</label>
                    <input type="text" class="form-control" id="a" required name="price" value="<?php echo $row['price']; ?>" readonly="">
                    </div>
                
                    <div class="form-group">
                        <label for="advance" class="form-label"> Received Amount</label>
                        <input type="number" class="form-control" id="advance" required placeholder="Advance" value="<?php echo $row['advance']; ?>" name="advance" onchange="change_due_amount()">
                    </div>
                    
                    <div id="number"></div>
                    <div class="card-footer text-right">
                    <input type="submit" name="update_booking" class="btn btn-primary" value="Submit">
                    </div>
                  </form>
                </div>
                
              </div>
              
            </div>
            <?php
            }
        ?>
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

<script>
  $(".multiple-select").select2({
  // maximumSelectionLength: 2
});
  </script>

<script>


$(document).ready(function(){

    var totalPrice = parseInt($("#a").val()); // Initialize totalPrice from #totalPrice input field
    $(".menu-checkbox").on("change", function(){
        totalPrice = 0; // Reset totalPrice on each change
        var no_guest = $("#guest").val();
        $(".menu-checkbox:checked").each(function() {
            var price = parseInt($(this).data("price")); // Convert price to integer
            totalPrice += price;
            completePrice = totalPrice*no_guest;

        });
        $("#a").val(totalPrice); // Update the #totalPrice input field with the new totalPrice
    });

  $("#halls").on("change", function(){
    var i = $(this).find(":selected").data("capacity"); // Get capacity from selected option
    $("#guest").attr("max", i);
    $("#cap").val(i); // Set max attribute of #guest input field
});
});
</script>
