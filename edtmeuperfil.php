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
    <link rel="stylesheet" type="text/css" href="modalcriar.css">
    <title>iWork</title>
    
    <link rel="icon" href="imagens/logo.png">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
    $resultadoservico = mysqli_query($conn, $comandoS);
    $buscarservico = mysqli_fetch_array($resultadoservico);


     $pastaArquivos='users/';    
     $i=$dados["imagem"];
     $t=$dados["telefone"];
     $r=$dados["regiao"];
     $nome=$dados["nome"];
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
    <br><br> <form action="" method="POST" enctype="multipart/form-data">
    <div class="telaaa">
    <div class="area-conteudo" style="float: left;">
    <br/><br/><br/><br/>
    <div class="personal-image">
  <label class="label">
    <input type="file" name="arquivo" id="arquivo">
    <figure class="personal-figure">
      <img src="<?php echo $pastaArquivos; echo $i; ?>" class="personal-avatar" id="img" alt="avatar">

               
                <script> 
                   $(function(){ 
                   $('#arquivo').change(function(){ 
                   const file = $(this)[0].files[0] 
                   const fileReader = new FileReader() 
                   fileReader.onloadend = function(){ 
                   $('#img').attr('src', fileReader.result)
                   } 
                   fileReader.readAsDataURL(file) 
                })  
                }) 
</script> 
      <figcaption class="personal-figcaption">
        <img src="imagens/cameraaltera.png">
      </figcaption>
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
    <input type="text" name="nome" class="campos" value="<?php echo $nome?>">
    <br/>
    <input type="text" name="telefone" class="campos2" value="<?php echo $t?>">
    <input type="password" name="senha" class="campos3" value="<?php echo $senha?>">
    <br/>
    <input type="text" name="regiao" class="campos" value="<?php echo $r?>">
    <br>  
     <input class="button4" type="submit" value="Salvar Dados" name="editar" id="editar" >
</form>
  </div>
  <br>



<?php


if(isset($_POST["editar"])){
       // echo "foi clicado no cadastrar";
        $contString = strlen($_POST["telefone"]);
        //echo $contString;
        //echo $t;
        if(($_POST["senha"])!=""&&($_POST["nome"])!=""&&($_POST["regiao"])!=""&&$contString=="11"){
         if(($_FILES["arquivo"]["name"]!="")){
        //echo "tem arquivo e descricao";
        
        //definindo uma pasta para os arquivos de upload
        $pastaArquivos='users/';

        //coletando o nome e o nome temporario da imagem selecionada
        $nomeArquivo=$_FILES["arquivo"]["name"];
        $nomeTemporario=$_FILES["arquivo"]["tmp_name"];
         
        //$tamanho=$_FILES["arquivo"]["size"];

        //echo "nome do arquivo $nomeArquivo";
        //echo "<br> nome temporario $nomeTemporario";
        //echo "<br> tamanho do arquivo $tamanho";
   
        
        //tentando copiar o temporario para a pasta de arquivos backupImagens 
        if(move_uploaded_file($nomeTemporario,$pastaArquivos.$nomeArquivo)){

          $nome = $_POST["nome"];
          $regiao = $_POST["regiao"];
          $telefone = $_POST["telefone"];
          $senha = $_POST["senha"];
          $criador = $_SESSION['usuario'];
          include "conexao.php";  
          //echo $senha;
          
          //criando o comando sql para inserir o produto
          $comandoSql="UPDATE usuario SET nome = '$nome' , imagem = '$nomeArquivo' , telefone = '$telefone' , regiao = '$regiao', senha = '$senha' WHERE usuario = '$criador';";
            //realizando a inclusao
          $resultado=mysqli_query($conexao,$comandoSql);
   
       // echo $comandoSql;
          if($resultado){

           ?>
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodal">
          <div class="modal-content">Perfil Alterado!</div>
          <div id="baixo" class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo').click(function() { 
          document.location = 'meuperfil.php';
          } );
</script>
          </div>
          </div>
           <?php

          }
        }



        else{
            ?>
           
          
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodale">
          <div class="modal-content">Dados Inválidos!</div>
          <div class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          </div>
          </div>
          
           <?php
        }
      }
      else{


          $nome = $_POST["nome"];
          $regiao = $_POST["regiao"];
          $telefone = $_POST["telefone"];
          $senha = $_POST["senha"];
          $criador = $_SESSION['usuario'];
          include "conexao.php";  
          
          $comandoSql="UPDATE usuario SET nome = '$nome' , telefone = '$telefone' , regiao = '$regiao', senha = '$senha' WHERE usuario = '$criador';";
           
          $resultado=mysqli_query($conexao,$comandoSql);
   
          if($resultado){

           ?>
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodal">
          <div class="modal-content">Perfil Alterado!</div>
          <div id="baixo" class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo').click(function() { 
          document.location = 'meuperfil.php';
          } );
</script>
          </div>
          </div>
           <?php





          }
        }


      }
      else{
            ?>
           
          
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodale">
          <div class="modal-content">Dados Inválidos!</div>
          <div class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          </div>
          </div>
          
           <?php
        }
    }
  
      
  
   
    ?>






</body>
</html>
