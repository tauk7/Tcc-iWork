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
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="anuncio.css">
    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body style="zoom:80%;  overflow: auto;  scroll-behavior: smooth;">
    <?php

    include "conexao.php";
        $pastaArquivos='imagensAnuncio/';
        $comandoSql="select * from tb_produto";
        $resultado=mysqli_query($conn,$comandoSql);
        $busca = isset($_POST['buscar']) ? $_POST['buscar'] : "";
        
    ?>
    <header>
   <nav class="navbar" style="position: relative; background-image:url(imagens/fundoazul1.png); height: 10em;" > <!-- topo --> 
     <a href="index2.php" class="navbar-brand"><img src="imagens/logobranco.png" width="75" style="margin-top:-40px;" class="navbar-logo"></a>

     <ul style="list-style: none;" class="ulul">
       <li class="lili">

        <ul class="ul1">
          

            <li class="li1"><a href="" class="nav-link"><img src="imagens/homebranco.png" width="35" style="margin-right:10px; margin-top:-40px;"> </a> 
            <!-- First Tier Drop Down -->
            <ul style="z-index: 1;" class="ul2">
                
                <li class="li2"><a class="a1" href="meuperfil.php">Meu Perfil</a></li>
                <li class="li2"><a class="a1" href="criaranuncio.php">Criar Anúncio</a></li>
                <li class="li2"><a class="a1" href="#">Buscar Anúncios</a></li>
                <li class="li2"><a class="a1" href="logout.php">Loggout</a></li>
            </ul>   
        </ul>
         


      </li>
     </ul>
  </div>
  </nav>
   </header>
 <br>
 <form action="" method="POST" enctype="multipart/form-data">
 <center>  <div id="divBusca">
  <input type="text" id="txtBusca" name="buscar" value="<?php echo $busca ?>" placeholder="Buscar..."/>
  <button class="botao1" type="submit" name="btnBusca" id="btnBusca" >
  <img src="imagens/pesquisar.png" id="btnBusca" alt="Buscar"/>
</button>
</div> 
</center>
</form>
    <div class="telaa"><br/><br/><br/>
         <?php
        

          $comandoSql2 = "SELECT * FROM tb_produto WHERE servico LIKE '%$busca%'";
          $resultadoservico = mysqli_query($conn, $comandoSql2);
          $dados=mysqli_fetch_assoc($resultadoservico);
          $quantidadeanuncio = "SELECT COUNT(case when servico like '%$busca%' then 1 else null end) as qtd FROM tb_produto";          
          $resultadoquantidade = mysqli_query($conn, $quantidadeanuncio);
          $seila = mysqli_fetch_assoc($resultadoquantidade);
          $qts2 = $seila["qtd"];
if($qts2 != 0){
          
          $id=$dados["id_produto"];
          $d=$dados["descricao"];
          $i=$dados["imagem"];
          $s=$dados["servico"];
          $r=$dados["regiao"];
          $t=$dados["telefone"];
          $pastaArquivos='imagensAnuncio/';
          ?>
          <a style="text-decoration:none" href="modal2.php?i=<?php echo $i; ?>&d=<?php echo $d; ?>&s=<?php echo $s; ?>&r=<?php echo $r; ?>&t=<?php echo $t; ?>" id="myModal">
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
    <spam style="width:200px;height: 30px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"class="titu"> <?php echo "$s"; ?> </spam> <br/>
          
    <spam class="desc"> <?php echo substr($d, 0, 30); echo '...'; ?> </spam>

  </div></a>
  <?php

            while($buscarservico = mysqli_fetch_array($resultadoservico)){
             
          $id=$buscarservico["id_produto"];
          $d=$buscarservico["descricao"];
          $i=$buscarservico["imagem"];
          $s=$buscarservico["servico"];
          $r=$buscarservico["regiao"];
          $t=$dados["telefone"];
          $pastaArquivos='imagensAnuncio/';
          ?>
          <a style="text-decoration:none" href="modal2.php?i=<?php echo $i; ?>&d=<?php echo $d; ?>&s=<?php echo $s; ?>&r=<?php echo $r; ?>&t=<?php echo $t; ?>" id="myModal">
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
    <spam style="width:200px;height: 30px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"class="titu"> <?php echo "$s"; ?> </spam> <br/>
          
    <spam class="desc"> <?php echo substr($d, 0, 30); echo '...'; ?> </spam>

  </div></a>
  <?php
}
}
  ?>
    </table>
  </div>
</body>
</html>