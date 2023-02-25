<?php
if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'db_conn.php';

    loginUser($conn, $username, $pwd);

} else {
    header("index.php");
    exit();
}