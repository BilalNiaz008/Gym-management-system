<?php
	$connection = new mysqli('localhost','root','','clients');

	$DeleteQuery=$connection->query("Delete FROM clients WHERE id ='$_GET[id]'");

	if($DeleteQuery){
		header("refresh:1; url=../View_Client.php");

	}
	else{
		echo "<script>alert('Data Not Deleted');</script>";
	}
?>