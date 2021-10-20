<div class='titulo'>Tipo Buleano</div>

<?php
echo 'TRUE';
echo '<br>';
echo 'FALSE';
echo '<br>';

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump(false);
echo '<br>' . is_bool(false);
echo '<br>' . is_bool(true);

// regras para converter para boleano
echo '<p>regras para converter para boleano</p>';

echo '<br>' . var_dump((float) 0);
echo '<br>' . var_dump((bool) 0); // apenas zero é falso
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00001);
echo '<br>' . var_dump((bool) "");
echo '<br>' . var_dump((bool) " ");
echo '<br>' . var_dump((bool) "0");
echo '<br>' . var_dump((bool) "00");

?>