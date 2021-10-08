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

<body>

        
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