<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
    <title>Edit Product</title>
    <style>
        @media (min-width: 1200px) {
            .container {
                max-width: 30rem;
            }
        }
    </style>
</head>

<body>
    <?php
    $id = 0;
    if (isset($_GET['edit']) > 0) {
        $id = $_GET['edit'];
    }
    ?>
    <section class="container bg-dark rounded-2 mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center text-light pt-3">Edit Product</h1>
            <form action="product.php" method="post">
                <input type="hidden" value="<?php echo $id; ?>" name="pid">
                <!--Edit Name -->
                <div class="form-floating mt-3">
                    <input type="text" id="pname" name="pname" class="form-control" placeholder="Edit Name" />
                    <label for="pname" class="fw-bold">Edit Name</label>
                </div>
                <!-- Edit Description -->
                <div class="form-floating mt-3">
                    <textarea id="editDesc" name="editDesc" class="form-control"
                        placeholder="Edit Description"></textarea>
                    <label for="editDesc" class="fw-bold">Edit Description</label>
                </div>
                <!-- Edit Price -->
                <div class="form-floating mt-3">
                    <input type="text" id="price" name="price" class="form-control" placeholder="Price" />
                    <label for="price" class="fw-bold">Price</label>
                </div>
                <!-- Button -->
                <div class="mt-3">
                    <div class="text-center m-auto">
                        <button class="form-control btn btn-success btn-smfw-bold mb-3 shadow-none" type="submit"
                            name="editproduct">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>
<script src="../bootstrapmorph/js/bootstrap.js"></script>

</html>