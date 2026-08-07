<!DOCTYPE html>
<?php
include('include/header.php');
include('include/config.php');
if(isset($_SESSION['email'])){
  header("Location:index.php");
}


            if(isset($_GET['token']))
            {
          $token= $_GET['token'];
          }
   //form for submit 
    if(isset($_POST['sub_set'])){
       extract($_POST);
            if($password ==''){
                $error[] = 'Please enter the password.';
            }
            if($passwordConfirm ==''){
                $error[] = 'Please confirm the password.';
            }
            if($password != $passwordConfirm){
                $error[] = 'Passwords do not match.';
            }
        $fetchresultok = mysqli_query($conn, "SELECT email FROM pass_reset WHERE token='$token'");
    if($res = mysqli_fetch_array($fetchresultok))
{
  $email= $res['email']; 
}
            if(isset($email) != '' ) {
            $emailtok=$email;
            }
            else 
              { 
             $error[] = 'Link has been expired or something missing ';
              $hide=1;
              }
if(!isset($error)){

    $resultresetpass= mysqli_query($conn, "UPDATE `admin` SET `password`='$password' WHERE user_email='$emailtok'"); 
    if($resultresetpass) 
    { 
           $success="<div class='successmsg'><span style='font-size:100px;'>&#9989;</span> <br> Your password has been updated successfully.. <br> <a href='login.php' style='color:#fff;'>Login here... </a> </div>";

          $resultdel = mysqli_query($conn, "DELETE FROM pass_reset WHERE token='$token'");
          $hide=1;
    }
} 
    }
    ?>

<div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Reset Password</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="" class="needs-validation" novalidate="">
                <?php 
if(isset($error)){
        foreach($error as $error){
            echo '<div class="errmsg">'.$error.'</div><br>';
        }
    }
    if(isset($success)){
    echo $success;
  }
              ?>
<?php if(!isset($hide)){ ?>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password">Password Confirm</label>
                    <input id="password" type="password" class="form-control" name="passwordConfirm" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="sub_set" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Send Link
                    </button>
                  </div>
                  <?php } ?>
                </form>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
include('include/footer.php');
?>