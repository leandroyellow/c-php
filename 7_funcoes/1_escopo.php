<div class="titulo">Escopo</div>

<?php

function imprimirMensagem(){
    echo "Olá!";
    echo "Até a próxima <br>";
}

imprimirMensagem();
imprimirMensagem();

$variavel = 1;
function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes variavel: $variavel <br>";
trocarValor();
echo "Depois variavel: $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";

}

echo "Antes variavel: $variavel <br>";
trocaValorDeVerdade();
echo "Depois variavel: $variavel <br>";

var_dump(trocaValorDeVerdade());

