<?php
require_once 'db.php';
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
<?php
require_once 'navbar.php';
?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="tologin.php" method="post">
                    <div class="row mt-3">
                        <div class="col-12">
                            <label>Login:</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" class="form-control" name="email" placeholder="admin">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label> Password:</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" class="form-control" name="password" required placeholder="*******">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <button class="btn btn-success">SIGN IN</button>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    </div>
</body>
</html>