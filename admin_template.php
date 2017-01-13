<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="admin_page.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>
<body >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">New Beginnigs</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="menu2.php">Home</a></li>
      <li class="active"><a href="admin-page.php">Admin Page</a></li>
     <!--  <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> -->
       <!-- <li class='pull-right'><a href="logout.php">Log out</a></li> -->
    </ul>

    <ul class="nav navbar-nav pull-right">
 
       <li><a href="logout.php">Log out</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

  </div>
</nav>



<div class="container">

<!--   <h3>Navbar Forms</h3>
  <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
 -->
<?php
 if (isset($_SESSION['username'])){

    if($_SESSION['role']=='1'){
      // echo "<li><a href='admin-page.php' class =''>Manage Page</a> </li>";
      // echo "<li><a href='#' class =''>".$_SESSION['username']."</a></li>";
       
       }
}else{

  $content="<h2><br><br><bR>Please log in as Admin</h2>";
}

  echo $content;

?>

  <div>

  </div>

</div>

</body>
</html>

