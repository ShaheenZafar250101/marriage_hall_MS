<?php
include 'include/config.php';
$id=$_GET["uid"];
$sqli="SELECT * FROM menu WHERE `cid`='$id'";
        $run=mysqli_query($conn,$sqli);
        $fet=mysqli_fetch_array($run);
        if(@$fet['cid']==$id){
            echo "<script>alert('please delete menu first')</script>";
            header('Refresh:0, url=category_view.php');
        }
        else{
$del="DELETE FROM category WHERE cid='$id'";
$run=mysqli_query($conn,$del);
if($run){
   header('Refresh:0, url=category_view.php');
}else{
    echo "Data has not been deleted";
}
        }
?>