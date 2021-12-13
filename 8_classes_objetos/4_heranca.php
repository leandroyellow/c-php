<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Pessoa criada! <br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Tchau Pessoa <br>";
    }

    public function apresentar(){
        echo "{$this->nome}: {$this->idade} anos.<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        echo "Usuário criado! <br>";
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    function __destruct(){
        echo "Tchau Usuário <br>";
        parent::__destruct();
    }

    public function apresentar(){
        echo "@{$this->login}: {$this->nome} {$this->idade} anos! <br>";
    }
}





$pessoa1 = new Pessoa('Abel', 33);
$pessoa1->apresentar();

$pessoa2 = new Usuario('Pedro', 33, 'k_pedra');
$pessoa2->apresentar();

unset($pessoa1);
unset($pessoa2);
