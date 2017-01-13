
<?php

	include_once 'connection.php';
	session_start();
	$_SESSION['signup_msg']=null;
	$su_username = $_POST['username_su'];
	$su_password =  $_POST['password_su'];
	$su_password2 =  $_POST['password2_su'];




	$sql= "SELECT COUNT(*) as count from users  WHERE username= '$su_username'";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_assoc($result)){
					echo "row:".$row['count'];
					$count = $row['count'];
	}
	
	echo "<BR>";
	echo $su_username;
	echo "<BR>";
	echo "count: ".$count;	

	if ($count==0){
		if ($su_password==$su_password2){
		//insert
				$sec_password=SHA1($su_password);
				$sql = "INSERT INTO users (username,password,role) VALUES ('$su_username','$sec_password','0')";
				$result = mysqli_query($conn, $sql);


				$_SESSION['signup_msg']=1;
				// echo $su_username;
				// echo $su_password;
			}
			else
			{
			$_SESSION['signup_msg']=0;
			}	
	}else{
			$_SESSION['signup_msg']=2;

	}
echo "<BR>";

	echo $_SESSION['signup_msg'];
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
