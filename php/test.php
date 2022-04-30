<?php

include "dbh.php";
session_start();

$stmt = $conn->prepare("SELECT userId from group_circle");
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($adminId);
$stmt->fetch();

echo($adminId);

$stmt2 = $conn->prepare("SELECT userName FROM users where userId = $adminId");
$stmt2->execute();
$stmt2->store_result();
$stmt2->bind_result($username);
$stmt2->fetch();

echo($username);