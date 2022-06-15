<?php 
session_start();
$name_request=$_POST['name_request'];
$description = $_POST['description'];
$category=$_POST['category'];
$date=date('Y-m-d H:i:s');
$status='Новая';


	$mysql = new mysqli('localhost', 'root', '', 'demobd2');
	$result= mysqli_query($mysql, "INSERT INTO `request1`( `name_request`, `description`, `category`, `date`, `status`) VALUES ('$name_request', '$description', '$category', '$date', '$status')");
	header('Location: profile.php' );

?>