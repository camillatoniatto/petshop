<?php
require 'Handler.php';
$dados = Handler::arrayHandler();
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Petshop">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="index.html">
        <title>PetShop</title>
        <!-- STYLESHEET -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--<style>body {background-color: #fffffff;}</style>-->
    </head>

    <header>   
    <div class="container-fluid" style="background-color: #754BBD">
        <br>
        <center><img src="imagens/logo-petshop.png" width="25%" height="25%"></center>            
            <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #754BBD">
                <div class="container-fluid">                    
                   <h3 class="text-light">
                   <!--LINK ICONE AQUI-->
                   PetShop</h3>
                   <ul class="nav justify-content-end">
                       <li class="nav-item">                                                                          
                           <a href="index.php"><button type="button" class="btn btn-outline-light btn-sm">Início</button></a> 
                           <a href="pets.php"><button type="button" class="btn btn-outline-light btn-sm">Nossos clientes</button></a>
                           <button type=" " class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#cadastroModal">Cadastre meu pet</button>                                                 
                       </li>
                    </ul>
                </div>
            </nav>             
        </header>
        <main>
        <div class="container overflow-hidden">
        <br>
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-justify">
                    <div class="col-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <!--HEADER-->
                                <h4 class="my-0 fw-normal">Pet cadastrado</h4>
                            </div>
                            <div class="card-body">
                                <!--BODY-->

                                <div class="card-body">                                                                      
                                    <ul>
                                    <li>Proprietário: <?= $dados['ppt']?></li>  
                                    <li>Nome do animal: <?= $dados['animal']?> </li> 
                                    <li>Espécie: <?= $dados['especie']?> </li> 
                                    <li>Raça: <?= $dados['raça']?></li> 
                                    <li>Sexo: <?= $dados['sexo']?></li> 
                                    <li>Vacinas em dia: <?= $dados['vacinas']?></li> 
                                    </ul>                               
                                </div>
                                <br>
                                <a href="pets.php" class="btn btn-warning">Voltar</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </section>
        </main>    

        <!--CÓDIGO JANELA MODAL-->
        <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">Cadastrar meu pet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                    <?php
                        include 'cadastro.html';
                    ?>
                </div>                
                 </div>
             </div>
             </div>
     
     
        <footer>
             <hr>
             <nav class="navbar fixed-bottom navbar navbar-light" style="background-color: #754BBD">
                 <div class="container-fluid">                  
                     <p class="text-light"> Desenvolvido por: Camilla Toniatto e Manoela Albuquerque</p>
                 </div>
             </nav>
         </footer>
    </body>
</html>