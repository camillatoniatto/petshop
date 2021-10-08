<?php
class Handler{
    public static function arrayHandler(){
        $a = array();
        $a['ppt'] = $_POST['ppt'];
        $a['animal'] = $_POST['animal'];
        $a['especie'] = $_POST['especie'];
        $a['raça'] = $_POST['raça'];
        $a['sexo'] = $_POST['sexo'];
        $a['vacinas'] = $_POST['vacinas'];

    //organizando os valores no array    
    $gravar = $_POST['ppt']."|".$_POST['animal']."|".$_POST['especie']."|".$_POST['raça']."|".$_POST['sexo']."|".$_POST['vacinas']."|";

    //salvando array no arquivo de texto
    $arquivo = fopen('cadastro.txt','a+');
    fwrite($arquivo,$gravar); //.PHP_EOL
    fclose($arquivo);
    return $a;
    }
}
?>
