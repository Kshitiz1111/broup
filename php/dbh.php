<?php

    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "broup";

    $conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
    if($conn){
        echo "<script>console.log('successfuly connected to db')</script>";
    }else {
        echo "<script>console.log('could not connect to db')</script>";
    }
