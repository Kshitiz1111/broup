<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>    
    <link rel="stylesheet" href="../style/create_join_circle.css"><link>    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <?php include '../component/nav.php';?>
    
    <div class="main_container">
       <div class="welcome">
            <h2><strong><?php echo $_SESSION['userName']; ?></strong></h2>
            <p>Welcome to bro-up <strong>circle</strong> where you can <strong>create</strong> or <strong>join</strong> your friends and family circle</p>
            <div class="create_join">
                <div class="btn_container inner_box_v2">
                    <!--  -->
                    <script> let create_box_id = "create_circle"; </script>
                    <div class="create btn" onclick="display(create_box_id)">
                        Create
                    </div>
                    <!--  -->
                    <script> let join_box_id = "join_circle"; </script>
                    <div class="join btn" onclick="display(join_box_id)">
                        Join
                    </div>
                </div>

                <div class="create_circle_box box" id="create_circle">
                    <div class="close button_right"> 
                        <i class="fa fa-close" onclick="hide()"></i>
                    </div>
                    <span>Choose an appropriate name and decription to create a circle</span>
                    
                    <form action="">
                        <p><strong>Name</strong></p>
                        <input type="text" name="circleName">
                        <p><strong>Decription</strong></p>
                        <textarea name="decription" id="circleDecription" cols="30" rows="5"></textarea>

                        <div class="button_right">
                            <input type="button" name="submit" value="Create Circle">
                        </div>
                    </form>
                
                </div>
                <div class="join_circle_box box" id="join_circle"> 
                    <div class="close button_right">
                        <i class="fa fa-close" onclick="hide()"></i>
                    </div>
                    <span>Send request to existing circles,</span>
                    <form action="">
                        <span><input type="search"><i class="fa fa-search"></i></span>

                        <div class="existing_circle_container">
                            
                        </div>
                    </form>

                    </div>
                </div>
                
            </div>
       </div>
    </div>
</body>


</html>
<script src="../js/show_hide.js"></script>