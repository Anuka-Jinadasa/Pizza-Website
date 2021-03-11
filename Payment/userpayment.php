<?php
session_start();
?>	
<html>

	<head>
	
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
			<link rel = "stylesheet" href = "../Common files/qwe.css">
			
			<link rel = "javascript" href = "validatepayment.js">
			
			<img src = "../Common files/logo1.png" width = "15%" height = "auto">
					
					<a href = "../Home/home.php"><button>Home</button></a>
					<a href = "../menu/menu.php"><button>Menu</button></a>
					<button>Offers</button>
					<button>Packages</button>
					<button>Locations</button>
					<a href = "../Feedback/feed.php"><button>Feedback</button></a>
			
			<a href = "../Login/login.html"><button class="login">Login or Register</button></a>
		<style>
		
		.letter{
			color:white;
		}
		.margin{
			margin-left:450px;
		}
		</style>
		</head>
	

	<body>
	<div class="margin">
	<div class = "letter">
		</br>
		<form name = "payform" method = "POST" action = "userpaymentdbs.php" >
		<h2 style = "margin-left:200px;color:black;">PAYMENT DETAILS</h2> 
		<caption><h4 style="color:black;">Type:</h4></caption>
				<input type="radio" id="type" name="type" value="delivery" style ="margin-left:50px" > A Delivery
				<input type="radio" id="type" name="type" value="takeaway" style ="margin-left:60px"> A Take A Way
		</br>

		<caption ><h4 style="color:black;">When:</h4></caption>
				<input type="radio" id="venue1" name="when" value="delivery now" style ="margin-left:50px">Delivery Now
				<input type="radio" id="venue2" name="when" value="delivery later" style ="margin-left:60px"> Delivery Later:
				</br>
				</br>
				<input type="date" id="date" name="date" style="margin-left:260px">
				<input type="time" id="time" name="time" >
				</div>
		<caption><h4 style="color:black;">Payment Method:</h4></caption>
		<div class = "letter">
				<input class = "letter" type="radio" id="method" name="method" value="Credit/Debit crad" style ="margin-left:50px" > Credit/Debit crad
				<input class = "letter" type="radio" id="method" name="method" value="Cash" style ="margin-left:60px"> Cash
		</br>
		</br>
		<caption >Card Holder Name:</caption></br>		
				<input type = "text" id = "Card_holder_name" name = "Card_holder_name" style="width:60%" placeholder = "Enter Card Holder Name if paying by credit or debit card">
		</br>
		<caption >Credit/Debit card No:</caption></br>		
				<input type = "text" id = "card_no" name = "Card_no" style="width:60%" placeholder = "Enter your Credit/Debit Card No if paying by credit or debit card ">
		</br>
		<caption >Credit/Debit code No:</caption></br>		
				<input type = "text" id = "cord_no" name = "Cord_no" style="width:60%" placeholder = "Enter Credit/Debit Cord No if paying by credit or debit card ">
		</br>
		<caption >Expaire Date:</caption></br>		
				<input type = "text" id = "expaire_date" name = "expair_date" style="width:60%" placeholder = "Enter Expaire date of the credit card if paying by credit or debit card">
		</br>
		<caption >Contact*</caption></br>		
				<input type = "text" id = "contact" name = "contact" style="width:60%" placeholder = "Enter your Contact No">
		</br>
		<caption >ADDRESS*</caption></br>		
				<input type = "text" id = "address" name = "address" style="width:60%" placeholder = "Enter your Delivery address">
		</br>
		</div>
		<input id="" type = "submit" value = "CONTINUE" style="height:40px;width:110px;margin-left:250px">

		</form>

		</br>
		</br>
		</br>
		</br>
		</br>			
		</br>	
		</br>
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
		
	</body>	

	
			


</html>