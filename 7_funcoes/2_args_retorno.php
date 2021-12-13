<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja bem vindo!';
}

obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>' , obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>' . obterMensagemComNome('Leandro');

function soma($a, $b){
    return $a + $b;
}

echo "<br>", soma(3,5);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel , 3);
echo "<br>". $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 7);
echo "<br>" . $variavel;