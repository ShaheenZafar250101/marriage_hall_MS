<?php
include 'include/config.php';
$id=$_GET["uid"];
$del="DELETE FROM menu WHERE mid='$id'";
$run=mysqli_query($conn,$del);
if($run){
   header('Refresh:0, url=menu_view.php');
}else{
    echo "Data has not been deleted";
}
?>