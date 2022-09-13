<?php
if(!isset($_SESSION)){
  session_start();
}
  include_once('redirect.php');
  include_once('database.php');
      $msg="";
      if(isset($_POST['submit'])){
          $email = $_POST['email'];
          $pswd = hash("sha256",$_POST['pswd']);
          $db = new Database();
          $db->query("select * from users where email=:email and pswd=:pswd and active=1");
          $db->bind(":email",$email,PDO::PARAM_STR);
          $db->bind(":pswd",$pswd,PDO::PARAM_STR);
          $result = $db->single();
          try{
              if($result){
                $_SESSION['fullname'] = $result['fullname'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['mobile'] = $result['mobile'];
                if ($result['email']=='admin@gmail.com')
                  safe_redirect('adminHome.php');

                safe_redirect('userHome.php');
              }
              else{
                $msg = "Invalid username or password/ Account isn't activated";
              }
          }catch(PDOException $e){
              $msg = "Email id already registered!";
          }
      }

      ?>
<header role="banner">

     <nav class="navbar navbar-expand-md navbar-dark bg-light">
       <div class="container">
         <a class="navbar-brand" href="index.php">Strathfield Salon and Barbershop</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
           <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
             <?php
              if(isset($_SESSION['fullname'])):
             ?>

            <li class="nav-item">
              <?php if($_SESSION['email']=='admin@gmail.com'): ?>
                <a class="nav-link active" href="adminHome.php">Home</a>
                <?php else: ?>
               <a class="nav-link active" href="userHome.php">Home</a>
               <?php endif; ?>
             </li>
             <li class="nav-item">
               <a class="nav-link active" href="logout.php">Logout</a>
             </li>
             <?php else: ?>
             <li class="nav-item">
               <a class="nav-link active" href="index.php">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" data-toggle="modal" data-target="#loginModal" href="index.php" href="index.php">Login</a>
             </li>
             <?php endif; ?>

             <li class="nav-item dropdown">
               <a class="nav-link" href="hairstyle.php">Our Style</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="contact.php">Contact Us</a>
             </li>
           </ul>

         </div>
       </div>
     </nav>
   </header>

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
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter emailid" required name="email" id="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" required name="pswd" id="pswd">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
              <a href="registration.php" class="btn btn-secondary">Register</a>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- login modal end -->
