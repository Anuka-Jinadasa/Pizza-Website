<?php

	$db = mysqli_connect("localhost", "root", "", "registration");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	$sql = "SELECT * from feedback";
	
	$result = mysqli_query($db,$sql);
	
	//$result->num_rows;

	if(mysqli_num_rows($result) > 0){
		
		echo "<table border = '1px' bgcolor = 'white'>";
			
		echo "<tr>
			<th>Fid</th>
		    <th>Full name</th>
			<th>email</th>
			<th>phone no</th>
			<th>Order no</th>
			<th>Message</th>
		</tr>";
	
		
		while ($row = mysqli_fetch_array($result)){
			echo "<tr> <td>".$row['fid']."</td>";
			echo "<td>".$row['fullname']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['phoneno']."</td>";
			echo "<td>".$row['orderno']."</td>";
			echo "<td>".$row['message']."</td> </tr>";
		}
		
		echo "</table>";
	}
	

?>