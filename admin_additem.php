


<?php
	include_once 'connection.php';
	session_start();




	if( $_POST['radio_type'] == 'Other'){
		$_POST['radio_type'] = $_POST['addcat'];
	}

		$name= $_POST['itemname'];
		$price =$_POST['itemprice'];

		$itemqty = $_POST['itemquantity'];
		$type=$_POST['radio_type'];
		$desc=$_POST['itemdesc'];
		$url=$_POST['itemurl'];


		
		$sql = "INSERT INTO items (name,price,quantity,type,description,img_url) 
				VALUES('$name','$price','$itemqty','$type','$desc','$url')";
					$result = mysqli_query($conn, $sql);

		echo $name;
		echo "<Br>";
		echo $price;
			echo "<Br>";
		echo $itemqty;
			echo "<Br>";
		echo $type;
			echo "<Br>";
		echo $desc;
			echo "<Br>";
		echo $url;
	



header('Location: ' . $_SERVER['HTTP_REFERER']);


?>

