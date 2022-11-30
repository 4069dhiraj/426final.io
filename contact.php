<!DOCTYPE html>
<html>

<head>
     <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Bipul Tiwari
    Date: 10/15/2022   

    Filename: contact.php
   -->
   <title>La Plaque</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 0px;
  background: #3e0110;
}

.header {
   padding: 30px;
   text-align: center;
   background-image: url('home_gumbo.jpg');
    background-repeat:no-repeat; 
    background-size: cover;
    background-attachment: fixed;
    width:auto;
    background-position: 100%;
    font: 20px Arial,bold sans-serif;
    color:aliceblue;    
 }


.header h1 {
  font-size: 50px;
  font-family: "Brush Script MT",cursive;
  border: none;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: rgb(9, 0, 0);
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  border: none;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color:rgb(233, 38, 38) ;
  color: black;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  color: white;
  font-family: "Brush Script MT",cursive;
  background: rgb(0, 12, 0);
  margin: 0px;
}
/*left column1 setting*/
.leftcolumn1
{
    float:left;
    text-align: center;
    width:50%; 
    height:400px;
    color:white;
    background-color: rgb(62, 14, 14);
  border: 2px solid green;
  padding: 50px;
  margin: 0px;
}
/*right column setup*/
.rightcolumn1
{
    float:right;
    width:50%; 
    height:400px;
    background-color: white;
    background-color: lightgrey;
  border: 2px solid green;
  padding: 1px;
  margin: 0px;   
}
  /*subnavigation setting*/
.subnav {
  float: left;
  overflow: hidden;
}
.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: rgb(233, 38, 38);
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: rgb(139, 26, 26);
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: rgb(126, 66, 66);
  color: black;
}

.subnav:hover .subnav-content {
  display: block;

}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
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
     <button class="subnavbtn">ABOUT<i class="fa fa-caret-down"></i></button>
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


<div class="leftcolumn1">
    <p><strong>ADDRESS:</strong><br>
    4205 Ryan St <br>
    Lake Charles, LA 70605<br><br>
    <strong>PHONE:</strong><br>
    <a href="tel:+13865557499" style="color: yellow;" >(386) 555-7499</a><br><br>
    <strong>HOURS:</strong><br>
    Mon – Thurs: 4PM – 9PM<br>
    Fri – Sat: 11AM – 9PM<br>
    </p>
</div>

<div class="rightcolumn1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.0808249308684!2d-93.21779472612411!3d30.177685074856708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x863b86f0ccd9c2b3%3A0x217c9407c6c70979!2sMcNeese%20State%20University!5e0!3m2!1sen!2sus!4v1667862604861!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="footer">
    <strong>  LA PLAQUE </strong>     &#9743  4205 Ryan St, Lake Charles   &nbsp 70605  &#9743 337-555-2188 <i class="fa-brands fa-facebook"></i> 
 </div> 


</body>
</html>