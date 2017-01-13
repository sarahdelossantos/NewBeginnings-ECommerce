<?php 

	session_start();
	session_unset();
	session_destroy();

	$goto = $_SERVER['HTTP_REFERER'];
	
	header("location: menu2.php");


?>