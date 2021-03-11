<?php 
//get the data of cv and store the cv file name in database
$conn = mysqli_connect("localhost","root","","pizza");

 $targetfolder = "testupload/";//saving the file in a folder

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))//cheaking the file has uploaded

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 
 }

 else {

 echo "Problem uploading file";

 }
 
//store the file name in database
 $sql = "INSERT INTO cv(cv)VALUES ('$targetfolder')";
 
 $result = $conn -> query($sql);
 
 ?>