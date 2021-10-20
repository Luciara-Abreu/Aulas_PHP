<div class='titulo'>Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

//int para float
echo '<p>Conversão de int para float </p>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Conversão de float para int </p>';
echo '<br>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));

// Conversão com String
echo '<p>Conversão com String </p>';
echo '<br>';
var_dump(1 + "3");

echo '<br>';
var_dump("2" + 3);

echo '<br>';
var_dump("2" . 2);

echo '<br>';
echo is_string("3" . 2);

//echo '<br>';
//var_dump(1 + "Cinco");

//var_dump(2 + "5 Cinco");
//var_dump(2 + "2 + 5"); // ele só considera o primeiro numero. Não é boa pratica fazer isso kkkk

echo '<br>';
var_dump(1 + "3.2");

echo '<br>';
var_dump((int) "10.5");

echo '<br>';
var_dump((float) "10.5");
?>