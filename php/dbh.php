<?php

    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "broup";

    $conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);
    if($conn){
        echo "successfuly connected to db";
    }else {
        echo "could not connect to db";
    }
