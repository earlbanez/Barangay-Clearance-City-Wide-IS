<?php 
include('clearance.php');
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
	<form action="clearance.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT * FROM person";
$result = mysqli_query($db, $query);

?>
		          
		     <br><select name="person" required>
		            	<option value="">Person</option>
		            	<?php 
		            	if(mysqli_num_rows($result)){
		            		while($row = mysqli_fetch_array($result)){
		            			?>
		            <option value="<?php echo $row['person_number'];?>"><?php echo $row['first_name'];?>
		            <?php echo $row['middle_initial'];?> <?php echo $row['last_name'];?>
		            </option>

		            <?php } 
		        }
		        ?>
		            </select>
		<div class="form-group">
			<br><label>Date</label></br>
			<input type="date" name="date" placeholder="Date" class="form-control" value="<?php echo $date;?>" required>
		</div>
		<div class="form-group">
			<br><label>Amount</label></br>
			<input type="text" name="amount" placeholder="Amount" class="form-control" value="<?php echo $amount;?>" required>
		</div>
<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT * FROM cedula";
$result = mysqli_query($db, $query);

?>
		          
		     <br><select name="cedula" required>
		            	<option value="">Cedula</option>
		            	<?php 
		            	if(mysqli_num_rows($result)){
		            		while($row = mysqli_fetch_array($result)){
		            			?>
		            <option value="<?php echo $row['cedula_number'];?>"><?php echo $row['cedula_number'];?>
		            </option>

		            <?php } 
		        }
		        ?>
		            </select>
<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT * FROM captain";
$result = mysqli_query($db, $query);

?>
		          
		     <br><select name="captain" required>
		            	<option value="<?php echo $captain_id?>">Captain</option>
		            	<?php 
		            	if(mysqli_num_rows($result)){
		            		while($row = mysqli_fetch_array($result)){
		            			?>
		            <option value="<?php echo $row['captain_id'];?>"><?php echo $row['first_name'];?> <?php echo $row['middle_name'];?> <?php echo $row['last_name'];?>
		            </option>

		            <?php } 
		        }
		        ?>
		            </select>
		<div class="form-group">
			<br><label>Purpose</label></br>
			<input type="text" name="purpose" placeholder="Purpose" class="form-control" value="<?php echo $purpose;?>" required>
		</div>
		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">SAVE</button>
		<button type="button" onclick="location.href='clearance_index.php'">CANCEL</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='clearance_index.php'">CANCEL</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>
<br>

</body>
</html>