<?php 

include('person.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light">
		    <ul class="navbar-nav mr-auto">
		     
	
	

		 

			
	<?php require_once 'person.php';?>
	
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
		
		$result = $mysqli->query("SELECT person.person_number, person.first_name as persons, person.last_name as person, person.middle_initial, person.status, person.birthday, staff.staff_id, staff.first_name, staff.middle_name, staff.last_name as staff, barangay.barangay_id, barangay.barangay_name as barangay
FROM person, barangay, staff
WHERE person.staff_id = staff.staff_id AND staff.barangay_id = barangay.barangay_id AND person.staff_id =".$_SESSION['staff_id']) or die($mysqli->error);

		
		?>
		
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>
							  <li class="nav-item active">
		        <a class="nav-link fa fa-home" href="home.php" style="font-size:20px">HOME<span class="sr-only">(current)</span></a>
		      </li>
		</nav>	

				<table class="table" id="table-data">
			<h1><a style="margin:center; font-family:Bodoni MT">List of Client</a></h1>
				<tr>		
		        <th scope="col"><a style="margin:center; font-family:Bodoni MT">Person ID</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Person Name</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Status</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Birthday</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Staff</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Barangay</th></a>
				<th scope="col"><a style="margin:center; font-family:Bodoni MT">Action</th></a>
				</tr>
				<?php
					while($row=$result->fetch_assoc()):?>

						<tr>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['person_number']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['persons']?> <?php echo $row['middle_initial']?> <?php echo $row['person']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['status']?></td>
							<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['birthday']?></td>
							<td><a style="margin:center; font-family:Bodoni MT">
								<?php echo $row['first_name']?> <?php echo $row['middle_name']?> <?php echo $row['staff']?></td>
								<td><a style="margin:center; font-family:Bodoni MT"><?php echo $row['barangay']?></td>
							<td>
								
								<a href="edit.php?edit=<?php echo $row['person_number'];?>"
									 class="btn btn-secondary" "a style=font-family:Bodoni MT">Edit</a>
								<a href="person.php?delete=<?php echo $row['person_number'];?>" onclick="return confirm('Are you sure do you want to delete?'); "
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