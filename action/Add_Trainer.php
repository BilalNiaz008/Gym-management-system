<?php

$connection = new mysqli('localhost','root','','clients');

	if (mysqli_connect_errno()) {
	echo "Connection is not formed";
		}

	if (isset($_POST["submit"])) {
		$id=$_POST["trainerid"];
		$name=$_POST["name"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$birth=$_POST["birth"];
		$contact=$_POST["contact"];
		$address=$_POST["address"];
		$photo=$_POST["photo"];
	

		$selectQuery=$connection->query("SELECT * FROM trainer WHERE trainer_id='$id' ");
		if ($selectQuery->num_rows > 0) {
			echo "<script>alert('Data Already Exists')</script>";
			echo "<script>window.location='../Add_Client.php'</script>";	
		}
		else{
				$insertQuery=$connection->query("INSERT INTO trainer(trainer_id,trainer_name,trainer_email,trainer_gender,trainer_birth,trainer_contact,trainer_address,trainer_photo) Values('$id','$name','$email','$gender','$birth','$contact','$address','$photo')");
			if ($insertQuery) {
						echo "<script>alert('Data Entered Successfully');</script>";
						echo "<script>window.location='../Add_Trainer.php'</script>";	
						}
			else{
				echo"<script>alert('Data Entry Unsuccessfull');</script>";
			}			
		}

	}

?>