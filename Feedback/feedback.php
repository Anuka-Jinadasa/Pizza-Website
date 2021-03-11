<!doctype html>
<html>
<head>
<title>Feedback</title>

		<meta charset="UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">

		<link rel = "stylesheet" href = "../Common files/qwe.css">
		
		
		<img src = "../Common files/logo1.png" width = "15%" height = "auto">
					
			<a href = "../Home/home.html"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			<button>Offers</button>
			<button>Packages</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
			
			<a href = "../Login/login.html"><button class="login">Login or Register</button></a>



<style>




</style>

<script src = "feed.js">
</script>



</head>

<body>

<h1 class ="heading">Customer Feedback</h1>

    <pre class ="pre1">
		
			Please let us know what you think about our products,organization or website completing 
			an Electronic Feedback Form.We welcome all of your comments and suggestions.
		
		</pre>

		
		



	
	
	
		<form  class ="formreg" name = "formfeed" action ="feedbackdb.php" onsubmit = "return validate()" method = "POST">
	
	
		
		
		<input type = "text" id = "name" name = "fullname" placeholder = "Your name">	
		</br>	
		<input type = "email" id = "mail" name = "email" placeholder = "Your email">
		
		</br>
		<input type = "text" id = "phone" name = "pno" placeholder = "Your phone no">	
		</br>	
		<input type = "text" id = "orderno" name = "orderno" placeholder = "Order number">
		
		</br>
		</br>
		<textarea id = "msg" name = "message"  rows="15" cols="65" placeholder = "Write your message.."></textarea>
		</br>
		<input type = "submit" value = "Submit" name = "sbmt">
		
		</form>
		
		
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
		
		
		
		
		</br>
		</br>
		</br>
		</br>
		</br>
	</form>




</body>



</html>
		