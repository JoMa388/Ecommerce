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
    <div class="container-sm mt-3">
        <div class="row">
            <?php
            $sql = "SELECT * FROM product;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo <<<product
                <div class="col-md-3">
                    <div class="card mb-4 me-3 product">
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
</body>
<script src="../bootstrapmorph/js/bootstrap.js">
</script>
<script src="shoppingCart.js"></script>

</html>