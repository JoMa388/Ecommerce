<?php
    // Database Access
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "messages";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);   
    $sql = "select * From contact;";

    // Inserting Data
    $first= mysqli_real_escape_string($conn,$_POST['firstName']);
    $last= mysqli_real_escape_string($conn,$_POST['lastName']);
    $address= mysqli_real_escape_string($conn,$_POST['address']);
    $address2 = mysqli_real_escape_string($conn,$_POST['address2']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $phone = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    if(empty($first) ||empty($last)||empty($address)||empty($state)||empty($state)||empty($phone)||empty($message)) {
        exit;
    }
    else {
        $sql="INSERT INTO `contact`(`first_name`,`last_name`,`address`,`address2`,`state`,`phone_number`,`message`) 
        VALUES ('$first','$last','$address','$address2','$state','$phone','$message');";
        mysqli_query($conn, $sql);
        $toemail="jonathanma388@gmail.com";
        $mailHeader = "Name: " . $first .
        "\r\n Last: " . $last .
        "\r\n Address: " . $address .
        "\r\n Address2: " . $address2 .
        "\r\n State: " . $state .
        "\r\n Phone: " . $phone .
        "\r\n Message: " . $message . "\r\n";
        mail($toemail, "Contact Message", $mailHeader);
        $sql2 = "select * From contact;";
        $result=mysqli_query($conn, $sql2);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck>0) {
            while($row=mysqli_fetch_assoc($result)){
                echo $row['first_name'] ."\n";
                echo $row['last_name']."\n";
                echo $row['address']."\n";
                echo $row['address2']."\n";
                echo $row['state']."\n";
                echo $row['phone_number']."\n";
                echo $row['message']."<br>";
            }
        }
    }
    
    
?>