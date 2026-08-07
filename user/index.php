<?php
include './inc/header.php';
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
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
                    <a class="nav-link active " aria-current="page" href="index.php">Home</a>
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
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <img src="./images/login.png" alt="">
                <a style="color: white; text-decoration: none;" href="./admin/auth-login.php" > &nbsp; &nbsp;
                    Login</a>
            </form>
        </div>
    </div>
</nav>





  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/2.jpg" class="d-block w-100" alt="..." height="560px">

        <div class="carousel-caption d-none d-md-block">
          <h2 class="text-warning">Dubai Marriage Hall</h2>
          <h4>The Dubai Marriage Hall is an acclaimed and preferred event service provider in country</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-block w-100" alt="..." height="560px">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="text-warning">Dubai Marriage Hall</h2>
          <h4>Endearing Marriage Halls, unique ambience and a gigantic outdoor car parking which have maximum capacity to secure your cars.</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/1.jpg" class="d-block w-100" alt="..." height="560px">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="text-warning">Dubai Marriage Hall</h2>
          <h4>Immaculate setting to all kind of functions, ranging from quality wedding receptions, ceremonies, corporate events, fund raising programs, Birthday Parties, Students, get together and theme parties to anniversaries.</h4>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="story" id="story">
    <div class="container">
      <div class="row mt-5 mb-5 ">
        <div class="col-12  col-sm-6 col-xs-12">

          <h2 class="text-primary">Dubai Marriage Hall Story</h2>
          <p>The Dubai Marriage Hall is an acclaimed and preferred event service provider in country which has a modern and
            well-equipped Dubai Marriage Hall, endearing Marriage Halls, unique ambiance, and gigantic outdoor car parking which has
            a maximum capacity to secure your cars. It gives an immaculate setting to all kinds of functions, ranging
            from quality wedding receptions, ceremonies, corporate events, fundraising programs, Birthday Parties,
            Students' get together and theme parties to anniversaries. The HR offers Delicious quality Food with a
            variety of Menu. Our engaging staff ensures your event is worry-free and our extensive yet scrumptious menu
            reflects a high-class dining experience.</p>
          <button type="button" class="btn btn-outline-info "><a href="aboutus.php" style="text-decoration: none;"> Read
              More</a></button>
          <button type="button" class="btn btn-outline-success "><a href="contact.php" style="text-decoration: none;"> Contact
              us</a></button>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 ">
          <video width="450" height="350" controls>
            <source src="./video/introvideo.mp4" type="video/mp4">

            Your browser does not support the video tag.
          </video>
        </div>


      </div>
    </div>
  </div>

 <div class="container-fluid service" data-aos="fade-up">
   <div class="row pb-1 pt-2">
     <h1>Service</h1>
   </div>
 </div>


 <div class="container mt-3 ">
  <div class="row justify-content-center justify-content-around ">
    <div class="col-8 col-sm-3 col-xs-12">
      <div class="card border-0 " style="width: 18rem;" data-aos="flip-left">
        <img src="./images/wedding.jpg" class="card-img-top mt-3" alt="..." style="border-radius: 50px;">
        <div class="card-body  border mt-4  rounded border-dark">
          <h5 class="card-title">Weddings & Social Functions</h5>
          <p class="card-text">Your wedding day is probably the most important day of your life to date and is a once in a lifetime experience. Here at <b>Dubai Marriage Hall</b> we specialise in making your day truly memorable</p>
          <a href="booknow.php" class="btn btn-outline-warning">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col-8 col-sm-3 col-xs-12 ">
      <div class="card border-0" style="width: 18rem;"  data-aos="flip-left">
        <img src="./images/event.jpg" class="card-img-top mt-3" alt="..." style="border-radius: 50px;">
        <div class="card-body  border mt-4  rounded border-dark">
          <h5 class="card-title">Events Show</h5>
          <p class="card-text">The <b>Dubai Marriage Hall</b> is ideally located in the heart of country and provides an excellent space for product launches and press events.</p>
          <a href="booknow.php" class="btn btn-outline-warning">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col-8 col-sm-3 col-xs-12">
      <div class="card border-0" style="width: 18rem;"  data-aos="flip-left">
        <img src="./images/Corporate.jpg" class="card-img-top mt-3" alt="..." style="border-radius: 50px">
        <div class="card-body border mt-4 rounded border-dark ">
          <h5 class="card-title">Corporate Events</h5>
          <p class="card-text">We understand that every corporate event is conducted with an aim to make a big impact, need the results that you are looking for.Our team of professional are ready to help you plan your event</p>
          <a href="booknow.php" class="btn btn-outline-warning">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="container-fluid about mt-4 mb-5" data-aos="fade-up">
  <div class="row pb-1 pt-2">
    <h1 >About us</h1>
  </div>
</div>






    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 col-xs-3 col-sm-12 col-lg-3 ">
          <img class="logo-image" src="./images/ta.jpg" alt="" width="100%" height="100% ">
        </div>
        <div class="col-12 col-md-9 col-xs-9 col-sm-12 col-lg-9 mt-1">
          <p>Dubai Marriage Hall is developing a Dubai Marriage Hall booking service through a website to help people to book a hall for any event
            from anywhere.
          We desire to make a platform where we can help people to find Dubai Marriage Hall in their budget and for owners who
            want to advertise their Dubai Marriage Hall with ease.
          </p>
          <button type="button" class="btn btn-outline-info mb-3 "><a href="aboutus.php" style="text-decoration: none;">Read More</a></button>
          <h2>Want to Join Our Team</h2>
          <p>If you have any idea related to Dubai Marriage Hall booking which can help us to improve Venue Bazaar then what are you
            waiting for just email us we will contact you as soon as possible</p>
          <button type="button" class="btn btn-outline-warning "><a href="career.php" style="text-decoration: none;"> Join</a></button>
        </div>

      </div>
    </div>



  </div>
  <?php
include './inc/footer.php';
?>
