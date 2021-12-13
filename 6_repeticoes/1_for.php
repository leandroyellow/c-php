<div class="titulo">Laço For</div>

<?php

for ($i=1; $i < 5 ; $i++) { 
    echo "$i <br>";
}

echo "<hr>";

for (; $i < 10; $i++) { 
    echo "$i <br>";
}
echo "<hr>";

for (; $i < 15;) { 
    echo "$i <br>";
    $i++;
}

echo "<hr>";

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

for($i=0; $i < COUNT($array); $i++){
    echo "$array[$i] <br>";
}

echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($m = 0; $m < COUNT($matrix); $m++){
    for($i = 0; $i < COUNT($matrix[$m]); $i++){
        echo "{$matrix[$m] [$i]} ";
    }
    echo "<br>";
}
