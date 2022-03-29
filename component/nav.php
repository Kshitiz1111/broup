<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="nav_box">
<div id="nav">
    <h2 class="brand_icon"><a href="index.php">bro-up</a></h2>
    <div class="nav_links">
    <?php
        if(isset($_SESSION["id"])) {
            echo "<a href='../page/notifications.php'><i class='fa fa-bell'></i></a>";
            echo "<a href='../page/dashboard.php'>Dashboard</a>";
            echo "<a href='../php/logout.php'>logout</a>";
        }else{
            echo "<a href='login.php'>Login</a> |";
            echo "<a href='register.php'>Register</a>";
        }
    ?>
    </div>
</div>
</div>

</body>
</html>