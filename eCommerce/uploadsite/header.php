<?php
session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-xl">
        <span class="fw-bold navbar-brand text-dark">&#128008; Store</span>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="man-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo ' <li class="nav-item"><a href="profile.php" class="nav-link text-dark fw-bolder">Profile</a></li>';
                    echo '<li class="nav-item"><a href="../uploadsite/includes/logout.php" class="nav-link text-dark fw-bolder">Log Out</a></li>';
                } else {
                    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    if (strpos($url, 'login') !== false) {
                        echo '<li class="nav-item"><a href="../ecommercesite/index.php" class="nav-link text-dark fw-bolder">Home</a></li>';
                        echo '<li class="nav-item"><a href="signup.php" class="nav-link text-dark fw-bolder">Sign Up</a></li>';
                    } else if (strpos($url, 'signup') !== false) {
                        echo '<li class="nav-item"><a href="../ecommercesite/index.php" class="nav-link text-dark fw-bolder">Home</a></li>';
                        echo '<li class="nav-item"><a href="login.php" class="nav-link text-dark fw-bolder">Login</a></li>';
                    } else {
                        echo '<li class="nav-item"><a href="../uploadsite/signup.php" class="nav-link text-dark fw-bolder">Sign Up</a></li>';
                        echo '<li class="nav-item">
                    <a href="../uploadsite/login.php" class="nav-link me-2 text-dark fw-bolder">Login</a>
                </li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>