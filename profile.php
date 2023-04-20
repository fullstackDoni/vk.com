<?php
require_once 'user.php';
global $ONLINE;
  if($ONLINE){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <?php
    require_once 'header.php'
    ?>
</head>
<body>
<div class="container">
<?php
require_once 'navbar.php';
?>
</div>
<div class="container mt-3">
    <h2 class="text-center">Ваш почта: <?php echo $_SESSION['NOW_USER']['email'];?></h2>
<h1 class="text-center">Здраствуйте <?php echo $_SESSION['NOW_USER']['fullname'];?></h1>
    <h1 class="text-center">Вам <?php echo $_SESSION['NOW_USER']['age'];?></h1>
</div>
</body>
</html>
<?php

  }else {
      header("Location:login.php");
  }

?>


