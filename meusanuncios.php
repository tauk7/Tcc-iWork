 <!doctype html>
 <?php

if(!isset($_SESSION)){
session_start();
include('verifica_login.php');
}
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
   <nav class="navbar" style="background-image:url(imagens/fundoazul1.png);"> <!-- topo --> 
     <a href="index2.php" class="navbar-brand"><img src="imagens/logobranco.png" width="75" class="navbar-logo"></a>

     <ul style="list-style: none;" class="ulul">
       <li class="lili">

        <ul class="ul1">
          

            <li class="li1"><a href="" class="nav-link"><img src="imagens/homebranco.png" width="35" style="margin-right:10px; margin-top:0px;"> </a> 
              <br>
            <!-- First Tier Drop Down -->
            <ul style="z-index: 1;" class="ul2">
                
                <li class="li2"><a class="a1" href="meuperfil.php">Meu Perfil</a></li>
                <li class="li2"><a class="a1" href="criaranuncio.php">Criar Anúncio</a></li>
                <li class="li2"><a class="a1" href="buscaranuncios.php">Buscar Anúncios</a></li>
                <li class="li2"><a class="a1" href="logout.php">Loggout</a></li>
            </ul>   
        </ul>
         


      </li>
     </ul>
  </div>
  </nav>
  <section>
    <nav id="menu-h">
        <ul>
            <li>
                <a href="buscaranuncios.php">
                    Buscar Anúncios
                </a>
            </li>
         
            <li><a href="meuperfil.php">Meu Perfil</a></li>
            
            <li><a href="#">Meus Anuncios</a></li>

            <li><a href="index2.php">Sobre</a></li>
            
        </ul>

    </nav>

    </section>
  
    
      <?php 
          include "conexao.php";
          $criador = $_SESSION['usuario'];
          $comandoSql2 = "SELECT * FROM tb_produto WHERE criador LIKE '$criador'";
          $resultadoservico = mysqli_query($conn, $comandoSql2);
     if($buscarservico = mysqli_fetch_array($resultadoservico)){

          include "conexao.php";
          $pastaArquivos='imagensAnuncio/';
          $busca = isset($_POST['buscar']) ? $_POST['buscar'] : "";
          $criador = $_SESSION['usuario'];
          $comandoSql2 = "SELECT * FROM tb_produto WHERE criador LIKE '$criador'";
          $resultadoservico = mysqli_query($conn, $comandoSql2);
          $dados=mysqli_fetch_assoc($resultadoservico);


          
          $id=$dados["id_produto"];
          $d=$dados["descricao"];
          $i=$dados["imagem"];
          $s=$dados["servico"];
          $r=$dados["regiao"];
          $pastaArquivos='imagensAnuncio/';
          ?>
          <div class="" style="position: relative;
  height: 25.5em;
  width: 20em;
  background-image: url('<?php echo "$pastaArquivos$i"; ?>');
  background-color: #ffff;
  background-size: auto 70%;
  background-position: top;
  background-repeat: no-repeat;
  border-radius: 10px;
  box-shadow: 0 0.1em 0.5em #808080;
  display: inline-flex;
  margin-left: 7.5em;
  margin-top: 50px;"> <br/> <br/> 
<a href="excluiranuncio2.php?id=<?php echo $id; ?>">
  <input type="image" id="xzin2" class="imagemx3" align="right" src="imagensAnuncio/x.png" width="13.5px" height="20.47px" border="0" alt="Submit" /> </a>



     <spam style="width:200px;height: 30px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"class="titu"> <?php echo "$s"; ?> </spam> <br/>
          
    <spam class="desc"> <?php echo substr($d, 0, 30); echo '...'; ?> </spam>
     

  </div>
  <?php


            while($buscarservico = mysqli_fetch_array($resultadoservico)){
             
          $id=$buscarservico["id_produto"];
          $d=$buscarservico["descricao"];
          $i=$buscarservico["imagem"];
          $s=$buscarservico["servico"];
          $r=$buscarservico["regiao"];
          $pastaArquivos='imagensAnuncio/';
          ?>
          <div class="" style="position: relative;
  height: 25.5em;
  width: 20em;
  background-image: url('<?php echo "$pastaArquivos$i"; ?>');
  background-color: #ffff;
  background-size: auto 70%;
  background-position: top;
  background-repeat: no-repeat;
  border-radius: 10px;
  box-shadow: 0 0.1em 0.5em #808080;
  display: inline-flex;
  margin-left: 7.5em;
  margin-top: 50px;"> <br/> <br/> 
  
<a href="excluiranuncio2.php?id=<?php echo $id; ?>">
  <input type="image" id="xzin2" class="imagemx3" align="right" src="imagensAnuncio/x.png" width="13.5px" height="20.47px" border="0" alt="Submit" /> </a>


    <spam style="width:200px;height: 30px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"class="titu"> <?php echo "$s"; ?> </spam> <br/>
          
    <spam class="desc"> <?php echo substr($d, 0, 30); echo '...'; ?> </spam>
     

  </div>
  <?php
}
}
else{?>
  <br><br><br>
<?php 
}
  ?>

    </section>
    <br><br>

</body>
</html>
