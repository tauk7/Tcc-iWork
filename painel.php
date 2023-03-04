<?php

if(!isset($_SESSION)){
session_start();
include('verifica_login.php');
}
$criador = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>

<center> <h2>Seja bem-vindo, <?php echo $criador; echo"!" ?></h2></center>
<h2><center> <a href="logout.php">SAIR</a></h2>