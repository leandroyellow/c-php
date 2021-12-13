<div class="titulo">Usando Tipos</div>

<?php

function somar (int $a, int $b) {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar(3.4, 3.7);

