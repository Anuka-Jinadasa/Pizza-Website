<?php
	include('../../server/server.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin feedback layout</title>


<style>
	
	table
	{
		border-collapse: collapse;
		margin-left:auto;
		margin-right:auto;
	}
	 
	th, td
	{
		text-align:center;
		padding:8px;
		border:1px solid black;
		
	}
	tr:nth-child(even){background-color:#e0ebeb}
	tr:nth-child(odd){background-color:#f0f5f5}
	
	th
	{
		background-color: #e0ebeb;
		color:black;
	}
	

</style>


		<meta charset="UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" href = "../../Common files/qwe.css">
		
		
		<img src = "../../Common files/logo1.png" width = "15%" height = "auto">
					
			<a href = "../Home/home.html"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			<button>Image Gallery</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
			
			<a href = "../Login/login.html"><button class="login">Login or Register</button></a>
	
</head>

<body>

<div>
	<h1 class ="heading"> Feedbacks </h1>
</div>
	<?php
		include 'tableall.php';
		include 'sendresponse.php';
		include 'tableres.php';
	?>
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
		<!-- footer  -->
	
	<div class="footer">
		
		<img class ="image_pay"src = "../../Common files/pay.jpg">
		<img class = "image_social"src = "../../Common files/so.png">
		
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
