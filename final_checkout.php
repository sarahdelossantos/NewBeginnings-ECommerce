<?php

session_start();
include_once 'connection.php';

echo "FINAL CHECKOUT <br>";





foreach($_SESSION as $key => $value){
	if(substr($key,0,4)=='cart'){
		$itemID[] = substr($key,5);
		$itemQuantity[] = $value;
		

	}


}





for($x=0;$x<count($itemID);$x++){
	$id = $itemID[$x];
	echo $id;
	

	// $itemQuantity[$x] qty to buy


	$sql = "SELECT * FROM items WHERE id='$id'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		
		$quantity = $row['quantity'];
		$id = $row['id'];
		$sold = $row['sold_items'];


		echo $quantity."-".$itemQuantity[$x]."=";

		$updated_qty = $quantity -$itemQuantity[$x];
		echo $updated_qty;

		echo "<br>";

		$sql1="UPDATE items SET quantity='$updated_qty' , sold_items= sold_items + $itemQuantity[$x] WHERE id='$id'";
		$result1 = mysqli_query($conn,$sql1);
		
		

	}

		unset($_SESSION["cart_$id"]);
}		
	
	header('Location: mycart.php');

?>
