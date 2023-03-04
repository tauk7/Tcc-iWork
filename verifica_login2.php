<?php
if(!isset($_SESSION['usuario'])) {
	session_start();
	header('Location: index3.php');
	exit();
}