<?php 
include('cedula.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light">
		    <ul class="navbar-nav mr-auto">
   
		 

<div id="main">
			
	<?php require_once 'cedula.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		
			$result = $mysqli->query("SELECT cedula.cedula_number, cedula.date,cedula.amount, staff.staff_id, staff.first_name, staff.middle_name, staff.last_name as staff, barangay.barangay_id, barangay.barangay_name as barangay
FROM cedula, barangay, staff
WHERE cedula.staff_id = staff.staff_id AND staff.barangay_id = barangay.barangay_id AND cedula.staff_id = staff.staff_id") or die($mysqli->error);

		
		?>
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
			
							  <li class="nav-item active">
		        <a class="nav-link fa fa-home" href="home.php" style="font-size:20px"> HOME<span class="sr-only">(current)</span></a>
		      </li>
			
		</nav>
		
		<table class="table">
			
			<h1><a style="margin:center; font-family:Bodoni MT">List of Cedula</a></h1>
			
				 <tr> 
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Cedula Number</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT"> Date</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT"> Amount</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT">Staff</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Barangay</th></a>
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT"> Action</th></a>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['cedula_number']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['date']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['amount']?></td></a>
							<td><a style="margin:center; font-family:Bodoni MT">
								<?php echo $row['first_name']?> <?php echo $row['middle_name']?> <?php echo $row['staff']?></td>
								<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay']?></td>
							<td>
								
								<a href="edit_cedula.php?edit=<?php echo $row['cedula_number'];?>"
									 class="btn btn-secondary" "a style=font-family:Bodoni MT">Edit</a>
								<a href="cedula.php?delete=<?php echo $row['cedula_number'];?>" onclick="return confirm('Are you sure do you want to delete?'); "
									class="btn btn-danger" "a style=font-family:Bodoni MT">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

</body>
</html>