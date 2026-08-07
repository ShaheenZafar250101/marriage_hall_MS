<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ta";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
$conn = New mysqli('localhost', 'root','','ta');
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

?>