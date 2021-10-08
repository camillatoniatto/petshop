<?php
    $arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $pets = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Petshop">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="index.html">
        <title>KATIAU automóveis</title>
        <!-- STYLESHEET -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style><!--body {background-color: lightgrey;}-->
        .card img {
            margin-top: 15px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            max-width: 130px;
        }

        .card {
            margin-left: 20px;
            width: 400px;
            background: #fff;

        }
        </style>
    </head>
    <body>
        <!--JS PARA O MODAL FUNCIONAR-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        <section>
        <div class="container">                               
                    <br>
                    <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-justify">
                        <div class="col">
                            <div class="card" style="width: 80rem;">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Nossos clientes</h4>
                                </div>
                                <div class="card-body">            
                                    <ul class="list-unstyled mt-3 mb-4">   
                                        
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Proprietário</th>
                                                <th scope="col">Animal</th>
                                                <th scope="col">Espécie</th>
                                                <th scope="col">Raça</th>
                                                <th scope="col">Sexo</th>
                                                <th scope="col">Vacinas em Dia</th>
                                                <th scope="col">Ações</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                                $numero = count($pets);
                                                $i = 0;
                                                while($i <= $numero-6){
                                            ?>
                                            <th scope="row"><?php echo $pets[$i]; ?></th>
                                            <td><?php echo $pets[$i+1]; ?></td>
                                            <td><?php echo $pets[$i+2]; ?></td>
                                            <td><?php echo $pets[$i+3]; ?></td>
                                            <td><?php echo $pets[$i+4]; ?></td> 
                                            <td><?php echo $pets[$i+5]; ?></td>
                                            <td> <a href="vacinar2.php?posicao=<?php echo $i; ?>" class="btn btn-outline-info btn-sm">Vacinar!</a>  <a href="excluir.php?posicao=<?php echo $i; ?>" class="btn btn-outline-danger btn-sm">Excluir</a></td>                                             
                                            <?php
                                                $i = $i + 6;
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    </ul>
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