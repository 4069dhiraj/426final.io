<!--
	Project Assignment
	
	Log out of the system
	Author: Beijing to KTM to Beijing
	Date: 11/15/2022   

	Filename: logout.php
-->
<?php 
	session_start();

	session_destroy();
	header("Location: /index.php");
?>