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
                    <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link active" href="booknow.php" >Book Now</a>
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

    <h1 class="text-dark text-center mt-5 pt-3 mb-4  "> BOOK NOW</h1>

    <div class="main">
        

    <div class="container">
    <form class="row g-3 mt-2" method="post" action="thanks.php" enctype="multipart/form-data">
    <div class="col-md-6">
          <label for="inputfunction" class="form-label">Category</label>
          <select id="inputfunction" class="form-select"name="category" required value="Function">
          <option selected value="">Select Categorie</option>
            <option value="Waiter">Waiter</option>
            <option value="Designer">Designer</option>
            <option value="chief">chief</option>
            <option value="Hr">Hr Maneger</option>
            <option value="Other">Other</option>


          </select>
        </div>
        <div class="col-md-6">
          <label for="inputname" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputname" required pattern="[A-Za-z ]{3,30}" placeholder="Enter Booker Name" value="" name="name">
        </div>
        <div class="col-md-6">
          <label for="inputnumber" class="form-label"> Phone Number</label>
          <input type="text" class="form-control" id="inputnumber" required  pattern="[0-9]{11}" placeholder="0300-3000000" value="" name="number">
        </div>
        <div class="col-md-6">
          <label for="inputemail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemail" required placeholder="xyz@gmail.com" value="" name="email">
        </div>

        <div class="col-md-6">
            <label for="guest" class="form-label">Experiance in Years</label>
          <input type="number" class="form-control" id="experiance" required pattern="[0-9]{13}" value="" name="experiance">
          
          </div>

          <div class="col-md-6">
            <label for="guest" class="form-label">CV</label>
          <input type="file" class="form-control" id="cv" required value="" name="cv">
          
          </div>
</div>

        <div class="col-md-12 mt-2">
        <input type="submit" class="btn btn-info" value = "submit" name="career">
</div>

  

      </form>
</div>
</div>
<?php
include './inc/footer.php';
?>