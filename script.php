<?php


include "serviços/servicoCategoriaCompetidor.php";
include "serviços/servicosMensagemSessao.php";
include "serviços/servicoValidacao.php";


//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

