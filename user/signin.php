<?php 

include './inc/connection.php';
if(isset($_POST['Sign_In']))
{
  $Name=$_POST['Name'];
  $Number=$_POST['Number'];
  $Email=$_POST['Email'];
 $Password=$_POST['Password'];
  
  
  $insert="INSERT INTO users (Name, Number, Email, Password)
  VALUES ('$Name','$Number','$Email','$Password')";
  if (mysqli_query($conn, $insert)) {
    echo "".'<br>';
  } else {
  echo "Error: " . $insert. "<br>" . mysqli_error($conn);
}

}

// if (isset($_POST['Name']) && isset($_POST['Passwords'])){
//     $Email = ($_POST['Email']);

//     $Password = ($_POST['Password']);

//     if (empty($Email)) {

//         header("Location: Signin.php?error=User Email is required");

//         exit();

//     }else if(empty($Password)){

//         header("Location: Signin.php?error=Password is required");

//         exit();

//     }else{

//         $sql = "SELECT * FROM users WHERE mail='$Email' AND passwords='$Password'";

//         $result = mysqli_query($conn, $sql);

//         if (mysqli_num_rows($result) === 1) {

//             $row = mysqli_fetch_assoc($result);

//             if ($row['Email'] === $Email && $row['Passwords'] === $Password) {

//                 echo "Logged in!";

//                 $_SESSION['Email'] = $row['Email'];

//                 $_SESSION['Password'] = $row['Password'];

//                 $_SESSION['id'] = $row['id'];

//                 header("Location: index.php");

//                 exit();

//             }else{

//                 header("Location: Signin.php?error=Incorect User name or password");

//                 exit();

//             }

//         }else{

//             header("Location: Signin.php?error=Incorect User name or password");

//             exit();

//         }

//     }

// }else{

//     header("Location: signin.php");

//     exit();

// }

?>
<?php
include './inc/header.php';
?>
    <div class="main">
        <div class="logo ">
            <img src="./ta.jpg" alt="" width="100px" height="100px">
            <h3 class="mt-3">SIGN IN</h3>
            
        </div>
        <div class="input">
           <form action="" method="post">
               <div class="container mt-4">
                   <div class="row  d-flex justify-content-center">
                    <!-- <label for="" class="col-4 d-flex justify-content-center">Email</label> -->
                    <input type="email" class="col-9" placeholder="Enter your Email"> <br>
                   </div>
                   <div class="row mt-3 d-flex justify-content-center">
                    <!-- <label for="password" class="col-4 d-flex justify-content-center">Password</label> -->
               <input type="password" class="col-9" placeholder="Enter your Password">
           
                   </div>
               </div>
               <div class="row">
                <div class="col  d-flex justify-content-center mt-3">
                <h6> Don't Have account <span><a href="">Sign Up</a></span><br><br>
            
                &nbsp;&nbsp;          Forget your password
            </h6>
                
                </div>
            </div>
            <div class="row mx-auto" >
                
                 <input type="submit" value="Sign In" class="col-5 mx-auto submit mt-3 " >
                </div>
              
            </div>
              
           </form>
          
        </div>
        
       
    </div>
    <?php
include './inc/footer.php';
?>