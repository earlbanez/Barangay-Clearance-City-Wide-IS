<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));

$captain_id ="";
$update = false;
$first_name="";
$middle_name="";
$last_name="";


if(isset($_POST['save'])){
	$captain_id = $_POST['captain_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$barangay_id = $_POST['barangay'];
	

	$mysqli->query("INSERT INTO captain (captain_id,first_name,middle_name,last_name, barangay_id) VALUES ('$id_number','$first_name','$middle_name','$last_name','$barangay_id')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:captain_index.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM captain WHERE captain_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:captain_index.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM captain WHERE captain_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$captain_id = $row['captain_id'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$last_name = $row['last_name'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$captain_id = $_POST['captain_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	
	$mysqli->query("UPDATE captain SET captain_id='$captain_id',first_name='$first_name',middle_name='$middle_name',last_name='$last_name' WHERE captain_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:captain_index.php');
}


?>