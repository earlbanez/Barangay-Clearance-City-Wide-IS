<?php 
include('cedula.php');
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
	<form action="cedula.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>Cedula Number</label></br>
			<input type="text" name="cedula_number" placeholder="Cedula Number" class="form-control" value="<?php echo $cedula_number;?>" required>
		</div>
		
		<div class="form-group">
			<br><label>Date</label></br>
			<input type="date" name="date" placeholder="Date" class="form-control" value="<?php echo $date;?>" required>
		</div>
		<div class="form-group">
			<br><label>Amount</label></br>
			<input type="text" name="amount" placeholder="Amount" class="form-control" value="<?php echo $amount;?>" required>
		</div>
		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">SAVE</button>
		<button type="button" onclick="location.href='cedula_index.php'">CANCEL</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='cedula_index.php'">CANCEL</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>
<br>

</body>
</html>