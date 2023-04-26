<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once 'siteIncludes/siteHeader.php';
    include_once '../uploadsite/includes/db_conn.php';
    ?>
    <div class="container mt-5 d-flex">
        <div class="row">
            <?php
            $sql = "SELECT * FROM product;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo <<<product
              <div class="col-4 mt-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="../bootstrapmorph/undraw_cat_s1wg.svg" alt="cat" class="image-thumbnail border-1" width="300">
                        <h5 class="card-title">$row[pname]</h5>
                        <p class="card-text">$row[pdesc]</p>
                        <p class="card-text">$row[price]</p>
                        <button type="submit" class="btn btn-primary m-auto">Add to Cart</button>
                    </div>
                </div>
            </div>
product;
            }
            ?>
        </div>
    </div>
</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>