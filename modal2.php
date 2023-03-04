 <!doctype html>
<?php

if(!isset($_SESSION)){
session_start();
include('verifica_login.php');
}
$i=$_GET["i"];
$d=$_GET["d"];
$s=$_GET["s"];
$t=$_GET["t"];
$r=$_GET["r"];
$nome = $_SESSION['nome'];
$pastaArquivos = "imagensAnuncio/";
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
    <link rel="stylesheet" type="text/css" href="modal.css">
    <link rel="stylesheet" type="text/css" href="criar.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="anuncio.css">
    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body style="zoom:80%;">


<div id="myModal" style="overflow-x: hidden; overflow: auto; " class="modal">
  <div class="modal-content">
    <div style="
    
  background-image: url('<?php echo "$pastaArquivos$i"; ?>');
  background-size: 100%;
  width: auto;
  height: 100%;
  background-repeat: no-repeat;
  box-shadow: 0 0em 0.2em #808080;


    ">
    
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">

      <spam class="txt1"> <?php echo "$s"; ?> </spam> <br/><br/>
          
    <spam class="txt2"> <?php echo $d; ?></spam> <br/><br/><br/>

    <spam class="txt2" > <img src="imagensAnuncio/tel.png" width="20px"> <?php echo "$t"; ?> </spam> <br/><br/>

    </div>
    <div class="modal-footer">
      <spam class="txt2" style="margin-right: auto;"> <?php echo "$nome"; ?> </spam>  <spam class="txt2"> <?php echo "$r";?> </spam>
    </div>
  </div>
<br/><br/>
</div>

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





    <?php
    
    include "conexao.php";
    //echo $_SESSION['usuario'];
      
      
     
       ?>
    <header>
   <nav class="navbar" style="position: relative; background-image:url(imagens/fundoazul1.png); height: 10em;" > <!-- topo --> 
     <a href="index2.php" class=""><img src="imagens/logobranco.png" width="75" style="margin-top:-40px;" class="navbar-logo"></a>

     <ul style="list-style: none;" class="ulul">
       <li class="lili">

        <ul class="ul1">
          

            <li class="li1"><a href="" class="nav-link"><img src="imagens/homebranco.png" width="35" style="margin-right:10px; margin-top:-40px;"> </a> 
            <!-- First Tier Drop Down -->
            <ul class="ul2">
                
                <li class="li2"><a class="a1" href="meuperfil.php">Meu Perfil</a></li>
                <li class="li2"><a class="a1" href="criaranuncio.php">Criar Anúncio</a></li>
                <li class="li2"><a class="a1" href="#">Página Inicial</a></li>
                <li class="li2"><a class="a1" href="logout.php">Loggout</a></li>
            </ul>   
        </ul>
         


      </li>
     </ul>
  </div>
  </nav>
   </header>
 <br>
 <form action="pesquisaanuncio.php" method="POST" enctype="multipart/form-data">
 <center>  <div id="divBusca">
  <input type="text" id="txtBusca" name="buscar" placeholder="Buscar..."/>
  <button class="botao1" type="submit" name="btnBusca" id="btnBusca" >
  <img src="imagens/pesquisar.png" id="btnBusca" alt="Buscar"/>
</button>
</div> 
</center>
</form>
    <div class="telaa"><br/><br/><br/>






         <?php
        include "conexao.php";

        //pasta onde estao as imagens de upload
        $pastaArquivos='imagensAnuncio/';

        //definindo o comando sql a ser usado */
        $comandoSql="select * from tb_produto";

        //executando o comando sql */
         $resultado=mysqli_query($conn,$comandoSql);

        //pegando os dados armazenados e montar a tabela
        while($dados=mysqli_fetch_assoc($resultado)){
          $id=$dados["id_produto"];
          $d=$dados["descricao"];
          $i=$dados["imagem"];
          $s=$dados["servico"];
          $t=$dados["telefone"];
          $r=$dados["regiao"];
          ?>
          <a style="text-decoration:none" href="modal2.php?i=<?php echo $i; ?>&d=<?php echo $d; ?>&s=<?php echo $s; ?>&r=<?php echo $r; ?>&t=<?php echo $t; ?>" id="myModal">
          <div class="" style="
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


  </div></button>



            <?php
        }
         if(isset($_POST["btnBusca"])){
          if(($_POST["buscar"])!=""){
           
            header("Location:pesquisaanuncio.php");
          
            
         } 
         }

else{

}
    ?>
    </table>


    






  </div>
</body>
</html>