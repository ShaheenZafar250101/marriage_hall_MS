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
                    <a class="nav-link  " aria-current="page" href="index.php">Home</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link " href="booknow.php">Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="aboutus.php">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
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
    

   

    <div class="container ">
        <div class="row mt-5 mb-5 ">
            <div class="col-12  col-sm-6 col-xs-12 mt-5 me-5">

                <h2 class="text-warning">About Us</h2>
                <p>The Dubai Marriage Hall is an acclaimed and preferred event service provider in country which has a modern and
                    well equipped Dubai Marriage Hall, endearing Marriage Halls, unique ambience and a gigantic outdoor car parking
                    which have maximum capacity to secure your cars. It gives an immaculate setting to all kind of
                    functions, ranging from quality wedding receptions, ceremonies, corporate events, fund raising
                    programs, Birthday Parties, Students, get together and theme parties to anniversaries. The Castle
                    offers Delicious quality Food with variety of Menu. Our engaging staff that ensures your event is
                    worry free and our extensive yet scrumptious menu reflects high class dining experience.</p>
                <p>The Dubai Marriage Hall offers supreme nourishment and provides with benefits. With menu that possessed dishes of
                    eminence and taste that is fit for masters, we offer you to experience something better.</p>
            </div>
            <div class="col-12 col-sm-5 col-xs-12 mt-5 ">

                <img src="./images/ta.jpg" alt="" width="450" height="400" class="rounded-circle">
            </div>


        </div>
    </div>
    <div class="container mt-5 shadow-lg background rounded">
        <div class="row">
            <h2 class="text-warning pt-4 text-center">Discover the wide variety of services offered by Dubai Marriage Hall.</h2>
        </div>
        <div class="row mt-0 justify-content-around">
            <div class="col-12  col-sm-5 col-xs-12 mt-5 ">

                <h2 class="text-warning">Wedding</h2>
                <p>The Castle is famous for delivering successful wedding events, our creative team of banquet, decor and food provides extravagant experience to our esteemed client. We offer a complete matrimonial package for all the events of this propitious occasion.</p>
               
            </div>
            <div class="col-12 col-sm-5 col-xs-12 mt-5 ">
                <h2 class="text-warning">Corporate Events</h2>
                <p>Whether you are planning on all staff meeting, workshops, seminars, team building activities, concerts, farewell or corporate dinners, we provide a customizable venue that can match your needs.</p>
               
            </div>


        </div>
        <div class="row mt-0 mb-5 justify-content-around">
            <div class="col-12  col-sm-5 col-xs-12 mt-2 ">

                <h2 class="text-warning">Birthday</h2>
                <p>We design creative themed birthday parties for kids and adults. Our party hosts will be with you throughout your entire party and have fun games planned for the kids.</p>
               
            </div>
            <div class="col-12 col-sm-5 col-xs-12 mt-2 ">
                <h2 class="text-warning">Food & Catering</h2>
                <p>The Castle specializes in various varieties of quality food, our experienced chefs and barmen serves the scrumptious dishes and beverages which will give you pleasurable and lingering experience.</p>
               
            </div>


        </div>
    </div>



    <div class="team">
    <section class="team text-center py-1">
   <div class="container">
     <div class="header my-1">
       <h1 class="text-warning fw-bold">Meet our Team </h1>
       <p class="text-dark fs-6">Meet and Greet our Team Members</p>
     </div>
     <div class="row">
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/avatar.jpg" class="img-fluid   rounded" alt="image1">
           <div class="content mt-2">
             <h4>Avatar</h4>
             <p class="text-muted">Director</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3 ">
         <div class="img-block mb-5">
           <img src="img/avatar.jpg" class="img-fluid  rounded" alt="image1">
           <div class="content mt-2">
             <h4>Avatar</h4>
             <p class="text-muted">Team Leader</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/avatar.jpg" class="img-fluid   rounded" alt="image1">
           <div class="content mt-2">
             <h4>Avatar</h4>
             <p class="text-muted">HR Manager</p>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-lg-3">
         <div class="img-block mb-5">
           <img src="img/avatar.jpg" class="img-fluid   rounded" alt="image1">
           <div class="content mt-2">
             <h4>Avatar</h4>
             <p class="text-muted">Booking Manager</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 
 
 <!-- credits: https://bootstrapcrew.com/snippets/team-members/ -->
    </div>
      
    <?php
include './inc/footer.php';
?>