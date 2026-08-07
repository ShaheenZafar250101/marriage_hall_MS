<?php
include './inc/header.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  a">
    <div class="container-fluid ">
        <a class="navbar-brand" href="index.php">Dubai Marriage Hall </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-1 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="index.php">Home</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link " href="booknow.php" >Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="gallery.php" >Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="aboutus.php" >About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <img src="./images/login.png" alt="">
                <a style="color: white; text-decoration: none;" href="./admin/auth-login.php"> &nbsp; &nbsp;
                    Login</a>
            </form>
        </div>
    </div>
</nav>

  <div class="container gallery-container">

    <h1 class="text-warning">Gallery</h1>
    
    <div class="tz-gallery">

        <div class="row">
        <?php 
            $my="SELECT * FROM recent";
            $rune=mysqli_query($conn,$my);
            while($fet=mysqli_fetch_array($rune))
            {
            ?>
            <div class="col-md-4 col-sm-6">
               
                <a class="lightbox" href="<?php echo '../admin/image/' .$fet[2]; ?>">
                        <img src="<?php echo './admin/image/' .$fet[2]; ?>" style="width:300px; height:250px">
            </a>
                       <div style="padding:20px; box-sizing:border-box;">
                       <h5>Event Name: <?php echo $fet[1]?></h5>
                       </div>
                
                    
            </div>
            <?php 
                }
            ?>
            
        </div>

    </div>
</div>
<?php
include './inc/footer.php';
?>