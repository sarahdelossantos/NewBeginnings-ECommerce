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

unset($_SESSION["cart_$itemID"]);
// echo$itemQTY;

// $sql = "SELECT * FROM items WHERE id ='$id'";
// $result = mysqli_query($conn, $sql);

// 	while($row = mysqli_fetch_assoc($result)){

// 		if ($qty <= $row['quantity']){
// 			$_SESSION['cart']["cart_$id"]['qty'] = $qty;

// 		}else {
// 			$_SESSION['allow_edit'] = false;
// 		}

// 	}

// if ($_SESSION['allow_edit']){

// 	echo "edited";
// };
header('Location: ' . $_SERVER['HTTP_REFERER']);


?>


