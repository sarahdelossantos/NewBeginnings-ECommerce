<?php

	$content='';
	    if (!isset($_SESSION)){
	        session_start();
	    }
	    // require_once('template.php');
	    require_once('connection.php');
	    $conn = mysqli_connect($host, $username, $password, $dbname);

	// <div></div>
	// <div class='container-fluid'>
	// <!-- 	<div class='row'>
	// 		<div class='col-md-2 regusers'>
	// 			registered users     
	// 			        $sql="SELECT COUNT(*) AS reg_users from users";
	// 			        $result = mysqli_query($conn,$sql);
	// 			        if($result){
	// 			            while($row = mysqli_fetch_assoc($result)){
	// 			                $content.= $row['reg_users'];
	// 			            }
	// 			        }
				    
	// 		</div>
	// 		<div class='col-md-4 regusers'>
	// 			items $ quantity<br>
				    

	// 			        $sql = "SELECT type, COUNT(type) count FROM items GROUP BY type";
	// 			        $result = mysqli_query($conn, $sql);
				        
	// 			        while($row = mysqli_fetch_assoc($result)){
	// 			            $content.= $row['type']." ". $row['count']." items <br>";     
	// 			        }

	// 			        $sql = "SELECT COUNT(*) count FROM items";
	// 			        $result = mysqli_query($conn, $sql);
				        
	// 			        while($row = mysqli_fetch_assoc($result)){
	// 			            $content.= $row['count']." (all items) <br>";     
	// 			        }
				     
	// 		</div>
			// <!--    <div class='md-col-4' style='background-color:gray;'># of items available<br>
            
   //          $sql = "SELECT type, COUNT(type) count FROM items GROUP BY type";
   //          $result = mysqli_query($conn, $sql);

   //          while($row = mysqli_fetch_assoc($result)){
            
   //              $content.= "<h2>".$row['type']."<span class='badge'>".$row['count']."items</span></h2>";
   //              $sql2 = "SELECT * FROM items WHERE type='$row[type]'";
   //              $result2 = mysqli_query($conn, $sql2);

   //              while($row2 = mysqli_fetch_assoc($result2)){
   //                  $content.= $row2['name'] . " " ." quantity : ".$row2['quantity']. "<br>";
   //              }
   //          }
         

   //  </div> -->
	// 	</div>
	// 	<br>
	// 	<br>
	// </div>

$content.=<<<END
	<div class=' whole_page'>
		<div class='row '>
		<div class='col-md-3 side fixed'>
			<div class='col-md-12 regusers ' id ='left-sidebar'>
				<!-- registered users -->


			


END;
				     
				        $sql="SELECT COUNT(*) AS reg_users from users";
				        $result = mysqli_query($conn,$sql);
				        if($result){
				            while($row = mysqli_fetch_assoc($result)){
				               $users_count= $row['reg_users'];
				            }
				        }
				     
$content.=<<<END

			<ul class="list-group">
				  <li class="list-group-item">
				    <span class="badge">$users_count</span>
				   Registered Users
				  </li>
				


			
			<!--	items $ quantity<br> -->
				    
END;
				        $sql = "SELECT type, COUNT(type) count FROM items GROUP BY type";
				        $result = mysqli_query($conn, $sql);
				        
				        while($row = mysqli_fetch_assoc($result)){
				            $content.= "<li class='list-group-item'>".$row['type']." <span class='badge'>". $row['count']." items</span></li>";     
				        }

				        $sql = "SELECT COUNT(*) count FROM items";
				        $result = mysqli_query($conn, $sql);
				        
				        while($row = mysqli_fetch_assoc($result)){
				            $content.= "<li class='list-group-item'>ALL ITEMS"." <span class='badge'>". $row['count']." items </span></li>";     
				        }
				 
$content.=<<<END

				</ul>

				<div aria-label="..." class="btn-group-vertical" role="group">
				<a href='admin_add.php'><button class="btn btn-default" id='additem_btn' type="button">Add item</button></a>
			</div>
			</div>


	</div>
		<div class='col-md-3'></div>
		<div class='col-md-8'>
			<div class="container-fluid">
				<h2>Items</h2>
				<p></p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Delete</th>
							<th>Edit</th>
							<th>Type</th>
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Sold</th>
						</tr>
					</thead>
					<tbody>

END;
						  
						                    $sql = "SELECT *  FROM items";
						                    $result = mysqli_query($conn, $sql);
						                    while($row = mysqli_fetch_assoc($result)){  
						                        $font_color = 'black';

						                        $id = $row['id'];

						                        if (($row['quantity']) =='0') {
						                            $font_color = 'red';


						                            }   

						                        $content.= "<tr style='color:$font_color;'>
						                                <td ><a class='x' id=$id >X</a></td>
						                                <td><a href='admin_update.php?id=".$id."'>edit</a></td>
						                                

						                                <td>".$row['type']."</td>
						                                <td>".$row['name']."</td>
						                                <td>".$row['price']."</td>
						                                <td>".$row['quantity']."</td>
						                                 <td>".$row['sold_items']."</td>
						                                </tr>";
						                    }
						                




						            
$content.=<<<END
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div id="dialog-confirm" title="Delete this item">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These item will be permanently deleted and cannot be recovered. Are you sure?</p>
	</div>

	</div>
END;




 include_once 'admin_template.php'; ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>
	<link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<link href="/resources/demos/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js">
	</script> 
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
	</script> 
	<script type="text/javascript">
	   
	   $(document).ready(function(){


	       $("#dialog-confirm").hide();

	       $('.form_add').hide();
	       
	       $('#additem_btn').click(function(){ 
	           $(".form_add").toggle();
	             
	               
	           //  $sql = "INSERT INTO items(name, type,price,quantity,description,img_url)
	           //          VALUES ()";
	               // $result = mysqli_query($conn, $sql);

	            
	   });
	           
	   $(".x").click(function(){
	 var a=  $(this).attr('id');

	   $('#dialog-confirm').dialog({
	     resizable: false,
	     height: "auto",
	     width: 400,
	     modal: true,
	     buttons: {
	       "Delete item": function() {
	               $.ajax({
	           url: "admin_delete.php",
	           type: 'GET',
	           data: { id:a } ,
	           success: function(result){
	               alert("successfully delete");
	           }
	       });


	         $( this ).dialog( "close" );
	       },
	       Cancel: function() {
	         $( this ).dialog( "close" );
	       }
	     }
	 })

	   });
});
	</script>

