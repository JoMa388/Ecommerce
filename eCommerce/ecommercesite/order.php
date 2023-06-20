<?php
if (isset($_POST)) {
    include_once '../uploadsite/includes/db_conn.php';
    $pid = $_POST['pid'];
    $ranidCheck = false;
    while (!$ranidCheck) {
        $ranID = ranNum();
        $sql = "SELECT * FROM ordertable WHERE cid = '$ranID';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 0) {
            foreach ($pid as $value => $key) {
                $sql = "INSERT INTO ordertable(pid,pnum,cid) VALUES ('$value','$key','$ranID')";
                $result = mysqli_query($conn, $sql);
            }
            $ranidCheck = true;
        }
    }
}


function ranNum()
{
    $ranNum = rand(1, 99999);
    $cstID = "cstID" . $ranNum;
    return $cstID;
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