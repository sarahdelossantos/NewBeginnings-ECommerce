<?php

session_start();
include_once 'connection.php';
 echo "EDIT";
// $_SESSION['allow_edit'] = true;

// $cart= $_SESSION['cart'];

$itemID = $_GET['id'];
$itemQTY = $_GET['qty'];
// $itemQTY= $_POST['qty'];
echo "<br>";	

echo "ID: ".$itemID;
echo " QTY: ".$itemQTY;
echo "<br>";

//set the new quantity 
$_SESSION["cart_$itemID"]= $itemQTY;
header('Location: ' . $_SERVER['HTTP_REFERER']);


?>


