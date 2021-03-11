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
		#submit-style {
			background-color: red;
			color: white;
			border: none;
			padding: 10px;
			font-size: 1.25em;
		}
		.letter{
			color:white;
		}
		#submit-style:hover {
			background-color: black;
		}
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
	
		</style>
		
		</head>
		
		</body>
		<div class="letter">
		<div class="margin">
		</br>
		</br>
		<fieldset style="height:30p%;width:40%;margin-left:70px;background-color:#0d0d0d">
		<legend><caption class ="letter" align="center">Curriculum vitae(CV)</caption></legend>
		<p>"Please upload your CV file by using your name "</p>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
			<input type="file" id="file" name="file" size="70" >	
		</br>
		</br>
		
			<input id= "submit-style" type="submit" value="Upload" style="height:50px;width:90px;margin-left:40%" >
			
		</br>
		</br>
		</br>
		</form>
		</fieldset>
		</div>
		</div>
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
		<script src="validateapplication.js">

		</script>	
	</body>	

	
			


</html>	