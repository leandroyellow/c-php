<div class="titulo">Operações</div>

<?php

$dados1 = ["nome" => "Jose", "idade" => 28];

$dados2 = ["naturalidade" => "Fortaleza"];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo'<br>' . is_array($dadosCompletos);
echo'<br>' . count($dadosCompletos);

echo'<br>';

$indice = array_rand($dadosCompletos);
echo $indice = $dadosCompletos[$indice]. '<br>' ;

//apagar um indice do array usa unset

unset($dadosCompletos["nome"]);
print_r ($dadosCompletos);

/* unset($dadosCompletos); //apaga tudo
print_r($dadosCompletos); */

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8, 10];

$decimais = $impares + $pares;

print_r ($decimais);

$decimais = array_merge($pares, $impares);
echo'<br>';
print_r($decimais);

echo'<br>';
sort($decimais); // ordenar 
print_r($decimais);