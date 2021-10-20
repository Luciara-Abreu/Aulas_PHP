<div class="titulo">Variáveis</div>

<?php

$numeroA =13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$b = $numeroA + 1;
echo $b;

echo '<br>';
$soma = $b + $numeroA;
echo $soma;

echo '<p>Para ver se a variável está setada usamos isset($variável) <br>
Se retornar 1 é que está setada. caso 0 não está setada. </p>';
echo isset($numeroA);

echo '<br>';
echo '<p>Para tirar o valor padrão que está setado em uma variável
usamos o  unset($variável) <br>
Se retornar 0 é que a variavel não está setada.</p>';


unset($numeroA); // aqui tiramos o valor que tinha na variável
echo isset($numeroA); //aqui vamos ver se realmente ela está null 

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
?>