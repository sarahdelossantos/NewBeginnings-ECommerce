<?php 
include_once 'connection.php';
session_start();

$id= $_POST['itemid'];
$name= $_POST['itemname'];
$price =$_POST['itemprice'];
$itemqty = $_POST['itemquantity'];
$type=$_POST['radio_type'];
$desc=$_POST['itemdesc'];
$url=$_POST['itemurl'];

// echo $id ;
// echo $name ;
// echo $price;
// echo $itemqty;
// echo $type;
// echo $desc;
// echo $url;


$sql = " UPDATE `items` SET `name`='$name',`type`='$type',
		`price`='$price',`quantity`='$itemqty',`description`='$desc',`img_url`='$url' WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

header('Location:admin-page.php');

?>