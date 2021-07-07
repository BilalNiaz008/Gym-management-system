<?php

$connection = new mysqli('localhost','root','','clients');

	if (mysqli_connect_errno()) {
	echo "Connection is not formed";
		}

	if (isset($_POST["submit"])) {
		$id=$_POST["id"];
		$first=$_POST["firstname"];
		$last=$_POST["lastname"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$birth=$_POST["birth"];
		$contact=$_POST["contact"];
		$address=$_POST["address"];
		$reason=$_POST["reason"];
		$packages=$_POST["packages"];
		
		$filename=$_FILES["photo"]["name"];
		$tempname=$_FILES["photo"]["tmp_name"];
		$folder='clients/'.$filename;
		move_uploaded_file($tempname,$folder);
		
		$selectQuery=$connection->query("SELECT * FROM clients WHERE Email='$email' ");
		if ($selectQuery->num_rows > 0) {
			echo "<script>alert('Data Already Exists')</script>";
			echo "<script>window.location='../Add_Client.php'</script>";	
		}
		else{
				$insertQuery=$connection->query("INSERT INTO clients(FirstName,LastName,Email,Gender,Birth,Contact,Address,Reason,Photo,Package) Values('$first','$last','$email','$gender','$birth','$contact','$address','$reason','$folder','$packages')");
			if ($insertQuery) {
						echo "<script>alert('Data Entered Successfully');</script>";
						echo "<script>window.location='../Add_Client.php'</script>";	
						}
			else{
				echo"<script>alert('Data Entry Unsuccessfull');</script>";
			}			
		}

	}

?>