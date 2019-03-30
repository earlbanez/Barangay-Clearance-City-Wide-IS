<?php

	$username = "";
	$errors = array();
	$password="";
	
	
	$db = mysqli_connect('localhost', 'root', '', 'ClearanceCityWide');
	
 	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
			
			$query = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
			
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: admin_home.php');
			}else {
				
			 echo "Invalid Username or Password!".$password;
			
		}
	}

  
	
?>