<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Exclusao de Produto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--JQuery, Popper e Bootstrap.min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



  </head>

  <body>
     <div class="container">
	    <h2> Exclusão de produto </h2>
		
		<?php
		   include "conexao.php";
		  
		   //pegando o id do produto a ser excluido
		   $id=$_GET["id"];
		    //echo $id;
		   //pasta onde estao as imagens de upload
		   $pastaArquivos= 'imagensAnuncio/';
		   
		    $comandoSqldel="delete from tb_produto where id_produto=$id";
 			$resultado=mysqli_query($conn,$comandoSqldel);
 			if($resultado){
 			 header("Location:meusanuncios.php");




 }

		?>
		 
	 </div>
    </body>
 </html>