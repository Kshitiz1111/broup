<?php
include "../dbh.php";
session_start();
if(isset($_POST["createCircle"])){
    $circleName = $_POST["circleName"];
    $decription = $_POST["decription"]; 
    $adminId = $_SESSION["userId"];
    $stmt = $conn->prepare("INSERT INTO group_circle (name, detail,admin_id) VALUES(?,?,?)");
    $stmt->bind_param('ssi', $circleName, $decription, $adminId);
    $stmt->execute();

    // $stmt1 = $conn->prepare("SELECT group_id FROM group_circle WHERE admin_id = ?");
    // $stmt1->bind_param('i',$adminID);
    // $stmt1->execute();
    $sql = "SELECT group_id FROM group_circle WHERE admin_id = $adminId";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "group_circle".$result->num_rows;
        while($row = $result->fetch_assoc()){
            $groupId = $row["group_id"];
            $userGroupId = $adminId.$groupId;

            $sql1 = "SELECT user_group_id FROM group_member WHERE user_id = $adminId";
            $result1 = $conn->query($sql1);

            if($result1->num_rows > 0){
                echo "group_member".$result1->num_rows."<br>";
                $i = 0;
                $userGroupArray = array();
                //store all the selected user_group_id from group_member table into a single array
                while($row1 = $result1->fetch_assoc()){
                   $userGroupArray[$i] = $row1["user_group_id"];
                    $i++;
                }  
                //check if group_member table user_group_id column alread have $userGroupId
                //if found don't insert any data and iterate towards next $userGroupId from groupcircle table 
                if(in_array($userGroupId,$userGroupArray)){
                    continue;
                }
                //if no matching $userGroupId found in group_member table
                //insert newly crated group data into group_member
                else{
                    $stmt1 = $conn->prepare("INSERT INTO group_member (group_id, user_id, user_group_id) VALUES(?,?,?)");
                    $stmt1->bind_param("iii",$groupId,$adminId,$userGroupId);
                    $stmt1->execute();
                }
                 
            }else if($result1->num_rows == 0){
                echo "no data".$row1["user_group_id"]." ".$userGroupId;
                $stmt1 = $conn->prepare("INSERT INTO group_member (group_id, user_id, user_group_id) VALUES(?,?,?)");
                $stmt1->bind_param("iii",$groupId,$adminId,$userGroupId);
                $stmt1->execute();
            }
                
        }
    }
    // echo $stmt->num_rows();
    // $stmt1->store_result();
    // $stmt1->bind_result($groupId);

        // $stmt1->fetch();
        // echo $groupId;
        // echo $adminID;
        // $userGroupId = $adminID.$groupId;
        // echo  $userGroupId;
        
        // $stmt2 = $conn->prepare("INSERT INTO group_member (group_id, user_id, user_group_id) VALUES(?,?,?)");
        // $stmt2->bind_param("iii",$groupId,$adminID,$userGroupId);
        // $stmt2->execute();

    




    // $stmt2->close();
    // $stmt1->close();
    // $stmt->close();
    

    //header("location:../../page/create_join_circle.php");
}else{
    echo "error";
}