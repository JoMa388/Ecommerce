<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
    <title>Login</title>
    <style>
        @media (min-width: 800px) {
            .container {
                max-width: 400px;
            }
        }
    </style>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>




    <section class="container bg-dark rounded-2 mt-5">
        <h1 class="text-center text-light pt-3">Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <!--First Name -->
            <div class="row justify-content-center mb-2 ">
                <div class="form-floating col-12 col-md-8 mt-3">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name"
                        required />
                    <label for="firstname" class="fw-bold">First Name</label>
                </div>
            </div>
            <!-- Last Name -->
            <div class="row justify-content-center mb-2">
                <div class="form-floating col-12 col-md-8">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name"
                        required />
                    <label for="lastname" class="fw-bold">Last Name</label>
                </div>
            </div>
            <!-- Email -->
            <div class="row justify-content-center mb-2">
                <div class="form-floating col-12 col-md-8">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                    <label for="email" class="fw-bold">Email</label>
                </div>
            </div>
            <!-- Username -->
            <div class="row mb-2 justify-content-center">
                <div class="form-floating col-12 col-md-8">
                    <input type="text" id="userName" name="userName" class="form-control" placeholder="Username"
                        required />
                    <label for="userName" class="fw-bold">Username</label>
                </div>
            </div>
            <!-- Password -->
            <div class="row mb-2 justify-content-center">
                <div class="form-floating col-12 col-md-8">
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Repeat Password" required />
                    <label for="password" class="fw-bold">Password</label>
                </div>
            </div>
            <!-- Repeat Password -->
            <div class="row mb-2 justify-content-center">
                <div class="form-floating col-12 col-md-8">
                    <input type="password" id="rPassword" name="repeatpassword" class="form-control"
                        placeholder="Repeat Password" required />
                    <label for="rPassword" class="fw-bold"> Repeat Password</label>
                </div>
            </div>
            <!-- Button -->
            <div class="mt-3">
                <div class="col-12 col-md-8 text-center m-auto">
                    <button class="form-control btn btn-success btn-smfw-bold mb-3 shadow-none" type="submit"
                        name="submit">
                        Sign Up
                    </button>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "invaliduid") {
                            echo "<p>Invalid Username</p>";
                        } else if ($_GET["error"] == "invalidemail") {
                            echo "<p>Invalid Email</p>";
                        } else if ($_GET["error"] == "pwddontmatch") {
                            echo "<p>Password Does Not Match</p>";
                        } else if ($_GET["error"] == "usernametaken") {
                            echo "<p>Username or Email is Taken</p>";
                        } else if ($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong Try again</p>";
                        } else if ($_GET["error"] == "none") {
                            echo "<p>Sign up Successfull</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </section>

</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>