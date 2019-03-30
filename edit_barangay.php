<?php 
include('barangay.php');
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
	<form action="barangay.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>Barangay ID</label></br>
			<input type="text" name="barangay_id" placeholder="Barangay ID" class="form-control" value="<?php echo $barangay_id;?>" required>
		</div>
		
		<div class="form-group">
			<br><label>Barangay Name</label></br>
			<input type="text" name="barangay_name" placeholder="Barangay Name" class="form-control" value="<?php echo $barangay_name;?>" required>
		</div>
		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">SAVE</button>
		<button type="button" onclick="location.href='barangay_index.php'">CANCEL</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='barangay_index.php'">CANCEL</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>

</body>
</html>