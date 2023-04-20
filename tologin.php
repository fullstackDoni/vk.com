<?php
  $redirect = "index.php";

 if($_SERVER['REQUEST_METHOD']==='POST'){
  if(isset($_POST['email']) && isset($_POST['password'])){
   $redirect = "login.php?error";
   require_once 'db.php';
   $user = getUser($_POST['email']);
   if($user!=null && $user['password'] === $_POST['password']){
    require_once 'user.php';
    $_SESSION['NOW_USER'] = $user;
    $redirect = "profile.php";
   }
  }
 }
header("Location:profile.php");
?>
