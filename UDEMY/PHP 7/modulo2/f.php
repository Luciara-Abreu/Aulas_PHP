<div class='titulo'>Desafio String</div>
<?php

echo '<p> Enunciado.:';
echo '<br';
echo "<br><p> Avaliando os metodos da documentação da string, qual é o metodo que a posição da texto 'abc'
na string '!AbcaBcabc' retorna 1: </p>";


echo strpos('!AbcaBcabc', 'abc') . '<br>' . 
'Essa função => strpos não ignora os casesensitive e vai trazer a posição sétima.
<br>';

echo '<br>';

echo stripos('!AbcaBcabc', 'abc') . '<br>' . 
'Essa função => stripos ignora as casesensitive e tras a primeira opção 
<br>';

?>