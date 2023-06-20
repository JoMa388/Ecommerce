<?php
if (isset($_POST)) {
    include_once '../uploadsite/includes/db_conn.php';
    $pid = $_POST['pid'];
    foreach ($pid as $value => $key) {
        $sql = "INSERT INTO ordertable(pid,pnum,cid) VALUES ('$value','$key','23')";
        $result = mysqli_query($conn, $sql);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <link href="../bootstrapmorph/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    include_once 'siteIncludes/siteHeader.php';
    ?>
    <div class="container d-flex justify-content-center mt-5 pt-5">
        <h1 class="text-dark mt-5 pt-5">Order Successful</h1>
    </div>

</body>

</html>