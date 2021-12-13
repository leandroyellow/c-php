<div class="titulo">Argumentos Padrão</div>

<?php

function saudacao ($nome, $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome";
}

echo saudacao('Rogério', 'Silva') . '<br>';
echo saudacao('Rogério', null);
