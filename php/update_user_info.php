<?php
include "../php/dbh.php";
session_start();
if(isset($_POST["update"])){
    $userName = $_SESSION['userName'];
    $firstName = $_POST["firstName"];
    $middelName = $_POST["middelName"];
    $lastName = $_POST["lastName"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $localAddress = $_POST["localAddress"];
    $number = $_POST["mobileNumber"];

    echo $userName;
    $stmt = $conn->prepare("UPDATE users SET firstName = ?, middelName = ?, lastName = ?, country = ?, city = ?, localAddress = ?, mobileNumber = ? WHERE userName = ?");
    $stmt->bind_param('ssssssss', $firstName, $middelName, $lastName, $country, $city, $localAddress, $number, $userName);
    $stmt->execute();

    $stmt->close();
    header("location: ../page/profile.php?message=update success");
    

   echo "<script>alert('Update successful');</script>";
}else {
    header("location: ../page/profile.php?message=update unsuccessful");
}