<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connect.php');
		$conn = mysqli_connect($host, $username, $password, $dbname);

		if($_POST['password']==$_POST['pw2']){
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$sql = "INSERT INTO users (username,password,role) VALUES ('$username','$password','regular')";
			$result = mysqli_query($conn,$sql);
			if($result){
				session_start();
				$_SESSION['message'] = "Registration Successful";
				header('location:home.php');
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> REGISTER </h1>

	<form method='post' action=''>
		<div class="form-group">
		<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
		<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
		<input type="password" name="pw2" placeholder="Confirm Password">
		</div>
		<div class="form-group">
		<input class="btn btn-success" type="submit" name="register" value="Register"> 
		</div>
	</form>

</body>
</html>
maxcdn.bootstrapcdn.com
/*! * Bootstrap v3.3.7 (http://getbootstrap.com) * Copyright 2011-2016 Twitter, Inc. * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE) *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-m...
maxcdn.bootstrapcdn.com

login

<?php
	$message = "";
	session_start();
	if(isset($_SESSION['message'])){
		$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include('connect.php');
		$conn = mysqli_connect($host, $username, $password, $dbname);

		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
		$result = mysqli_query($conn,$sql);
		if($result){
			while($row = mysqli_fetch_assoc($result)){
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $row['role'];
				header('location:home.php');
			}
		}
	}

	if(!isset($_SESSION['username'])){
		$sidebar = <<<END
			<form class="form" action='' method='post'>
					<div class="align">
					<p>Existing members,log in here.</p>
					Username:<br>
					<input class = "placeholder" type="" name="username" placeholder="Username"><br>
					Password:<br>
					<input class = "placeholder" type="password" name="password" placeholder="Password"><br><br>
					<div class="click">
						<input class="w3-btn w3-light-blue" type="submit" name='login' value="Login">
						
						<button class="w3-btn w3-light-blue" type="submit" name='signup' value="Signup"><a href='register.php'>
						SignUp</button></a>
					</div>
					</div>
			</form>
END;
	} else {
		$sidebar = "<span id='welcome'>Welcome ".$_SESSION['username']."!</span><br><button type='button'><a href='logout.php'>Logout</a></button>";

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Shop.com</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<link rel="stylesheet" type="text/css" href="template.css">


<div class="container">
	<div class="banner">
		<img src="images/oshop.jpg" width="100%" height="300px">
	</div>
	
	<!-- <div class="navbar navbar-inverse">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="shop2.php">Shop</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
			</ul> -->
		

	<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="shop3.php">Shop</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
</nav>


	<!-- </div> -->

	<div class="contents">

		<div class="row">
			<div class="col-8">
				<?php echo $content; ?>
			</div>

			<div class="login">
				<div class="col-4">
					<?php echo $sidebar; ?>
					<br><br>
					<img src="images/pics2.jpg" width="90%">
					<br><br>
					<img src="images/pics3a.jpg" width="90%">
					<br><br>
					<img src="images/pics4a.jpg" width="90%" height="200px">
				</div>
			</div>
		</div>

	</div>

	<div class="footer">
		<h5>Copyright 2016. All rights reserved.</h5>
	</div>


</div>

<body>

</body>
</html>