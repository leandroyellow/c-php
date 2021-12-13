<div class="titulo">Função Anônima</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(3,4) . '<br>';

function executar ($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado";
}

executar (3, 4, '+', $soma);