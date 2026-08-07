<?php
include 'include/config.php';
if(isset($_GET['uid'])) {

    $id = $_GET['uid'];
    $del="DELETE FROM contact WHERE id='$id'";
$run=mysqli_query($conn,$del);
if($run){
//    echo "Data has been deleted";
   header('Refresh:0, url=contact.php');
}else{
    echo "Data has not been deleted";
}
}
?>