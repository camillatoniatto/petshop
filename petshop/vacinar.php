<?php
    $arquivo = fopen("cadastro.txt", "r");
    $arquivo2 = fopen("cadastro2.txt", "a+");
    while(!feof($arquivo)){
        $pets = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $posicao = $_GET['posicao'];
    $vacinas = $_POST['vacinas'];
    $pets[$posicao+5] = $vacinas;

    unlink("cadastro.txt");
    rename("cadastro2.txt", "cadastro.txt");
    $arquivo = fopen("cadastro.txt", "a+");
    $contador = count($pets);
    $i = 0;

    while($i <= $contador - 1){
        $gravar = $pets[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo);
    echo "<script>alert('Animal vacinado!');
            window.location.href='index.php';</script>";
?>