<?php
session_start();
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