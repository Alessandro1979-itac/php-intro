<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categotias = [];
    $categotias[] = 'infantil';
    $categotias[] = 'adolescente';
    $categotias[] = 'adulto';

    if ((validaNome($nome)) && (validaIdade($idade)))
    {
        removerMensagemErro();
        if (($idade >= 6) && ($idade <= 12))
        {
            for ($i = 0; $i <= count($categotias); $i++)
            {
                if ($categotias[$i] == 'infantil')
                {
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categotias[$i]);
                    return null;
                }
            }
        }
        elseif (($idade >= 13) && ($idade <= 18))
        {
            for ($i = 0; $i <= count($categotias); $i++)
            {
                if ($categotias[$i] == 'adolescente')
                {
                    setarMensagemSucesso("O nadador: ".$nome." compete na categoria ".$categotias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for ($i = 0; $i <= count($categotias); $i++)
            {
                if ($categotias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador: ".$nome." compete na categoria ".$categotias[$i]);
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