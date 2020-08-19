<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome ='eduardo';
$idade = 20;

//var_dump($nome);
//var_dump($idade);

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