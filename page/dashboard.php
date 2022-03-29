<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>    
    <link rel="stylesheet" href="../style/dashboard.css"><link>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>dashboard</title>
</head>
<body>
    <?php include '../component/nav.php';?>
    <div class="main_container">
        <div class="left_container">
           
            <div class="bro_circle box" onclick="window.location = 'bro_circle.php'">
                <div class="inner_box">
                    <div>
                        <h3>Bro</h3>
                        <h1>Circle</h1>
                    </div>
                    <div>
                        <object data="../assets/custom/bro_circle.svg" width="100" height="100" onclick="window.location = 'bro_circle.php'"></object>
                    </div>
                </div>
                <div class="inner_box ">
                    <p><strong>Gafadi</strong></p>
                    <p>20 members</p>
                </div>

           </div>
            
           
           <div class="bro_call box" onclick="window.location = 'bro_call.php'">
                <div class="inner_box">
                    <div>
                        <h3>Bro</h3>
                        <h1>Call</h1>
                    </div>
                    <div>
                        <object data="../assets/custom/bro_call.svg" width="100" height="100"></object>
                    </div>
                </div>
                <div class="inner_box">
                <p><strong>20 bros are online</strong></p>
                
                </div>
            </div>
           <div class="bro_pay box" onclick="window.location = 'bro_pay.php'">
                <div class="inner_box">
                    <div>
                        <h3>Bro</h3>
                        <h1>Pay</h1>
                    </div>
                    <div>
                        <object data="../assets/custom/bro_pay_ss.svg" width="200" height="100"></object>
                    </div>
                </div>
                <!-- <div class="inner_box">
                <p><strong>be a bro head</strong></p> 
                
                </div> -->
           </div>
        </div>
        <div class="sidebar custom_scrollbar">
                      
           <?php include "../component/trans_stmt.php";?>
        
        </div>

        <div class="partner_feed">
            <div class="head_title inner_box"> 
                <h2>Bro Partners Feed & Offer</h2>
                <h2><i class="fa fa-filter"></i>filter</h2>
            </div>
            <?php include "../component/bro_partner_feed.php";?>
        </div>
    </div>
</body>
<script src="../js/functions.js" defer></script>
</html>