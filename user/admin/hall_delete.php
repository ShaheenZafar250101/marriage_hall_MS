<?php
include 'include/config.php';
$id=$_GET["uid"];
$sqli="SELECT * FROM saman WHERE `hid`='$id'";
        $run=mysqli_query($conn,$sqli);
        $fet=mysqli_fetch_array($run);
        if(@$fet['hid']==$id){
            echo "<script>alert('please delete saman first')</script>";
            header('Refresh:0, url=hall_view.php');
        }
        else{
$del="DELETE FROM Hall WHERE hid='$id'";
$run=mysqli_query($conn,$del);
if($run){
   header('Refresh:0, url=hall_view.php');
}else{
    echo "Data has not been deleted";
}
        }
?>