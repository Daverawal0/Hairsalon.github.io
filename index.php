<?php
if(!isset($_SESSION)){
  session_start();
}


?>
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


  <?php
  include_once("header.inc.php");
  ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid">

              <?php if(isset($_SESSION['email'])):?>

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

<?php include_once('quickinfo.inc.php') ?>
    <!-- END section -->


    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-5">

            <h2 class="mb-3">Services</h2>

            <div class="mb-3 custom-nav">
              <a href="#" class="btn btn-primary btn-sm custom-prev mr-2 mb-2"><span class="ion-android-arrow-back"></span></a>
              <a href="#" class="btn btn-primary btn-sm custom-next mr-2 mb-2"><span class="ion-android-arrow-forward"></span></a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12 slider-wrap">
                <div class="owl-carousel owl-theme no-nav js-carousel-1">

                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Haircuting</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Beard Shaving</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Cream &amp; Shampoo</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Haircuting</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Beard Shaving</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Cream &amp; Shampoo</h2>

                    </div>
                  </a>
                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Haircuting</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Beard Shaving</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Cream &amp; Shampoo</h2>

                    </div>
                  </a>
                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Haircuting</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Beard Shaving</h2>

                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon custom-icon flaticon-scissors"></span>
                      <h2>Cream &amp; Shampoo</h2>

                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Barber Features</h2>
           </div>
        </div>
        <div class="row">
          <div class="col-md-4">

            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-scissors-1"></span></div>
              <div class="media-body">
                <h3>Shave &amp; Haircut</h3>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-cream"></span></div>
              <div class="media-body">
                <h3>Cream &amp; Shampoo</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-moustache"></span></div>
              <div class="media-body">
                <h3>Mustache Expert</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">

            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-scissors"></span></div>
              <div class="media-body">
                <h3>Haircut Styler</h3>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-razor"></span></div>
              <div class="media-body">
                <h3>Razor For Beards</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media d-block media-feature text-center">
              <div class="mr-3 icon-wrap"><span class="custom-icon flaticon-hair-comb"></span></div>
              <div class="media-body">
                <h3>Haircomb</h3>
              </div>
            </div>
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

            <?php if(isset($_SESSION['email'])):?>
                <p><a class="btn btn-outline-primary" href="userHome.php">Make an Appointment</a></p>
                <?php else: ?>
              <p><a class="btn btn-outline-primary" data-toggle="modal" data-target="#loginModal" href="index.php">Make an Appointment</a></p>
              <?php endif; ?>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">

          </div>
          <div class="col-md-6 pl-md-5">
            <h3>Good Looking Style</h3>
            <p class="lead">Start with us today</p>
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
