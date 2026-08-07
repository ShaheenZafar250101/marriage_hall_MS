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
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="booknow.php" >Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php" >Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="aboutus.php" >About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact Us</a>
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
<div class="container-fluid mt-5 mb-4 pb-0 pt-4 text-center" data-aos="fade-up">
    <div class="row">
        <h1  class="text-warning">Contact US</h1>
    </div>
</div>
<div class="container" style="height:500px;">
<div class="row px-5">
    <div class="col-sm-6">
      <div>
        <h2 class="contact-name">Dubai Marriage Hall</h2>
        <p class="text-secondary">Dubai Marriage Hall is an acclaimed and preferred event service provider in country which has a modern and well equipped Dubai Marriage Hall, endearing Marriage Halls, unique ambiance and a gigantic outdoor car parking.</p>
      </div>
      
      <div class="links" id="bordering"> <a href="#" class="btn rounded text-dark p-1 "><i
            class="fa fa-phone icon text-primary pr-3"></i>0313-0000000</a> <a href="#"
          class="btn rounded text-dark p-3"><i
            class="fa fa-envelope icon text-primary pr-3"></i>Dubai Marriage Hall@gmail.com</a>
         </div>
         <div class="links" id="bordering"> <a href="#" class="btn rounded text-dark p-1 "><i
            class="fa fa-phone icon text-primary pr-3"></i>0302-0000000</a> <a href="#"
          class="btn rounded text-dark p-3"><i
            class="fa fa-envelope icon text-primary pr-3"></i>Dubai Marriage Hall@gmail.com</a> <a href="#"
          class="btn rounded text-dark p-3"><i class="fa fa-map-marker icon text-primary pr-3"></i>Islamabad, Pakistan, Punjab</a> 
         </div>
      <div class="pt-lg-3 d-flex flex-row justify-content-center text-decoration-none ">
        <div class="pad-icon mr-3 "> <a class="fa fa-facebook dark-white" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-twitter dark-white" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-instagram dark-white" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-youtube-play" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-google" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-linkedin-square" href="#"></a> </div>
        <div class="pad-icon mr-3"> <a class="fa fa-whatsapp" href="#"></a> </div>
      </div>
    </div>
    <div class="col-sm-6 pad">
      <form class="rounded msg-form"  method="post" action="thanks.php">
        <div class="form-group"> <label for="name" class="h6">Your Name</label>
          <div class="input-group border rounded">
            <div class="input-group-addon px-2 pt-1">
              <p class="fa fa-user-o text-primary"></p>
            </div> <input id="con" type="text" name="name" required class="form-control border-0">
          </div>
        </div>
        <div class="form-group"> <label for="name" class="h6">Email</label>
          <div class="input-group border rounded">
            <div class="input-group-addon px-2 pt-1"> <i class="fa fa-envelope text-primary"></i> </div> <input
              type="text" name="email" required class="form-control border-0">
          </div>
        </div>
        <div class="form-group"> <label for="msg" class="h6">Message</label> <textarea name="message" id="msgus"
            cols="10" rows="5" class="form-control bg-light" required placeholder="Message"></textarea> </div>
        <div class="form-group d-flex justify-content-end"> <input type="submit" name="msubmit"
            class="btn btn-primary text-white m-2" value="Send message"> </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php
include './inc/footer.php';
?>
