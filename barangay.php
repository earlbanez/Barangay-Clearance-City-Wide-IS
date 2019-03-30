<?php
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));

$barangay_id ="";
$update = false;
$barangay_name="";


if(isset($_POST['save'])){
	$barangay_id = $_POST['barangay_id'];
	$barangay_name = $_POST['barangay_name'];

	

	$mysqli->query("INSERT INTO barangay (barangay_id,barangay_name) VALUES ('$barangay_id','$barangay_name')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:barangay_index.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM barangay WHERE barangay_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:barangay_index.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM barangay WHERE barangay_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$barangay_id = $row['barangay_id'];
		$barangay_name = $row['barangay_name'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$barangay_id = $_POST['barangay_id'];
	$barangay_name = $_POST['barangay_name'];
	
	$mysqli->query("UPDATE barangay SET barangay_id='$barangay_id',barangay_name='$barangay_name' WHERE barangay_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:barangay_index.php');
}


?>