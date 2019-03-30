<?php include('clearance.php');
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

<h1><a style="margin:center; font-family:Bodoni MT">Add New</button></a></h1>

	<div class="container" style="margin-left:90px">
	<form action="clearance.php" method="POST">
	<input type="hidden" name="id" value="">
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
		            <br>
<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT captain_id, first_name, middle_name, last_name, barangay.barangay_id, barangay.barangay_name as barangay FROM barangay, captain WHERE captain.barangay_id = barangay.barangay_id";
$result = mysqli_query($db, $query);
?>
		          
		     <br><select name="captain" required>
		            	<option value="">Choose captain and his/her barangay</option>
		            	<?php 
		            	if(mysqli_num_rows($result)){
		            		while($row = mysqli_fetch_array($result)){
		            			?>
		            <option value="<?php echo $row['captain_id'];?>"><?php echo $row['first_name'];?> <?php echo $row['middle_name'];?> <?php echo $row['last_name'];?> from <?php echo $row['barangay'];?>
		            </option>

		            <?php } 
		        }
		        ?>
		            </select>
		<div class="form-group">
			<br><label>Purpose</label></br>
			<input type="text" name="purpose" placeholder="Purpose" class="form-control" value="<?php echo $purpose;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" class="btn" onclick="location.href='clearance_index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>