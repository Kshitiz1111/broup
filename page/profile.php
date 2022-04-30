
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>
    <link rel="stylesheet" href="../style/profile.css"><link>        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <div>
    <?php include '../component/nav.php';?>
    </div>
    <?php 
        include "../php/user_info.php";
    ?>
    <?php
    // $update_message = htmlspecialchars($_GET["message"]);
    // echo "<script>alert('$update_message');</script>";
    ?>
    <div class="blur_background"></div>

    <div class="main_container">
        <div class="rank_container button_right">
            <div class="rank_card">
                <i class="fa fa-asterisk" id="current_rank_icon"><span id="current_rank_title"> igniter</span></i>
                <div class="inner_box_v2">
                    <div class="progress_box">
                        <div class="progress_status"></div>
                    </div>
                    <div class="next_rank">
                        <i class="fa fa-certificate" id="next_rank_icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile_qr inner_box">

            <div class="profile">
                <div class="update_profile">
                    <p>*field must not be empty*</p>
                    <form action="../php/update_user_info.php" method="POST">
                        <div class="name field">
                            <label for="firstName">firstname: 
                            <input type="text" name="firstName" placeholder="firstname"required value="<?php echo $firstName;?>"></label>
                            <label for="firstName">middelname: 
                            <input type="text" name="middelName" placeholder="middelname" value="<?php if(!empty($middelName)){ echo $middelName;} else{ echo "- - -";}?>"></label>
                            <label for="firstName">lastname: 
                            <input type="text" name="lastName" placeholder="lastname" required value="<?php echo $lastName;?>"></label>
                        </div>
                        <div class="address field">
                            <label for="firstName">country: 
                            <input type="text" name="country" placeholder="country" value="<?php echo $country;?>"></label>
                            <label for="firstName">city: 
                            <input type="text" name="city" placeholder="city" value="<?php echo $city;?>"></label>
                            <label for="firstName">street: 
                            <input type="text" name="localAddress" placeholder="local address" value="<?php echo $localAddress;?>"></label>
                        </div>
                        <div class="contact field">
                            <label for="firstName">number: 
                            <input type="text" name="mobileNumber" placeholder="mobile number" value="<?php echo $mobileNumber;?>"></label>
                        </div>
                        <input type="submit" name="update">
                    </form>    
                </div>
                <div class="inner_box_v2">
                    <img src="../assets/component_img/pp.jpg" alt=""> 
                    <div class="username">
                        <i class="fa fa-asterisk rank"></i>
                        <h3 id="username"><?php echo $_SESSION["userName"]; ?></h3>
                    </div>
                </div>
                <div class="name inner_box_wrap">
                    <p><strong>First Name : </strong><?php echo $firstName;?></p>
                    <p><strong>Middel Name : </strong><?php if(!empty($middelName)){ echo $middelName;} else{ echo "- - -";}?></p>
                    <p><strong>Last Name : </strong><?php echo $lastName;?></p>
                </div>
                <div class="location inner_box_wrap">
                    <p><strong>Country : </strong><?php echo $country;?></p>
                    <p><strong>City : </strong><?php echo $city;?></p>
                    <p><strong>Street : </strong><?php echo $localAddress;?></p>
                </div>
                <div>
                    <p><strong>Number : </strong><?php echo $mobileNumber;?></p>
                </div>
                <div>
                    <button class="edit_profile_btn">Edit</button>
                </div>
            </div>

            <div class="qr">
                <div id="qr_code">

                </div>
                <div class="invitation_code inner_box">
                    <script>
                        //value of text must be same as element id of which we want to copy its content
                        let text = 'invite_code';
                        let btn = 'button';
                    </script>
                    <div class="copy_code inner_box_v2"><p id="invite_code"><?php echo $_SESSION['userId'];?></p><i class="fa fa-clone" id="button" onclick="copyText(text,btn)"></i></div>
                </div>
            </div>

        
        </div>

    </div>
</body>
</html>    
<script src="../js/copy_text.js"></script>
<script>
    const blur_background = document.querySelector('.blur_background');
    const update_profile = document.querySelector('.update_profile');
    const edit_profile_btn = document.querySelector('.edit_profile_btn');

    edit_profile_btn.onclick = ()=>{
        update_profile.style.display = 'block';
        blur_background.style.display = 'block';
    }

    blur_background.onclick = ()=>{
    update_profile.style.display = 'none';
    blur_background.style.display = 'none';
}
</script>
<script src="../js/qrcode.js"></script>
<script type="text/javascript">
    let code = document.querySelector('#invite_code');
    let code_text = code.textContent;

    let qrcode = new QRCode(document.querySelector('#qr_code'), {
    text: code_text,
    width: 200,
    height: 200,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});

window.onload() = ()=>{
    qrcode.makeCode(code_text);
};
</script>