<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    public $nome = 'Leandro';
    public $idade = 22;

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Claudia';
echo $c1->nome , '<br>';
$c1->idade = 33;

$c2 = new Cliente();
$c2->nome = 'Jose Maria';
$c2->idade = 43;

echo $c1->apresentar() . '<br>';
echo $c2->apresentar();