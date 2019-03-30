<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	<link rel="stylesheet" href="style.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">	
</head>

<body>

	<?php
		if(isset($_SESSION['username'])){
			echo ' ';
		}
		else{
			header('location: home.php');
		}
		
		
	?>

<div class= "middle">
	<div class="menu">
<li class="item" id="client">
	<a href="#client" class="btn"><i class="fa fa-user"></i>Client</a>
	<div class="smenu">
		<a href="index.php">View Client</a>
		<a href="add_person.php">Add new Client</a>
	</div>
</li>
	

<li class="item" id="cedula">
	<a href="#cedula" class="btn"><i class="far fa-envelope"></i>Cedula</a>
	<div class="smenu">
		<a href="cedula_index.php">View list of Cedula</a>
		<a href="add_cedula.php">Add new Cedula</a>
	</div>
</li>		

<li class="item" id="clearance">
	<a href="#clearance" class="btn"><i class="far fa-envelope"></i>Clearance</a>
	<div class="smenu">
		<a href="clearance_index.php">View list of Clearance</a>
		<a href="add_clearance.php">Add new Clearance</a>
	</div>
</li>


<li class="item">
	<a class="btn" href="start.php"><i class="fa fa-sign-out"></i>Logout</a>
</li>
</div>
</div>


</body>
</html>