<div class="titulo">Mapa</div>

<?php
$dados = array("idade" => 23, "cor" => "verde", "peso" => 49.5);

print_r($dados);

//var_dump($dados[0]); nao existe o indice
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';

//para inserir no array
$lista = array("a", 2, "b", 9 => "wert", 45);

print_r($lista);

$lista[] = "mais um";
print_r($lista);

$lista ["cor"] = "azul";
print_r($lista);

