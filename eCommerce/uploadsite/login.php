<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
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
  <title>Login</title>
</head>

<body>
  <?php
  include_once 'header.php';
  ?>

  <section class="container mt-5 position-relative ">
    <div class="row">
      <div class="col- overlay m-auto">
        <img src="../bootstrapmorph/undraw_cat_s1wg.svg" alt="cat" class="img-fluid mt-5 ms-2" />
      </div>
      <div>
        <form action="includes/login.inc.php" method="post" class="col-12 bg-dark rounded-2 position-absolute">
          <div class="row mt-5">
            <!-- Username -->
            <div class="form-floating col-10 col-md-8 col-lg-9 mb-2 m-auto">
              <input type="text" id="userName" class="form-control" placeholder="Username" name="username" required />
              <label for="userName" class="fw-bold mb-0">Username</label>
              <div class="invalid-feedback">Enter a Username</div>
            </div>
          </div>
          <!-- Password -->
          <div class="row">
            <div class="form-floating col-10 col-md-8 col-lg-9 mb-2 m-auto">
              <input type="text" id="password" name="password" class="form-control" placeholder="Password"
                name="password" required />
              <label for="password" class="fw-bold mb-0">Password</label>
              <div class="invalid-feedback">Invalid Password</div>
            </div>
          </div>
          <div class="row">
            <div class="col-10 col-md-6 col-lg-4 text-center m-auto">
              <a href="#" class="text-decoration-none">Forgot Username</a>
            </div>
          </div>
          <div class="row">
            <div class="col-10 col-md-6 col-lg-4 text-center m-auto">
              <a href="#" class="text-decoration-none">Forgot Password</a>
            </div>
          </div>
          <div class="row">
            <div class="col-10 col-md-6 col-lg-8 text-center m-auto">
              <a href="signup.php" class="text-decoration-none">Don't have an account, sign up here</a>
            </div>
          </div>
          <!-- Button -->
          <div class="mt-3">
            <div class="col-6 col-md-4 col-lg-8 text-center m-auto">
              <button class="form-control btn btn-success btn-smfw-bold mb-5 shadow-none" type="submit" name="submit">
                Login
              </button>
              <?php
              if (isset($_GET["error"])) {
                if ($_GET["error"] == "wronglogin") {
                  echo "<p>Invalid Username/Password Try Again</p>";
                }
              }
              ?>
            </div>
          </div>
        </form>

      </div>
    </div>
  </section>
</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>