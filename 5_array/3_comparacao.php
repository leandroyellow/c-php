<div class="titulo">Comparação</div>

<?php

$arr1 = ['nome' => "Maria", 'idade' => 20];
$arr2 = ['nome' => "Maria", 'idade' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo'<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);

$arr4 = ['idade' => '20', 'nome' => 'Maria']; //se acresentar mais um indice fica diferente tudo
echo'<br>';
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);
