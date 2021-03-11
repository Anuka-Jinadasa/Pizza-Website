

<?php

	$db = mysqli_connect("localhost", "root", "", "registration");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	$sql = "SELECT * from response";
	
	$result = mysqli_query($db,$sql);
	
	//$result->num_rows;

	if(mysqli_num_rows($result) > 0){
		
		echo "<table border = '1px' bgcolor = 'white'>";
			
		echo "<tr>
			<th>Response ID</th>
		    <th>Feedback ID</th>
			<th>Response</th>
		</tr>";
	
		
		while ($row = mysqli_fetch_array($result)){
			echo "<tr> <td>".$row['rid']."</td>";
			echo "<td>".$row['fid']."</td>";
			echo "<td>".$row['response']."</td> </tr>";
		}
		
		echo "</table>";
	}

	//header("Location: adminlayout.php");
?>