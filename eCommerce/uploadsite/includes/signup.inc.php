<?php
print_r($_POST);
if (isset($_POST["submit"])) {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["userName"];
    $pwd = $_POST["password"];
    $rpwd = $_POST["repeatpassword"];

    require_once "db_conn.php";
    require_once "functions.php";

    if (invalidUid($username) !== true) {
        header("location:../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location:../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $rpwd) !== false) {
        header("location:../signup.php?error=pwddontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location:../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $fname, $lname, $email, $username, $pwd);
} else {
    header("location:../signup.php");
}