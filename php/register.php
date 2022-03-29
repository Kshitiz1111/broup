<?php
include "dbh.php";
if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $firstName = $_POST['firstName'];
    $middelName = $_POST['middelName'];
    $lastName = $_POST['lastName'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $localAddress = $_POST['localAddress'];
    $mobileNumber = $_POST['mobileNumber'];
    $password = password_hash( $_POST['password'],PASSWORD_DEFAULT);
    $gender = $_POST['gender'];

    
    $stmt = $conn->prepare("INSERT INTO users(userName, firstName, middelName, lastName, country, city, localAddress, mobileNumber, password, gender) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");

    $stmt->bind_param("sssssssiss",$userName, $firstName, $middelName, $lastName, $country, $city, $localAddress, $mobileNumber, $password, $gender);
    header("location: ../component/login.php");
    $stmt->execute();
    $stmt->close();
    $stmt->close();

}