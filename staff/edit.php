<?php 
include('person.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>ClearanceCityWide</title>

</head>
<body>

 

<div id="main">
			
<br>
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Change it properly</p></b></h2></center>

	<div class="container" style="margin-left:990px">
	<form action="person.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>Person ID</label></br>
			<input type="text" name="person_number" placeholder="Person ID" class="form-control" value="<?php echo $person_number;?>" required>
		</div>
		
		<div class="form-group">
			<br><label>First Name</label></br>
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Last Name</label></br>
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Middle Initial</label></br>
			<input type="text" name="middle_initial" placeholder="Middle Initial" class="form-control" value="<?php echo $middle_initial;?>" required>
		</div>
		  <p>
             <br><label>Status</label>
             <br><select name="status">
               <option value = "Single">Single</option>
               <option value = "Married">Married</option>
               <option value = "Widowed">Widowed</option>
               <option value = "Complicated">Complicated</option>
             </select>
          </p>
		<div class="form-group">
			<br><label>Birthday</label></br>
			<input type="date" name="birthday" placeholder="Birthday" class="form-control" value="<?php echo $birthday;?>" required>
		</div>
		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update_person">SAVE</button>
		<button type="button" onclick="location.href='index.php'">HOME</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='index.php'">HOME</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>
<br>

</body>
</html>