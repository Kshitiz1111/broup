<?php 
include "../php/dbh.php";

if( isset($_SESSION['userId']) ){
    $userName = $_SESSION['userName'];
    $stmt = $conn->prepare("SELECT firstName, middelName, lastName, country, city, localAddress, mobileNumber FROM users WHERE username = ?");
    $stmt->bind_param('s',$userName);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($firstName, $middelName, $lastName, $country, $city, $localAddress, $mobileNumber);

    $stmt->fetch();
    $stmt->close();

}else{
    echo "login first";
}

?>