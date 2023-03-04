<?php
if(!isset($_SESSION['usuario'])) {
	session_start();
	header('Location: index.php');
	exit();
}