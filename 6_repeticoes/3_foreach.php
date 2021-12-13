<div class="titulo">Foreach</div>

<?php

$semana = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

foreach ($semana as $dia){
    echo "$dia <br>";
}
echo "<hr>";

foreach ($semana as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo "<hr>";
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha){
    foreach($linha as $letras){
        echo "$letras ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $dobrar){ //colocar &$dobrar muda tambem em $numeros sem o "&" não muda o array e apenas a consulta dele.
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);

