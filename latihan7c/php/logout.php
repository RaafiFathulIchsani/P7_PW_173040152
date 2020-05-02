<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location : login.php");
	exit;
}

session_destroy();
session_unset();
$_SESSION = [];


setcookie('username', ' ', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>