<div class="titulo">Desafio Peso</div>

<?php

$peso = 60;
$altura = 1.60;

$imc = $peso / ($altura**2);

if($imc < 16){
    echo "Subpeso severo IMC foi " .  number_format ($imc, 1);
} elseif ($imc < 20){
    echo "Subpeso IMC foi " .  number_format ($imc, 1);
} elseif ($imc < 25){
    echo "Normal IMC foi " . number_format ($imc, 1);
} elseif ($imc < 30){
    echo "Sobpeso IMC foi " .  number_format ($imc, 1);
} elseif ($imc < 40){
    echo "Obeso IMC foi " .  number_format ($imc, 1);
} else {
    echo "Obeso Mórbido IMC " .  number_format ($imc, 1);
}