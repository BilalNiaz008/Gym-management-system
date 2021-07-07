<?php

session_start();
$connection = new mysqli('localhost','root','','clients');

if (isset($_POST["submit"])) {
			$_SESSION["E-mail"]=$_POST["E-mail"];
			$_SESSION["password"]=$_POST["password"];
			
			$email=$_SESSION["E-mail"];
			$password=$_SESSION["password"];

			$selectQuery=$connection->query("SELECT * FROM login WHERE Email='$email' AND Password='$password' ");
				
				if ($selectQuery->num_rows>0) 
					{
						header("location:../loged.php");
						$_COOKIES["E-mail"];									
				}
			else
			{
				  	echo "<script>alert('Your E-mail or Password is invalid');
				  	window.location='../Log.php'</script>";
					
				  ?>
				  
				  <?php
							}
			
}
?>