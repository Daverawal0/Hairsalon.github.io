<?php session_start() ?>
<?php include_once('checkSession.php');?>
<?php include_once('database.php'); ?>
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
    <style>
    label {
        color: #fff;
    }

    .form-check-label {
        color: #fff;
    }
    </style>
</head>

<body>

    <?php
  include_once("header.inc.php");
  ?>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_1.jpg);">
        <div class="container p-5">

            <h3 class="text-light mt-5">Welcome, <?=$_SESSION['fullname']?></h3>

            <div class="row mt-5">
                <div class="col-sm-3">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                       
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#upcomingBooking">Upcoming Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#allBooking">All Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#contactUs">Contact Us/Recruits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                       
                        <div id="upcomingBooking" class="container tab-pane active"><br>
                            <h3 class="text-white">Upcoming Booking</h3>
                            <?php
                                $db = new Database();
                                $db->query("select * from booking where status=0 and bdate> now()");
                                $db->bind(":email",$_SESSION['email'],PDO::PARAM_STR);
                                $rows = $db->resultSet();
                                if(count($rows)>0):
                           ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Services</th>
                                        <th>Client Name</th>
                                        <th>Mobile</th>
                                        <th>&nbsp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php foreach($rows as $row): ?>
                                <td><?=$row['bdate']?></td>
                                <td><?=$row['services']?></td>
                                <td><?=$row['fullname']?></td>
                                <td><?=$row['mobile']?></td>
                                <td><a href="./completeBooking.php?bid=<?=base64_encode($row['bid'])?>" class="btn btn-success">Mark Complete</a></td>
                                </tr>
                                <?php endforeach; ?>
                            
                            </table>
                            <?php else: ?>
                            <h2 class="text-white">No Upcoming Booking</h2>
                            <?php endif; ?>
                        </div>
                        <div id="allBooking" class="container tab-pane fade"><br>
                            <h3 class="text-white">All Booking</h3>
                            <?php
                                $db = new Database();
                                $db->query("select * from booking order by bdate desc");
                               
                                $rows = $db->resultSet();
                                if(count($rows)>0):
                           ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Services</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php foreach($rows as $row): ?>
                                <td><?=$row['bdate']?></td>
                                <td><?=$row['services']?></td>
                                <td>
                                <?php if ($row['status']==0) {
                                    echo "Not Completed";
                                }
                                    else if($row['status']==1){
                                      echo "Completed";
                                    }else{
                                      echo "Cancelled";
                                    }
                                  ?>
                                
                                </td>
                                </tr>
                                <?php endforeach; ?>
                            
                            </table>
                            <?php else: ?>
                            <h2 class="text-white">No Upcoming Booking</h2>
                            <?php endif; ?>
                            
                        </div>

                        <div id="contactUs" class="container tab-pane fade"><br>
                            <h3 class="text-white">Client Messages</h3>
                            <?php
                                $db = new Database();
                                $db->query("select * from message order by dom desc");
                                
                                $rows = $db->resultSet();
                                if(count($rows)>0):
                           ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date </th>
                                        <th>Message</th>
                                        <th>Fullname</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php foreach($rows as $row): ?>
                                <td><?=$row['dom']?></td>
                                <td><?=$row['message']?></td>
                                <td><?=$row['cname']?></td>
                                <td><?=$row['mobile']?></td>
                                <td><?=$row['email']?></td>
                                
                                </tr>
                                <?php endforeach; ?>
                            
                            </table>
                            <?php else: ?>
                            <h2 class="text-white">No Messages</h2>
                            <?php endif; ?>
                            
                        </div>
                    </div>

                </div>

            </div>




        </div>
    </section>
    <!-- END section -->





    <?php include_once('footer.inc.php'); ?>
    <!-- END footer -->
    <!-- login modal start -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="login.php">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter emailid" required name="email"
                                id="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password" required
                                name="pswd" id="pswd">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="registration.php" class="btn btn-secondary">Register</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
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