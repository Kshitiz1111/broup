<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>    
    <link rel="stylesheet" href="../style/bro_pay.css"><link>    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <?php include '../component/nav.php';?>
    <div class="blur_background"></div>
    <div class="main_container">
    <div class="coin_mobile_view sidebar">
    <?php include "../component/bro_coin.php";?>
    </div>
    

        <div class="left_container">
            <div class="pay_container">
                <h2>Pay</h2>
                <div class="invoice_container">
                    <form action="">
                    <div>
                        <p>amount</p>
                        <input class="total_amount" type="number" name="amount" require>
                    </div>
                    <div class="inner_box_wrap receiver">
                        <div class="individual">
                            <p>to</p>
                            <div class="inner_box_wrap">
                               <input class="single" type="checkbox">individual

                                
                            </div>
                                                  
                        </div>
                        <div class="split">
                            <p style="margin: 3px 55px;">split into</p>
                            <div class="inner_box_flex">
                                <strong style="margin: 17px 20px 3px 20px;">or</strong>
                                <input class="split_members" type="number" name="recipient" style="width: 60px;" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="pay_method">
                        <p>choose payment method</p>
                        <div class="inner_box_flex pay_methods">
                            <input class="pay_via_id" type="button" name="pay_via_id" value="ID"> |
                            <input class="pay_via_qr" type="button" name="pay_via_qr" value="QR"> |
                            <input class="pay_via_nfc" type="button" name="pay_via_nfc" value="NFC">
                        </div>
                    </div>
                    <div class="guide_text"></div>
                    <div class="add_member_id inner_box_wrap">

                    </div>

                    <div class="split_money_box"></div> 

                    <div class="add_qr">
                        <div class="container">
                            <div class="contents_box custom_scrollbar">
                                <div class="camera_view">

                                </div>
                                <div class="member_counter">
                                    <strong><span id="total">20</span>/<span id="scanned_total">10</span></strong>
                                </div>
                                <div class="member_holder ">
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">hhhhhhhhhhhhhhhhhhkshitiz</p>
                                    </div>
                                    <div class="member">
                                        <img id="user_profile" src="../assets/component_img/pp.jpg" alt="">
                                        <p id="username">kshitiz</p>
                                    </div>
                                </div>
                                <div class="button_holder">
                                    <button>done</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    </form>
                    
                </div>
            </div>
        </div>
        
        <div class="sidebar custom_scrollbar">
        <div class="coin_desktop_view">
        <?php include "../component/bro_coin.php";?>
        </div>
           <?php include "../component/trans_stmt.php";?>
        
        </div>
        
    </div>
</body>
<script src="../js/pay_method.js"></script>
</html>