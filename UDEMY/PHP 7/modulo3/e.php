<div class="titulo">Variáveis Variáveis</div>
<?php

echo "<br>";

$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br> --------------------------------------------------------------- <br>';

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!';
echo "$epa {$$epa} {$$$epa}";



?>