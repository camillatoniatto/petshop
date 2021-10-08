<?php
    $arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $vacina = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $sim = 0;
    foreach($vacina as $valor){
        if($valor == "Sim"){
            $sim++;
        }
    }
    $nao = 0;
        foreach($vacina as $valor){
            if($valor == "Não"){
                $nao++;
            }
        }
        $outros = 0;
        foreach($vacina as $valor){
            if($valor == "Outro"){
                $outros++;
            }
        }
        echo "<b>Vacinados:</b> $sim animais.<br>";
        echo "<b>Precisam vacinar:</b> $nao animais.<br>";
        
?>