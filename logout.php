<?php
session_start();
include_once('checkSession.php');
$_SESSION['email']="";
unset($_SESSION['email']);
$_SESSION['fullname']="";
unset($_SESSION['fullname']);
$_SESSION['mobile']="";
unset($_SESSION['mobile']);
session_destroy();
 header('Location: ./index.php');

?>