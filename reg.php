<?php 
session_start();
 $fio = filter_var(trim($_POST['fio']), FILTER_SANITIZE_STRING);
 $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
 $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
 $passch = filter_var(trim($_POST['passch']), FILTER_SANITIZE_STRING);

 if(mb_strlen($fio) < 5 || mb_strlen($fio) > 90) {
	echo "Недопустимая длина ФИО";
	exit();
}else if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
	echo "Недопустимая длина логина";
	exit();
}else if(mb_strlen($email) < 3 || mb_strlen($email) > 20) {
	echo "Недопустимая длина email";
	exit();
}else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
	echo "Недопустимая длина пароля(от 2ух до 6 символов)";
	exit();
}else if($_POST['pass'] == $_POST['passch'])
  	{
    	$pass = $_POST['pass'];
 	}else
    {
      	echo "<h4><span>Пароль не совпадает. Пожалуйста, вернитесь назад и исправьте...</span></h4>"; 
   		exit();
}

$mysql = new mysqli('localhost', 'root', '', 'demobd2');
$mysql->query("INSERT INTO `users` (`fio`,`login`,`email`,`pass`) VALUES('$fio','$login','$email','$pass')");

$mysql->close();

header('Location: /');

?>


 

