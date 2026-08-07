<?php
include 'include/config.php';
if(isset($_POST['approve'])) {

    $id = $_POST['uid'];
    $email = $_POST['uemail'];
    $price = $_POST['uprice'];
    $guest = $_POST['uguest'];
    $date = $_POST['udate'];
    $status = $_POST['status'];

    $sql = "UPDATE booknow SET `status` = '$status' WHERE email = '$email' && id='$id'";
    
    
    if (mysqli_query($conn, $sql)) {

        if($status=="approved"){
    
    //   $code=rand(1000,9000);
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls'; 
$mail->Port = '587';                                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mtayyabwahla@gmail.com';                 // SMTP username
$mail->Password = 'ffkuwuyjfzlwejec';
//$mail->SMTPSecure = '';
// $mail->setForm = $email;
// $mail->FormName = $name;
// $mail->ADDAddress($email,$name);
$mail->ADDCC($email);
$mail->WordWrap = 50;
//$mail->addAttachment($docs); 
$mail->IsHTML(true);
$mail->Subject = "Approved";
$mail->Body = "You Booking has been approved by Dubai Marriage Hall<br>Booking Price: ".$price."<br> NO of Guest: ".$guest."<br> Booking Date: ".$date."";
if($mail->Send())
{
echo $error = '<label class="text-success"> Thank you for contacting us</label>';
}
else
{
echo $error = '<label class="text-danger"> There is an Error</label>';
}
        }
header('Refresh:0, url=booking.php');
} else {
    echo "Error updating record: ";
}
}
?>