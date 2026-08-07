<?php
include 'include/config.php';
$id = $_GET["uid"];

$month = date('m'); // Get the full month name
$sql = "SELECT * FROM staff WHERE `sid`='$id'";
$run = mysqli_query($conn, $sql);
$fet = mysqli_fetch_assoc($run);

$del = "UPDATE `staff` SET `salary_status` = 'paid', `paid_month` = '$month' WHERE `sid`='$id'";
$run = mysqli_query($conn, $del);
if ($run) {
    if ($run) {
        header('Refresh:0, url=staff_view.php');
    }
} else {
    echo "Data has not been deleted";
}
?>
