<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));


$clearance_id ="";
$update = false;
$date="";
$amount="";
$purpose="";


if(isset($_POST['save'])){
	$clearance_id = $_POST['clearance_id'];
	$person_number = $_POST['person'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$cedula_number = $_POST['cedula'];
	$captain_id = $_POST['captain'];
	$staff_id = $_SESSION['staff_id'];
	$purpose = $_POST['purpose'];

	$result1 = $mysqli->query("SELECT .barangay.barangay_id From staff,barangay where staff_id='$staff_id' AND staff.barangay_id = barangay.barangay_id ") or die($mysqli->error);
	if(@count($result1)==1){
		$row1=$result1->fetch_array();
		$barangay_id = $row1['barangay_id'];
	

	$mysqli->query("INSERT INTO clearance (clearance_id,person_number,date,amount,cedula_number,captain_id,staff_id,barangay_id,purpose) VALUES ('$clearance_id',$person_number,'$date','$amount',$cedula_number,$captain_id,$staff_id,'$barangay_id','$purpose')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	header("location:clearance_index.php");
}
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM clearance WHERE clearance_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Successfully Delete!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:clearance_index.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM clearance WHERE clearance_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$clearance_id = $row['clearance_id'];
		$person_number = $row['person_number'];
		$date = $row['date'];
		$amount = $row['amount'];
		$cedula_number = $row['cedula_number'];
		$captain_id = $row['captain_id'];
		$purpose = $row['purpose'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$clearance_id = $_POST['clearance_id'];
	$person_number = $_POST['person'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$cedula_number = $_POST['cedula'];
	$captain_id = $_POST['captain'];
	$purpose = $_POST['purpose'];
	
	$mysqli->query("UPDATE clearance SET person_number='$person_number',date='$date',amount='$amount',cedula_number='$cedula_number',captain_id='$captain_id', purpose='$purpose' WHERE clearance_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:clearance_index.php');
}


?>