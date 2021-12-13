<div class="titulo">Argumentos de Variáveis</div>

<?php

function soma ($a, $b){
    return $a + $b;
}

echo soma(3, 6) . '<br>';
echo soma(3, 6, 5, 7) . '<br>';

function somaCompleta (...$numeros){
    $soma = 0;
    foreach ($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(3, 5, 6) . '<br>';
echo somaCompleta(3, 5, 6, 5, 1) . '<br>';

$array = [3, 5, 6];

echo somaCompleta(...$array) . '<br>';

function membros ($titular, ...$dependentes){
    echo "Titular: " . $titular . '<br>';
    if ($dependentes){
        foreach ($dependentes as $dep){
            echo "Dependente: " . $dep . '<br>';
        }
    }
}

membros('Ana', 'Maria', 'José');
membros('Mario');
