
<?php
include './inc/connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];
    $hall=$_POST['hall'];
    $guest=$_POST['guest'];
    $bookingdate=$_POST['bookingdate'];
    $time=$_POST['time'];
    $menu=$_POST['menu'];
    $function=$_POST['function'];
    $price=$_POST['price']; 
    $capacity=$_POST['capacity'];  
    $advance=$_POST['advance']; 
    @$screen = $_FILES['screen']['name'];
    @$screen_tmp =$_FILES['screen']['tmp_name'];
    $date=date("Y-m-d");

    $tprice=$price*$guest;

        if($capacity < $guest){
              echo"<script>alert('Does not exceed the guests then Hall capacity')</script>";
        }else{

          $sqli = "SELECT * FROM booknow WHERE `date`='$bookingdate' AND (`hall`='2' OR `hall`='4' OR `hall`='5') AND `time`='$time'";
          $run=mysqli_query($conn,$sqli);
                  $fet=mysqli_fetch_array($run);
                  if(@$fet['date'] == $bookingdate){
                    echo"<script>alert('Dubai Marriage Hall is already booked  in this date')</script>";
                    header('Refresh:0, url=booknow.php');
                  }else{

                    $sch=implode(",",$menu);

                    @$uselect2 = "SELECT * FROM user WHERE email='$email' LIMIT 1";
                    $run2 = mysqli_query($conn, $uselect2);
                    
                    // Check if the query was successful and if any rows were returned
                    if ($run2 && mysqli_num_rows($run2) == 1) {
                        // Fetch the row as an associative array
                        $userData = mysqli_fetch_assoc($run2);
                        
                        // Access the 'email' column from the fetched row
                        $fetchedEmail = $userData['email'];
                        
                        
                            // Access the 'uid' column from the fetched row
                            $id = $userData['uid'];
                        
                    
                      $insert="INSERT INTO `booknow` (`user_id`,`name`, `number`, `cnic`, `email`,`hall`, `date`, `time`, `guest`, `menu`, `function`,`status`,`price`,`tprice`,`advance`,`screenshoot`)
                      VALUES ('$id','$name','$number','$cnic','$email','$hall','$bookingdate','$time','$guest','$sch', '$function','pending','$price','$tprice','$advance','$screen')";
                      if (mysqli_query($conn, $insert)) {
                        move_uploaded_file($screen_tmp, './screenshoot/' . $screen);
                        header('Refresh:0, url=booknow.php');
                      } else {
                        echo "Error: " . $insert. "<br>" . mysqli_error($conn);
      }

         

          
}else{
                  $user="INSERT INTO `user` (`name`, `number`, `cnic`, `email`, `date`)
                  VALUES ('$name','$number','$cnic','$email','$date')";
                  mysqli_query($conn, $user);

                  $uselect = "SELECT * FROM user ORDER BY `uid` DESC LIMIT 1";
                  $run1 = mysqli_query($conn, $uselect);
                  $fet1 = mysqli_fetch_array($run1);
                  $id=$fet1['uid'];

  
                  $insert="INSERT INTO `booknow` (`user_id`,`name`, `number`, `cnic`, `email`,`hall`, `date`, `time`, `guest`, `menu`, `function`,`status`,`price`,`tprice`,`advance`,`screenshoot`)
                  VALUES ('$id','$name','$number','$cnic','$email','$hall','$bookingdate','$time','$guest','$sch', '$function','pending','$price','$tprice','$advance','$screen')";
                  if (mysqli_query($conn, $insert)) {
                    move_uploaded_file($screen_tmp, './screenshoot/' . $screen);
                    header('Refresh:0, url=booknow.php');
                  } else {
                  echo "Error: " . $insert. "<br>" . mysqli_error($conn);
                }
}
        }
  }
}

if(isset($_POST['msubmit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message']; 
  
  $minsert="INSERT INTO `contact` (`name`, `email`, `message`,`status`)
  VALUES ('$name','$email','$message','pending')";
  if (mysqli_query($conn, $minsert)) {
    echo"<script>alert('Message has been send')</script>";
    header('Refresh:0, url=contact.php');
  } else {
  echo "Error: " . $minsert. "<br>" . mysqli_error($conn);
}

}


if(isset($_POST['career']))
{
  $category=$_POST['category'];
  $name=$_POST['name'];
  $number=$_POST['number'];
  $email=$_POST['email']; 
  $experiance=$_POST['experiance']; 
  $file= $_FILES['cv']['name'];
  $date=date("Y-m-d");
  
  $minsert="INSERT INTO `staff` (`category`, `name`,`number`, `email`,`experiance`,`file`,`status`,`date`)
  VALUES ('$category','$name','$number','$email','$experiance','$file','pending','$date')";
  if (mysqli_query($conn, $minsert)) {
    move_uploaded_file($_FILES['cv']['tmp_name'],'./cv/'.$file);
    echo"<script>alert('data has been Inserted')</script>";
    header('Refresh:0, url=career.php');
  } else {
  echo "Error: " . $minsert. "<br>" . mysqli_error($conn);
}

}


 
//  $conn->close();
 ?>

