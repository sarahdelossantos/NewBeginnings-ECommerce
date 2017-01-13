<?php
session_start();
include_once 'connection.php';
$content='';
$content.= "<h2>CHECKOUT</h2><br>";
$avail_cnt=0;
$total=0;


foreach($_SESSION as $key => $value){
	if(substr($key,0,4)=='cart'){
		$itemID[] = substr($key,5);
		$itemQuantity[] = $value;
	}
}

if (!isset($itemID)){

}else{


for($x=0;$x<count($itemID);$x++){
	$id = $itemID[$x];
	$sql = "SELECT * FROM items WHERE id='$id'";
	$result = mysqli_query($conn,$sql);

	// $content.= "<div>";
	while($row = mysqli_fetch_assoc($result)){
		
		$quantity = $row['quantity'];
		$id = $row['id'];


		if ($quantity >=$itemQuantity[$x]) {
			

			// $content.= "itemqty > stock<br>";
			
		}else {
			$avail_cnt = $avail_cnt + 1;
			// $content.= "X<br>";
		}

$content.=<<<END

END;

		 // $content.= $avail_cnt;
		// $content = "<div class='col-md-4' >";
			// $content.= "<br>";
		$content.= "product name: ".$row['name']." id: ".$row['id'] ;
				$content.= "<br>";
		// $content.= "<br> Quantity: ".$itemQuantity[$x];
		if ($row['quantity'] < $itemQuantity[$x]){
		$content.=	"<span style='color:red;'>Stock: ".$row['quantity']."</span>";
		}else{
		 $content.= "stock: ". $row['quantity'];
		}



	
		$content.= "<br>";
		$content.= "Price: P". $row['price'].".00/pc";
		 // $content.= "<a href='edit.php?id=".$row['id']."&"."qty=".$itemQuantity[$x]."'><button>Edit</button></a>";
		$content.= "<br>";
		$subtotal = $itemQuantity[$x] * $row['price'];
		$content.= $itemQuantity[$x]."pc/s x ".$row['price']." = <strong>P".$subtotal.".00</strong>";
		$content.= "<br>";
		$content.= "<br>";
		$total += $subtotal;
		 
		// $content.= "<a href='edit.php?id=".$row['id']."&"."qty=".$itemQuantity[$x]."'><button>Edit</button></a>";
	
	
		}
}		
}
	$btn_disable = 'disabled';
	$color='gray';
	// $content.= $avail_cnt;

	if ($avail_cnt == 0){ 
	 		$btn_disable = '';
	 		 $color='';

	 	// 	$content.= $avail_cnt;	
	 }

	$content .= "<h3 class='text-right'>TOTAL: P".$total.".00</h3>";
	$content.= "<a href='final_checkout.php' ><button style='background-color: $color;' $btn_disable name='final_checkout'>Ok</button></a>";
	$content.= "<a href='mycart.php' ><button name='final_checkout'>Manage cart	</button></a>";
	
	 // if(isset('final_checkout')){

	 // 	$content.= "pressed";
	 // }

	$cart_active='active';
	$contact_active=' ';
	$home_active=' ';


if (!isset($_SESSION['username'])){
	$content = '<h2>Please Log in</h2>';
}

	include_once 'template.php';
	 
?>