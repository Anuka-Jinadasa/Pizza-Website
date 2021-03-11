<?php
	
	$db = mysqli_connect("localhost", "root", "", "registration");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	

	echo "<form action = 'response.php' method = 'POST'>";
	echo "<br> <br>";
	
	echo "<input type = 'text' style ='width:50%;margin-left:25%;' name = 'res' placeholder = 'Enter your responce...'> <br>";

	echo "<input type = 'text' style ='width:50%;margin-left:25%' name = 'fid' placeholder = 'Enter feedback id.....'>";
	
	echo "<br> <br>";
	
	echo "<input type = 'submit' style ='width:50%; margin-left:25%' value = 'Send Responce'>";

	echo "</form>";
	
	//echo "<table id = 'tablefeed'>";

	$db -> close();
?>