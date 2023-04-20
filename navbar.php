<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">VK.COM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php
                global $ONLINE;
                   if($ONLINE){
                ?>
                   <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                               <?php
                                echo $_SESSION['NOW_USER']['fullname'];
                               ?>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="profile.php">Action</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                           </ul>
                   </li>
                    <li class="nav-item">
                    <a class="nav-link" href=""></a>
                    </li>
                <?php
                   }else{
                ?>
                       <li class="nav-item">
                           <a class="nav-link" href="login.php">Sign in</a>
                       </li>
                <?php
                   }
                ?>

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>