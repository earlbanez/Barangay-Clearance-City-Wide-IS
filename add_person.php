<?php include('person.php');
$staff = $_SESSION['staff_id'];

?>
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
	<form action="person.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<div class="form-group">
			First Name
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			Last Name
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			Middle Initial
			<input type="text" name="middle_initial" placeholder="Middle Initial" class="form-control" value="<?php echo $middle_initial;?>" required>
		</div>
		  <p>
             <select name="status">
               <option value = "Single">Status</option>
               <option value = "Single">Single</option>
               <option value = "Married">Married</option>
               <option value = "Widowed">Widowed</option>
               <option value = "Complicated">Complicated</option>
             </select>
          </p>
		  
		<div class="form-group">
			Birthday
			<input type="date" name="birthday" placeholder="Birthday" class="form-control" value="<?php echo $birthday;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" class="btn" onclick="location.href='index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
		<?php endif;?>
		</div>
	</form>
	</div>
</nav>
</body>
</html>