<?php
	include_once 'connection.php';
	session_start();

	$id = $_GET['id'];

	// echo $id;



	 $sql = "SELECT *  FROM items WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
	

	while($row = mysqli_fetch_assoc($result)){	
			$name= $row['name'];
		$price =$row['price'];

		$itemqty = $row['quantity'];
		$type=$row['type'];
		$desc=$row['description'];
		$url=$row['img_url'];

		// echo $row['name'];
		// echo $row['price'];
		// echo $row['quantity'];
		// echo $row['type'];
		// echo $row['description'];


	}


	




$content='';
$content.=<<<END
		<div class='form_add col-md-12'> 
		<div class='col-md-3'>
		<h2>EDIT </h2>
		<form action='admin_updateitem.php' method='POST'>
			<input type="hidden" name="itemid" value="$id" required>
			item name <input type="text" name="itemname" value="$name" required><br>
			price <input type="number" min=1 name="itemprice" value="$price"  required><br>
			quantity <input type="number" min=1 name="itemquantity"  value ="$itemqty" required><br>
			Type <input type="text" name="radio_type"  value ="$type" required><br>
			Description <textarea rows="4" cols="50" required name='itemdesc'> $desc </textarea><br>
			Image Url<textarea rows="4" cols="50" name= 'itemurl' required> $url</textarea><br>
			<input type='submit' name= 'additem_submitbtn'>
		</form>
			<a href='admin-page.php'><button>Cancel</button></a>
	</div>

	</div>

END;

// echo $c;

include_once 'admin_template.php';
?>