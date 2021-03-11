<!DOCTYPE html>
<html>
<?php //Linking the configuration file
include ('../server/server.php');
?>
<head>
<link rel = "stylesheet" href = "../Common files/qwe.css">
			
			<img src = "../Common files/logo1.png" width = "15%" height = "150px">
			<title>pasta</title>
			
			
			
			<a href = "../Home/home.html"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			
			<button>Image Gallery</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
					
			<a href = "../Login/login.html"><button class="login">Login or Register</button></a>
			
			
			
			
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.container {
		position: relative;
		width: 50%;
	}

	.image {
		opacity:1;
		display: block;
		width: 200%;
		height: 200px;
		transition: .5s ease;
		backface-visibility: hidden;
	}

	.middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		top: 155px;
		left: 55px;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
	}

	.container:hover .image{
		opacity: 0.3;
	}

	.container:hover .middle {
		opacity: 1;
	}
	
	.text {
	
		color: white;
		font-size: 22px;
		padding: 16px 20px;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}
				* {
						box-sizing: border-box;
					   }

				.column {
						float: left;
						width: 20%;
						padding: 5px;
		               }

				.row{
					margin-left:15%;
					}
				.row::after {
						content: "";
						clear: both;
						display: table;
						}
				table,th,td {
						margin-left:40%;
						border: 1px solid white;
						color:white;
						}
				.buttons{
					margin-left:30%;
					height:55px;
					width:150px;
				}			
</style>
</head>
<body>


		<div style = "text-align : center">
		<a href = "http://localhost/pizzamart/Menu/pizza.php"><button class ="button">Pizza</button></a>
		<a href= "http://localhost/pizzamart/Menu/pasta.php"><button>Pasta</button></a>
		<a href = "http://localhost/pizzamart/Menu/beverage.php"><button>Beverages</button></a>
		<a href = "http://localhost/pizzamart/Menu/other.php"><button>Others</button></a>
		</br>
		</br>
		</div>

<div class = "row">

<?php
	$sql = "SELECT * from product WHERE catagory = 'pasta'";
	$result = mysqli_query($db,$sql);
	$result ->num_rows;
	
	if ($result->num_rows > 0){
		while($row = $result->fetch_array()){?>
		
 <div class ="column">
  <div class="container">
   <img src="<?php  echo $row["img"];?>" alt="pizza" class="image"></br>
   <table>
	<tr>
		<th>S</th>
		<th>R</th>
		<th>L</th>
	</tr>
	<tr>
		<td>Rs.<?php echo $row["s_price"];?></td>
		<td>Rs.<?php echo $row["r_price"];?></td>
		<td>Rs.<?php echo $row["l_price"];?></td>
	</tr>
	</table>
	</br>
	<form method ="post">
		<select name = "qty"style ="width:100%;margin-left:50%;">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		<select style ="width:100%;margin-left:50%;" name = "size">
			<option>Small</option>
			<option>Regular</option>
			<option>Large</option>
		</select>
		<input type = "hidden" name = "hidden_name" value = "<?php echo $row["name"];?>">
		<input type = "hidden" name = "s" value = "<?php echo $row["s_price"];?>">
		<input type = "hidden" name = "r" value = "<?php echo $row["r_price"];?>">
		<input type = "hidden" name = "l" value = "<?php echo $row["l_price"];?>">
		<input style = "width:200%" type = "submit" value = "Add to cart" name = "add_to_cart">
		</br>
		</br>
		</br>
		</br>
		
		
	</form>
	
   <div class="middle">
    <div class="text"><b><?php echo $row['name'];?></br></b></br></br>
	</div>
	</div>
</div>  
</div>

<?php }}?>

</br>
</br>
</br>
</br>
</br>





<!-- footer  -->
	
	<div class="footer">
		
		<img class ="image_pay"src = "../Common files/pay.jpg">
		<img class = "image_social"src = "../Common files/social.jpg">
		
		<div class="btn-group">
			<a href ="../Contact us/c us.html"<button class="button">Contact us</button></a>
			<a href ="../about us and terms/about us.html"<button class="button">About us</button></a>
			<a href = "../careers/careers.html"><button class="button">Careers</button></a>
			<a href ="../about us and terms/terms.html"<button class="button">Terms of use</button></a>
		</div>
		

		
	</div>
	
	<!-- End of footer -->

			
	</body>	
	
	<?php 
		if(isset($_POST['add_to_cart']))
		{
			$name = $_POST['hidden_name'];
			$qty = $_POST['qty'];
			$size = $_POST['size'];
			$sprice = $_POST['s'];
			$rprice = $_POST['r'];
			$lprice = $_POST['l'];
			
			
			if($size == "Small" )
			{
				$sql = "INSERT INTO cart(item, qty, price) VALUES ('$name','$qty','$sprice')";
			}
			
			if($size == "Regular" )
			{
				$sql = "INSERT INTO cart(item, qty, price) VALUES ('$name','$qty','$rprice')";
			}
			
			if($size == "Large" )
			{
				$sql = "INSERT INTO cart(item, qty, price) VALUES ('$name','$qty','$lprice')";
			}
		
		
			if(mysqli_query($db,$sql))
			{
			
			}
			else
			{
				echo"Error:". $db->error;
			}
		}	
	
	mysqli_close($db);

?>
</html>

