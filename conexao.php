<?php
   //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
   $conn=mysqli_connect("localhost","root", "","iwork");
   $conexao=mysqli_connect("localhost","root", "","login");
   
  //2- verificando se a conexao foi estabelecida
 if(mysqli_connect_errno()){
	echo "Erro ao conectar: " . mysqli_connect_error();
}else{
	//echo "Conexão ok";
	
}



?>