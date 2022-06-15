<?php 
session_start();
$name=$_POST['name'];
$age = $_POST['age'];
$rod=$_POST['rod'];
$tel=$_POST['tel'];
$date=date('Y-m-d H:i:s');
$status='Новая';


	$mysql = new mysqli('localhost', 'root', '', 'demobd2');
	$result= mysqli_query($mysql, "INSERT INTO `prob`( `name`, `age`, `rod`, `tel`, `date`, `status`) VALUES ('$name', '$age', '$rod', '$tel', '$date', '$status')");
	header('Location: index.php' );

?>