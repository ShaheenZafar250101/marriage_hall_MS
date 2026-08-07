<?php
include('include/header.php');
include('include/config.php');
if(!isset($_SESSION['email'])){
  header("Location:auth-login.php");
}
$order=$_GET['uid'];
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
            <div class="invoice">
              <div id="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2>Invoice</h2>
                      <?php
            $sql = "SELECT * FROM booknow WHERE id='$order'";
            $run = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($run)
            ?>
                      <div class="invoice-number">Order #<?php echo $row['id'] ?></div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Billed To:</strong><br>
                          <?php echo $row['name']?><br>
                          <?php echo $row['number']?><br>
                          <?php echo $row['cnic']?><br>
                          <?php echo $row['email']?><br>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Shipped To:</strong><br>
                          Dubai Marriage Hall<br>
                        Pakistan<br>
                         Isalamabad<br>
                         03100000000<br>
                         admin@gamil.com<br>

                    
                   
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Payment Method:</strong><br>
                          Cash<br>
                          <?php echo $row['email']?>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Order Date:</strong><br>
                          <?php echo $row['date']?><br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">All items here cannot be deleted.</p>
                    <div class="table-responsive">
                     
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="40">#</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Function</th>
                          <th class="text-right">Guest</th>
                        </tr>
                        <?php
                        $sub='';
            $sql = "SELECT * FROM booknow WHERE id='$order'";
            $run = mysqli_query($conn, $sql);
            while ($fet = mysqli_fetch_array($run)) {
              $sub=$fet['guest']*$fet['price'];
              $sub=$sub-$fet['advance'];
            ?>
                        <tr>
                          <td><?php echo $fet['id']?></td>
                          <td class="text-center"><?php echo $fet['price']?></td>
                          <td class="text-center"><?php echo $fet['function']?></td>
                          <td class="text-right"><?php echo $fet['guest']?></td>
                        </tr>
                        <?php
            }
            ?>
                      </table>
                    </div>
                    <div class="row mt-4">
                      <div class="col-lg-8">
                        <div class="section-title">Payment Method</div>
                        <p class="section-lead">Cash</p>
                        
                      </div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Advance</div>
                          <div class="invoice-detail-value"><?php echo $row['advance'] ?></div>
                          <div class="invoice-detail-name">Subtotal</div>
                          <div class="invoice-detail-value"><?php echo $sub ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
             
                  <a href="orders.php"><button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button></a>
                </div>
                <button class="btn btn-warning btn-icon icon-left" onclick="printDiv('invoice-print')"><i class="fas fa-print"></i> Print</button>
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
      <footer class="main-footer">
        <div class="footer-left">
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <?php
include('include/footer.php');
?>
<script>
  function printDiv(divName){
    var printinvoice= document.getElementById(divName).innerHTML;
    var print= document.body.innerHTML;
    document.body.innerHTML= printinvoice;
    window.print();
    document.body.innerHTML = print;
    location.reload(true);
  }
  </script>