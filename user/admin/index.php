<?php
include('include/header.php');
include('include/config.php');
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

$date = date('Y-m-d');
$day = date('d');
$month = date('m');
$year = date('Y');

$booking = 0;
$month_events_count = 0;

$sql = "SELECT * FROM booknow";
$run = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($run)) {
    $booking_month = date('m', strtotime($row['date'])); // Extract month from database datetime
    $booking_year = date('Y', strtotime($row['date'])); // Extract year from database datetime

    if ($booking_month == $month && $booking_year == $year) {
        $booking += $row['tprice'];
        $month_events_count++;
    }
}


$expense = 0;

$sql = "SELECT * FROM expanse";
$run = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($run)) {
  $booking_month = date('m', strtotime($row['date'])); // Extract month from database datetime
  $booking_year = date('Y', strtotime($row['date'])); // Extract year from database datetime

  if ($booking_month == $month && $booking_year == $year) {
        $expense += $row['price'];
    }
}


$saman = 0;

$sql = "SELECT * FROM saman";
$run = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($run)) {
  $booking_month = date('m', strtotime($row['purchase_date'])); // Extract month from database datetime
  $booking_year = date('Y', strtotime($row['purchase_date'])); // Extract year from database datetime

  if ($booking_month == $month && $booking_year == $year) {
        $saman += $row['price'];
    }
}


$salary = 0;

$sql = "SELECT * FROM staff";
$run = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($run)) {
        $salary += $row['salary'];
}
$profit = $booking-$expense-$salary-$saman;

$tbooking = 0;

$sql = "SELECT * FROM booknow WHERE `date`='$date'";
$run = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($run)) {

        $tbooking += $row['tprice'];
    
}

