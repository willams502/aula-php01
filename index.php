<?php
    $html = "<h1>Olá mundo!</h1><p>Que bacana</p>";
    $html1 = "<h1>Sera?</h1>";
    $js = "<script> alert('clique em ok para continuar')</script>";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula PHP</title>
    </head>
    <body>
        <?php $ativado = "sim"; ?>
        <?php if($ativado = "sim"){ ?>}
        <h1> Está ativado sim!</h1>
        <?php }else {?>
            <h1>Não está ativado.</h1>
            <?php } ?>
    </body>
</html>
