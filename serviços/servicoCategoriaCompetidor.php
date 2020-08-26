<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecentes';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6 && $idade <=12)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias [$i] == 'infantil')
                {
                    setarMensagemSucesso("o nadador ".$nome. " compete na categoria ".$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if( $i == 'adolescente')
                {
                    setarMensagemSucesso( "o nadador ".$nome. " compete na categoria adolescente");
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias [$i] == 'adulto')
                {
                    setarMensagemSucesso( "o nadador ".$nome. " compete na categoria ".$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}