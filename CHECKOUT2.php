<?php

session_start();
$allow_checkout= array();
$total = "";
if(!isset($_SESSION['cart'])){
	header("location:".$_SERVER['HTTP_REFERER']);

}else{
	

	include_once 'connection.php';	
	$cart = $_SESSION['cart'];


	print_r($cart);

	foreach($cart as $key=>$item){

		$id = $item['id'];
		$qty= $item['qty'];

		$sql = "SELECT * FROM items WHERE id='$id'";
		$result = mysqli_query($conn,$sql);
		// echo "SQL: $sql <br>";

		//get results from db
		while($row = mysqli_fetch_assoc($result)){
		
			$itemID = $row['id'];
			$itemPRICE = $row['price'];
			echo "<br>";
			echo "id: ".$row['id'];
			echo "/ name: ".$row['name'];
			echo "/ stock: ". $row['quantity'];
		

			if($qty <= $row['quantity']){
	
				$subtotal = $qty * $itemPRICE;
				echo "/ buy: ".$qty;
				echo "/ subtotal: ".$qty."x".$itemPRICE.".00 =".$subtotal.".00"; 
				$total= $total+$subtotal;	


			}else{
				echo "sobra";
				$allow_checkout[$itemID] =0;
				echo $allow_checkout[$itemID];
			}

		}


	

}
}

if(empty($allow_checkout)){ //walang laman = walang zero

	echo "<br>total: ".$total;

	foreach ($cart as $key =>$item) {
			$itemID = $item['id'];
			$qty_cart = $item['qty'];


			$sql = "UPDATE items SET quantity=quantity-$qty_cart WHERE id='$itemID'";
			$result = mysqli_query($conn,$sql);
		}

}


?>