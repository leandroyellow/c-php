<div class="titulo">Palindromo</div>

<?php

$palavra = 'ama';

function palindromo($palindromo){
    $pal = strtolower($palindromo);
    $ultimoIndice = strlen($pal) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++){
        if ($pal[$i] !== $pal[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';

}

echo palindromo('Ana') . "<br>";
echo palindromo('AraRA') . "<br>";
echo palindromo('Arar') . "<br>";

function palindromoSimples($teste){
    $mudaTeste = strtolower($teste);
    return $mudaTeste === strrev($mudaTeste) ? 'Sim' : 'Não';
}

echo "<br>";
echo palindromoSimples('Ana') . "<br>";
echo palindromoSimples('AraRA') . "<br>";
echo palindromoSimples('Arar') . "<br>";