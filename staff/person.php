<?php
session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','ClearanceCityWide') or die(mysqli_error($mysqli));
$person_number ="";
$update = false;
$first_name="";
$last_name="";
$middle_initial="";
$status="";
$birthday="";


if(isset($_POST['save'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$status = $_POST['status'];
	$birthday = $_POST['birthday'];
	$staff_id = $_SESSION['staff_id'];
	
	$result1 = $mysqli->query("SELECT .barangay.barangay_id From staff,barangay where staff_id='$staff_id' AND staff.barangay_id = barangay.barangay_id ") or die($mysqli->error);
	if(@count($result1)==1){
		$row1=$result1->fetch_array();
		$barangay_id = $row1['barangay_id'];
		$mysqli->query("INSERT INTO person (first_name,last_name,middle_initial,status,birthday,staff_id,barangay_id) VALUES ('$first_name','$last_name','$middle_initial','$status','$birthday','$staff_id','$barangay_id')") or
			die($mysqli->error);
		$_SESSION['message'] = "Successfully Added!";
			$_SESSION['msg_type'] = "success";
		header("location:index.php");
	}
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	
	echo "
		<script>
			 var msgs = confirm('Do you want to delete this Record? ');
			 if(msgs == true){
				 ";
				 $mysqli->query("DELETE FROM person WHERE person_number=$id") or die($mysqli->error());
				 $_SESSION['message'] = "Successfully Delete!";
				 $_SESSION['msg_type'] = "danger";
				 header("location:index.php");
	echo "			 
			 }
		</script>
	";
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * From person where person_number=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$person_number = $row['person_number'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$middle_initial = $row['middle_initial'];
		$status = $row['status'];
		$birthday = $row['birthday'];

		
	}
}
if(isset($_POST['update_person'])){
	$id = $_POST['id'];
	$person_number = $_POST['person_number'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$status = $_POST['status'];
	$birthday = $_POST['birthday'];


	
	$mysqli->query("UPDATE person SET person_number='$person_number',first_name='$first_name',last_name='$last_name',middle_initial='$middle_initial',status='$status',birthday='$birthday' WHERE person_number=$id") or die($mysqli->error);
	$_SESSION['message'] = "Successfully Update!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:index.php');
}


?>