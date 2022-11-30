<!DOCTYPE html>
<html>

<head>
   <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Rajan Budhathoki
    Date: 10/15/2022   

    Filename: menu.php
   -->
   <title>La Plaque</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
  box-sizing: border-box;
}

/*html page la*/
body {
  font-family: Arial;
  padding: 0px;
  background: #3e0110;
}

/* Header/Blog Title */
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
  border:none;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: rgb(233, 38, 38);
  color: black;
}


/* Add a card effect for articles */
.card {
  background-image: url("menu.jpg");
  background-repeat:no-repeat; 
  background-size: cover;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);
   opacity: 1;
   color:rgb(245, 252, 249);
   font-size: bolder;
  font: white italic small-caps bold 20px/40px Georgia, serif;
  padding: 20px;
  margin-top: 20px;
  
}
.card1 {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);
   background-attachment: fixed;
   

}
a.header{
  color:rgb(41, 111, 98);
 }


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
dl {
	margin-left: 2%;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
}
dt {
	display: block;
	margin: 0;
	text-indent: 0;
	font-weight: bolder;
   font-size:;
	border-bottom: 1px solid rgb(9, 117, 32);
}
dd {
	display: block;
   font-size: larger;
	margin: 0 0 3% 3%;
	text-indent: 0;
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


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  color: white;
  font-family: "Brush Script MT",cursive;
  background: rgb(0, 12, 0);
  margin: 0px;
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
  <a href="home.php" style="text-decoration: none;"><div class="header">
    <div style="border: 3px solid #460202; filter:drop-shadow(12px 22px 800px rgb(14, 14, 0)); backdrop-filter: blur(4px);">
      <h1 >LA PLAQUE</h1>
      <h4>LOUISIANA'S FLAVOR</h3></div>
  </div></a>



<div class="topnav">
   <a href="home.php">HOME</a>
   <a href="menu.php">MENU</a>
   <div class="subnav">
    <button class="subnavbtn">ABOUT</i></button>
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
   
   <article  >
      <h1>Our Menu</h1>
      <div class="card1">
      <dl>
      <dt> SIDES</dt>
      <dd>
         <li>GRILLED ASPARAGUS | 9</li> 
         Lemon butter / herb oil / parmesan cheese
      </dd>
      <dd>
         <li>CREOLE OKRA | 10</li>
         Agrodolce onion / dehydrated tomatoes
      </dd>
      <dd>
         <li>BRUSSELS SPROUTS | 11</li>
         Lardons / pickled peppers / green onion / Thai chil
      </dd>
      <dd>
         <li>CAULIFLOWER AU GRATIN | 9</li>
         Sauce mornay / parmesan
      </dd>
      
      <dt> Luncheon Specials </dt>
      <dd>
         <li>Shrimp pat | 13.99</li>
         Lemon butter / herb oil / shrimp / rice /
         / green bean / Green onion / corn
      </dd>
      <dd>
         <li>Crawfish | 12.88/lb</li>
         Crawfish / Agrodolce onion / dehydrated tomatoes
      </dd>
      <dd>
         <li>Gumbo | 11</li>
         Lardons / ham / pickled peppers
         / green onion / rice
      </dd>
      <dd>
         <li>Fried Cumbo | 9</li>
         Fried shrimp / Fried crab / Fried Chicken
         / sweet corn / fries
      </dd>
      
     <dt> SALADS</dt>
      <dd>
         <li>SEAFOOD SALAD* 22  </li>
         <li>GRILLED SEAFOOD SALAD* 23</li>
         <li>SHRIMP SALAD* 16  </li>
         <li>GRILLED CHINCHEN SALAD* 23</li>
      </dd>
      
      <dt> CAJUN PASTAS</dt>
      <dd>
         CRAWFISH, SHRIMP, CHICKEN, OR SEAFOOD(SHRIMP, CRAWFISH, AND CRAD) *26
      </dd>
      
      <dt> SEAFOOD SPECIALTIES</dt>
      <dd>
         <li>FRIED SHRIMP* 21   </li>
         <li>FRIED OYSTERS(8) * 23</li>
         <li>FRIED CATFISH* 23</li>
         <li>STUFFED SHRIMP* 23</li> 
         <li>SIDES</li>
         Salad - Potato Salad - Baked Potato - Baked Sweet Potato - French Fries
         Green Beans - Grilled Asparagus - Cream Corn - Fried Onion Rings
         Stuffed Potato 2 - Sweet Potato Casserole 2
      </dd>
      <dt> DESSERTS</dt>
      <dd>
         <li>BREAD PUDDING* 8</li>
         <li>PECAN PIE* 8  </li>
         <li>CHEESECAKE* 8</li>
      </dd>
      </dl>
</div>
    </article>
   
</div>

<div class="footer">
 <strong>  LA PLAQUE </strong>    &#9743  4205 Ryan St, Lake Charles   &nbsp 70605  &#9743 337-555-2188 <i class="fa-brands fa-facebook"></i> 
    </div> 

</body>
</html>