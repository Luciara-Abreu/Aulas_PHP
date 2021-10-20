<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">


    <title>Exercicios</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação </a>
        <a href="index.php" Class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            /* include("modulo1/a.php") ou*/
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");            
            ?>
        </div>             
    </main>
    <footer class="rodape">
        CODIVAS <?=date('Y'); ?>
    </footer>

</body>
</html>