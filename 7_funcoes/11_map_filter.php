<div class="titulo">Map & Filter</div>

<?php

$notas = [6.8, 9.6, 7.7, 4.3, 5.2];
$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo'<br>';

/* $notasFinais2 = array_map(round, $notas);
print_r($notasFinais2); */

