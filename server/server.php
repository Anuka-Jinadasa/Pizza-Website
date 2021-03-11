<?php

session_start();

// initializing variables

$username = "";

$email = "";

$phoneNo = "";

$adrs = ""; 

$errors = array(); 



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER

if (isset($_POST['reg_user'])) {

  // receive all input values from the form


  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']);
  $adrs = mysqli_real_escape_string($db, $_POST['adrs']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


	
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


	if (empty($username))
	{
		array_push($errors, "Username is required"); 
		
	
	}
	
	if (empty($email))
	{ 
		array_push($errors, "Email is required");
		
	}
	
	if (empty($phoneNo))
	{
		array_push($errors, "Phone number is required");
		
	}
	
	if (empty($adrs))
	{
		array_push($errors, "Address is required");
		
	}
	
	if (empty($password_1)) 
	{
		array_push($errors, "Password is required"); 
		
	}
	
	if (strlen($password_1) < 6)
	{
		array_push($errors, "password must have atleast 6 characters");
		
	}
		
	
	
	if ($password_1 != $password_2) 
	{
		array_push($errors, "Passwords are not matching");
	
	}
	
	
/*	if($login == "OK"){
		
		$n = $_SESSION['id'];
		
	}*/
	
	

  //check the database to make sure, a user does not already exist with the same username and email
  
  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  
  $result = mysqli_query($db, $user_check_query);
  
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
  if ($user) 

	  { 
    
	if ($user['username'] === $username) 
	{
      array_push($errors, "Username already exists");
	  
    }

    if ($user['email'] === $email) 
	{
      array_push($errors, "Email already exists");
	 
    }
	
  
  }

  // Registering user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password 

  	$query = "INSERT INTO users (username, email, password, phoneNo, adrs) 
  			  VALUES('$username', '$email', '$password', '$phoneNo', '$adrs')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../user/index.php');
  }
}





// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $_SESSION['pwd'] =  $password;

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	$resultcheck = mysqli_num_rows($results);
  	if ($resultcheck > 0) {
		$row = mysqli_fetch_assoc($results); 
	  $_SESSION['u_id'] = $row['Id'];
  	  $_SESSION['username'] = $username;
	  $_SESSION['adrs'] = $row['adrs'];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../user/index.php');
  	}else {
  		array_push($errors, "Wrong username or password !try again");
  	}
  }
}

?>