<div class="titulo">Break Continue</div>

<?php

$cont = 10;
for(;;){
    echo "$cont <br>";
    $cont++;
    if($cont > 20){
        break;
    }
}

echo "fim!!!";
echo "<hr>";

$num = 1;
for(;;){
    $num++;
    if ($num % 2 == 1){
        continue;
    }
    echo "$num <br>";
    if ($num >= 20){
        break;
    }
    
}

echo "Fim!!!";
echo "<hr>";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($array as $valor) {
    if ($valor == 7) break;
    if ($valor % 2 == 0) continue;
    echo $valor . "<br>";
}

echo "Fim!!";