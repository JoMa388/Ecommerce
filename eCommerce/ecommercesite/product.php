<?php
include_once "../uploadsite/includes/db_conn.php";

if (isset($_POST["addproduct"])) {
    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $description = $_POST["pdesc"];

    $query = "INSERT INTO product(pname,pdesc,price) VALUES ('$pname','$description','$price');";
    mysqli_query($conn, $query);
}
if (isset($_GET["delete"]) && $_GET["delete"] > 0) {
    $id = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM product WHERE pid=$id");
}
if (isset($_POST["editproduct"])) {
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $description = $_POST["editDesc"];
    if ($pname != '') {
        mysqli_query($conn, "UPDATE product SET pname='$pname' WHERE pid=$pid;");
    }
    if ($price != '') {
        mysqli_query($conn, "UPDATE product SET price=$price WHERE pid=$pid;");
    }
    if ($description != '') {
        mysqli_query($conn, "UPDATE product SET pdesc='$description' WHERE pid=$pid;");
    }
}

header("location:index.php");
?>