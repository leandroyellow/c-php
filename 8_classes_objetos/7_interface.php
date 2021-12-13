<div class="titulo">Interfaces</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir();
}

class Cachorro implements Canino {
    function respirar(){
        return "respirar oxigênio";
    }

    function mamar(){
        return "Bebe leite";
    }

    function latir(){
        return "au au";
    }
}

$animal = new Cachorro();
echo $animal->respirar(). '<br>';
echo $animal->latir() . '<br>';
echo $animal->mamar() . '<br>';
