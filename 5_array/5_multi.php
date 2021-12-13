<div class="titulo">Multidimencionais</div>

<?php

$dados =[
    ["nome" => "Roberto", "idade" => 25, "naturalidade" => "São Paulo"],
    [
        "nome" => "Marcio",
        "idade" => 44,
        "naturalidade" => "Bahia"
    ]
];

print_r($dados);
echo'<br>' . $dados[0]["idade"];
echo'<br>' . $dados[1]["idade"];

$dados[] = [
    "nome" => "Chaves",
    "idade" => 66,
    "nacionalidade" => "cidade do México"
];

echo'<br>';
print_r ($dados);
echo'<br>' . $dados [2]["idade"];

$dados[2]["vizinho"] = "Madruga";
echo'<br>';
print_r ($dados);

unset($dados[1]);
echo'<br>';
print_r ($dados);



