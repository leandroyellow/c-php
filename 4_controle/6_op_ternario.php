<div class="titulo">Oprarador Ternário</div>

<?php

$idade = 65;
$status;

if ($idade < 18) {
    $status = 'menor de idade';
} else {
    $status = 'maior de idade';
}

echo " $status <br>";

$status = $idade < 18 ? 'menor de idade' : 'maior de idade';

echo "$status <br>";

$status = $idade >= 18  ? $idade >= 65 ? 'aposentado' : 'maior de idade' : 'menor de idade';

echo "$status <br>";