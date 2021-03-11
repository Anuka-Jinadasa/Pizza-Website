<?php
//get the payment data
    $type = $_POST["type"];
    $venue = $_POST["when"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$method = $_POST["method"];
	$Card_holder_name = $_POST['Card_holder_name'];
	$Card_no = $_POST["Card_no"];
	$code_no = $_POST["cord_no"];
	$expair_date = $_POST["expair_date"];
	$contact = $_POST["contact"];
	$address = $_POST["address"];
	
	
/*	if(empty($type)){
	echo "<script type='text/javascript'>alert('type can not be empty!')</script>";
}
else if(empty($venue)){
	echo "<script type='text/javascript'>alert('venue can not be empty!')</script>";
}
else if(empty($date)){
	echo "<script type='text/javascript'>alert('Date can not be empty!')</script>";
}
else if(empty($time)){
	echo "<script type='text/javascript'>alert('Time can not be empty!')</script>";
}
else if(empty($method)){
	echo "<script type='text/javascript'>alert('Method can not be empty!')</script>";
}
else if(empty($Card_holder_name)){
	echo "<script type='text/javascript'>alert('Card holder name can not be empty!')</script>";
}
else if(empty($Card_no)){
	echo "<script type='text/javascript'>alert('Card No can not be empty!')</script>";
}
else if(empty($code_no)){
	echo "<script type='text/javascript'>alert('Code No can not be empty!')</script>";
}
else if(empty($expair_date)){
	echo "<script type='text/javascript'>alert('Expair Date can not be empty!')</script>";
}
else if(empty($contact)){
	echo "<script type='text/javascript'>alert('Contact No can not be empty!')</script>";
}
else if(empty($address)){
	echo "<script type='text/javascript'>alert('Address can not be empty!')</script>";
}
else{*/
    $file = fopen('userpaymentdetails.txt', 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content =$type. PHP_EOL .$venue. PHP_EOL .$date. PHP_EOL .$time. PHP_EOL .$method. 
	PHP_EOL .$Card_holder_name. PHP_EOL .$Card_no. PHP_EOL .$code_no. PHP_EOL .$expair_date. PHP_EOL .$contact. PHP_EOL .$address;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["pizza"]));
//}
?>








