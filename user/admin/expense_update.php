<?php
include('include/config.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
}
include('include/header.php');
$uid = mysqli_real_escape_string($conn, $_GET['uid']);
if (isset($_POST['sub'])) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $sql = "UPDATE `expanse` SET `item`=?, `quantity`=?, `category`=?, `vender`=?, `price`=?, `date`=? WHERE `eid`=?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sissssi", $item, $quantity, $category, $vendor, $price, $date, $uid);

    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $vendor = $_POST['vendor'];
    $price = $_POST['price'];
    $date = date("Y-m-d");

    if ($stmt->execute()) {
        echo "<script>alert('Updated')</script>";
        header('Refresh:0, url=expense_view.php');
    } else {
        echo "Error: " . $stmt->error;
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
      $sql = "SELECT * FROM expanse WHERE `eid`='$uid'";
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
                      <h4>Expense</h4>
                    </div>
                    <div class="card-body">

                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" class="form-control" name="item" value="<?php echo $row['item']?>" required="" pattern="[A-Za-z ]{3,30}">
                      </div>

                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="<?php echo $row['quantity']?>" required="">
                      </div>


                      <div class="form-group">
                          <label>Category</label>
                          <select name="category" class="form-control">
                              <option selected value="">Select Category</option>
                              <option value="single" <?php echo ($row['category'] == "single") ? "selected" : ""; ?>>Single</option>
                              <option value="pair" <?php echo ($row['category'] == "pair") ? "selected" : ""; ?>>Pair</option>
                              <option value="litter" <?php echo ($row['category'] == "litter") ? "selected" : ""; ?>>Litter</option>
                              <option value="kg" <?php echo ($row['category'] == "kg") ? "selected" : ""; ?>>Kg</option>
                              <option value="darzan" <?php echo ($row['category'] == "darzan") ? "selected" : ""; ?>>Darzan</option>
                          </select>
                      </div>


                      <div class="form-group">
                        <label>Vendor</label>
                    <select name="vendor"  class="form-control">
                    <option value="">Select Vendor</option>
               <?php 
          $s="SELECT * FROM vendor";
          $r=mysqli_query($conn,$s);
          while($fets=mysqli_fetch_array($r)){
              ?>
               <option value="<?php echo $fets['vid'];?>" <?php echo ($row['vender']==$fets['vid'] ? "selected":""); ?>><?php echo $fets['name'];  ?></option>
              <?php
          }
          ?>
        </select>
        </div>

                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price']?>" required="">
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