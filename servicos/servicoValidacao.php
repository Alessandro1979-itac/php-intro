<?php

function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o!');
        return false;
    }
    elseif (strlen($nome) < 3)
    {
        setarMensagemErro('O nome não pode conter menos de 3 caracteres!');
        return false;
    }
    elseif (strlen($nome) > 40)
    {
        setarMensagemErro('O nome não pode conter mais 40 caracteres!');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if ((!is_numeric($idade)) || ($idade <= 0)) {
        setarMensagemErro('A idade não pode está vazia, e informe um número maior que zero!');
        return false;
    }
        return true;
}
