<?php

// criar a função que vai validar a variável nome.. então a função precisa receber essa variável para poder valida-la
// E todas as regas que estão para validar nome deve estar dentro dessa função 


function validaNome(string $nome)  : bool
{
    //empty verifica se a variável está vazia
    if(empty($nome))
    {
        $_SESSION ['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha novamente <br />';
        header('location: index.php');
        return false;
    }
    //strlen conta a quantidade de caracteres
    //Esse código evita a possibilidade de invasão... 
    else if(strlen($nome) < 3 )
    {
        $_SESSION ['mensagem-de-erro'] = 'Nome deve ter de 3 caracteres <br />';
        header( 'location: index.php');
        return false;   
    }

else if(strlen($nome) > 20 )
    {

        $_SESSION ['mensagem-de-erro'] = 'Nome deve ter até 40 caracteres <br />';
        header( 'location: index.php');
        return false;
    }
    return true;                                                                                                                                                                                                                                                   
}

function validaIdade(string $idade) : bool // : bool = > é o tipo de retorno que eu estou quero receber da função.
{
//is_numeric verifica se a string é um valor numerico.
if(!is_numeric($idade))
    {
        
        $_SESSION ['mensagem-de-erro'] = 'Digite a sua idade <br />';
        header( 'location: index.php');
        return false;

    }
    return true;
}


