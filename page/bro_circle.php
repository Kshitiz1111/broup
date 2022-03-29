<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>    
    <link rel="stylesheet" href="../style/bro_circle.css"><link>    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <?php include '../component/nav.php';?>
    
    <div class="main_container">
        <div class="left_container">

           <?php include"../component/bci_main_group.php";?>

        </div>
        <div class="sidebar">

            <?php include"../component/bci_main_group_member.php";?>

        </div>

        <div class="engaged_group custom_scrollbar">
            <div class="title_head" >
                <div class="inner_box">
                    <h3>Circles you are in </h3>
                    <i class="fa fa-plus-circle"></i>
                </div>
            </div>

            <?php include"../component/bci_groups.php";?>

        </div>

        <div class="customize_group">
        <?php include"../component/bci_group_category.php";?>

        </div>
    </div>
</body>
<script src="../js/functions.js" defer></script>

</html>