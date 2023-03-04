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

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="modalcriar.css">
    <title>iWork</title>
    <link rel="icon" href="imagens/logo.png">
</head>

<body style="zoom:1.5;">

    <div class="topo1">
        <img src="imagens/topo.png" width="300" class="float-left img-fluid" style="clear: both;">
    </div>
   <!-- <section class="fundo is-fullheight">

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">-->

                    
                     <?php
                     if(isset($_SESSION['usuario_autenticado'])):
                    ?>
                   <input class="checker" type="checkbox" id="o" checked hidden>
                    <div class="modal">
                    <div class="caixamodale">
                    <div class="modal-content">Este usuario não existe!</div>
                    <div id="baixo2" class="modal-footer">
                     <label  class="label2"  for="o"><div class="textobtn">Voltar</div></label>
                     </div>
          
                     </div>
                     </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_autenticado']);
                   
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                   <input class="checker" type="checkbox" id="o" checked hidden>
                    <div class="modal">
                    <div class="caixamodale">
                    <div class="modal-content">Senha incorreta!</div>
                    <div id="baixo2" class="modal-footer">
                     <label  class="label2"  for="o"><div class="textobtn">Voltar</div></label>
                     </div>
          
                     </div>
                     </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="container" >
                    <div class="box float-none" style="clear:both;" >
                        <center>
                       <br/>
                       <div class="alinhar">
                       <img src="imagens/icone.png" class="img-fluid img-icone" width="80">
                        <br/> <br/> 
                       <form action="login.php" method="POST">
                        
                               <h5 class="title">Usuário</h5>
                               
                                    <input name="usuario" class="campos" placeholder="Seu usuário">
                               
                            <br><br>

                                 
                                <h5 class="title">Senha</h5>
                                
                                    <input name="senha" class="campos" type="password" placeholder="Sua senha">
                               
                            <br> <br> <br> 
                            <button type="submit" class="button4 font-weight-bold">Entrar</button>
                            <br> <br> <br>
                            <h4 class="mx-5"> Não possui uma conta? <a href="cadastro.php"> <font color="#ff4040"> Clique aqui </font></a>  </h4>

                        </form>
                    </div>
                    </center>
                </div>

            </div>
        </div>
        </div>
        <br>
    <!--</section>-->
     <footer>
         <img src="imagens/topo2.png" width="300" class="float-right img-fluid" style="clear:both;position: absolute; bottom: 0; right: 0;">
     </footer>
    
</body>

</html>