<?php
include "serviços/servicosMensagemSessao.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <title> formulario de inscrição</title>
    <meta name="autor" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</P>

<form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
        echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="enviar dados do competidor" /></p>
</form>

</body>

</html>