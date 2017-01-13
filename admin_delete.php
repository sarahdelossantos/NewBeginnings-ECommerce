<?php 

include_once 'connection.php';
session_start();
	
$id = $_GET['id'];	

$sql = "DELETE FROM items WHERE id=$id";
		$result = mysqli_query($conn, $sql);


?>