<div class="titulo">Atribuições</div>

<?php


$title = 'Atribuições';
echo 'Aqui atribuimos a variável $title o valor de => '.$title;
echo '<br> --------------------------------------------------------------- <br>';

$numero = 10;
echo '<br> Variável recebe Numero inteiro =' . $numero;
$numero = $numero - 3;
echo '<br> Variável recebe Numero -3 =' . $numero;
$numero = $numero + 1.5;
echo '<br> Variável recebe Numero + 1.5 =' . $numero;
$numero --;
echo '<br> Variável recebe Numero decremento =' . $numero;
--$numero ;
echo '<br> Variável recebe Numero decremento antes da Variável =' . $numero;
$numero++;
echo '<br> Variável recebe Numero incremento =' . $numero;
++$numero;
echo '<br> Variável recebe Numero incremento antes da variavel =' . $numero;
$numero = 20;
echo '<br> Variável recebe Numero Vinte =' . $numero;
$numero -=5;
echo '<br> Variável recebe decremento de 5 =' . $numero;
$numero +=5;
echo '<br> Variável recebe atribuição aditiva =' . $numero;
$numero *=10;
echo '<br> Variável recebe atribuição multiplicativa =' . $numero;
$numero /=2;
echo '<br> Variável recebe atribuição divisiva =' . $numero;
$numero %=6;
echo '<br> Variável recebe atibuição de modulo =' . $numero;
$numero **=4;
echo '<br> Variável recebe atribuição de potencia =' . $numero;


?>