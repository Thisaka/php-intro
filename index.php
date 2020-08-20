<?php
    session_start();
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
        $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
        if(!empty($mensagemDeSucesso))
        {
        echo $mensagemDeSucesso;
        }

        $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
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