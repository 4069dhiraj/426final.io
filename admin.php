<!--
    Project Assignment
    
    Admin panel for displaying data 
    Team: Beijing to KTM to Beijing
    Author: Suraj Thapa
    Date: 10/15/2022   

    Filename: admin.php
-->
<?php
    include "functions.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(array_key_exists('email', $_SESSION)){
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel | La Plaque</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="view/assets/css/style1.css" rel="stylesheet" />
        <style>
            table {
                width: 100%;
                margin-top: 40px;
                border-collapse: collapse;
                font-size: 18px;
            }

            th,
            td {
                border: 1px solid #343a40;
                padding: 16px;
                text-align: left;
            }

            thead th {
                background-color: #738573;
                color: #fff;
                /* width: 25%; */
            }

            tbody tr:nth-child(even) {
                background-color: #f8f9fa;
            }

            tbody tr:nth-child(odd) {
                background-color: #e9ecef;
            }

        </style>
        <link href="style1.css" rel="stylesheet" />
    </head>
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
        <a href="Order.php">ORDERS</a>
        <a href="contact.php">CONTACT</a>
    </div>
    </div>
   <a href="booking.php" style="float:right">BOOKING</a>
   <?php
            if (isset($_SESSION['email'])){
        ?>
            <a href="./admin.php">Admin Panel</a>
            <a href="./login.php" class="nav-btn">LOGOUT</a>
        <?php
            } else{
        ?>
            <a href="./login.php" class="nav-btn">LOGIN</a>
        <?php
            }
        ?>
</div>
<hr style="margin:0px; border:4px solid rgb(122, 51, 4);">
        <div class="reservations">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>No of guests</th>
                        <th>Phone number</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (count($bookings) > 0){
                        foreach ($bookings as $booking) {?>
                            <tr>
                                <td><?= $booking['id'] ?></td>
                                <td><?= $booking['name']?></td>
                                <td><?= $booking['no_of_guests']?></td>
                                <td><?= $booking['phone_number']?></td>
                                <td style="color:green;"><?= $booking['date']?></td>
                                <td><?= $booking['time']?></td>
                            </tr>
                        <?php } } else {?>
                            <tr><td style="font-style:italic;text-align:center;" colspan=8> Not bookings received yet!!!</td></tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
        </div>
    </body>
</html>

<?php } else{?>
    <h1>Not Authorized</h1>
<?php }?>
