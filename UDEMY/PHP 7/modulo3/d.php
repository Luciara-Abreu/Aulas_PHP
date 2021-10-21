<div class="titulo">Interpolação</div>
<?php


$numero = 10;
/*Aqui se eu usar a variável com aspas simples o código não interpreta e 
Não mostra o valor que contém dentro da mesma*/
echo '<br> Variável de nome $numero recebe = ' . $numero;
echo '<br> --------------------------------------------------------------- <br>';

/*Mas se usamos aspas duplas ela interpreta. */
echo "<br> Variável de nome numero recebeu = $numero";

$texto = "A sua nota é: $numero";
echo '<br> $texto'; // aqui a variável não é interpretada;
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto";//Aqui o texto ficará com erro de concordancia vebal.
echo "<br>Eu tenho 5 {$objeto}s"; // Aqui conseguimos arrumar o texto. 
echo "<br>Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; // Cuidar pois as chaves devem estar juntas
// Interpolação não aceita operações em PHP.
?>