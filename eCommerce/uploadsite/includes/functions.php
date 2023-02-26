<?php

function invalidUid($username)
{
    $result = true;
    if (!preg_match('/^[a-zA-Z0-9]$/', $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    $result = true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $rpwd)
{
    $result = true;
    if ($pwd !== $rpwd) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid= ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        mysqli_stmt_close($stmt);
        $result = false;
        return $result;
    }

}
function createUser($conn, $fname, $lname, $email, $username, $pwd)
{
    $sql = "INSERT INTO users(usersFname,usersLname,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
    exit();


}
function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists == false) {
        header("location:../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd == false) {
        header("location:../login.php?error=wronglogin");
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersid"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["userfname"] = $uidExists["usersFname"];
        header("location:../../ecommercesite/index.php");
        exit();
    }
}