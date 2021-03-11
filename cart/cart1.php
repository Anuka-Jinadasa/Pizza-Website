<!DOCTYPE html>
<html>
<?php
	include('../server/server.php');
?>

	<head>
		<title>Shopping cart</title>
		<link rel = "stylesheet" href = "../Common files/qwe.css">
		
		<img src = "../Common files/logo1.png" width = "15%" height = "auto">
		
			<a href = "../Home/home.html"><button>Home</button></a>
			<a href = "../menu/menu.html"><button>Menu</button></a>
			<button>Offers</button>
			<button>Packages</button>
			<button>Locations</button>
			<a href = "../Feedback/feed.html"><button>Feedback</button></a>
					
		
	
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
	</head>
	
	<style>
	
		div.cls1 {
			
			border-radius: 25px;
			background-color:#c2c2a3;
			opacity: 1;
			width: 50%;
			height:auto;
			text-align:center;
			padding: 20px;
			margin-left:500px;
			margin: 50px;
			margin-left:auto; 
			margin-right:auto;
		
			
			}

table {
			border-collapse: collapse;
			margin-left:auto; 
			margin-right:auto; 
		}

		th, td {
			text-align: center;
			padding: 8px;
			border: 1px solid black;
		}

tr:nth-child(even){background-color:#e0ebeb}
tr:nth-child(odd){background-color:#f0f5f5}

		th {
			background-color: #e0ebeb;
			color:black;
		}
		

	</style>

	<body>

		
		<div class ="cls1" >
	
			<h1 class ="heading">Shopping cart</h1> <br>
			
			<table>
		<tr>
		    <th>Item</th>
		   	<th>Quantity</th>
			<th>Price</th>
		   	<th>Sub Total</th>
		 </tr>
		
		<?php
		
			
		
		$sql = "SELECT * from cart";
		$result = mysqli_query($db,$sql);
		$result->num_rows;
		$total = 0;
		
    if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {?>

	<tr>
	
		<td>
			<?php echo $row['item'];?>
		</td>
	
		<td>
			<?php echo $row['qty'];?>
		</td>
		
		<td>
			<?php echo number_format($row['price'], 2);?>
		</td>
	
	
		<td>
			<?php echo number_format($row['price'] * $row['qty'], 2);$total += ($row['price'] * $row['qty']); ?>
		</td>

		<td>
			<a href ="<?php echo $_SERVER['PHP_SELF'];?>?delete_Item=<?php echo $row['Id'];?>">Remove</a>
		</td>
	
	
		</tr>
	
	<?php } } ?>	
	

	<tr>
		<th colspan = "3">Total cost</th>
		
		<td>
		<?php echo number_format($total, 2);?>
		</td>
	</tr>
		
			
</table>
			<br>
			<br>
			<button>Cheackout</button>
			<button>Add items</button>
			<br>
			<br>
			<br>
			
		
		
		</div>
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
	
	<?php 
	
		
	
	if( isset($_GET["delete_Item"])){
	$ID = $_GET["delete_Item"];
	
	$sql = "DELETE from cart where Id = $ID";
	
	if(mysqli_query($db,$sql))
	{
		header("location: cart1.php");
	
	}
	else
	{
		
	}
	}
	
	?>


	
	</body>
</html>