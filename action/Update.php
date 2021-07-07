<?php
$connection = new mysqli('localhost','root','','registar');
	if (isset($_POST["submit"]))
	 {
	$first=$_POST["first"];
	$last=$_POST["last"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$edu=$_POST["edu"];

	$updateQuery=$connection->query("UPDATE `registration` SET R_FirstName='".$first."', R_LastName='".$last."',R_Email='".$email."',R_Gender='".$gender."',R_EducationalQualification='".$edu."' WHERE R_ID='$_GET[id]'");

	if ($updateQuery) {
		echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location='data.php'</script>";
	}
}
?>