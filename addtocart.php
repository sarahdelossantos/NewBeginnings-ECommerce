<?php

session_start();

$itemID = $_GET['item_id'];
$itemQTY = $_GET['qty'];
if(isset($_SESSION["cart_$itemID"])) 
	{
		$_SESSION["cart_$itemID"]+= $itemQTY;
	}else {
	$_SESSION["cart_$itemID"]=$itemQTY;
}	
// header("location:".$_SERVER['HTTP_REFERER']);
print_r($_SESSION);
echo "<br>" ;
echo "<br>" ;
echo "quantity".$_SESSION["cart_$itemID"];

?>
