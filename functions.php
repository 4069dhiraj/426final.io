<!--
  Project Assignment
  
  File for connecting view to controller
  Author: Beijing to KTM to Beijing
  Date: 11/15/2022   

  Filename: functions.php
-->
<?php
	include "Config/DBConfig.php";
    include "Controller/controller.php";

    $LPController_obj = new LaPlagueController($db_conn);
    $booking_controller_obj = new BookingController($db_conn);

    $bookings = $booking_controller_obj->ViewBookings();

?>