<div class="titulo">Desafio Data</div>

<?php

class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function mostrar(){
        return $this->dia."/".$this->mes."/".$this->ano;
    }
}

$d1 = new Data();

echo $d1->mostrar() . '<br>';
$d1->dia=12;
$d1->mes=9;
$d1->ano=2022;

echo $d1->mostrar();