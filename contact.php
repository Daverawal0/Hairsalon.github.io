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
              <h1 class="mb-4">Contact Us</h1>
              <p>We are Hiring You can contact us for that</p>
              <p>Message and suggestion are always welcome</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

<?php include_once('quickinfo.inc.php'); ?>

    <!-- END section -->
    

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name</label>
                      <input type="text" name="cname" id="cname" class="form-control ">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="mobile" name="mobile" class="form-control ">
                    </div>
                     <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control ">
                    </div>
                  </div>
                   
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <?php
session_start();
include_once('checkSession.php');
include_once('Email.php');
include_once('redirect.php');
include_once('database.php');
$msg="";
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $fullname = $_POST["cname"];
   $mobile = $_POST['mobile'];
    $message = $_POST['message'];
   
    $db = new Database();
    $db->query("insert into message(email,cname,mobile,message,dom) values(:email,:cname,:mobile,:message,now())");
    $db->bind(":email",$email,PDO::PARAM_STR);
    $db->bind(":cname",$fullname,PDO::PARAM_STR);
    $db->bind(":mobile",$mobile,PDO::PARAM_STR);
    $db->bind(":message",$message,PDO::PARAM_STR);
    $db->execute();
        if($db->lastInsertId()){
          
          safe_redirect("./success.php?er=".base64_encode(6));
         
        }
      
    
} 

?>
   
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