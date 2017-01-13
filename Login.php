<?php
	$message = "";
	
	session_start();
	$_SESSION['logged_in']= '';
	$_SESSION['login_msg']='0';


	if(isset($_SESSION['message'])){
		$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

	if(!empty($_SESSION['username'])){

		header('location:menu2.php');
	}
	

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Connect to Database
		require_once('connection.php');
		$conn = mysqli_connect($host, $username, $password, $dbname);

		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		// echo $password;
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn,$sql);


		if($result){
			while($row = mysqli_fetch_assoc($result)){
				$_SESSION['logged_in']= 'true';
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $row['role'];
				$_SESSION['login_msg']='1';
				 header('location:menu2.php');
			}

		}

		if(!isset($_SESSION['username'])){

			// $_SESSION['message'] = "Wrong credentials";
			// $_SESSION['login_msg']='2';

		}

		echo $_SESSION['message'];

		header('Location: ' . $_SERVER['HTTP_REFERER']);

	}

?>


<!-- 
<!DOCTYPE html>
<html>
<head> -->
	<!-- title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<?php echo $message; ?>

	<h1> LOGIN </h1>

	<form method='post' action=''>
		<div class="form-group">
		<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
		<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
		<input class="btn btn-success" type="submit" name="login" value="Login"> 
		</div>
	</form>
 -->
<!-- </body>
</html> -->