<?php 
include('captain.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>

 

<div id="main">
			
<br>
	<center><b><h2><p style="margin-top:40px; margin-left:680px; font-family:Copperplate Gothic Bold">Change it properly</p></b></h2></center>

	<div class="container" style="margin-left:990px">
	<form action="captain.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>Captain ID</label></br>
			<input type="text" name="captain_id" placeholder="ID Number" class="form-control" value="<?php echo $captain_id;?>" required>
		</div>
		
		<div class="form-group">
			<br><label>First Name</label></br>
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Middle Name</label></br>
			<input type="text" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $middle_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Last Name</label></br>
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>

		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">SAVE</button>
		<button type="button" onclick="location.href='captain_index.php'">CANCEL</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='captain_index.php'">CANCEL</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>
<br>

</body>
</html>