$sql = "SELECT count('function') as today_events FROM booknow WHERE `date`='$date'";
$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($run);
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Monthly Events Booking</h5>
                          <h2 class="mb-3 font-18"><?php echo $booking  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">This Month Events Booked</h5>
                          <h2 class="mb-3 font-18"><?php echo $month_events_count;  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Monthly Events Expense</h5>
                          <h2 class="mb-3 font-18"><?php echo $expense  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Monthly Events Profit</h5>
                          <h2 class="mb-3 font-18"><?php echo $profit  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Monthly other Saman expense</h5>
                          <h2 class="mb-3 font-18"><?php echo $saman  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Staff Salary</h5>
                          <h2 class="mb-3 font-18"><?php echo $salary  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Today Events Price</h5>
                          <h2 class="mb-3 font-18"><?php echo $tbooking  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Today Events Booked</h5>
                          <h2 class="mb-3 font-18"><?php echo $row['today_events']  ?></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="main-content">


            <button class="btn btn-primary" onclick="weeklyGraph()">This Week Bookings</button>
            <button class="btn btn-primary" onclick="monthlyGraph()">Profit/Loss By Month</button>

        <section class="section mt-5">
          <div class="row "> 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="monthlygraph" style="display: none;">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                  <?php
                    $currentYear = date('Y');
                    $samanByMonth = array();

                    // Get distinct months and sum of prices for the current year
                    $sql = "SELECT MONTH(purchase_date) AS month, SUM(price) AS total_price 
                            FROM saman 
                            WHERE YEAR(purchase_date) = $currentYear 
                            GROUP BY MONTH(purchase_date)";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $month = $row['month'];
                            $totalPrice = $row['total_price'];
                            $samanByMonth[$month] = $totalPrice;
                        }
                    }

                    $expanseByMonth = array();

                    // Get distinct months and sum of prices for the current year
                    $sql = "SELECT MONTH(date) AS month, SUM(price) AS total_price 
                            FROM expanse 
                            WHERE YEAR(date) = $currentYear 
                            GROUP BY MONTH(date)";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $month = $row['month'];
                            $totalPrice = $row['total_price'];
                            $expanseByMonth[$month] = $totalPrice;
                        }
                    }

                    $salariesByMonth = array();

                    // Get distinct months and sum of salaries for the current year
                    $sql = "SELECT MONTH(date) AS month, SUM(salary) AS total_salary 
                            FROM staff 
                            WHERE YEAR(date) = $currentYear 
                            GROUP BY MONTH(date)";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $month = $row['month'];
                            $totalSalary = $row['total_salary'];
                            $salariesByMonth[$month] = $totalSalary;
                        }
                    }

                    $bookingsByMonth = array();

                    // Get distinct months and sum of prices for the current year
                    $sql = "SELECT MONTH(date) AS month, SUM(tprice) AS total_price 
                            FROM booknow 
                            WHERE YEAR(date) = $currentYear 
                            GROUP BY MONTH(date)";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $month = $row['month'];
                            $totalPrice = $row['total_price'];
                            $bookingsByMonth[$month] = $totalPrice;
                        }
                    }
                    ?>

                  <canvas id="monthlyChart" width="400" height="200"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                      var ctx = document.getElementById('monthlyChart').getContext('2d');
                      var colors = [
                          'rgba(255, 99, 132, 0.9)',
                          'rgba(54, 162, 235, 0.9)',
                          'rgba(255, 206, 86, 0.9)',
                          'rgba(75, 192, 192, 0.9)',
                          'rgba(153, 102, 255, 0.9)',
                          'rgba(255, 159, 64, 0.9)',
                          'rgba(255, 99, 132, 0.9)',
                          'rgba(54, 162, 235, 0.9)',
                          'rgba(255, 206, 86, 0.9)',
                          'rgba(255, 0, 0,0.9)',
                          'rgba(153, 102, 255, 0.9)',
                          'rgba(255, 159, 64, 0.9)'
                      ];

                      // Assuming you have already fetched and stored the profit values by month
                      var profitData = [
                      <?php
                      $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                      foreach ($months as $index => $monthName) {
                          $month = $index + 1; // Months are 1-indexed in SQL
                          $bookingTotal = isset($bookingsByMonth[$month]) ? $bookingsByMonth[$month] : 0;
                          $samanTotal = isset($samanByMonth[$month]) ? $samanByMonth[$month] : 0;
                          $salaryTotal = isset($salariesByMonth[$month]) ? $salariesByMonth[$month] : 0;
                          $expenseTotal = isset($expanseByMonth[$month]) ? $expanseByMonth[$month] : 0;

                          $profit = $bookingTotal - $samanTotal - $salaryTotal - $expenseTotal;
                          echo $profit . ",";
                      }
                      ?>
                  ];


                      var monthlyChart = new Chart(ctx, {
                          type: 'bar',
                          data: {
                              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                              datasets: [{
                                  label: 'Monthly Profit/Loss',
                                  data: profitData,
                                  backgroundColor: colors,
                                  borderColor: colors,
                                  borderWidth: 1
                              }]
                          },
                          options: {
                              scales: {
                                  y: {
                                      beginAtZero: true
                                  }
                              }
                          }
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="weeklygraph">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                                    <?php
                                      // Get the current week's start and end dates
                                      $startDate = date('Y-m-d', strtotime('last sunday'));
                                      $endDate = date('Y-m-d', strtotime('next saturday'));

                                      $bookingsByDay = array();

                                      // Get distinct days and sum of prices for the current week
                                      $sql = "SELECT DATE(date) AS day, SUM(tprice) AS total_price 
                                              FROM booknow 
                                              WHERE DATE(date) BETWEEN '$startDate' AND '$endDate' 
                                              GROUP BY DATE(date)";
                                      $result = mysqli_query($conn, $sql);

                                      if ($result) {
                                          while ($row = mysqli_fetch_assoc($result)) {
                                              $day = date('l', strtotime($row['day'])); // Get the day name (e.g., Monday, Tuesday)
                                              $totalPrice = $row['total_price'];
                                              $bookingsByDay[$day] = $totalPrice;
                                          }
                                      }
                                      ?>

                            <canvas id="weeklyChart" width="400" height="200"></canvas>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script>
                                var ctx = document.getElementById('weeklyChart').getContext('2d');
                                var colors = [
                                    'rgba(255, 99, 132, 0.9)',
                                    'rgba(54, 162, 235, 0.9)',
                                    'rgba(255, 206, 86, 0.9)',
                                    'rgba(75, 192, 192, 0.9)',
                                    'rgba(153, 102, 255, 0.9)',
                                    'rgba(255, 159, 64, 0.9)',
                                    'rgba(255, 99, 132, 0.9)',
                                ];

                                // Assuming you have already fetched and stored the profit values by day
                                var profitData = [
                                    <?php
                                    $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                    foreach ($days as $day) {
                                        $bookingTotal = isset($bookingsByDay[$day]) ? $bookingsByDay[$day] : 0;
                                        $profit = $bookingTotal - $samanTotal - $salaryTotal - $expenseTotal;
                                        echo $profit . ",";
                                    }
                                    ?>
                                ];

                                var weeklyChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                                        datasets: [{
                                            label: 'This Week Bookings',
                                            data: profitData,
                                            backgroundColor: colors,
                                            borderColor: colors,
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            </script>

                  </div>
                </div>
              </div>
            </div>

            <script>
    function weeklyGraph() {
        var monthlyChart = document.getElementById('monthlygraph');
        var weeklyChart = document.getElementById('weeklygraph');

        if (monthlyChart && weeklyChart) {
            monthlyChart.style.display = 'none';
            weeklyChart.style.display = 'block';
        }
    }

    function monthlyGraph() {
        var monthlyChart = document.getElementById('monthlygraph');
        var weeklyChart = document.getElementById('weeklygraph');

        if (monthlyChart && weeklyChart) {
            monthlyChart.style.display = 'block';
            weeklyChart.style.display = 'none';
        }
    }
</script>

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