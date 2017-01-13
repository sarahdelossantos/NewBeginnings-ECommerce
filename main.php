<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>
</head>
<body>

<?php 
	session_start();


	require_once('connection.php');
	$conn = mysqli_connect($host, $username, $password, $dbname);

	// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	// $result = mysqli_query($conn,$sql);


	

	echo "username: ".$_SESSION['username'];
	echo "<br>";
	echo "role: ".$_SESSION['role'] ;
	echo "<br>";
	echo $_SESSION['message'];
?>

<form method='POST' action=''>
	<input type="submit" value="logout" name="logout">
</form>


<?php 

if(isset($_POST['logout'])){

	session_unset();
	session_destroy();
	header('location: login.php');
}
	

	require_once('menu2.php');
		
 ?>



<br>

</body>
</html>