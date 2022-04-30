<?php
    session_start();
?>

<div class="nav_box">
    <div id="nav">
        <h2 class="brand_icon"><a href="index.php">bro-up</a></h2>
        <div class="nav_links">
                    
            <?php
                if(isset($_SESSION["userId"])) {
                    echo "<div><a href='../page/dashboard.php'>Dashboard</a></div>";
                    echo "<div><a href='../page/notifications.php'><i class='fa fa-bell'></i></a></div>";

                    echo "<div class='profile'>";
                        echo "<img id='profile' indicator='hide' src='../assets/component_img/pp.jpg' alt='profile'>";
                        echo "<div class='profile_card' id='profile_card_show'>";
                            echo "<a href='../page/profile.php'><li>profile</li></a>";
                            echo "<a href=''><li>setting</li></a>";
                            echo "<hr>";
                            echo "<a href='../php/logout.php'><li>logout</li></a>";
                        echo "</div>";
                    echo "<div>";
                    echo "";
                   
                }else{
                    echo "<a href='login.php'>Login</a> |";
                    echo "<a href='register.php'>Register</a>";
                }
            ?>
        </div>
    </div>
</div>
<script>
const profile_btn = document.querySelector('#profile');
const profile_card = document.querySelector('.profile_card');

profile_btn.onclick = ()=>{
    console.log('hello');
    
    if(profile_btn.getAttribute("indicator") == "hide"){
        profile_card.style.display = "block";
        profile_btn.setAttribute("indicator","display");
    }else if(profile_btn.getAttribute("indicator") == "display"){
        profile_card.style.display = "none";
        profile_btn.setAttribute("indicator","hide");
    }
};



</script>
