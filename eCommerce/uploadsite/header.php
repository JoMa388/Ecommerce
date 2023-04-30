<?php
session_start();
?>

<nav class="navbar navbar-expand-md bg-info  p-4">
    <div class="container-xl">
        <span class="fw-bold navbar-brand d-flex mr-auto "><a href="index.php"
                class="text-decoration-none text-dark">&#128008;
                Store</a> </span>
        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<li class="nav-item"><a href="profile.php" class="nav-link  fw-bolder text-dark ">Profile</a></li>';
                    echo '<li class="nav-item"><a href="../uploadsite/includes/logout.php" class="nav-link  fw-bolder text-dark">Log Out</a></li>';
                } else {
                    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    if (strpos($url, 'login') !== false) {
                        echo '<li class="nav-item"><a href="index.php" class="nav-link  fw-bolder text-dark">Home</a></li>';
                        echo '<li class="nav-item"><a href="signup.php" class="nav-link  fw-bolder text-dark">Sign Up</a></li>';
                    } else if (strpos($url, 'signup') !== false) {
                        echo '<li class="nav-item"><a href="index.php" class="nav-link  fw-bolder">Home</a></li>';
                        echo '<li class="nav-item"><a href="login.php" class="nav-link  fw-bolder text-dark">Login</a></li>';
                    } else {
                        echo '<li class="nav-item"><a href="../uploadsite/signup.php" class="nav-link  fw-bolder text-dark">Sign Up</a></li>';
                        echo '<li class="nav-item">
                    <a href="../uploadsite/login.php" class="nav-link me-2  fw-bolder text-dark">Login</a>
                </li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>