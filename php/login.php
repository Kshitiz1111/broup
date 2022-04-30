<?php

include "dbh.php";

if(isset($_POST['login'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT userId, userName, password FROM users WHERE userName = ? ");
    $stmt->bind_param('s',$userName);
    $stmt->execute();
    $stmt->store_result();
    //store provided after query
    $stmt->bind_result($uId, $uName, $pwd);

    if($stmt->num_rows() == 1){
        // fetch selected rows data
        $stmt->fetch();
        if(password_verify($password,$pwd)){
            echo "password matched";
            session_start();
            $_SESSION["userName"] = $uName;
            $_SESSION["userId"] = $uId;
            header("location: ../page/dashboard.php");

        }else{
            echo"password didn't matched";

        }
    }else{
        echo "User notfound";
    }

}
