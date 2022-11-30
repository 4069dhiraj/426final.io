<!--
    Project Assignment
    
    Login page to get to admin panel
    Author: Beijing to KTM to Beijing
    Date: 11/15/2022   

    Filename: Login.php
-->
<?php 
    include "Config/DBConfig.php";
    include "Controller/controller.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $loginController_obj = new Login($db_conn);
    if (isset($_POST['login'])) {
        $user_details = $loginController_obj->LoginForm($_POST);
        foreach($user_details as $user_value){
            $user_password = $user_value['password'];
            $firstname = $user_value['first_name'];
            $lastname = $user_value['last_name'];
            $email = $user_value['email'];
            $user_string = crypt($_POST['password'], $user_password);
	    }
	    if($email == $_POST['email'] && hash_equals($user_password, $user_string)){
	    	$_SESSION['firstname'] = $firstname;
	    	$_SESSION['lastname'] = $lastname;
	    	$_SESSION['email'] = $email;
	        header("Location: ./admin.php");
	    }
	    else{
	        header("Location: ./index.php");
	    }
    }
?>
<!DOCTYPE html>
<html>
    <head lang="en">

        <meta charset="utf-8" />
        <title>La Plaque</title>
        <link href="view/assets/css/book.css" rel="stylesheet" />
        <link href="view/assets/css/style1.css" rel="stylesheet" />
    </head>
    <style>
        .login-form{
            height: 45vh;
            width: 40%;
            margin: 0 auto;
            background: #73857375;
            padding: 97px 30px;
            align-items: center;
            border-radius: 15px;
            margin-top: 120px;
        }
    </style>
    <link href="style1.css" rel="stylesheet" />
    <body>
        <div class="container">
        <a href="index.php" style="text-decoration: none;">
        <div class="header">
  <div style="border: 3px solid #460202; filter:drop-shadow(12px 22px 800px rgb(14, 14, 0)); backdrop-filter: blur(4px);">
    <h1 >LA PLAQUE</h1>
    <h4>LOUISIANA'S FLAVOR</h3></div>
</div></a>

<div class="topnav">
   <a href="index.php">HOME</a>
   <a href="menu.php">MENU</a>
   <div class="subnav">
    <button class="subnavbtn">ABOUT</button>
    <div class="subnav-content">
        <a href="awards.php">AWARDS</a>
        <a href="contact.php">CONTACT</a>
    </div>
    </div>
    <a href="Order.php">ORDERS</a>
   <a href="booking.php" style="float:right">BOOKING</a>
   
   <?php
    if (isset($_SESSION['email'])){
    ?>
    <a href="./admin.php">PANEL PANEL</a>
    <a href="./index.php" class="nav-btn">LOGOUT</a>
    <?php
    } else{
    ?>
    <a href="./login.php" class="nav-btn">LOGIN</a>
    <?php
    } ?>
</div>
<hr style="margin:0px; border:4px solid rgb(122, 51, 4);">
        </div>
        <!--Login-->
            <?php if(!(isset($_SESSION['username']))){ ?>
                <div class="login-form well">                
                    <form action="#" method="post" style="flex-direction:column;">      
                        <h3 style="font-weight: 600; text-align: center;">LOGIN</h3>
                        <div class="form-group" style="margin-bottom:20px;">
                            <label for="" style="color:#fff;margin-right:40px; ">Email: </label>
                            <input type="email" placeholder="Enter Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" style="color:#fff;margin-right:10px; margin-bottom:20px;">Password: </label>
                            <input type="password" placeholder="Enter Password" name="password">  
                        </div>
                        <button type="submit" name="login" style="margin-top:20px; height: 45px" >Login</button>
                    </form>  
                </div>
            <?php }?>
    </body>

</html>