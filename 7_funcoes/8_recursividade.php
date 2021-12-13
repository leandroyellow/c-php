<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte ($numero) {
    if($numero == 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(10) . '<br>';

function somaRecursivaReduzidaUmAte ($numero){
    return $numero == 1 ? 1 : $numero + somaRecursivaReduzidaUmAte($numero - 1);
}

echo somaRecursivaReduzidaUmAte(10) . '<br>';