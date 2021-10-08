<?php
    $arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $pets = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>

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