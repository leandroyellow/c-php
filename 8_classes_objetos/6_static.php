<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoEstatico = 'Variável de instância';
    public static $estatico = 'Variável de classe (estático)';

    public function mostrarA(){
        echo "Não estático: {$this->naoEstatico}<br>";
        //primeira tentativa
        //echo "Estático: {$this->estatico}<br>";
        //segunda tentativa
        //echo "Estático: {self::$estatico}<br>";
        echo "Estático: " . self::$estatico . "<br>";
    }
    
    public static function mostrarStaticA(){
        //echo "Não estático: {$this->naoEstatico}<br>"; 
        echo "Estático: " . self::$estatico . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
//$objetoA->mostrarStaticA(); não usado

echo A::$estatico . '<br>';
A::mostrarStaticA(); // não precisa instanciar acessar direto da classe

A::$estatico = "membro alterado";
echo A::$estatico;
