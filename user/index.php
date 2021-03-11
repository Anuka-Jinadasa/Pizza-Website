
<?php 
 // session_start(); 
  
  include '../server/server.php';

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../Login/login.php');
  }
  

  
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../Login/login.php");
  }
  
 
  
  
  
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="../Common files/qwe.css">
	
	
	<img src = "logo1.png" width = "15%" height = "auto">
	
	<a href = "../Home/home.php"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			
			<button>Image galley</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
					
		
			<!--<select class = "login">
			
				<option value = "<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></option>
				<a href = "login.php"><option value = "logout">Logout</option></a>
			</select>-->
			<!--<a href = "login.php"><button class="login">Login or Register</button></a>-->
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
</head>

<style>


	#loginImage {
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 50%;
			float:center;
			width:60%;
		}
			
		div.cls1 {
			float:left;
			border-radius: 25px;
			background-color:#c2c2a3;
			opacity: 1;
			width: 25%;
			height:auto;
			text-align:center;
			padding: 20px;
			margin: 20px;
}

	* {box-sizing: border-box;}
	body {font-family: Verdana, sans-serif;}
	.mySlides {display: none;}
	img {vertical-align: middle;}

/* Slideshow container */

	.slideshow-container {
		max-width: 70%;
		position: relative;
		margin: auto;
}	

/* Caption text */

	.text {
		color: #f2f2f2;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
}

/* Number text (1/3 etc) */
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
}

/* The dots/bullets/indicators */
	
	.dot {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: black;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
		float:center;
		text-align:center;
}

	.active {
		background-color: red;
}

/* Fading animation */
	
	.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.5s;
		animation-name: fade;
		animation-duration: 1.5s;
}

	@-webkit-keyframes fade {
		from {opacity: .4} 
		to {opacity: 1}
}

	@keyframes fade {
		from {opacity: .4} 
		to {opacity: 1}
}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	.text {font-size: 11px}
	}




</style>

<body>


	<br>
	<br>

	    <!-- logged in user information -->
	
	
<div class="cls1">
	<h1 class = "heading">Welcome</h1> <br>
	<img src = "loginImage.jpg" id = "loginImage">
			<br>
	
	<h2><?php echo $_SESSION['username']; ?></h2>
	<br>
	
			
		<h3 style="color:red;">Current Address</h3><br>
		<br>
			
			<?php
			$n = $_SESSION['username'];
			$adrs = mysqli_query($db, "SELECT adrs FROM users WHERE username='$n'") or die ('Error: ' . mysqli_error($db));
			while($row = mysqli_fetch_array($adrs))
			{
			$queried_name = $row['adrs'];
			echo 'Address: ' . $queried_name;
			}
			
			
			?>
			
			<br>
			<br>
	
	
			<a href="../update/update_details.php" style="color: red;"><button>Edit profile</button>
			<a href="index.php?logout='1'" style="color: red;"><button>Logout</button></a>
			<br>
			<br>
			<br>
			<br>
	
	
	
	
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


   
</div>


</div>
	
		<div  style ="display: inline-block; margin-left: -4px;"class="slideshow-container">
		<br>
		<br>
		<br>
	

			<div class="mySlides fade">
				
					<img src="user1.jpg" style="width:100%; max-width:900px; max-height: auto; margin-left:25px;">
					
			</div>

			<div class="mySlides fade">
				
					<img src="user2.jpg" style="width:100%; max-width:900px; max-height: auto;margin-left:25px;">
					
			</div>

			<div class="mySlides fade">
				
					<img src="user3.jpg" style="width:100%; max-width:900px; max-height:auto;margin-left:25px;">
					
			</div>
			
			<div class="mySlides fade">
			
					<img src="user4.jpg" style="width:100%; max-width:900px; max-height:auto;margin-left:25px;">
			
			</div>
			
			<div class="mySlides fade">
			
					<img src="user5.jpg" style="width:100%; max-width:900px; max-height:auto;margin-left:25px;">
			
			</div>

		</div>
		
	
		<div style="display: block; text-align:center;">
			<br>
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>
	
		
		<div style ="text-align:center;">
			<button class="btn" style ="margin-top:70px;">Notifications</button>
			<button class="btn">Track your order</button>
			<button class="btn">Gift cards</button>
			<a href = "../party/book party.html"><button class="btn">Party bookings</button></a>
			<button class="btn">Download our app</button>
		</div>
		
		
		</br>
		</br>
		</br>
		</br>
		</br>
		
		
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
	

	<script src = "autoslide.js"> </script>





		
</body>
</html>