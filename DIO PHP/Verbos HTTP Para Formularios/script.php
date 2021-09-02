<?php

session_start();

/*
Exercício do curso básico de PHP da Digital inovation one * DIO
Criar um projeto para uma competição de natação. 
O sistema devera permitir a inserção de competidores com seu nome e idade, e o sistema 
deverá identificar em qual categoria o nadador irá competir. Por Exemplo, de 6 a 12 anos 
categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto.
O sistema deverá retornar a categoria para cada nadador que for cadastrado.
 */
// print_r('Teste simples para ver se ele está com o retorno correto do array');

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

// teste simples para ver se ele está com o retorno correto do array
// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//empty verifica se a variável está vazia
if(empty($nome))
{
    $_SESSION ['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha novamente <br/>';
    //header( String 'location: index.php'); Da maneira ensinada pelo prof da erro acho que houve atualização no PHP
    header( 'location: index.php');
 
}

//strlen conta a quantidade de caracteres
//Esse código evita a possibilidade de invasão... 
if(strlen($nome) < 3 )
{
    $_SESSION ['mensagem-de-erro'] = 'Nome deve ter de 3 caracteres <br />';
    header( 'location: index.php');

}

if(strlen($nome) > 20 )
{

    $_SESSION ['mensagem-de-erro'] = 'Nome deve ter até 40 caracteres <br />';
    header( 'location: index.php');
}

//is_numeric verifica se a string é um valor numerico.
if(!is_numeric($idade))
{
    
    $_SESSION ['mensagem-de-erro'] = 'Digite a sua idade <br />';
    header( 'location: index.php');

}


// Dá informação de tipo de variável temos 
//var_dump($nome); 
//var_dump($idade);
//return 0;

// O laço vai pegar as categorias para ver em qual o usuário se enquadra
//Essa lógica deve ser melhorada pois está trazendo a informação de adulto para as outras opções que não estão 
// dentro dessa lógica.
if ($idade >= 6 && $idade <= 12) 
{
    // Vamos usar laço de repetição
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i]== 'infantil')
            echo "O nadador ". $nome. " compete na modalidade infantil";
    }
}else if ($idade >= 13 && $idade <= 18) 
{
    // Vamos usar laço de repetição
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i]== 'adolescente')
            echo "O nadador ". $nome. " compete na modalidade adolescente";
    }
}else if ($idade >= 18 && $idade <= 40) 
{
    // Vamos usar laço de repetição
    for ($i = 0; $i < count($categorias); $i++) 
    {
        if ($categorias[$i]== 'adolescente')
            echo "O nadador ". $nome. " compete na modalidade adulta";
    }
}else
{
    echo " $nome Sem modalidade cadastrada.";
}


?>

