<?php

	$db = mysqli_connect("localhost", "root", "", "registration");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	$fid = $_POST['fid'];
	$response = $_POST['res'];
	
	$sql = "INSERT INTO response (fid, response) VALUES ('$fid', '$response')";
	
	if ($db->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $db->error;
	}

	$db -> close();
	
	header("Location: adminlayout.php");
?>