<!DOCTYPE html>
  <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Bipul Tiwari
    Date: 10/15/2022   

    Filename: index.php
   -->
<html>

<head>
 
   <title>La Plaque</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style1.css" rel="stylesheet" />
</head>

<body>

  <a href="index.php" style="text-decoration: none;"><div class="header">
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
    <a href="Order.php" style="float:right">ORDERS</a>
   <a href="booking.php" style="float:right">BOOKING</a>
   <?php
   if (isset($_SESSION['email'])){
?>
   <a href="./admin.php">ADMIN PANEL</a>
   <a href="./logout.php" class="nav-btn">LOGOUT</a>
<?php
   } else{
?>
   <a href="./login.php" class="nav-btn">LOGIN</a>
<?php
   }
?>
</div>
<hr style="margin:0px; border:4px solid rgb(122, 51, 4);">


  <div class="card"> 
    <div style="object-fit: cover">
        <img src="inside.jpg" style="object-fit: cover; width:100%; height:100%; ">
        <div class="top-left"><h1>LA PLAQUE</h1></h1></div>
        <div class="symbol"><h1>&#x1F990</h1></div>
        <div class="centered"><h1>LOUISIANA'S FLAVOR</h1></div>
        <div class="centered1"><h3>AWARD-WINNING CAJUN FOOD</h3></div>
    </div>
  </div>


  


<div class="footer">
  <p><strong>  LA PLAQUE </strong>    &#9743    4205 Ryan St, Lake Charles   &nbsp   70605  &#9743   337-555-2188 </p> 
</div> 

</body>
</html>