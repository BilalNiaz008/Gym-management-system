<?php
	$connection = new mysqli('localhost','root','','clients');

	$updateQuery=$connection->query("UPDATE `login`SET Password='".$new."'' id ='$_GET[id]'");




?>
