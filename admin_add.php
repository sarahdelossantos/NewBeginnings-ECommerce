

	<?php 
	if (!isset($_SESSION)){
		session_start();
	}
	// require_once('template.php');
	require_once('connection.php');
$content = '';	

$content.=<<<END
	<div class='row'>
	<div class ='col-md-12'>
	<div class ='col-md-5 col-sm-12	 col-xs-12 addfrom'>
	<div class='form_add'> 
		<h2>ADD ITEMS</h2>
		<form action='admin_additem.php' method='POST'>
			item name <input type="text" name="itemname" required><br>
			price <input type="number" min=1 name="itemprice"  required><br>
			quantity <input type="number" min=1 name="itemquantity"  required><br>
END;
	
				$sql = "SELECT DISTINCT type  FROM items";
				$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_assoc($result)){	
					$type=$row['type'];
					$content.= "<input type='radio' name='radio_type' class='radios' value='".$type."'' > ".$type."<br>";
				}

				$content.= "<input type='radio' name='radio_type' id = 'Other' value='Other' class='radios' checked>OTHER 
							<input type='text' name='addcat' id='addcat' ><br>";
						
		
			 
$content.=<<<END
		

			Description <textarea rows="4" cols="50" required name='itemdesc'> </textarea><br>
			Image Url<textarea rows="4" cols="50" name= 'itemurl' required> </textarea><br>
			<input type='submit' name= 'additem_submitbtn'>
		</form>
		<!--<a href='admin_add.php'><button>add another</button></a> -->
	</div>
	</div>
	</div>
	</div>

	
<!--  <a href='admin-page.php'><button>back to admin page</button></a> -->
	

END;

 include_once 'admin_template.php';?>


<!-- 	<link rel="stylesheet" href="admin_page.css"></link> -->

<script type="text/javascript">

$(document).ready(function(){

   // jQuery methods go here...
    $('#addcat').hide();   
});


$( ".radios" ).click(function() {
 	if($(this).attr('id') == 'Other') {
            $('#addcat').show();           
       }

       else {
            $('#addcat').hide();   
       }
});


</script>


