<!DOCTYPE html>
<html>
	<title>ClearanceCityWide</title>
<body>
		<center><h1>Republic of the Philippines</h1>
		<h4>Province of Misamis Occidental</h4>	
		<h4>City of Oroquieta</h4>

		
		<center><h2>BARANGAY CLEARANCE</h2></center>
			
		<p>To Whom It May Concern:</p>
				<blockquote><p>This is to certify that 	            
				
		            <?php 
		            	include "config.php";
						$sql = "SELECT * FROM person, barangay, captain,staff, cedula, clearance WHERE clearance.captain_id = captain.captain_id AND clearance.staff_id = staff.staff_id AND staff.barangay_id = barangay.barangay_id AND clearance.cedula_number = cedula.cedula_number AND clearance.person_number = person.person_number AND person.person_number =". $_GET['print'];
		            	$res = mysqli_query($con, $sql);
		            	$line = mysqli_fetch_array($res);
		            ?>
		            	<u><?php echo $line[1] ?> <?php echo $line[2] ?> <?php echo $line[3] ?></u>


	            
	            ,
				legal age, 	
		            	<u><?php echo $line[4] ?></u>
		      
	            , a bonafide resident of 
	            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay WHERE barangay.barangay_id = clearance.barangay_id";
		            	$res = mysqli_query($con, $sql);
		            ?>
					<?php echo $line[9] ?>

	            ,Oroquieta City is personally known by the undersigned as peaceful
				and law abiding citizen in the community</p></blockquote>			

				<blockquote><p>This is to certifies that he/she has no pending case or criminal
				involving moral turpitude neither he/she charge for any criminal case
				in the community or per records in the Barangay.</p></blockquote>
				
				<blockquote><p>This is to certification is issued upon the request of the aboved-
				named person in connection with his/her desire 
				<?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM person WHERE person.person_number = clearance.person_number";
		            	$res = mysqli_query($con, $sql);
		            ?>
					<?php echo $line['purpose']?>.

			<blockquote><p>Given this <?php echo date("l jS \of F Y h:i:s A") . "<br>"?>
			Oroquieta City, Philippines.</p></blockquote>
			
			
			
			<br><br><br><center>	            
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM captain WHERE captain.captain_id = clearance.captain_id";
		            	$res = mysqli_query($con, $sql);
		            ?>
					<?php echo $line[11] ?> <?php echo $line[12] ?> <?php echo $line[13] ?>
		           
		          
	           	            

	           
			<h4>PUNONG BARANGAY</h4></br></br></br></center>
			
			<center><input class="btn btn-primary" type="button" onclick="window.print()" value="Print page"/>
			<a href ="index.php"><input class="btn" type="button" id="list_btn" value="Back"/><br></a>

</body>
</html>