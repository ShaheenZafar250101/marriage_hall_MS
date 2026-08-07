<?php 
 include('include/config.php');
if(isset($_POST['login'])){ 
$login=$_POST['email'];
$query = "select * from  `admin` where  user_email = '$login'"; 
$res = mysqli_query($conn,$query);
$result=mysqli_fetch_array($res);
if($result)
{
$findresult = mysqli_query($conn, "SELECT * FROM `admin` WHERE  user_email = '$login'");
if($res = mysqli_fetch_array($findresult))
{
$oldftemail = $res['user_email'];  
}
$token = bin2hex(random_bytes(50));
 $inresult = mysqli_query($conn,"insert into pass_reset values('','$oldftemail','$token')"); 
 if ($inresult)  
 { 
    
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
            $mail->ADDCC($oldftemail);
            $mail->WordWrap = 50;
            //$mail->addAttachment($docs); 
            $mail->IsHTML(true);
            $mail->Subject = "Reset your password";
            $mail->Body = "Hi there, click on this <a href=\"http://localhost/learnphp/tyyab/admin/password-reset.php?token=" . $token . "\">link</a> to reset your password on our site";
            if($mail->Send())
            {
                echo $error = '<label class="text-success"> Please check your email.</label>';
            }
            else
            {
                echo $error = '<label class="text-danger"> There is an Error</label>';
            } 
      } 
      else 
      { 
          header("location:forgot-password.php?something_wrong=1"); 
      }     
}
else  
{
header("location:forgot-password.php?err=".$login); 
}
}
?>