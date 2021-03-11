<?php
session_start();
?>			
<html>

	<head>
	
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
			<link rel = "stylesheet" href = "../Common files/qwe.css">
			
			<link rel = "javascript" href = "validateapplication.js">
			
			<img src = "../Common files/logo1.png" width = "15%" height = "auto">
					
					<a href = "../Home/home.php"><button>Home</button></a>
					<a href = "../menu/menu.php"><button>Menu</button></a>
					<button>Offers</button>
					<button>Packages</button>
					<button>Locations</button>
					<a href = "../Feedback/feed.php"><button>Feedback</button></a>
			
			<a href = "../Login/login.php"><button class="login">Login or Register</button></a>
			
			
		<style>
		h1{
			text-align:center;
			color:black;
		}
		.margin{
			margin-left:450px;
		}
		.cent{
			width:77%
		}
		#submit-style {
			background-color: red;
			color: white;
			border: none;
			padding: 10px;
			font-size: 1.25em;
		}
		#submit-style:hover {
			background-color: black;
			
		}
		.letter{
			color:white;
		}
		
		</style>
	</head>
	
	
	<body>
	
	<div class="letter">
	<h1>VACANCY</h1></br>
	
	<form name = "application" action = "applicationdbs.php" method = "POST" enctype="multipart/form-data">
<div class="margin">
	<caption >Title</caption></br>
<select id="gen" name="gen" style="height:35px">
  <option value="Mr">Mr</option>
  <option value="Mrs">Mrs</option>
  <option value="Miss">Miss</option>
  <option value="Ms">Ms</option>
</select>

	<caption >Full Name:</caption>
	<input type = "text" id = "fullname" name = "fullname" style="width:43%" placeholder = "Enter Your full name">	
		</br>
	<div  class="cent" >	
	<caption >Postal Address:</caption></br>		
		<input type = "text" id = "address" name = "address" placeholder = "Enter your address">
		</br>
		<caption >Contact Number:</caption></br>
		<input type = "text" id = "phone" name = "phone" placeholder = "Enter Your contact no">	
		</br>
	<caption >Email:</caption></br>		
		<input type = "text" id = "email" name = "email" placeholder = "Enter your email">
		</br>
		<caption >NIC Number:</caption></br>		
		<input type = "text" id = "nic" name = "nic" placeholder = "Enter your nic no">
		</br>
		</div>
		<br>
	<caption >Date Of Birth:<caption>
		<input type="date" id="bday" name="bday" style="height:35px">
	</br>
	</br>
	<caption name="gender" class="letter">Gender</caption></br>
			<input type="radio" name="gender" value="Male" > Male
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other  
   </br>
   </br>
	<caption class ="letter">Civil Status:</caption>
		<select id="civil" name="civil" style="height:35px">
			<option >select</option>
			<option value="Unmarried">Unmarried</option>
			<option value="Married">Married</option>
		</select></br></br>
	<input id="submit-style" type = "submit" value = "Submit" style="height:40px;width:80px" >
	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</div>
	</div>
	</form>
	<!-- footer  -->
	
	<div class="footer">
		
		<img class ="image_pay"src = "../Common files/pay.jpg">
		<img class = "image_social"src = "../Common files/so.png">
		
		<div class="btn-group">
			<a href = "../contact us/c us.php"><button class="button">Contact us</button></a>
			<a href = "../about us and terms/about us.php"><button class="button">About us</button></a>
			<a href = "../careers/careers.php"><button class="button">Careers</button></a>
			<a href = "../about us and terms/terms.php"><button class="button">terms of use</button></a>
		</div>
		

		
	</div>
	<!-- End of footer -->
		
	</body>	
	
</html>