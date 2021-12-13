<div class="titulo">While/Do While</div>

<?php

const VALOR_LIMITE = 5;
$cont = 0;


while ($cont < VALOR_LIMITE) {
    echo "while $cont ";
    $cont++;
}

echo "<hr>";
$cont = 0;


for (; $cont < VALOR_LIMITE; ){
    echo "for $cont ";
    $cont++;
}


echo "<hr>";
$cont = 0;

do {
    echo "Do/while $cont ";
    $cont++;
} while ($cont < VALOR_LIMITE);

