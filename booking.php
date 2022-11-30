<?php
    include "functions.php";
    if (isset($_POST['add-booking'])) {
        $result = $booking_controller_obj->AddBooking($_POST);
    }
?>

<!DOCTYPE html>
  <!--
    Project Assignment
    
    Starting Page of Pat's of henderson
    Team: Beijing to KTM
    Author: Suraj Thapa
    Date: 10/15/2022   

    Filename: booking.php
   -->
<html>
<head lang="en">

   <meta charset="utf-8" />
   <title>La Plaque</title>
   <link href="book.css" rel="stylesheet" />
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
            <a href="admin.php">ADMIN PANEL</a>
            <a href="logout.php" class="nav-btn">LOGOUT</a>
        <?php
            } else{
        ?>
            <a href="login.php" class="nav-btn">LOGIN</a>
        <?php
            }
        ?>
    </div>
    <hr style="margin:0px; border:4px solid rgb(122, 51, 4);">

 
   <div class="card">
        <?php
            if(isset($result)){
                echo "<p class=\"success\">Your Reservation has been made. Have a nice day</p>";
            }
        ?>
      <h1>Customer Information</h1>

      <form action="#" method="post">
        <div>
            <fieldset id="custName">
                <legend>NAME</legend>
                <label for="nameBox">Name</label>
                <input type="text" name="name" id="nameBox" placeholder="First and Last Name" required />

            </fieldset>
        </div>
        <div>
            <fieldset id="custPhone">
                <legend>PHONE</legend>
                <label for = "phoneBox">Phone</label>
                <input type = "tel" name = "phone" id = "phoneBox" placeholder="(nnn) nnn-nnnn" pattern="^\d{10}$|^(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$" required />
            </fieldset>
        </div>
        <div>
            <fieldset id = "hereInfo">
                <legend>DONE IN</legend>
                <label for="delBox">Number of guests:</label>
                <input type="text" name="no_of_guests"required />
                <label for ="delBox">Reservation date:</label>
                <input type="date" name = "date" />
                <label for ="delBox">Reservation time:</label>
                <input type="time" name = "time" id = "delBox"/>
             </fieldset>
        </div>
            
        <button type="submit" style="margin-top:20px" name="add-booking" >Confirm your reservation</button>
  
      </form>
</div>
     
    </form> 
    <form action="http://www.example.com/redball" method="post">
        <div class="card">
            <fieldset id = "togo">
                <legend>TOGO</legend>
                <label for = "pickupBox"><p>Please click the crawfish for pick up order.</p><a href="Order.php"><div id="div1"><img src="runnin.jpg"></div></a> </label>
             </fieldset>
        </div>
    </form>


<div class="footer">
    <strong>  LA PLAQUE </strong>  &#9743  4205 Ryan St, Lake Charles &nbsp 70605 
        <p>Thank you for using our online ordering form for quick and easy
            orders. Please enter your name and phone number and whether you
            want to place an order for delivery or pickup. Note that required
            values are marked by an asterisk (*). If you
            want to place your order over the phone, call us at
            &#9743<a href="tel:+13865557499">(386) 555-7499</a>.</p>
</div>

</body>
</html>