<?php
include 'include/config.php';
$id=$_GET["uid"];
$del="DELETE FROM expanse WHERE eid='$id'";
$run=mysqli_query($conn,$del);
if($run){
   header('Refresh:0, url=expense_view.php');
}else{
    echo "Data has not been deleted";
}
?>