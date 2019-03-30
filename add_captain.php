<?php include('captain.php');?>


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
	<form action="captain.php" method="POST">
	<input type="hidden" name="id" value="">
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

		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<?php else: ?>
			<br><button type="button" class="btn" onclick="location.href='captain_index.php'" "a style=font-family:Bodoni MT">Back</button>
			<button type="submit" class="btn" name="save" "a style=font-family:Bodoni MT">Save</button>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>