<!doctype html>
 <?php

if(!isset($_SESSION)){
session_start();
include('verifica_login2.php');
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
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body>

    <header class="header">
   <nav class="navbar"> <!-- topo --> 
     <a href="index.html" class="navbar-brand"><img src="imagens/logo2.png" width="200" class="navbar-logo"></a>

     <ul style="list-style: none; justify-content: " class="ulul">
       <li class="lili">

        <ul class="ul1">
          

            <li class="li1"><a href="" class="nav-link"><img src="imagens/home.png" width="35" style="margin-right:10px; margin-top:0px;"> </a> 
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

    </header>
      <div class="conteudo">

         <img src="imagens/homem.png" class="img-fluid" style="position: ;" width="auto">
         <div class="texsobim"> Encontre o serviço que <br>procura aqui!  </div>

     </div>

     <section class="caixa">
      <div class="container">
       <div class="row">
          <div class="col-md-4 align-self-center">
           <img src="imagens/qualidade1.png" class="img-fluid mx-5 my-4" width="220">
          </div>
         <div class="col-md-4 align-self-center">
           <img src="imagens/qualidade2.png" class="img-fluid mx-5 my-4" width="220">
         </div>
         <div class="col-md-4 align-self-center">
          <img src="imagens/qualidade3.png" class="img-fluid mx-5 my-4" width="220">
         </div>
        </div>
       </div>
     </section>

     <section>
      <div class="container">
       <div class="titulo">
        <h1 class="display-3"> Como Criar Um Anúncio ? </h1>
        
       </div>
      </div>
     </section>

     <section>
       <div class="row etapas mx-3">
         <div class="col-md-5">
          <img src="imagens/etapa1.png" id="imagemfora" class="img-fluid" width="250" height="110%">
         </div>
         <div class="col-md-7">
          <h1 class="display-5 text-left"> Cadastre-se </h1>
          <br><br>
          <h4 class="font-weight-normal" style="margin-right:180px; margin-left:20px;">Em nossa pagina principal, clique em login e selecione "Cadastre-se" e preencha as informações
          </h4>
         </div>
       </div>
      </section>
      <br> <br>
      <section>
       <div class="row etapas mx-3">
         <div class="col-md-5">
          <img src="imagens/etapa2.png" id="ola-usuario" class="img-fluid" width="400" height="360">
         </div>
         <div class="col-md-7">
          <h1 class="display-5 text-left"> Crie seu Anúncio </h1>
          <br><br>
          <h4 class="font-weight-normal" style="margin-right:180px; margin-left:20px;">
            Após se cadastrar, abra as opções e clique em "Criar Anuncio".
          </h4>
         </div>
       </div>
      </section>
      <br> <br>
      <section>
       <div class="row etapas mx-3">
         <div class="col-md-5">
          <img src="imagens/etapa3.png" id="ola-usuario" class="img-fluid" width="400" height="360">
         </div>
         <div class="col-md-7">
          <h1 class="display-5 text-left"> Preencha os Campos  </h1>
          <br><br>
          <h4 class="font-weight-normal" style="margin-right:180px; margin-left:20px;">
            Preencha todos os campos e pronto !! Seu serviço está no ar !!.
          </h4>
         </div>
       </div>
      </section>

      <br><br>

      <section>
        <br>
       <div class="row mx-3">
         <div class="col-md-6">
          <h1 class="display-5 text-center font-weight-bold" style="margin-top:50px; margin-left: -110px"> O que é o iWork?  </h1>
          
          <h3 id="quemsomos" class="font-weight-normal" style="margin-left:80px;margin-top:5px;">
           O iWork é plataforma que irá te auxiliar a encontrar o profissional ideal pra você, zelando pela praticidade, confiabilidade e segurança
          </h3>
         </div>
         <div class="col-md-6">
           <img src="imagens/vetor.png" class="img-fluid" width="500" style="position: relative; top: -4.5em;">
         </div>
       </div>
      </section>

      <footer>
       <div class="container">

         <div class="row">
           <div class="col-md-6 text-left" style="padding: 10px; max-width: 33%;">
             <h5> Contato </h5>
              <p>Email: iwork@gmail.com <br>
                 Telefone: (17)99286-2586</p>
           </div>
           <div class="col-md-6 text-left" style="padding: 10px;  max-width: 33%; position: relative; left: 8em;">
             <h5>Redes Sociais </h5>
             <img src="imagens/facebook.png" style="position:relative;left: 0.8em;" width="25"> 
                <img src="imagens/instagram.png" style="position:relative;left: 2em;" width="25">
                <img src="imagens/twitter.png" style="position:relative;left:3em;" width="25"> 
           

           </div>
           <div class="col-md-6 text-left" style="padding: 10px;flex: 0 0 50%;  max-width: 33%; position: relative;left: 17em;">
             <h5> Conheça </h5>
              <p>Criadores <br></p>
           </div>
           
         </div>
       </div>
      </footer>






















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>