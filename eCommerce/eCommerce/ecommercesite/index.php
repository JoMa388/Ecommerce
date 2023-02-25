<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
  <title>Welcome</title>
</head>

<body>
  <?php
  include_once '../uploadsite/header.php';
  ?>


  <div class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-dark text-center mt-5">&#128008; Store</h1>
    <?php
    if (isset($_SESSION['useruid'])) {
      echo '<h2 class="text-dark text-center mt-5 fw-bolder">Welcome ' . $_SESSION['useruid'] . '</h2>';
    }
    ?>
  </div>
</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>