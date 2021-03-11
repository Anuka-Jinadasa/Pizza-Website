<!DOCTYPE html>
<html>
<?php //Linking the configuration file
include ('../server/server.php');
?>

	<head>
		<title>Orders list</title>
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

		
		
	
			<h1 class ="heading">Total orders list</h1>
	
			<table>
		<tr>
		    <th>Order ID</th>
		   	<th>Member ID</th>
			<th>Member name</th>
		   	<th>Price</th>
		 </tr>
		
		<?php
		$sql = "SELECT * from orders";
    $result = mysqli_query($conn,$sql);
     $result->num_rows;
	 $total = 0;
	 
    if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {?>
	 <tr><td><?php echo $row['orderID'];?></td>
	<td><?php echo $row['memberID'];?></td>
	 <td><?php echo $row['member_name'];?></td>
	 <td><?php echo $row['total_price']; $total += $row['total_price'];?></td>

	 </tr>
		<?php } } ?>	
		
	<tr>
		<th colspan = "3">Full total</th>
		<td><?php echo $total; ?></td>
	
	</tr>
</table>
		
			
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