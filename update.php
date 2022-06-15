<?php
$id= $_POST['id'];
$status= $_POST['status'];
$mysql = new mysqli('localhost', 'root', '', 'demobd2');
$result = $mysql->query("UPDATE `request1` SET  `status` = '$status' WHERE `id` = '$id'");

	header('Location: admin.php' );
	?>

<?php
$id= $_POST['id'];
$status= $_POST['status'];
$mysql = new mysqli('localhost', 'root', '', 'demobd2');
$result = $mysql->query("UPDATE `prob` SET  `status` = '$status' WHERE `id` = '$id'");

	header('Location: admin.php' );
	?>