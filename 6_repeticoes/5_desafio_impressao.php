<div class="titulo">Desafio Impressão</div>

<?php

/* enunciado:
- imprima apenas os valores do array que contém indice par
- resolver com for e foreach
- valor esperado 'AAA, CCC, EEE'
 */

 $array = ['AAA', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF'];

for($i = 0; ;$i++){
    if ($i == count($array)) break;
    if ($i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}

echo "<hr>";

foreach ($array as $i => $valor){
    if ($i % 2 === 0){
        echo "$valor <br>";
    }
}

