<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Petshop">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="index.html">
        <title>PetShop</title>
        <!-- STYLESHEET -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <style>{background-color: lightgrey;}</style>-->
    </head>
    <body>
        <!--JS PARA O MODAL FUNCIONAR-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        </div>             
        </header>
        <main>
            <section>
            <div class="container">                     
            <br>
            <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-justify">
                <div class="col">    
                    <div class="card" style="width: 80rem;">
                        <div class="card-header py-3"><!--HEADER-->
                        <img class="card-img-top" src="imagens/dogtor.png" width="20%" height="20%" alt="Gif cachorro">
  
                    </div>
                        <div class="card-body"><!--BODY-->
                            <h5 class="card-title">Qual é a importância das vacinas?</h5>                            
                            <p class="card-text">Atentar-se à vacinação dos pets é, além de proteger o animal de doenças infecciosas e seus agentes, 
                                cuidar da saúde de toda a família. Isso porque algumas enfermidades que acometem cães e gatos podem também ser contraídas pelos seres humanos. 
                                Assim, vacinar os bichinhos promove ainda a imunidade de rebanho, diminuindo o número de animais suscetíveis a doenças.</p>
                              <p class="card-text">Vacinar seu pet é um ato de carinho com ele, com sua família e toda sociedade!!</p>                          
                              <a href="pets.php" class="btn btn-warning">Quero vacinar!</a>   
                        </div>
                        </div>
                    </div>
                </div>
                

                <div class="col">    
                    <div class="card" style="width: 80rem;">
                        <div class="card-header py-3"><!--HEADER-->
                        <div class="card-body"><!--BODY-->
                            <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                            <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
                            </svg> Situação de animais cadastrados</h5>                            
                            <p class="card-text">
                                <?php
                                    include 'vacinacount.php';
                                ?>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <br><br>
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
