<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privado = 'privado';

    public function mostrarA(){
        echo "Class A> publico: {$this->publico}<br>";
        echo "Class A> protegido: {$this->protegido}<br>";
        echo "Class A> privado: {$this->privado}<br>";
    }

    protected function mostrarAProtegido(){
        echo "sou protegido e herdado por herança<br>";
    }

    private function mostrarAPrivado(){
        echo "sou mostrado apenas pela classe A<br>";
    }
}

$a = new A();
$a->mostrarA();
//$a->mostrarAProtegido();
//$a->mostrarAPrivado();
echo '<hr>';

class B extends A{
    public function mostrarB(){
        echo "Class B> publico: {$this->publico}<br>";
        echo "Class B> protegido: {$this->protegido}<br>";
        echo "Class B> privado: {$this->privado}<br>";

        parent::mostrarAProtegido();
    }
}

$b = new B();
$b->mostrarB();
$b->mostrarA();
//$b->mostrarAProtegido();
