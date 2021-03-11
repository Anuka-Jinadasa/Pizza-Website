<?php include('../server/server.php');?>

<!DOCTYPE html>
<html>

	<head>
		<title>Login</title>
		<link rel = "stylesheet" href = "../Common files/qwe.css">
		<link rel = "stylesheet" href = "q.css">
		<link rel = "text/javascript" href = "validation.js">
		
		<img src = "logo1.png" width = "15%" height = "auto">
		
		
			<a href = "../Home/home.php"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			
			<button>Image galley</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
					
			<a href = "login.php"><button class="login">Login or Register</button></a>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src = "validation.js"> </script>
	</head>
	
	<style>
		#loginImage {
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 50%;
		}
		
		form {
			text-align: left;
			width: 320px;
			margin: 0 auto;
		}
		
		input[type = text]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			background-color: #FFEFD5;
		}
		
		input[type = password]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			background-color: #FFEFD5;
		}

		input[type = submit]{
			width: 75%;
			background-color: #red;
			font-weight:bold;
			font-size:15px;
			color: white;
			padding: 14px 20px;
			margin: 8px 12%;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			
		}
		.links {
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 5px;
			height: 55px;
			width: 287px;
		}
		.log {
			color: #80aaff;
		}
	</style>

	<body>
	
		<h1 class ="heading">MEMBER LOGIN</h1> <br>
		<img src = "loginImage.jpg" id = "loginImage">
		<br>
		<form action = "login.php"  method = "POST" onsubmit = "return inputValidation();">
		
			<?php include('errors.php');?>
			
			
			
			<input type = "text" name = "username" id = "email" placeholder = "Enter username">
			
			
			
			
			<input type = "password" name ="password" id = "pwd" placeholder = "Enter Password" >
			
			
			
			
			
			<input type = "submit" value = "Login" name = "login_user" class = "btnn">
			
			
			
		</form>
		
		<div align = "center">
		<!--<h4 style ="color :white;">Forgot your password? <a href = "reset.php" class = "log">Reset</h4> </a>-->
		<h4	style ="color :white;">Don't have an account? <a href = "../register/register.php" class = "log"> Register now </h4> </a>
		</div>
		
		
		<br>
		<br>
	
	
		
		<a href = "http://www.facebook.com" target = "_blank"> <img src = "facebook.png" class = "links"> </a> <br/>
		<a href = "http://plus.google.com" target = "_blank"> <img src = "google.png" class = "links"> </a> <br/>
		
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