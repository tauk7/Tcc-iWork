 <!doctype html>
 <?php

if(!isset($_SESSION)){
session_start();
include('verifica_login.php');
}
include "conexao.php";

$nome = $_SESSION['nome'];
$criador = $_SESSION['usuario'];


?>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="meuperfil.css">

    <title>iWork</title>
    
    <link rel="icon" href="imagens/logo.png">
    
  </head>
  <body style="zoom:80%;">
    <header>
   <nav class="navbar" style="background-image: url(imagens/fundoazul1.png);"> <!-- topo --> 

    
     <a href="index2.php" class="navbar-brand"><img src="imagens/logobranco.png" width="75" class="navbar-logo"></a>
     

          

       <ul class="navbar-nav">
       <li class="nav-item">
        <ul class="ul1">
          

            <li class="li1"><a href="" class="nav-link"> <img src="imagens/homebranco.png" width="35" style="margin-right:10px"> </a> 
            <!-- First Tier Drop Down -->
            <ul class="ul2">
                
                <li class="li2"><a class="a1" href="#">Meu Perfil</a></li>
                <li class="li2"><a class="a1" href="criaranuncio.php">Criar Anúncio</a></li>
                <li class="li2"><a class="a1" href="buscaranuncios.php">Buscar Anúncios</a></li>
                <li class="li2"><a class="a1" href="logout.php">Loggout</a></li>
            </ul>   
        </ul>
        
      </li>
     </ul>
  

   </div>
   </nav>
    </header>

    <section>
    <nav id="menu-h">
        <ul>
            <li>
                <a href="buscaranuncios.php">
                    Buscar Anúncios
                </a>
            </li>
         
            <li><a href="#">Meu Perfil</a></li>
            
            <li><a href="meusanuncios.php">Meus Anuncios</a></li>

            <li><a href="index2.php">Sobre</a></li>
            
        </ul>
    </nav>
    </section>
    <?php
     $comandoSql4="SELECT * FROM usuario WHERE usuario LIKE '%$criador%'";
     $resultado=mysqli_query($conexao,$comandoSql4);
     $dados=mysqli_fetch_assoc($resultado);



    $comandoS = "SELECT * FROM tb_produto WHERE criador LIKE '%$criador%'";
    $resultadoservico = mysqli_query($conn,$comandoS);
    $buscarservico = mysqli_fetch_array($resultadoservico);


     $pastaArquivos='users/';    
     $i=$dados["imagem"];
     $t=$dados["telefone"];
     $r=$dados["regiao"];
     $n=$dados["nome"];
     $senha=$dados["senha"];
     $s='';
     if($buscarservico != ''){

     $s=$buscarservico["servico"];

   }

     if($i==''){

      $i='user.png';
     }
     if($t==""){
      if($buscarservico != ''){

     $t=$buscarservico["telefone"];

   }
       
     }
     if($r==""){

      if($buscarservico != ''){

      $r=$buscarservico["regiao"];

   }
     
     }
   
    
    
   
    

?>
    <br><br>
    <div class="telaaa">
    <div class="area-conteudo" style="float: left;">
    <br/><br/><br/><br/>
    <div class="personal-image">
  <label class="label" >
    <input type="file" / disabled >
    <figure class="personal-figure">
    <img src="<?php echo $pastaArquivos; echo $i; ?>" class="personal-avatar" id="img" alt="avatar">

               
    </figure>
  </label>

  <br>
   <div class="title2"> <?php echo $nome?> </div>
    <div class="title3"> 
    <?php echo $s; echo ' '; echo $r;?><br/>   </div>
    <br/><br/><br/><br/><br/>
<section>
 <div class="vertical-menu">
  <a href="logout.php">Loggout</a>
</div>
</section>
</div>
   </div>
   <br> 
    <input type="text" name="telefone" class="campos" value="<?php echo $n?>" disabled >
    <br/>
    <input type="text" name="telefone" class="campos2" value="<?php if($t!=''){ echo $t; }else{ }?>" disabled  >
    <input type="password" name="telefone" class="campos3" value="<?php echo $senha?>" disabled >
    <br/>
    <input type="text" name="telefone" class="campos" value="<?php echo $r?>" disabled >
    <br>  
     <a href="edtmeuperfil.php" style="text-decoration: none;"><input class="button4" type="submit" value="Editar Dados" name="editar" id="editar"  ></a>
  </div>
  <br>
</body>
</html>
