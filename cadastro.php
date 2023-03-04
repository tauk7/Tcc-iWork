<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
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
    <link rel="stylesheet" type="text/css" href="modalcriar.css">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
</head>

<body>

    <div class="topo1">
        <img src="imagens/topo.png" width="300" class="float-left img-fluid" style="clear: both;">
    </div>
   <!-- <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastrar</h3>-->

                    
                    



                    <div class="container" >
                    <div class="box float-none" style="clear:both;" >
                       <br/>
                       <div class="alinhar">
                       <img src="imagens/icone.png" class="img-fluid img-icone" width="80">
                        <br/> 

                        <form action="" method="POST">
                            
                                    <input name="nome" type="text" class="campos" placeholder="Nome" autofocus>
                                    <br><br>
                                    <input name="usuario" type="text" class="campos" placeholder="Usuário">
                                    <br><br>
                                    <input name="senha" class="campos" type="password" placeholder="Senha">
                                    <br><br>
                            <button type="submit" name="cadastrar" class="button4">Cadastrar</button>
                        
                            <br><br>

                            <h4 class="mx-5">Já possui uma conta? <a href="index.php"> <font color="#ff4040"> Clique aqui </font></a> </h4>

                        </form>
                    </div>
                </div>
            </div><br>
        </div>
    </section>
    <footer>
         <img src="imagens/topo2.png" width="300" class="float-right img-fluid" style="clear:both; position: absolute; bottom: 0; right: 0;">
     </footer>
    


     <?php
if(isset($_POST["cadastrar"])){

    include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION["senha"] = $_POST['senha'];
$_SESSION["nome"] = $_POST['nome'];
$_SESSION["usuario"] = $_POST['usuario'];






                if($_SESSION["senha"] != "" and $_SESSION["nome"] != "" and $_SESSION["usuario"] !=""){

                    if($row['total'] != 0) {
   ?>


                    

                    
                    <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodale">
          <div class="modal-content">Este usuario já existe!</div>
          <div id="baixo2" class="modal-footer">
           <label  class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo2').click(function() { 
          document.location = '';
          } );
</script>
          </div>
          </div>
                    <?php 
                    
                    unset($_SESSION['usuario_existe']);
   
}else{




                    $sql2 = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conexao->query($sql2) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}
                    if(isset($_SESSION['status_cadastro'])):

                    ?>
                    
                   
                      <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodal">
          <div class="modal-content">Cadastro Efetuado!</div>
          <div id="baixo" class="modal-footer">
          <label class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          <script type="text/javascript"> 
          $('#baixo').click(function() { 
          document.location = 'index.php';
          } );
</script>
          </div>
          </div>
                    <?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                    
                }} else{ 

                    ?>
                    <input class="checker" type="checkbox" id="o" checked hidden>
          <div class="modal">
          <div class="caixamodale">
          <div class="modal-content">Algum campo está vazio!</div>
          <div id="baixo2" class="modal-footer">
           <label  class="label2"  for="o"><div class="textobtn">Voltar</div></label>
          </div>
          
          </div>

          </div>

                    <?php
                }
                 }
                    ?>



</body>

</html>