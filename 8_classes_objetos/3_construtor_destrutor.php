<div class="titulo">Construtor & Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        echo 'Contrutor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu <br>';       
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Rebeca', 33);
$pessoa->apresentar();

unset ($pessoa);

$outraPessoa = new Pessoa('João', 23);
$outraPessoa->apresentar();
$outraPessoa = null;

