<?php
 $conn=new mysqli('localhost','root','','ClearanceCityWide');
 if($conn->connect_error){
 	die("Connect Failed".$conn->connect_error);

 }
 ?>