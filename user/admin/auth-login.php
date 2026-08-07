<?php
include('include/header.php');
include('include/config.php');
if(isset($_POST['login'])){
  $email=strtolower(mysqli_real_escape_string($conn,$_POST['email']));
  $password=strtolower(mysqli_real_escape_string($conn,$_POST['password']));
  if($email=="" || $password==""){
    echo "<script>alert('plz fill out all fields')</script>";
   }
   else{
    $sql = "SELECT * FROM `admin` WHERE user_email='$email' && password='$password'";

		$result = mysqli_query($conn, $sql);
    $role11 = mysqli_fetch_array($result);
		if (@$role11['user_email']==$email) {

      $_SESSION['email']=$email;

      header('location:index.php');
    }else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
   }
}
?>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
      <a href="../index.php"><button class="btn btn-primary">Back</button></a>
        <div class="row">
        
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="forgot-password.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
include('include/footer.php');
?>