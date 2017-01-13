<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal message</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function(){
// ok();
   
   // $( "#dialog-message" ).show();


});
// $(".loginbtn").click ( function() {
//     $( "#dialog-message" ).dialog({
//       modal: true,
//       buttons: {
//         Ok: function() {
//           $( this ).dialog( "close" );
//         }
//       }
//     });
//   } );
function okok(){
      $( function() {
    $( "#dialog" ).dialog();
  } );
};

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
	


  function run(){
            alert("hello world");
        };
        




  </script>
</head>
<body>

<div id="dialog" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
 


<!-- <form action='try.php' method='GET'>
  First name:<br>
  <input type="text" name="firstname" value='1'>
  <br>
  Last name:<br>
  <input type="text" name="lastname" value='1'>
  <br><br>
  <input type="button" onclick="ok()" name = 'btn'class='loginbtn'value="Submit">
</form>  -->


<?php 
session_start();
$content='';

$message=true;

if($message==true){
   echo '<script type="text/javascript">    okok();      </script>';


}

?>

<!-- 
	// $content.= '<script type="text/javascript">
		ok();
		</script>';
 -->





<!-- 
<div id="dialog-message" title="Download complete">
  <p>
    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
    Registration Successful. Please Log in
  </p>
  <p>
    Currently using <b>36% of your storage space</b>.
  </p>
</div>
 
<p>Sed vel diam id libero <a href="http://example.com">rutrum convallis</a>. Donec aliquet leo vel magna. Phasellus rhoncus faucibus ante. Etiam bibendum, enim faucibus aliquet rhoncus, arcu felis ultricies neque, sit amet auctor elit eros a lectus.</p> -->
 
<div id='dialog-message'>
<div class='col-md-4'>
<p>
    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
    Registration Successful. Please Log in
  </p>

<form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav ">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2"></label>
                       <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Username" name = 'username' required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2"></label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name = 'password' required>
                                          <div class="help-block text-right"><a href=""><?php $content.= $_SESSION['message']?></a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" name= "Signin_btn" class="btn btn-primary btn-block">Sign in</button>
                
                     </div>   
                     </form>

</div>

</div>          


</div>    




<?php //include_once'template.php';?>

</body>
</html>