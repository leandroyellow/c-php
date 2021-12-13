<div class="titulo">Operadores Lógicos</div>

<?php

var_dump(true);
echo "<br>";
var_dump(!true);
echo "<p class='divisao'> Tabela verdade 'and' </p> <hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<br>";
echo "<p class='divisao'> Tabela verdade 'or' </p> <hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo "<br>";

echo "<p class='divisao'> Tabela verdade 'xor' </p> <hr>"; // ou exclusivo
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

?>

