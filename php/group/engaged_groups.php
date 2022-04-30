<?php
include "../dbh.php";
session_start();
$userId= $_SESSION["userId"];

$stmt = $conn->prepare("SELECT group_id FROM group_member WHERE user_id = ? ");
$stmt->bind_param("i",$userId);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($groupId);
$row = $stmt->num_rows();
echo $row;
//$engagedGroupArrayId = array();
while($row > 0){
    $stmt->fetch();
    $stmt1 = $conn->prepare("SELECT name,detail,admin_id,group_id FROM group_circle WHERE group_id = ? ");
    $stmt1->bind_param("i",$groupId);
    $stmt1->execute();
    $stmt1->store_result();
    $stmt1->bind_result($groupName,$groupDetail,$groupAdminId,$groupId);
    $stmt1->fetch();
    echo $groupName;
    $row--;
}
//echo $stmt->num_rows();


