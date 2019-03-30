<?php
	
$host = '';
$db ='';

	$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));
$staff_id ="";
$update = false;
$first_name="";
$middle_name="";
$last_name="";
$username="";
$password2="";
$position = "";
$barangay_id="";

if(isset($_POST['save'])){
	$password = md5($password);
	$staff_id = $_POST['staff_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password2 = $_POST['password2'];
	$position = $_POST['position'];
	$barangay_id = $_POST['barangay_id'];
}

if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM staff WHERE staff_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:staff_index.php");
	
	
}

if(isset($_GET['edit'])){
	$password2 = md5($password2);
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM staff WHERE staff_id=$id") or die($mysqli->error());
	if(@count($result)==1){
		$row=$result->fetch_array();
		$staff_id = $row['staff_id'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$last_name = $row['last_name'];
		$username = $row['username'];
		$password2 = $row['password2'];
		$position = $row['position'];
		$barangay_id = $row['barangay_id'];
		
	}
}
if(isset($_POST['update'])){
	$password2 = md5($password2);
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password2 = $_POST['password2'];
	$position = $_POST['position'];
	$barangay_id = $_POST['barangay'];
	
	$mysqli->query("UPDATE staff SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name', username='$username',password2='$password2',position='$position',barangay_id='$barangay_id'WHERE staff_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:staff_index.php');
}

  
	
?>