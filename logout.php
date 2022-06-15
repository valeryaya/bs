<?php
session_start();
setcookie('user', $user['fio'], time() - 3600, "/");
header('Location: /');
?>