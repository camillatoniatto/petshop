<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("cadastro.txt","r");
    $arquivo2 = fopen("cadastro2.txt","a+");
    while (!feof($arquivo)){
        $pet = explode("|",fgets($arquivo));
    }
    fclose($arquivo);
    $exclui = $posicao + 3;
    for($i = $posicao; $i < $exclui; $i++){
        unset($pet[$i]);
    }
    $animal = array();
    foreach($pet as $pet2){
        $animal[] = $pet2;
    }
    unlink("cadastro.txt");
    rename("cadastro2.txt","cadastro.txt");
    $arquivo = fopen("cadastro.txt","a+");
    $contador = count($animal);
    $i = 0;
    while($i <= $contador - 1){
        $gravar = $animal[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
            alert('Cadastro excluido com sucesso!');
            window.location.href='index.php';
            </script>";
?>