<?php
session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark p-4">
    <div class="container-xl">
        <span class="fw-bold navbar-brand d-flex mr-auto "><a href="index.php"
                class="text-decoration-none text-light">&#128008;
                Store</a> </span>
        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav w-100 justify-content-start">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold" href="products.php">Products</a>
                </li>

            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link  fw-bold" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>