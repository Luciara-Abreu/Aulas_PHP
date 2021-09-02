<?php
/**
 * Create by PhpStore
 * User: Luci
 * Date: 31/08/2021
 * Time: 15:15
 */
//---------------------------------------------------------------------------------------------//

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

// Através do post recuperamos através do protocolo thhp os dados que irão trafegar no header da requisição
$nome = $_POST['nome']; 
$idade = $_POST['idade'];

// Dá informação de tipo de variável temos 
var_dump($nome); 
var_dump($idade);
return 0;


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
}else
{
    echo "O nadador ". $nome. " compete na modalidade adulta";
}


?>

