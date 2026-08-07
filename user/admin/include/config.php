<?php
session_start(); 
$conn=mysqli_connect("localhost","root","","ta");
if($conn){
    //echo"connect";
}else{
    echo "not connect";
}
?>