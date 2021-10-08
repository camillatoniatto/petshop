<?php
require 'Handler.php';
$dados = Handler::arrayHandler();
?>

<div class="card-body">                                  
    <h5>Pet cadastrado</h5>
    <ul>
    <li>Proprietário: <?= $dados['ppt']?></li>  
    <li>Nome do animal: <?= $dados['animal']?> </li> 
    <li>Espécie: <?= $dados['especie']?> </li> 
    <li>Raça: <?= $dados['raça']?></li> 
    <li>Sexo: <?= $dados['sexo']?></li> 
    <li>Vacinas em dia: <?= $dados['vacinas']?></li> 
    <ul>                               
</div>