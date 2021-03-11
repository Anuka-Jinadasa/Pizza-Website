<?php
	
	include_once '../server/server.php';
	
	
	

	

	if(isset($_POST['update'])){
		
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		$adrs = mysqli_real_escape_string($db, $_POST['adrs']);
		$phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
		if($password_1 === $password_2) {
		
		$hashedPwd = password_hash($password_1, PASSWORD_DEFAULT);
		$n = $_SESSION['u_id'];
		
		$sql = "UPDATE users SET email='$email', username='$username', password='$hashedPwd', phoneNo='$phoneNo', adrs='$adrs' WHERE Id='$n'";						
						if ( $db->query($sql) === TRUE ) {
							
							$message = "Successfully updated!";
							echo "<script type='text/javascript'>alert('$message');
								   window.location.href='update_details.php';</script>";
								    
						}else {
							
							echo "Error: " . $sql . "<br>" . mysqli_error($db);
						}
						
		}else {
			
			$message = "Passwords are not similar!";
			echo "<script type='text/javascript'>alert('$message');
				   window.location.href='update_details.php';</script>";
		}
	}


?>