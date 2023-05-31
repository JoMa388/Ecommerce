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
                <li class="nav-item">
                    <button onclick="sideCart()" class="nav-link  fw-bold btn shadow-none btn bg-dark position-relative"
                        href="#"><img src="../bootstrapmorph/cart-white.svg" alt="Shopping Cart"
                            class="img-fluid pb-0 pt-0" style="width:1.5rem">
                        <span
                            class=" countItemNav position-absolute top-0 start-100 translate-middle badge border border-light rounded-pill bg-info p-1 mt-2 d-none">
                        </span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidecart" class="position-fixed end-100 bg-secondary shadow-lg"
    style="width:22rem;height:100vh;right:0;top:0;">
    <div class="container d-flex flex-column border-dark border-2 border-bottom">
        <button class="btn bg-danger shadow-none text-light mt-4" onclick="closeCart()">Close</button>
        <h3 class="text-center text-dark fw-bold mt-2 mb-2">Your Cart:
            <span class="end-0 text-dark mt-0 countItemCart">0
            </span>
        </h3>
    </div>
    <div id="shoppingcart">
    </div>

    <div class="position-absolute bottom-0 translate-middle-y ms-2 mb-4 pb-4">
        <h4>Total: <span id="total"></span></h4>
    </div>
    <button class="btn bg-info text-light shadow-none rounded-2 position-absolute bottom-0 start-0 mb-3 ms-5">View
        Cart</button>
    <button
        class="btn bg-success text-light shadow-none rounded-2 position-absolute bottom-0 end-0 mb-3 me-5">Checkout</button>
</div>
<script>
    function sideCart() {
        const cart = document.getElementById("sidecart");
        cart.classList.remove('end-100');
        cart.classList.add('end-0');
    }
    function closeCart() {
        const cart = document.getElementById("sidecart");
        cart.classList.remove('end-0');
        cart.classList.add('end-100');
    }
</script>