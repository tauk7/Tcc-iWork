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
    <link rel="stylesheet" type="text/css" href="criar.css">
   <link rel="stylesheet" type="text/css" href="modalcriar.css">
  <!--JQuery, Popper e Bootstrap.min.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body>
    <?php 
    $pastaArquivos='imagensAnuncio/';    
    $i='preview.png';

    ?>
    <header>
   <nav class="navbar" style="background-image: url(imagens/fundoazul2.png); height: 20em;"> <!-- topo --> 
     <a href="index2.php" class="navbar-brand"><img src="imagens/logobranco.png" width="75" style="margin-top:-8.5em;" class="navbar-logo"></a>

     <ul class="navbar-nav">
       <li class="nav-item">

        <li class="li1"><a href="" class="nav-link"><a href="" class="nav-link"> <img src="imagens/homebranco.png" width="35" style="margin-right:10px; margin-top:-11.5em;"> </a>
            <!-- First Tier Drop Down -->
            <ul style="z-index: 1;" class="ul2">
                
                <li class="li2"><a class="a1" href="meuperfil.php">Meu Perfil</a></li>
                <li class="li2"><a class="a1" href="#">Criar Anúncio</a></li>
                <li class="li2"><a class="a1" href="buscaranuncios.php">Buscar Anúncios</a></li>
                <li class="li2"><a class="a1" href="logout.php">Loggout</a></li>
            </ul>
        


      </li>
     </ul>
   </div>
   </nav>
    </header>

    <section>
      <div class="container">
        <br>
        <div class="box1" style="position: relative; margin-top: 0px; margin-top:-8em;">
          <div>
            <div id="esquerda">
            <br>
          <h4 class="display-4 font-weight-bold" style="margin-top:20px;margin-left:150px; margin-right:150px; text-align: center;display: block; height: auto"> Crie Um Anúncio </h4>
          <br>
         <form action="" method="POST" enctype="multipart/form-data">
            <p class="title"> Qual sua especialidade:</p>
            <br>

            <input type="text" name="servico" class="campos" placeholder="Ex: Pintor">
            <br>
            <br>

             <p class="title"> Adicione telefone pra contato:</p>
             <br>

            <input type="text" name="telefone" class="campos" placeholder="Ex: 17 992862586">
            <br><br>
            <p class="title">Selecione sua região:<p>
              <br>

              <div class="alinhar2">
              <div class="select" style="width:53%;">
            <select name="regiao" id="form-data">
                <option selected disabled>Escolha sua cidade...</option>
                <option value="São José do Rio Preto">São José do Rio Preto</option>
                <option value="Mirassol" >Mirassol</option>
                <option value="Cedral">Cedral</option>
                <option value="Bady Bassit">Bady Bassit</option> 
                <option value="Uchoa" >Uchoa</option> 
            </select>
          </div>  
        </div>
      </div>
      <br>

     

            <p class="title"> Descreva o anuncio:</p>
            <br>

           
            <textarea name="descricao" class="areatexto" placeholder="Ex: Pintor de Kitnet com experiencia " rows="5" cols="33"></textarea>
            
            <img class="img2" align="right" src="<?php echo $pastaArquivos; echo $i; ?>" width='400' height='235' id="img" /> 
            
               
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
       <label class="labelarquivo" for="arquivo">Enviar arquivo</label>
            <input class="a" type="file" name="arquivo" id="arquivo">
            <br><br><br>
            <input class="button4" type="submit" value="Finalizar Anuncio" name="cadastrar" id="cadastrar" >
          
          </form>
        </div>
        </div>
        <br><br>
      </div>
    </section>

    <?php
      
      //verificando se o botao cadastrar foi clicado
      if(isset($_POST["cadastrar"])){
       // echo "foi clicado no cadastrar";

        $contString = strlen($_POST["telefone"]);
        if(($_FILES["arquivo"]["name"]!="")&&($_POST["descricao"])!=""&&($_POST["servico"])!=""&&($_POST["regiao"])!=""&&$contString=="11"){
        //echo "tem arquivo e descricao";
        
        //definindo uma pasta para os arquivos de upload
        $pastaArquivos='imagensAnuncio/';

        //coletando o nome e o nome temporario da imagem selecionada
        $nomeArquivo=$_FILES["arquivo"]["name"];
        $nomeTemporario=$_FILES["arquivo"]["tmp_name"];
         
        //$tamanho=$_FILES["arquivo"]["size"];

        //echo "nome do arquivo $nomeArquivo";
        //echo "<br> nome temporario $nomeTemporario";
        //echo "<br> tamanho do arquivo $tamanho";
   
        
        //tentando copiar o temporario para a pasta de arquivos backupImagens 
        if(move_uploaded_file($nomeTemporario,$pastaArquivos.$nomeArquivo)){
          $descricao = $_POST["descricao"];
          $servico = $_POST["servico"];
          $telefone = $_POST["telefone"];
          $regiao = $_POST["regiao"];
          $criador = $_SESSION['usuario'];
          include "conexao.php";
          
          //criando o comando sql para inserir o produto
          $comandoSql="insert into tb_produto(descricao,servico,criador,imagem,regiao,telefone) 
                       values('".$descricao."','".$servico."','".$criador."','".$nomeArquivo."','".$regiao."','".$telefone."')";
            //realizando a inclusao
          $resultado=mysqli_query($conn,$comandoSql);
         
        

          if($resultado){

           ?>
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodal">
          <div class="modal-content">Anúncio Cadastrado!</div>
          <div id="baixo" class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo').click(function() { 
          document.location = 'meusanuncios.php';
          } );
</script>
          </div>
          </div>
           <?php
          }
        }



        }else{
            ?>
           
          
          <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodalee">
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