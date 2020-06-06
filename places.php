<?php include "db.php"; ?>
<?php
  include 'chat.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Best Places</title>
    <link href="logo.jpeg" rel="icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style="font-size: 30px">Start Journey</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="places.php" class="nav-link">Places</a></li>
	          <li class="nav-item"><a href="hotel.php" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Places</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destinations</h1>
          </div>
        </div>
      </div>
    </div>
		
   <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 sidebar order-md-last ftco-animate">
            <div class="sidebar-wrap ftco-animate">
              <h3 class="heading mb-4">Find City</h3>
              <form action="" method="post">
                <div class="fields">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Destination, City" name="city">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Place Info" name="place">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Search" class="btn btn-primary py-3 px-5" name="placeInfo">
                  </div>
                </div>
              </form>
            </div>    
          </div>
          <div class="col-lg-9">
  <div class="row">
              <?php
                if(isset($_POST['placeInfo']))
                {
                  $city=$_POST['city'];
                  $place=$_POST['place'];
                  $res=mysqli_query($conn,"select * from places where city like '%".$city."%' and title like '%".$place."%'");
                }
                else
                  $res=mysqli_query($conn,"select * from places ");
                while($data=mysqli_fetch_array($res)){
                   $img=$data['img'];
                  $title=$data['title'];
                  $info=$data['info'];
               ?>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                  <div class="destination">
                      <img class="container" class="img img-2 d-flex justify-content-center align-items-center" src=<?php echo $img; ?> >
                      <div class="text p-3">
                          <div class="d-flex">
                              <div class="one" >
                                <h3 align="justify" style="color: black;"><?php echo $title; ?></h3>
                              </div>
                          </div>
                        <p align="justify"><?php echo $info; ?></p>
                        <hr style="background-color: teal;"/>
                      </div>
                  </div>
                </div>
              <?php  } ?>
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- .section -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Start Journey</h2>
              <p>It's that wonderful time of year, when you start planning of amazing trips.Start Journey is smart traveler guide web application.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
                <li><a href="contact.php" class="py-2 d-block">Call Us</a></li>
                </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Bhagavati Krupa,<br/> Vivekanand Nagar Street number.1,<br/> Rajkot-360002 </span></li>
                  <li><a href="tel:6354508988"><span class="icon icon-phone"></span><span class="text">63545 08988</span></a></li>
                  <li><a href="mailto:Ravi.1804.makwana@gmail.com"><span class="icon icon-envelope"></span><span class="text"> Ravi.1804.makwana@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a target="_blank" href="https://ravi-kumar-makwana.herokuapp.com">Ravikumar Makwana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>