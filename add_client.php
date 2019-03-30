<?php include('admin.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>
	<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
 	<nav class="navbar navbar-expand-lg  bg-light" style="margin-top:10px">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
 
			<h2><a style="margin:center; font-family:Bodoni MT">Oroquieta City, Misamis Occidental Philippines</a></h2>
			<h4><a style="margin:center; font-family:Bodoni MT">Barangay Clearance City Wide</a></h4>

	<h1><a style="margin:center; font-family:Bodoni MT">Add a Person</button></a></h1>

	<div class="modal-body" style="margin-left:90px">
	<form action="admin.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			Clearance ID
			<input type="text" name="clearance_id" placeholder="Clearance ID" class="form-control" value="<?php echo $clearance_id;?>" required>
		</div>	
		<div class="form-group">
			OR Number
			<input type="text" name="or_number" placeholder="OR Number" class="form-control" value="<?php echo $or_number;?>" required>
		</div>	
		<div class="form-group">
			Person ID
			<input type="text" name="person_number" placeholder="Person ID" class="form-control" value="<?php echo $person_number;?>" required>
		</div>		
		<div class="form-group">
			First Name
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			Middle Initial
			<input type="text" name="middle_initial" placeholder="Middle Initial" class="form-control" value="<?php echo $middle_initial;?>" required>
		</div>
		<div class="form-group">
			Last Name
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			Address
			<input type="text" name="barangay_id" placeholder="Address" class="form-control" value="<?php echo $barangay_id;?>" required>
		</div>
		<div class="form-group">
			Purpose
			<input type="text" name="purpose" placeholder="Purpose" class="form-control" value="<?php echo $purpose;?>" required>
		</div>	
		<div class="form-group">
			Date
			<input type="date" name="date" placeholder="Date" class="form-control" value="<?php echo $date;?>" required>
		</div>
		<div class="form-group">
			Amount
			<input type="text" name="amount" placeholder="Amount" class="form-control" value="<?php echo $amount;?>" required>
		</div>
		<div class="form-group">
			Cedula ID
			<input type="text" name="cedula_id" placeholder="Cedula ID" class="form-control" value="<?php echo $cedula_id;?>" required>
		</div>
		<div class="form-group">
			Staff ID
			<input type="text" name="id" placeholder="Staff ID" class="form-control" value="<?php echo $id;?>" required>
		</div>
		<div class="form-group">
			Captain ID
			<input type="text" name="captain_id" placeholder="Captain ID" class="form-control" value="<?php echo $captain_id;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" class="btn" onclick="location.href='admin_index.php'">HOME</button>
			<button type="submit" class="btn" name="save">SAVE</button>
		<?php endif;?>
		</div>
	</form>
</nav>
</body>
</html>