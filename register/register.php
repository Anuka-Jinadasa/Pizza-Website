<?php include('../server/server.php');






?>

<!doctype html>
<html>


<head>
<title>Register online</title>

<meta charset = "utf-8">
<meta name = "viewport"  content = "width = device-width, initial-scale = 1.0">


	
	<link rel = "stylesheet" href = "../Common files/qwe.css">
	<link rel = "stylesheet" href = "q.css">
			
			<img src = "../Common files/logo1.png" width = "15%" height = "auto">
			
			
			<a href = "../Home/home.php"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			
			<button>Image galley</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
					
			<a href = "../Login/login.php"><button class="login">Login or Register</button></a>

			
		<script src = "reg.js">
		</script>

		
		
		<style>
		
#email{
	
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:20%;
		resize:vertical;
		background-color: #FFEFD5;
}

#passw{
		
		
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:125px;
		resize:vertical;
		background-color: #FFEFD5;
	
}

#usrname{
	
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:20%;
		resize:vertical;
		background-color: #FFEFD5;
}

#repasswd{
		
		
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:125px;
		resize:vertical;
		background-color: #FFEFD5;
	
}

#phoneNo{
	
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:20%;
		resize:vertical;
		background-color: #FFEFD5;
}


#adrs{
		
		
		width:25%;
		padding:12px;
		border:1px solid #ccc;
		border-radius:4px;
		box-sizing:border-box;
		margin-top:6px;
		margin-bottom:16px;
		margin-left:125px;
		resize:vertical;
		background-color: #FFEFD5;
	
}


input[type = submit]{

		background-color:red;
		color:white;
		font-weight:bold;
		padding:12px 20px;
		boder:none;
		border-radius:4px;
		cursor:pointer;
		width:25%;
		margin-left:36%;
		
}
		
input[type = submit]:hover{

		background-color:black;
}
		
.regisHead{
	
		color:black;
}


	
	
		
		</style>

</head>

<body>

	<h1 class= "heading">Become a member and order online</h1>

	</br>
	</br>
	</br>

	<form  name = "regForm" action = "register.php" onsubmit = "return validateForm()"  method = "post">
		
		<? php include('errors.php'); ?>
		
		
		
		<input type = "email" id = "email" name = "email" placeholder = "Enter Email" value="<?php echo $email;?>">
		
		
		
		
		
		<input type = "password" id = "passw" name = "password_1" placeholder = "Enter password">
		
		
		
	</br>
	</br>
		
		

		<input type = "text" id = "usrname" name = "username" placeholder = "Enter username" value="<?php echo $username; ?>"> 
		
		
		
		
		
		<input type = "password" id  = "repasswd" name = "password_2" placeholder = "Confirm password">
		
		
		
	</br>
	</br>
		
		
		
		<input type = "tel" id = "phoneNo" name = "phoneNo" placeholder = "Enter phone No" value="<?php echo $phoneNo; ?>">
		
		
		
		

		<input type = "text" id = "adrs" name = "adrs" placeholder = "Enter the address" value="<?php echo $adrs; ?>">
		
	

	</br>
	</br>
	</br>
	</br>
	</br>
		
		
		
		<input type = "submit" class = "btnn" name = "reg_user" value = "Register" >
		
		
		
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<!-- footer  -->
	
	<div class="footer">
		
			<img class ="image_pay"src = "../Common files/pay.jpg">
			<img class = "image_social"src = "../Common files/so.png">
		
		<div class="btn-group">
			<a href ="../Contact us/c us.html"<button class="button">Contact us</button></a>
			<a href ="../about us and terms/about us.html"<button class="button">About us</button></a>
			<a href = "../careers/careers.html"><button class="button">Careers</button></a>
			<a href ="../about us and terms/terms.html"<button class="button">Terms of use</button></a>
		</div>
		

		
	</div>
	
	<!-- End of footer -->

</body>

</html>
