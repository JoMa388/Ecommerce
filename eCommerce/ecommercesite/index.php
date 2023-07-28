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
  include_once 'siteIncludes/siteHeader.php';
  include_once "../uploadsite/includes/db_conn.php";
  ?>
  <div class="position-relative">
    <img src="../bootstrapmorph/Cat.jpeg" alt="" width="100%" height="750rem">
    <button type="submit" class="btn bg-primary btn-lg text-dark position-absolute shadow-none m-5 rounded-3"
      style="top:70%; left:5%">View
      Collection</button>
  </div>
  <div class="container-fluid bg-dark">
    <h1 class=" text-center pt-3 pb-3 text-secondary">Featured Items</h1>
  </div>
  <div class="container-sm mt-3">
    <div class="row">
      <?php
      $sql = "SELECT * FROM product WHERE feature='yes';";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<product
                <div class="col-md-3">
                    <div class="card mb-4 me-1 product">
                        <div class="card-body text-center">
                            <img src="../bootstrapmorph/undraw_cat_s1wg.svg" alt="cat" class="image-thumbnail img-fluid mb-3">
                            <h5 id="productName"class="card-title">$row[pname]</h5>
                            <p id="productDescription"class="card-text">$row[pdesc]</p>
                            <p>$:
                            <span id="productPrice" class="card-text">$row[price]</span>
                            </p>
                            <button type="submit" class="btn bg-primary m-auto text-dark shadow-none addCart" data-product-id="$row[pid]">Add to Cart</button>
                        </div>
                </div>
            </div>
product;
      }
      ?>
    </div>
  </div>
  </div>




</body>
<script src=" ../bootstrapmorph/js/bootstrap.js">
</script>

</html>