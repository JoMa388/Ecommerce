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
  include_once "../uploadsite/includes/db_conn.php";
  ?>


  <div class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-dark text-center mt-5">&#128008; Store</h1>
    <?php
    if (isset($_SESSION['useruid'])) {

      echo '<div class="container-xxl bg-dark text-light p-3 rounded my-4">
      <div class="d-flex align-items-center justify-content-between">
        <h2 class="my-auto text-light">
          Welcome ' . $_SESSION['useruid'] . '
        </h2>
        <button type="button" class="btn btn-outline-light shadow-none me-1 rounded-2 fw-bolder fs-5"
          data-bs-toggle="modal" data-bs-target="#addproduct">Add Product</button>
      </div>
    </div>
 
    <div class="container p-0">
      <table class="table table-hover text-center">
        <thead class="bg-info text-light">
          <tr>
            <th width="20%" scope="col">Name</th>
            <th width="40%" scope="col">Description</th>
            <th width="20%" scope="col">Price</th>
            <th width="20%" scope="col" class="rounded-end">Edit/Delete</th>
          </tr>
        </thead>
        <tbody>';

      $sql = "SELECT * FROM product;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo <<<product
              <tr class="align-middle">
                <td>$row[pname]</td>
                <td>$row[pdesc]</td>
                <td>$$row[price]</td>
                <td>
                  <a href='../uploadsite/includes/update.php?edit=$row[pid]'> <button type="button" class="btn btn-sm">Edit</button> </a>
                  <button onclick="confirm_delete($row[pid])" class="btn btn-outline-danger btn-sm">Delete</button></a>
                </td>
              </tr>
          product;
      }
    }
    ?>
    </tbody>
    </table>
    <!-- Modal Add Product-->
    <div class="modal" id="addproduct">
      <div class="modal-dialog">
        <!-- Form -->
        <form action="../uploadsite/includes/product.php" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add a Product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <div class="modal-body">
              <!-- Name -->
              <div class="input-group mb-2">
                <span class="input-group-text bg-info text-light col-3">Name</span>
                <input type="text" class="form-control" name="pname" required />
              </div>
              <!-- Price -->
              <div class="input-group mb-2 ">
                <span class="input-group-text bg-info text-light col-3">Price</span>
                <input type="text" class="form-control" name="price" required />
              </div>
              <!-- Description -->
              <div class="input-group">
                <span class="input-group-text bg-info text-light col-3">Description</span>
                <textarea class="form-control" name="pdesc" rows="1" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="addproduct"
                class="btn btn-outline-success rounded-2 shadow-none">Submit</button>
              <button type="button" class="btn btn-secondary rounded-2 shadow-none"
                data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function confirm_delete(id) {
      if (confirm("Are you sure you want to delete this product?")) {
        window.location.href = "../uploadsite/includes/product.php?delete=" + id;
      }
    }
  </script>
</body>
<script src=" ../bootstrapmorph/js/bootstrap.js">
</script>

</html>