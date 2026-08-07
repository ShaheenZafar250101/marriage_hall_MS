<?php
include 'include/config.php';
$id=$_GET["uid"];
$sql="SELECT * FROM staff WHERE `sid`='$id'";
                $run=mysqli_query($conn,$sql);
                $fet=mysqli_fetch_assoc($run);
$del="DELETE FROM staff WHERE `sid`='$id'";
$run=mysqli_query($conn,$del);
if($run){
    unlink("../cv/".$fet['file']);
    if($fet['status']=='approved'){
   header('Refresh:0, url=staff_view.php');
    }else{
        header('Refresh:0, url=staff_pending.php');
    }
}else{
    echo "Data has not been deleted";
}
?>-