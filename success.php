<?php include_once('redirect.php') ?>
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

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <!-- <img src="images/banner_text_1.png" alt="Image placeholder" class="img-md-fluid"> -->
                        <?php if(isset($_REQUEST['er'])) : ?>
                        <?php $err = intval(base64_decode($_REQUEST['er'])); 
                    if($err == 3) :
                ?>

                        <h1 class="mb-4">Account Activated!</h1>
                        <p class="lead">Please Login</p>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter emailid" required
                                    name="email" id="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter password" required
                                    name="pswd" id="pswd">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>

                        </form>
                        <?php elseif($err==5) : ?>
                        <h1 class="mb-4">Booking is Successful!</h1>
                        <p class="lead"><a class="btn btn-primary" href='./userHome.php'>Booking Details</a></p>
                        
                        <?php elseif($err==6) : ?>
                        <h1 class="mb-4">Message sent Successfully!</h1>
                        <p class="lead">Thanks for Contacting Us! We will contact you very soon</p>

                        <?php elseif($err == 4): ?>
                        <h1 class="mb-4">Account Not Activated!</h1>
                        <p class="lead">Please contact to admin</p>
                        <?php endif; ?>
                        <?php 
              else:
                  safe_redirect('index.php');
              ?>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <?php include_once('footer.inc.php'); ?>
    <!-- END footer -->
    <!-- login modal start -->
   
    <!-- login modal end -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg></div>

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