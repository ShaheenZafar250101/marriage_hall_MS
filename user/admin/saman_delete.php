<?php
include 'include/config.php';
$id=$_GET["uid"];
$del="DELETE FROM saman WHERE sid='$id'";
$run=mysqli_query($conn,$del);
if($run){
   header('Refresh:0, url=saman_view.php');
}else{
    echo "Data has not been deleted";
}
?>