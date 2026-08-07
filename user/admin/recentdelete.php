<?php
include 'include/config.php';
$id=$_GET["uid"];
$sql="SELECT * FROM recent WHERE id='$id'";
                $run=mysqli_query($conn,$sql);
                $fet=mysqli_fetch_assoc($run);
$del="DELETE FROM recent WHERE id='$id'";
$run=mysqli_query($conn,$del);
if($run){
    unlink("image/".$fet['img']);
   header('Refresh:0, url=view_recent.php');
}else{
    echo "Data has not been deleted";
}
?>-