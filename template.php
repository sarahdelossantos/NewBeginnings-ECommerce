<!DOCTYPE html>
<html>
<head>
	<title>TEMPLATE</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<link href="bootstrap.css" rel="stylesheet" type="text/css">

	<link href="style_template.css" rel="stylesheet" type="text/css">
		<link href="menu2_style2.css" rel="stylesheet" type="text/css">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

	<style>

	  .affix {
      top: 0;
      width: 100%;
     /*  background-color: black;
       color:white;*/
        box-shadow: 0px 1px 10px black;
       z-index:1;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }



	#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: transparent;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;

}




	</style>


	<script>
$(document).ready(function(){
  
	$("#dialog_signupOk").hide();

	$("#dialog_signupNot").hide();
	$("#dialog_signupNotuser").hide();

   $("#dialog-confirm1").hide();
	
	function display_message(){

			alert($_SESSION['message']);
		};


	function signup_alert(){
		alert("registration successful. please login");
	};


ok();



});

function ok(){


 $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });




 };
	

	function signup_ok(){
      $( function() {
    $( "#dialog_signupOk" ).dialog();
  } );
  
};

function signup_not(){
      $( function() {
    $( "#dialog_signupNot").dialog();
  } );
};

function signup_notuser(){
      $( function() {
    $( "#dialog_signupNotuser").dialog();
  } );
};





  function run(){
            alert("hello world");
        };
        




  </script>



</head>

<?php
	
	// $content = '';
?>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid container-fluid1 body-wrapper">
		<!-- //banner -->
		<div class="container-fluid container-fluid1 col-md-12">
			<div class="row row1 myBanner">
				<div class="col-md-12 row row1">
					<div class="col-md-12 half leftBanner text-center">
						<div class="text_newB text">
							<hr class="style-two">
							New Beginnings
						</div>
						<div class="text_ts text">
							THRIFT SHOP
							<hr class="style-two">
						</div>
					</div><!--    <div class="col-md-8 head  rightBanner text-center">

                    left
                        
                    </div>
 -->
				</div>
			</div>
			<div>
				<!-- //nav -->
				<div class="container-fluid container-fluid1 ">
					<div class="row row1 myNav">
						<nav class="navbar navbar-default navbar" data-spy="affix" data-offset-top="197">
							<div class="container-fluid container-fluid1 ">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div id="navmargin">
								<div class="navbar-header">
									<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#">NEW BEGINNINGS</a>
								</div><!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav ">
										<li class="<?php echo $home_active; ?>">
											<a href="menu2.php">Home <span class="sr-only">(current)</span></a>
										</li>


										<li class="$contact_active">
											<!-- <a href="#">Contact</a> -->

										</li>
										</ul>
									<ul class="nav navbar-nav navbar-right">
										<li>

								
											
										

<?php 					
if (isset($_SESSION['username'])){

		if($_SESSION['role']=='0'){

			echo" <li class=".$cart_active."><a href='mycart.php' class=''>Cart</a></li>";
			echo "<li><a href='#' class =''>".$_SESSION['username']."</a></li>";
		}

		if($_SESSION['role']=='1'){
			echo "<li><a href='admin-page.php' class =''>Manage Page</a> </li>";
			echo "<li><a href='#' class =''>".$_SESSION['username']."</a></li>";
		}



	echo "<li><a href='logout.php' id='logout'>Log out</a></li>";

?>
				 										<!-- <a href="#" i>Log In</a> -->
 



<?php 
		} else {

				$_SESSION['message'] ="";
				?>


<li class="dropdown">
          <a href="#" class="dropdown-toggle right" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12 " id = 'login_form'>
								 <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2"></label>
											 <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Username" name = 'username' required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2"></label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name = 'password' required>
                                             <div class="help-block text-right"><a href=""><?php echo $_SESSION['message']?></a></div>
										</div>
										<div class="form-group">
											 <button type="submit" name= "Signin_btn" class="btn btn-primary btn-block">Sign in</button>
								
										<div>

											

					
						</div>		
								 </form>
							</div>
						<!-- 	<div class="bottom text-center">
								New here ? <a href="#" id='joinus'><b>Join Us</b></a>




							</div> -->


				
					 </div>
				</li>
			</ul>
        </li>


<li class="dropdown">
          <a href="#" class="dropdown-toggle right" data-toggle="dropdown"><b>Signup</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12 " id = 'login_form'>


								 <form class="form" role="form" method='POST' action='signup.php' accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2"></label>
											 <input type="text" class="form-control" id="username_su" placeholder="Username"  name="username_su" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2"></label>
											 <input type="password" class="form-control" id="password_su" placeholder="Password"  name="password_su" required>
                                            
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2"></label>
											 <input type="password" class="form-control" id="password2_su" placeholder="Retype Password" name="password2_su" required>
                                           
										</div>

											
						

						<!-- 	<div class="bottom text-center">
								New here ? <a href="#" id='joinus'><b>Join Us</b></a>




							</div> -->
						

							 <div class="form-group">
											 <button type="submit" id='signup_btn1' class="btn btn-primary btn-block">Sign up</button>
								 </form>
							</div>


				
					 </div>
				</li>
			</ul>
        </li>





			
        <?php 
}
        if(isset($_POST['Signin_btn']))
        {
        	 // header('location: login.php');

   				 display_message();
   				 signup_alert();

        }

        if (isset($_SESSION['signup_msg'])){

        	if ($_SESSION['signup_msg'] == 0){
				$content.= '<script type="text/javascript">    signup_not();      </script>';
				 unset($_SESSION['signup_msg']);
			}
        	elseif ($_SESSION['signup_msg'] == 2){
        		$content.= '<script type="text/javascript">    signup_notuser();      </script>';
        		 unset($_SESSION['signup_msg']);
			}
			elseif($_SESSION['signup_msg'] == 1){
				 $content.= '<script type="text/javascript">    signup_ok();      </script>';	
				 unset($_SESSION['signup_msg']);
			}
			
		

		
		}else{

			}
		

		






     



         ?>



											<div id="panel">Hello world!</div>
										</li>

									</ul>
								</div><!-- /.navbar-collapse -->
								</div>
							</div><!-- /.container-fluid container-fluid1 -->
						</nav>
					</div>



					<div>
						<!-- //sidebar left -->
						<div class="container-fluid container-fluid1 body_content">
							<div class="row row1">
								
								<div class="col-md-12 row row1 contentarea" >
								<!-- <div class="col-md-12 row row1 contentarea" style='height:1000px;'> -->
							

								<?php 
// if (isset($_SESSION['signup_msg'])){
// 								echo $_SESSION['signup_msg'];}


								echo $content; 

								?> 

								


								</div>
						</div>
					</div>
				</div>
		</div>
	</div>


</div>


 
<div id="dialog_signupOk" title="Registration Successful">
  <p>You can now log in.</p>
</div>

<div id="dialog_signupNot" title="Error">
  <p>Check username or password</p>
</div>


<div id="dialog_signupNotuser" title="Error">
  <p>Username Taken. Choose another username.</p>
</div>






<?php 	
unset($_SESSION['signup_msg']);
include_once('footer.php'); ?>


</body>
</html>