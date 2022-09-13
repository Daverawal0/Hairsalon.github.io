<?php

if (isset($_GET['id'])){
    require ("database.php");
    include 'redirect.php';
    $id = base64_decode($_GET["id"]);
    $database = new Database();
    $database->query("update users set active=1 where email=:id");
    $database->bind(":id",$id,PDO::PARAM_STR);
    if($database->execute()>0)
    {
      safe_redirect("./success.php?er=".base64_encode(3));
    }
    else
    safe_redirect("./success.php?er=".base64_encode(4));
  
}