<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
$query2 = "select nome from usuario where usuario = '{$usuario}'";

$result = mysqli_query($conexao, $query);
$result2 = mysqli_query($conexao, $query2);
$row = mysqli_num_rows($result);
$row2 = mysqli_num_rows($result2);

if($row2 != 1){
	$_SESSION['usuario_autenticado'] = true;
	header('Location: index.php');
	exit();
}else if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header('Location: buscaranuncios.php');
	exit();
} else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}