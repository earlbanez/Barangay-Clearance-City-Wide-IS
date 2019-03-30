<?php
	
	session_start();
	$username = "";
	$errors = array();
	$password="";
	
	
	$db = mysqli_connect('localhost', 'root', '', 'ClearanceCityWide');
	
 	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
			
			$query = "SELECT * FROM admin_account WHERE username='$username' AND password1='$password1'";
			
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location: admin_home.php');
			}else {
				
			 echo "Invalid Username or Password!".md5($password1);
			
		}
	}

  
	
?>