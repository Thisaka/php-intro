<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve ser maior que 3 caracteres';
    return;
}
if(strlen($nome) > 40)
{
    echo 'O nome não dve possuir mais de 40 caracteres';
    return;
}
if(!is_numeric($idade))
{
    echo 'informe um numero no campo idade';
    return;
}
if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if( $i == 'infantil')
            echo "o nadador ".$nome. " compete na categoria " . $categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if( $i == 'adolescente')
            echo "o nadador ".$nome. " compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if( $i == 'adulto')
            echo "o nadador ".$nome. " compete na categoria adulto";
    }
}