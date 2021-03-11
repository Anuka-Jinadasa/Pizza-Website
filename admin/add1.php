<!doctype html>
<html>
<?php 
	include ('../server/server.php');
?>

<?php
	//validations
	$errors =array();
	if($_POST)
	{
		
		if(empty($_POST['des']))
		{
			$errors['des1'] = "Item description cannot be empty";
		
		}
	
		if(empty($_POST['img']))
		{
			$errors['img1'] = "Add image location";
		
		}	
	}
	
	//adding to db
	if(count($errors) == 0)
	{
		
		if(isset($_POST["add"]))
		{
			
			$msg = array();
	  
		   $item = $_POST['des'];
		   $category=$_POST['cat'];
		   $s = $_POST['sprice'];
		   $r = $_POST['rprice'];
		   $l = $_POST['lprice'];
		   $img = $_POST['img'];


		  $sql= "INSERT INTO `product`(`id`, `name`, `catagory`,`s_price` ,`r_price`, `l_price`,`img`) VALUES (NULL,'$item','$category' ,'$s' , '$r' , '$l' , '$img')";
		  $msg['msg'] ="Item inserted successfully";
		 
			if(mysqli_query($db,$sql))
			{
				
			}
			else
			{
					echo "Error:". $db->error;
			}
		}
	}

 mysqli_close($db);

?>


?>

<head>
<title>add menu</title>

		<meta charset="UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">

		<link rel = "stylesheet" href = "../Common files/qwe.css">
		
		
		<img src = "../Common files/logo1.png" width = "15%" height = "auto">
					
			<a href = "../Home/home.html"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			<button>Image Gallery</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
			
			<a href = "../Login/login.html"><button class="login">Login or Register</button></a>



<style>
		.select{
			width: 75%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 6px;
			box-sizing: border-box;
			background-color: #FFEFD5;
		}



</style>


</script>



</head>

<body>

<h1 class ="heading">Add menu items</h1>


	<form  class ="formreg" method = "post">
		
		<pre style ="color:white"><?php if(isset($msg['msg'])) echo $msg['msg'];?></pre>
		
		<input type = "text" name = "des" placeholder = "Enter description">
		<pre style ="color:white"><?php if(isset($errors['des1'])) echo $errors['des1'];?></pre>
	
		<div > 
			
		<select class ="select" name="cat">
			<option>pizza</option>
			<option>pasta</option>
			<option>beverage</option>
			<option>others</option>
		</select>
		</div>
		
		</br>
		<input type = "text" name = "sprice" placeholder = "Small item price" >	
		</br>	
		<input type = "text" name = "rprice" placeholder = "Regular item price">	
		<br>
		<input type = "text" name = "lprice" placeholder = "Large item price" >	
		<br>
		<br>
		<input type = "text" name = "img" placeholder = "image location">
		<pre style ="color:white"><?php if(isset($errors['img1'])) echo $errors['img1'];?></pre>
		
	
	
		<div>
		<br>
		<br>
		<input type = "submit" value = "Add to database" name = "add">
		</div>
		<div>
		<input type="reset" value="Reset" class = "reset">
		</div>
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
	

</body>



</html>
		