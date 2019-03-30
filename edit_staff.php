<?php 
include('staff.php');
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
	<form action="staff.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<br><label>First Name</label></br>
			<input type="text" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Middle Name</label></br>
			<input type="text" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $middle_name;?>">
		</div>
		<div class="form-group">
			<br><label>Last Name</label></br>
			<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name;?>" required>
		</div>
		<div class="form-group">
			<br><label>Username</label></br>
			<input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username;?>" required>
		</div>
		<div class="form-group">
			<br><label>Password</label></br>
			<input type="password" name="password2" placeholder="Password" class="form-control" value="<?php echo $password2;?>" required>
		</div>
		<div class="form-group">
			<br><label>Position</label></br>
			<input type="text" name="position" placeholder="Position" class="form-control" value="<?php echo $position;?>" required>
		</div>
<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT * FROM barangay";
$result = mysqli_query($db, $query);

?>
		          
		     <br><select name="barangay" required>
		            	<option value="">Barangay</option>
		            	<?php 
		            	if(mysqli_num_rows($result)){
		            		while($row = mysqli_fetch_array($result)){
		            			?>
		            <option value="<?php echo $row['barangay_id'];?>"><?php echo $row['barangay_name'];?>
		            </option>

		            <?php } 
		        }
		        ?>
		            </select>
		  <br><br>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">SAVE</button>
		<button type="button" onclick="location.href='staff_index.php'">CANCEL</button>
		<?php else: ?>
		<button type="submit" class="btn" name="save">SAVE</button>
		<button type="button" onclick="location.href='staff_index.php'">CANCEL</button>
		<?php endif;?>
		
</form>
</div>
</div>
</center>
<br>

</body>
</html>