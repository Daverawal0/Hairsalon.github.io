<!doctype html>
<html lang="en">
  <head>
  <title>Strathfield Salon and Barbershop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
<?php include_once('header.inc.php'); ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
              <h1 class="mb-4">Hair Styles</h1>
              <?php if($_SESSION['email']):?>
                <p><a class="btn btn-outline-primary" href="userHome.php">Make an Appointment</a></p> 
                <?php else: ?>
              <p><a class="btn btn-outline-primary" data-toggle="modal" data-target="#loginModal" href="index.php">Make an Appointment</a></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    
<?php include_once('quickinfo.inc.php'); ?>

   

    <!-- END section -->
    

    <section class="site-section pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-md-6 pl-md-5">
            <h3>Crew Cut</h3>
            <p class="lead">Expert Barber</p>
           </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-md-6 pl-md-5">
            <h3>Regular Hair Cut</h3>
            <p class="lead">Expert Barber</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-md-6 pl-md-5">
            <h3>Hair Color</h3>
            <p class="lead">Expert Barber</p>
           </div>
        </div>
      </div>
    </section>
    <!-- END section -->

   
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>More Hair Styles</h2>
          </div>
        </div>
        <div class="row top-destination">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_1.jpg" alt="Image placeholder">
              <h2>Beard Shaving</h2>
              
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_2.jpg" alt="Image placeholder">
              <h2>Crew Cut</h2>
             
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_3.jpg" alt="Image placeholder">
              <h2>Beard Trim</h2>
              
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_4.jpg" alt="Image placeholder">
              <h2>Shampoo + Hair Cut</h2>
              
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_5.jpg" alt="Image placeholder">
              <h2>Hair Color</h2>
              
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_6.jpg" alt="Image placeholder">
              <h2>Crew Hair Cut</h2>
             
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section-cover cta" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-8 text-center element-animate">
            <h2 class="mb-4"><span>Appoint a Haircut Today and</span> Get 25% discount</h2>
            <?php if($_SESSION['email']):?>
                <p><a class="btn btn-outline-primary" href="userHome.php">Make an Appointment</a></p> 
                <?php else: ?>
              <p><a class="btn btn-outline-primary" data-toggle="modal" data-target="#loginModal" href="index.php">Make an Appointment</a></p>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <?php include_once('footer.inc.php'); ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>