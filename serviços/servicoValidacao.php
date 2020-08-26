<?php


function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('o nome não pode ser vazio, por favor preencha o novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro('o nome não pode conter menos de tres caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('o nome não pode conter mais de 40 caracteres');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        $_SESSION['mensagem de erro'] = 'informe um numero no campo idade';
        return false;
    }
    return true;
}


