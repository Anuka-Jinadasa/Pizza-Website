<?php
//get the application data
$conn = mysqli_connect("localhost","root","","pizza");

$gen = $_POST['gen'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$nic = $_POST['nic'];
$bday = $_POST['bday'];
$gender = $_POST['gender'];
$civil = $_POST['civil'];

//validating the application form
if(empty($fullname)){
	echo "<script type='text/javascript'>alert('Name can not be empty!')</script>";
}
else if(empty($address)){
	echo "<script type='text/javascript'>alert('Address can not be empty!')</script>";
}
else if(empty($phone)){
	echo "<script type='text/javascript'>alert('Phone number can not be empty!')</script>";
}
else if(empty($nic)){
	echo "<script type='text/javascript'>alert('NIC can not be empty!')</script>";
}
else if(empty($gender)){
	echo "<script type='text/javascript'>alert('Gender can not be empty!')</script>";
}
else if(empty($gen)){
	echo "<script type='text/javascript'>alert('state can not be empty!')</script>";
}
else if(empty($email)){
	echo "<script type='text/javascript'>alert('Email can not be empty!')</script>";
}
else if(empty($bday)){
	echo "<script type='text/javascript'>alert('Birth Day date can not be empty!')</script>";
}
else if(empty($civil)){
	echo "<script type='text/javascript'>alert('Civil state can not be empty!')</script>";
}
else{
	//store in database
	$sql = "INSERT INTO application(gen,fullname,address,phone_no,email,nic,b_day,gender,civil) 
	VALUES ('$gen','$fullname', '$address','$phone','$email','$nic','$bday','$gender','$civil')";

	$result = mysqli_query($conn, $sql);

	//location to the cv page
	header("Location: upload.php");
}
 ?>