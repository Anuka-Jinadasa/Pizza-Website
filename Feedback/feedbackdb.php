<?php
	
	include('../server/server.php');
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$pno = $_POST['pno'];
	$orderno = $_POST['orderno'];
	$message = $_POST['message'];
	
	/*echo $fullname."<br>";
	echo $email."<br>";
	echo $pno."<br>";
	echo $orderno."<br>";
	echo $message."<br>";
	
	this section was used to check the data from the form
	
	*/
	$sql = "INSERT INTO feedback (fullname, email, phoneno, orderno, message) VALUES ('$fullname', '$email', '$pno', '$orderno', '$message')";
	
	$result = mysqli_query($db, $sql);
	
	header("Location: ../Home/home.html");

?>