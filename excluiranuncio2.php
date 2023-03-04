 <!doctype html>
 <?php

if(!isset($_SESSION)){
session_start();
include('verifica_login.php');
 $id=$_GET["id"];
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="meuperfil.css">
    <link rel="stylesheet" type="text/css" href="modalcriar.css">
    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body style="zoom:80%;">


<input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodale">
          <div class="modal-content" style="display: inline;">Tem certeza?
            <input type="image" id="xzin" class="imagemx2" align="right" src="imagensAnuncio/x.png" width="20px" height="27.47px" border="0" alt="Submit" /></div>
          <div id="baixo" class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Excluir</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo').click(function() { 
          document.location = 'excluiranuncio.php?id=<?php echo $id; ?>';
          } );
</script>
<script type="text/javascript"> 
          $('#xzin').click(function() { 
          document.location = 'meusanuncios.php?>';
          } );
</script>
          </div>
          </div>



    <?php 
    if(isset($_POST["excluir"])){
        include "conexao.php";
    
        //echo $id;
       //pasta onde estao as imagens de upload
       $pastaArquivos= 'imagensAnuncio/';
       
        $comandoSqldel="delete from tb_produto where id_produto=$id";
      $resultado=mysqli_query($conn,$comandoSqldel);
      if($resultado){
       
header("Location:meusanuncios.php");
}
}

    ?>
   


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

  modal.style.display = "block";

span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>






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
    
    <h4 class="display-4 font-weight-bold" style="margin-top:20px;margin-left:150px; margin-right:150px; text-align: center;display: block; height: auto"> Meus anuncios</h2>
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

<a href="excluiranuncio2.php?id=<?php echo $id; ?>"><input type="submit" class="imagemx" value="X" name="excluir" src="imagensAnuncio/x.png" width="10px" height="15px" alt="Submit feedback"></a>


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
  
<a href="excluiranuncio2.php?id=<?php echo $id; ?>"><input type="submit" class="imagemx" value="X" name="excluir" src="imagensAnuncio/x.png" width="10px" height="15px" alt="Submit feedback"></a>

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
