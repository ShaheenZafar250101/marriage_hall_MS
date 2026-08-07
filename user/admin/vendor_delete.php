<?php
include 'include/config.php';
$id=$_GET["uid"];
$sqli="SELECT * FROM expanse WHERE `vender`='$id'";
        $run=mysqli_query($conn,$sqli);
        $fet=mysqli_fetch_array($run);
        if(@$fet['vender']==$id){
            echo "<script>alert('please delete expense first')</script>";
            header('Refresh:0, url=vendor_view.php');
        }
        else{

            $sqli="SELECT * FROM saman WHERE `vid`='$id'";
        $run=mysqli_query($conn,$sqli);
        $fet=mysqli_fetch_array($run);
        if(@$fet['vid']==$id){
            echo "<script>alert('please delete saman first')</script>";
            header('Refresh:0, url=vendor_view.php');
        }
        else{
$del="DELETE FROM vendor WHERE `vid`='$id'";
$run=mysqli_query($conn,$del);
if($run){
   
   header('Refresh:0, url=vendor_view.php');
}else{
    echo "Data has not been deleted";
}
        }
    }
?>-