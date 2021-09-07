
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário de inscrição</title>
    <meta name = "autor" content="">
    <meta name = "description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
    body {
    background-color: #cebbb5;
    text-align: center;
    margin-top: 10%;
    }

</style
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</P>
    
<form action="script.php" method="post">
    <?php
    //isset verifica se a variável foi definida ou ela serve para saber se uma variável existe.
    $mensagemDeErro = isset($_SESSION ['mensagem-de-erro'])? $_SESSION ['mensagem-de-erro'] : ''; // ternário => (condição /expressão 1) ?: expressão 2
    if(!empty($mensagemDeErro))//se mensagem de erro não estiver vazia... 
    {
        echo $mensagemDeErro; // mostra o erro // O Professor disse dois pontos .. só que é ponto e virgula
    }


    // Mensagem de sucesso no nosso front-end!! 
    $mensagemDeSucesso = isset($_SESSION ['mensagem-sucesso'])? $_SESSION ['mensagem-sucesso'] : ''; // ternário => (condição /expressão 1) ?: expressão 2
    if(!empty($mensagemDeSucesso))//se mensagem de erro não estiver vazia... 
    {
        echo $mensagemDeSucesso; // mostra o erro // O Professor disse dois pontos .. só que é ponto e virgula
    }
    ?>
    
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do competidor" /></p>
</form>

</body>

</html>

