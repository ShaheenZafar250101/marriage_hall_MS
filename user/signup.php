<?php
include './inc/header.php';
?>
    <div class="main">
        <div class="logo ">
            <img src="./ta.jpg" alt="" width="100px" height="100px">
            <h3 class="mt-3">SIGN UP</h3>
        </div>
        <div class="input">
           <form action="signin.php" method="post">
               <div class="container mt-3 ">
                   <div class="row  d-flex justify-content-center">
                    
                    <input type="text" class="col-10" placeholder="Enter Name" name="Name" value=""> <br>
                   </div>
                   <div class="row  d-flex justify-content-center mt-4">
                   
                    <input type="text" class="col-10" placeholder="Enter Phone Numnber" name="Number" value=""> <br>
                   </div>
                   <div class="row  d-flex justify-content-center mt-4">
                    
                    <input type="email" class="col-10" placeholder="Enter your Email" name="Email" value=""> <br>
                   </div>
                   <div class="row mt-3 d-flex justify-content-center mt-4">
                    
               <input type="password" class="col-10" placeholder="Enter your Password" name="Password" value="">
                   </div>
               </div>
               <div class="row">
                <div class="col  d-flex justify-content-center mt-3">
                    <h6>Already Have a account <a href="">sign In</a></h6>
                </div>
            </div>
            <div class="row mx-auto" >
                
                 <input type="submit" value="Sign In" name="Sign_In" class="col-5 mx-auto submit " >
                </div>
              
            </div>
              
           </form>
          
        </div>
        
       
    </div>
    <?php
include './inc/footer.php';
?>

