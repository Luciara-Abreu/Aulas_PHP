<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma String','<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação

echo '<p> ..... Concatenação ...... </p>';

echo "Nós também" . ' somos estudantes.';
echo '<br>', "Aqui no php também concatena com", ' virgulas';
echo '<br>';

echo " 'Teste' " . ' "Teste" ' . '\'Teste\'' . " \\";

print("<br>Também existe a função print");
echo '<br>';
print "<br>Também existe a função print";


echo '<p> ..... Algumas funções ...... </p>';

echo '<br>', strtoupper('maximizado');
echo '<br>', strtolower('MINIMIZADO');
echo '<br>', ucfirst('só a primeira letra');
echo '<br>', ucwords('todas as primeiras letras em maiúsculas');
echo '<br>', strlen('Quantas letras?');
echo '<br>', strlen('Eu também'); // aqui vai dar errado quantidade de caracter por causa do acento
echo '<br>', mb_strlen('Eu também');
echo '<br>', mb_strlen('Eu também', 'utf-8');
echo '<br>', substr('Só uma parte mesmo', 7,6); // parte
echo '<br>', str_replace('isso', 'aquilo', 'trocar isso por aquilo');




?>