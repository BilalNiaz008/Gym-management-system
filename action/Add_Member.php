<?php

$connection = new mysqli('localhost','root','','clients');

	if (mysqli_connect_errno()) {
	echo "Connection is not formed";
		}

	if (isset($_POST["submit"])) {
		$packagename=$_POST["packagename"];
		$packagestart=$_POST["packagestart"];
		$packageend=$_POST["packageend"];
		$packagefee=$_POST["fee"];
		$packageoffers=$_POST["offers"];

		
		
	
		$insertQuery=$connection->query("INSERT INTO packages(Package_name,Package_Fee,Package_start,Package_end) Values('$packagename','$packagefee','packagestart','packageend')");
			if ($insertQuery) {
						echo "<script>alert('Membership Plan Entered Successfully');</script>";
						echo "<script>window.location='../Add_Member.php'</script>";	
						}
			else{
				echo"<script>alert('Membership Plan Entry Unsuccessfull');</script>";
			}			
		

	}

?>