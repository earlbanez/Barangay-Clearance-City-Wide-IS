<?php
     include('server.php');       
?>
<!DOCTYPE html>
<head>
<title>Create Account</title>
<style>
body{
	margin: 0;
	padding: 0;
	font-family: Bodoni MT;
	background: #34495e;
}
.box{
	padding: 40px;
	background: #34495e;
	text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
	width: 280px;
	border-color: #2ecc71;
}
.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
.box select[name = "barangay"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}

.box input[type = "submit"]:hover{
	background: #2ecc71;
}
</style>
</head>
<body>

        <form class="box" action="server.php" method="POST">
        <h1>Put your Name</h1>
        <input type="text"  name="first_name" placeholder="First Name" required autofocus>
        <input type="text"  name="middle_name" placeholder="Middle Name">
        <input type="text"  name="last_name" placeholder="Last Name" required autofocus>
        <h1>Create Account</h1>

            <input type="text"  name="username" placeholder="Username" required autofocus>
            <input type="password" name="password2" placeholder="Password" required>
			<input type="password" name="password1" placeholder="Verify Password" required>
			            <h1>Please input other information</h1>


<?php
$db = mysqli_connect('localhost','root','','ClearanceCityWide');
$query = "SELECT * FROM barangay";
$result = mysqli_query($db, $query);
?>
		          
		     <select name="barangay" required>
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

            <input type="text" name="position" placeholder="Position" required>
			<input type="submit" name="submit" value="Create Account" class="button">
        </form>
        
    </div>

</body>
</html>
