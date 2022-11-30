<!DOCTYPE html>
<html>

<head>
     <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Dhiraj Kapali
    Date: 10/15/2022   

    Filename: makepay.php
   -->
   <title>La Plaque</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
<link href="style1.css" rel="stylesheet" />
<style>
body {
  padding: 0px; 
}
.card5
{
    background-color: rgb(248, 239, 239);
  margin: 0px;
  padding-top: 20px;
  padding-bottom: 3px;
  color:black;
  float:center;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-align: center;
  width:auto;
}
.left1{
  background-color: rgb(248, 239, 239);
padding: 10px;
margin:0px;
text-align: center;
  float:left; 
  width:33.3%;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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


   <div class="card5">
      <p>
        <h3 style="color:#460202; text-align: center;">OUR AWARDS</h3>
        <img src="pc_award2.png" class="center" style="height:180px; width:188px; ">
            We know our Cajun food is some of the best in Southwestern Louisiana, but you don't have to take our word for it!
        Over the years, La Plaque has <br>received a number of awards and accolades chosen by the readers and editors of magazines
        throughout Louisiana. Check them out here, and be sure to taste <br>our award-winning gumbo,steak, and seafood yourself 
        when you stop by for a bite at La Plaque in Lake Charles, LA.
      </p>
    
      <div class="left1">
      <img src="award1.jpg" style="height:150px; width:158px;">
      <h4>THE TIMES OF SOUTHWEST LOUISIANA READERS</h4>
      <p>La Plaque is honored to receive the award <br>for
      the Best Restaurant in Sounthwest Louisiana, 2003.</p>
      </div>

      <div class="left1">
      <img src="pc_award4.png" style="height:150px; width:158px; ">
      <h4>LAGNIAPPE MAGAZINE</h4>
      <p>Our gumbo makes a great impression!<br> Thank you for voting La Plaque'
      gumbo as the Best Gumbo in 2003.</p>
      </div>

      <div class="left1">
      <img src="award1.jpg" style="height:150px; width:158px; ">
      <p><h4>THE TIMES OF SOUTHWEST LOUISIANA READERS</h4>Voted for having the Best Seafood Platter 
      in 2003! <br>Be sure to stop by and try one out.</p>
      </div>
      
      <div style=" padding-left: 1%; ">
        <h1>LA PLAQUE'S OTHER AWARDS INCLUDE:</h1>
        <li>Best Place for Business Lunch, The Times of Southwest Louisiana (1998, 2003)</li>
        <li>Best Gumbo, Lagniappe Magazine (1995, 2002)</li>
        <li>Best Gumbo, The Times of Southwest Louisiana (2003)</li>
        <li>Best Gumbo in Southwest Louisiana, The Times of Southwest Louisiana (2004)</li>
        <li>Best Cajun Dish, The Times of Southwest Louisiana (1998, 1999, 2003)</li>
        <li>Best Cajun Dish in Southwest Louisiana: Stuffed Broiled Snapper, The Times of Lake Charles (1997, 1998, 1999, 2000)</li>
        <li>Best Cajun Restaurant, Lagniappe Magazine (1997, 1998, 1999, 2000, 2019)</li>
        <li>Best Cajun Food (2017, 2018, 2019)</li>
        <li>Best Restaurant in Southwest Louisiana, The Times of Southwest Louisiana (1999, 2001, 2003)</li>
        <li>Best Seafood Restaurant in Southwest Louisiana, The Times of Southwest Louisiana (2003)</li>
        <li>Best Seafood Platter, The Times of Southwest Louisiana (2001)</li>
        <li>Best French Food, The Times of Southwest Louisiana (1998)</li>
        <li>Best Seafood, Lagniappe Magazine (1994)</li>
    </div>

      
  

    </div>
  
<div class="footer">
  <strong>  LA PLAQUE </strong>  &#9743  4205 Ryan St, Lake Charles &nbsp 70605 &#9743 337-555-2188 <i class="fa-brands fa-facebook"></i>
</div>  

</body>

</html>
