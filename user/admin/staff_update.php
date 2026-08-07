<?php
include('include/config.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
}
include('include/header.php');
$uid=mysqli_real_escape_string($conn,$_GET['uid']);
if(isset($_POST['sub'])){
 
    $category=strtolower(mysqli_real_escape_string($conn,$_POST['category']));
    $name=strtolower(mysqli_real_escape_string($conn,$_POST['name']));
    $number=strtolower(mysqli_real_escape_string($conn,$_POST['number']));
    $email=strtolower(mysqli_real_escape_string($conn,$_POST['email']));
    $number=strtolower(mysqli_real_escape_string($conn,$_POST['number']));
    $experiance=strtolower(mysqli_real_escape_string($conn,$_POST['experiance']));
    $salary=strtolower(mysqli_real_escape_string($conn,$_POST['salary']));
    @$file = $_FILES['cv']['name'];
    $date=date("Y-m-d");
    if($file==""){
        $sqli = "SELECT * FROM staff where sid='$uid'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_array($run);
        $file=$row['file'];
      }else{
        $sqli = "SELECT * FROM staff where sid='$uid'";
        $run = mysqli_query($conn, $sqli);
        $row = mysqli_fetch_array($run);
        unlink("../cv/".$row['file']);
      }
    $date=date("Y-m-d");
    $sql="UPDATE `staff` SET `category`='$category', `name`='$name', `number`='$number', `email`='$email', `experiance`='$experiance', `salary`='$salary', `file`='$file', `status`='approved', `date`='$date' WHERE `sid`='$uid'";
     $run=mysqli_query($conn,$sql);
     move_uploaded_file($_FILES['cv']['tmp_name'], '../cv/' . $file);
     header('Refresh:0, url=staff_view.php');

     if($run){
        echo "<script>alert('Updated')</script>";
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
      $sql = "SELECT * FROM staff WHERE `sid`='$uid'";
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
                      <h4>Staff</h4>
                    </div>
                    <div class="card-body">

                    <div class="form-group">
                        <label>Categorie</label>
                        <select name="category"  class="form-control" required>
            <option selected disabled value="">Select Categorie</option>
            <option value="Waiter">Waiter</option>
            <option value="Designer">Designer</option>
            <option value="chief">chief</option>
            <option value="Hr">Hr Maneger</option>
            <option value="Other">Other</option>
        </select>
                      </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required="" pattern="[A-Za-z ]{3,30}">
                      </div>

                      <div class="form-group">
                        <label>Number</label>
                        <input type="number" class="form-control" name="number" value="<?php echo $row['number']?>" required="" pattern="">
                      </div>

                      <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>" required="">
                      </div>

                      <div class="form-group">
                        <label>Experiance in Years</label>
                        <input type="number" class="form-control" name="experiance" value="<?php echo $row['experiance']?>" required="">
                      </div>

                      <div class="form-group">
                        <label>Salary</label>
                        <input type="number" class="form-control" name="salary" value="<?php echo $row['salary']?>" required="">
                      </div>

                      <div class="form-group">
                        <label>Upload Image:</label>
                        <input type="file" class="form-control" value="" name="cv">
                      </div>
                    <div class="card-footer text-right">
                    <input type="submit" name="sub" class="btn btn-primary" value="Submit">
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