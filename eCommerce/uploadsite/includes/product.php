<?php

if (isset($_POST["addproduct"])) {
    addproduct();
} else if (isset($_GET["delete"]) && $_GET["delete"] > 0) {
    deleteproduct();
} else if (isset($_POST["editproduct"])) {
    editproduct();
}

function addproduct()
{
    include_once "db_conn.php";

    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $description = $_POST["pdesc"];

    $query = "INSERT INTO product(pname,pdesc,price) VALUES ('$pname','$description','$price');";
    mysqli_query($conn, $query);
    header("location:../index.php");
}
function deleteproduct()
{
    include_once "db_conn.php";
    $id = $_GET["delete"];
    mysqli_query($conn, "DELETE FROM product WHERE pid=$id");
    header("location:../index.php");
}
function editproduct()
{
    include_once "db_conn.php";
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
        header("location:../index.php");
    }
}
?>