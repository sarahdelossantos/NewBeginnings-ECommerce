

<?php 
	session_start();

	echo "CART<br>";

	$itemID = $_GET['item_id'];
	$itemQTY = $_GET['qty'];

	echo "Adding item ". $itemID . " qty: ". $itemQTY. "<br>";

	$cart = array();
		
	$item_in_cart = array();
	$item_in_cart['id'] = $itemID;
	$item_in_cart['qty'] = $itemQTY;

	$cart["cart_$itemID"] = $item_in_cart;

if(isset($_SESSION['cart'])){
	$old_cart = $_SESSION['cart'];				//get the old/existing cart


	

	//check if item already exists in old cart
	if(isset($old_cart["cart_$itemID"])){
		$old_item = $old_cart["cart_$itemID"];		


		include('connection.php');


		$new_qty = $old_item['qty'] + $quantity;
		$sql = "SELECT qty FROM items WHERE id='$itemID'";		//get qty in stock
		$result = mysqli_query($conn,$sql);
		//get results from db
		while($row = mysqli_fetch_assoc($result)){
			echo " Quantity in stock: ".$row['quantity']."<br>";

			//if qty in stock >= new_qty in cart; allow
			if($row['quantity'] >= $new_qty){
				$old_item['qty'] = $old_item['qty'] + $quantity;
					//update qty
			}else{
				echo 'Too much na';
			}
		}






		$old_cart["cart_$itemID"] = $old_item;			//update old item in cart

		print_r($old_cart);
	}else{
		$old_cart["cart_$itemID"] = $item_in_cart;	//add item in old cart
	}

	$_SESSION['cart'] = $old_cart;				//save updated old cart in session
}else{
	$_SESSION['cart'] = $cart;			//no cart at the beginning
}

echo 'Sesson saved<br>';

header("location:".$_SERVER['HTTP_REFERER']);


?>
