<!--
	Project Assignment
	
	Log out of the system
	Team: Beijing to KTM to Beijing
	Author: Dhiraj Kapali, Xiaoyi Sun
	Date: 11/15/2022   

	Filename: logout.php
-->
<?php 
	session_start();

	session_destroy();
	header("Location: /index.php");
?>
