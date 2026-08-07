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
    <form class="row g-3 mt-2" enctype="multipart/form-data" method="post" action="thanks.php">
        <div class="col-md-6">
          <label for="inputname" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputname" required pattern="[A-Za-z ]{3,30}" placeholder="Enter Booker Name" value="" name="name">
        </div>
        <div class="col-md-6">
          <label for="inputnumber" class="form-label"> Phone Number</label>
          <input type="text" class="form-control" id="inputnumber" required  pattern="[0-9]{11}" placeholder="0300-3000000" value="" name="number">
        </div>
        <div class="col-md-6">
          <label for="inputcnic" class="form-label">CNIC</label>
          <input type="text" class="form-control" id="inputcnic" required pattern="[0-9]{13}" placeholder="00000-0000000-0" value="" name="cnic">
        </div>
        <div class="col-md-6">
          <label for="inputemail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemail" required placeholder="xyz@gmail.com" value="" name="email">
        </div>  

        <div class="col-md-3">
          <label for="inputfunction" class="form-label">Hall</label>
          <select class="form-select" name="hall" id="halls" required value="Function">
            <option selected disabled value="">Select...</option>
            <?php 
          $s="SELECT * FROM hall";
          $r=mysqli_query($conn,$s);
          while($fets=mysqli_fetch_array($r)){
              ?>
               <option value="<?php echo $fets['hid'];?>" data-capacity="<?php echo $fets['capacity']; ?>"><?php echo $fets['hall'];  ?> / [<?php echo $fets['capacity'];  ?>]</option>
              <?php
          }
          ?>

          </select>
        </div>

        <div class="col-md-5">
          <?php
          $date=date('Y-m-d');
          // echo $date;
          ?>
          <label for="inputbookingdate" class="form-label">Booking Date</label>
          <input type="date" class="form-control" id="inputbookingdate" required min="<?php echo $date ?>" value="" name="bookingdate">
        </div>

        <div class="col-md-3">
          <label for="inputfunction" class="form-label">Time</label>
          <select id="inputfunction" class="form-select"name="time" required value="Function">
          <option selected disabled  value="">Select...</option>
            <option  value="morning">Morning</option>
            <option value="evening">Evening</option>


          </select>
        </div>

        <div class="col-md-4">
											<label for="days" class="form-label">Menu</label>
											<select class="form-select multiple-select" id="menu" multiple name="menu[]" required>
            <?php 
          $s="SELECT * FROM menu";
          $r=mysqli_query($conn,$s);
          while($fets=mysqli_fetch_array($r)){
              ?>
               <option value="<?php echo $fets['mid'];?>" data-price="<?php echo $fets['price']; ?>"><?php echo $fets['item'];  ?>  / [<?php echo $fets['price'];  ?>] </option>
              <?php
          }
          ?>
											</select>
										</div>

        <div class="col-md-3">
          <label for="inputfunction" class="form-label">Function</label>
          <select id="inputfunction" class="form-select"name="function" required value="Function">
            <option selected  value="Barat">Barat</option>
            <option value="Walima">Walima</option>
            <option value="Mehandi">Mehandi</option>
            <option value="Birthday">Birthday</option>
            <option value="Other">Other</option>


          </select>
        </div>

        <input type="text" hidden value="" id="cap" name="capacity">

        <div class="col-md-5">
          <label for="inputnumber" class="form-label"> Guest</label>
          <input type="number" class="form-control" id="guest" max="" required placeholder="Guests" value="" name="guest">
        </div>

        <div class="col-md-5">
          <label for="inputnumber" class="form-label"> Advance</label>
          <input type="number" class="form-control" id="advance" required placeholder="Advance" value="" name="advance">
        </div>

        <div class="col-md-5">
          <label for="inputnumber" class="form-label"> SC</label>
          <input type="file" class="form-control" id="screenshoot" required placeholder="screenshoot" value="" name="screen">
        </div>

          <div class="mt-3">
            <div class="col-md-12 ">
            <label for="price" class="form-label">Booking Price</label>
            <input type="text" class="form-control" id="a" required name="price" readonly="">
</div>
</div>
        <div class="col-12">
          <div class="form-check">
            
              <h4>Terms And Conditon</h4>
              <ul>
                  <li>Payment before one week of your reserved date otherwise you lose your reservation</li>
                  <li>Fix Reservation Price Per head is as per menu and its not be discountable </li>
                  <li>Canclation of booking detect 50%</li>
                  <li>Complete your Event within the time duration</li>
                  <li>Don't allow to violate law </li>
              </ul>
          
          </div>
        </div>
        <div class="col-4">
</div>
<input type="submit" class="btn btn-info" value = "submit" name="submit">
  

      </form>
</div>
</div>
<?php
include './inc/footer.php';
?>
<script>
  $(".multiple-select").select2({
  // maximumSelectionLength: 2
});
  </script>

<script>

$(document).ready(function(){
  $("#menu").on("change", function(){
    var totalPrice = 0;
    $(this).find(":selected").each(function() {
      var price = parseInt($(this).data("price")); // Convert price to integer
      totalPrice += price;
    });
    $("#a").val(totalPrice);
  });

  $("#halls").on("change", function(){
    var i = $(this).find(":selected").data("capacity"); // Get capacity from selected option
    $("#guest").attr("max", i);
    $("#cap").val(i); // Set max attribute of #guest input field
});
});
</script>