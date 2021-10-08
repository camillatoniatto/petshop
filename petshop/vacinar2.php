<?php
    //abrir o arquivo de txt para leitura
    $posicao = $_GET['posicao'];
    $arquivo = fopen("cadastro.txt", "r");
    while(!feof($arquivo)){
        $pet = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
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
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">                    
                   <h1 class="text-light">
                   <!--LINK ICONE AQUI-->
                   PetShop</h1>
                   <ul class="nav justify-content-end">
                       <li class="nav-item">                                                                          
                           <a href="index.php"><button type="button" class="btn btn-outline-light btn-sm">Início</button></a> 
                           <a href="pets.php"><button type="button" class="btn btn-outline-light btn-sm">Nossos clientes</button></a>
                           <button type=" " class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#cadastroModal">Cadastre meu pet</button>                                                 
                       </il>
                    </ul>
                </div>
            </nav>             
        </header>
        <main>
        <div class="container overflow-hidden">
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-justify">
                    <div class="col-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <!--HEADER-->
                                <h4 class="my-0 fw-normal">Agendar vacina</h4>
                            </div>
                            <div class="card-body">
                                <!--BODY-->

                                <form action="vacinar.php?posicao=<?php echo $posicao; ?>" method="POST">
                                    <div class="form-group">
                                        <label>Proprietário:</label>
                                        <p><?php echo $pet[$posicao]; ?></p>
                                        
                                        <label>Animal:</label>
                                        <p><?php echo $pet[$posicao + 1]; ?></p>
                                        <label>Espécie:</label>
                                        <p><?php echo $pet[$posicao + 2]; ?></p>
                                        <label>Raça:</label>
                                        <p><?php echo $pet[$posicao + 3]; ?></p>
                                        <label>Sexo:</label>
                                        <p><?php echo $pet[$posicao + 4]; ?></p>
                                      

                                    <input class="form-check-input" type="radio" name="vacinas" id="sim" value="Sim" checked>
                                    <label class="form-check-label" for="vacinas"><b>Vacinar meu pet</b></label>
                                                                          
                                    </div>
                                    <hr><br><br>
                                    <!--BOTÃO FORMULARIO-->
                                    <div class="position-relative">
                                        <div class="position-absolute bottom-0 end-0">
                                            <a href="pets.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
                                            <button type="submit" class="btn btn-outline-danger">Agendar vacina!</button>
                                        </div>
                                    </div>
                                </form>

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
             <nav class="navbar fixed-bottom navbar-dark bg-dark">
                 <div class="container-fluid">                  
                     <p class="text-light"> Desenvolvido por: ..</p>
                 </div>
             </nav>
         </footer>
    </body>
</html>