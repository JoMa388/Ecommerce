<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 30rem;
            }
        }

        .overlay {
            z-index: 1;
        }

        form {
            top: 98%
        }
    </style>
</head>

<body>
    <?php
    include_once 'siteIncludes/siteHeader.php';
    ?>

    <section class="container mt-5 position-relative ">
        <div class="row">
            <div class="col- overlay m-auto">
                <img src="../bootstrapmorph/undraw_cat_s1wg.svg" alt="cat" class="img-fluid mt-1 ms-1" />
            </div>
            <div>
                <form action="" method="post" class="col-12 bg-dark rounded-2 position-absolute">
                    <h1 class="text-light text-center mt-3 mb-3">Contact Us</h1>
                    <div class="row">
                        <!-- Email -->
                        <div class="form-floating col-10 col-md-8 col-lg-9 mb-2 m-auto">
                            <input type="email" id="email" class="form-control" placeholder="Email" name="email"
                                required />
                            <label for="email" class="fw-bold mb-0">Email</label>
                        </div>
                    </div>
                    <!-- Order # -->
                    <div class="row">
                        <div class="form-floating col-10 col-md-8 col-lg-9 mb-2 m-auto">
                            <input type="text" id="ordernum" class="form-control" placeholder="Order #" name="ordernum"
                                required />
                            <label for="ordernum" class="fw-bold mb-0">Order #</label>
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="row">
                        <div class=" form-floating col-10 col-md-8 col-lg-9 text-center m-auto">
                            <textarea id="message" rows="3" name="message" class="form-control"
                                placeholder="Your Message"></textarea>
                            <label for="message" class="fw-bold">Your Message</label>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="mt-3">
                        <div class="col-6 col-md-4 col-lg-8 text-center m-auto">
                            <button class="form-control btn btn-success btn-smfw-bold mb-5 shadow-none" type="submit"
                                name="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>