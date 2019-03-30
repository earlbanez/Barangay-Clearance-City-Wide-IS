<?php
session_start();

$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));


$clearance_id ="";
$or_number ="";
$person_number ="";
$update = false;
$first_name="";
$middle_initial="";
$last_name="";
$barangay_id="";
$purpose="";
$date="";
$amount="";
$cedula_id="";
$id="";
$captain_id="";




if(isset($_POST['save'])){
	$clearance_id = $_POST['clearance_id'];
	$or_number = $_POST['or_number'];
	$person_number = $_POST['person_number'];
	$first_name = $_POST['first_name'];
	$middle_initial = $_POST['middle_initial'];
	$last_name = $_POST['last_name'];
	$barangay_id = $_POST['barangay_id'];
	$purpose = $_POST['purpose'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$cedula_id = $_POST['cedula_id'];
	$id = $_POST['id'];
	$captain_id = $_POST['captain_id'];

	$mysqli->query("INSERT INTO admin (clearance_id,or_number,person_number,first_name,middle_initial,last_name,barangay_id,purpose,date,amount,cedula_id,id,captain_id) VALUES ('$clearance_id','$or_number','$person_number','$first_name','$middle_initial','$last_name','$barangay_id','$purpose','$date','$amount','$cedula_id','$id','$captain_id')") or
			die($mysqli->error);
	$_SESSION['message'] = "Successfully Added!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:admin_index.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	
	echo "
		<script>
			 var msgs = confirm('Do you want to delete this Record? ');
			 if(msgs == true){
				 ";
				 $mysqli->query("DELETE FROM admin WHERE clearance_id=$id") or die($mysqli->error());
				 $_SESSION['message'] = "Successfully Delete!";
				 $_SESSION['msg_type'] = "danger";
				 header("location:admin_index.php");
	echo "			 
			 }
		</script>
	";
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM admin WHERE clearance_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$clearance_id = $row['clearance_id'];
		$or_number = $row['or_number'];
		$person_number = $row['person_number'];
		$first_name = $row['first_name'];
		$middle_initial = $row['middle_initial'];
		$last_name = $row['last_name'];
		$barangay_id = $row['barangay_id'];
		$purpose = $row['purpose'];
		$date = $row['date'];
		$amount = $row['amount'];
		$cedula_id = $row['cedula_id'];
		$id = $row['id'];
		$captain_id = $row['captain_id'];
		
	}
}
if(isset($_POST['update_person'])){
	$id = $_POST['id'];
	$clearance_id = $_POST['clearance_id'];
	$or_number = $_POST['or_number'];
	$person_number = $_POST['person_number'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$barangay_id = $_POST['barangay_id'];
	$purpose = $_POST['purpose'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$cedula_id = $_POST['cedula_id'];
	$id = $_POST['id'];
	$captain_id = $_POST['captain_id'];
	
	$mysqli->query("UPDATE admin SET clearance_id='$clearance_id',or_number='$or_number',person_number='$person_number',first_name='$first_name',middle_initial='$middle_initial',last_name='$last_name',barangay_id='$barangay_id',purpose='$purpose',date='$date',amount='$amount',cedula_id='$cedula_id',id='$id',captain_id='$captain_id' WHERE clearance_id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:admin_index.php');
}


?>