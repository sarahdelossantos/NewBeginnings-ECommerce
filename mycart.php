<?php
// session_start();
// include('connection.php');
// $content='';
// $content.= "MY CART";

// if(!isset($_SESSION['cart'])){				//$_SESSION['cart']) is array of whole cart
// // $body_content_str .= 'Shopping ka muna beh!!';
// $cart = array();
// $content.= "sessoin cart not set";
// }else{
// $cart = $_SESSION['cart'];
// $content.= "sessoin cart  set";


// }
// $content.= "<br>";
// // print_r($cart);

// foreach ($cart as $key => $item) {		//$item  is the array per item
// // $content.= "<br>----------------------------------<br>";

// // $content.= "Key: ". $key . " item";
// // print_r($item);
// $id = $item['id'];
// $qty = $item['qty'];
// // $content.= $id ." " .$qty;
// $content.= "<br>";
// // $content.= "DO MySQL Querry for each item here<br>";

// //get other details from db
// $sql = "SELECT * FROM items WHERE id='$id'";
// $result = mysqli_query($conn,$sql);


// //get results from db
// while($row = mysqli_fetch_assoc($result)){

// 	$itemID = $row['id'];
// 	$itemPRICE = $row['price'];
// 	$content.= "<a href='delete.php?id=".$itemID."'><button>Delete</button></a>";

// 	$content.= "id: ".$row['id'];
// 	$content.= "/ name: ".$row['name'];
// 	$content.= "/ stock: ". $row['quantity'];

// 	$content.= "<form method='POST' action='edit.php?id=".$row['id']."'>";
// 	$content.= "<input type='text' name='qty' value='".$qty."'>";
// 	$content.= "<input type='submit' name='edit_qty' value='Edit'>";
// 	$content.= "</form>";
// //$content.= "/ buy: ".$qty;
// //$content.= "<a href='edit.php?id=".$row['id']."&"."qty=$qty"."''><button>Edit</button></a>";
// }

// $subtotal = $qty * $itemPRICE;
// $content.= "/ total: ".$qty."x".$itemPRICE.".00 =".$subtotal; 

// }


// $content.= "<br><a href='checkout.php'><button>Checkout</button></a>";

// // if ($_SESSION['allow_edit']){

// // 			$content.= "edited";
// // 		}else{
// // 			$content.= "cant edit";
// // 		}

// $content.= $content;	

// include_once('template.php');


session_start();
include('connection.php');
// $itemID=array('');
$cart_notnull = '';

$content ='';


// print_r($_SESSION);
foreach($_SESSION as $key => $value){
	

	if(substr($key,0,4)=='cart'){
		$itemID[] = substr($key,5);
		$itemQuantity[] = $value;
		$cart_notnull = true;
	}
}


if ($cart_notnull == true) {

for($x=0;$x<count($itemID);$x++){
	$id = $itemID[$x];
	$sql = "SELECT * FROM items WHERE id='$id'";
	$result = mysqli_query($conn,$sql);


	while($row = mysqli_fetch_assoc($result)){
		
		$quantity = $row['quantity'];
		$id = $row['id'];
		$img_url =$row['img_url'];


$c='';
$c.=<<<END
						
						<div >
							<form action='edit.php' method='GET'>
								<input class='form-control' type='hidden' name='id' value=$id>
								<input class='form-control' type='number' name='qty' min=1 max=$quantity value=$itemQuantity[$x] >
								<input type='submit' value='Edit' ></input>
							 </form>
						</div>	
END;

		
		$content.= "<div class='col-md-4'>";
		$content.= "<img class='items_img img-responsive 'src =$img_url>";
		$content.= $row['name'];
		// $content.= "<br> Quantity: ".$itemQuantity[$x];
		
		$content.= "<br>";
			if ($row['quantity'] < $itemQuantity[$x]){
		$content.=	"<span style='color:red;'>Stocks: ".$row['quantity']."</span>";
		}else{
		 $content.= "Stocks: ". $row['quantity'];
		}

		$content.= "<br>";
		$content.= "Price: P". $row['price'].".00";
		 // $content.= "<a href='edit.php?id=".$row['id']."&"."qty=".$itemQuantity[$x]."'><button>Edit</button></a>";
		$content.= "<br>";
		$subtotal = $itemQuantity[$x] * $row['price'];
		$content.= $itemQuantity[$x]."pc/s x ".$row['price']." = P".$subtotal.".00";
		$content.= $c; // form  for edit
		$content.= "<a href='delete.php?id=".$row['id']."&"."qty=".$itemQuantity[$x]."'><button>Delete</button></a>";
		$content.= "<br>";
		$content.= "<br>";
		$content.= "</div>";


		 
		// $content.= "<a href='edit.php?id=".$row['id']."&"."qty=".$itemQuantity[$x]."'><button>Edit</button></a>";
	
	}
}

$content.= "<a href='checkout.php'><button>Checkout</button></a>";
}else {

	$content.= "<center><h2 style='color:Blue'>No items in cart</h2></center>";
}

	$cart_active='active';
	$contact_active=' ';
	$home_active=' ';

if (!isset($_SESSION['username'])){
	$content = '<h2>Please Log in</h2>';
}


include_once 'template.php';
?>
