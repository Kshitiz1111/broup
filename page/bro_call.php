<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/global.css"><link>    
    <link rel="stylesheet" href="../style/bro_call.css"><link>    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <?php include '../component/nav.php';?>

    <div class="main_container">
        <div class="left_container">
            <div class="call_form_container">
                <h2>Call</h2>
                <div class="pending_call_container inner_box_wrap">
                    <div class="pending_call_card ">
                       <p>form: <strong>Gafadi</strong></p> 
                        <p>2<span> min</span><span> ago</span></p>
                    </div>
                    <div class="pending_call_card ">
                       <p>form: <strong>Gafadi</strong></p> 
                        <p>2<span> min</span><span> ago</span></p>
                    </div>
                    <div class="pending_call_card ">
                       <p>form: <strong>Gafadi</strong></p> 
                        <p>2<span> min</span><span> ago</span></p>
                    </div>
                    <div class="pending_call_card ">
                       <p>form: <strong>Gafadi</strong></p> 
                        <p>2<span> min</span><span> ago</span></p>
                    </div>
                    <div class="pending_call_card ">
                       <p>form: <strong>Gafadi</strong></p> 
                        <p>2<span> min</span><span> ago</span></p>
                    </div>
                </div>
                <div class="create_call_container">
                    <div class="head_text inner_box">
                        <h4>Create Call</h4>
                        <div class="choose_group">
                            <form action="">
                            <select id="groups" name="group">
                                <option value="gafadi">Gafadi</option>
                                <option value="explorer">Explorer</option>
                                <option value="nasa">Nasa</option>
                                <option value="mars">Mars</option>
                            </select>
                            <p>choose group</p>
                        </div>
                    </div>    
                    
                    <div class="input_card">
                        <div class="title">
                            <p>Title</p>
                            <input type="text" name="title">
                        </div>
                        <div class="location">
                            <p>Location</p>
                            <input type="text" name="location">
                            
                            <div class="pre_visited">
                                <p>or choose form previous</p>
                                <select id="location" name="location">
                                        <option value="cafe and bar">Cafe and Bar</option>
                                        <option value="hotel makalu">Hotel Makalu</option>
                                </select>
                            </div>
                        </div>
                        <div class="description">
                            <p>Description</p>
                            <textarea name="decription" id="decription" cols="25" rows="3" maxlength="70"></textarea>
                        </div>
                        <div class="button_right">
                            <input type="submit" value="call">
                        </div>
                        
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="partner_feed custom_scrollbar">
                <div class="head_title inner_box"> 
                    <h2>Offers</h2>
                    <h2><i class="fa fa-filter"></i>filter</h2>
                </div>
                <?php include "../component/bro_partner_feed.php";?>
            </div>
        </div>

        <div class="pre_visited_location_container">
            <div class="head_text inner_box">
                <h3>Recently Visited</h3>
                <h3>sort</h3>
            </div>
            <div class="group_container inner_box_wrap">
                <div class="group_card">
                    <strong>Psychedelic Experience Travel</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
                <div class="group_card">
                    <strong>Cafe & bakery</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
                <div class="group_card">
                    <strong>Psychedelic Experience Travel</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
                <div class="group_card">
                    <strong>Cafe & bakery</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
                <div class="group_card">
                    <strong>Psychedelic Experience Travel</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
                <div class="group_card">
                    <strong>Cafe & bakery</strong>
                    <p>20<span> days</span><span>ago</span></p>
                </div>
               
               
            </div>
        </div>
    </div>
</body>
</html>    