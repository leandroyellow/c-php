<div class="titulo">Include Função</div>

<?php

echo "carregando: include_função<BR>";

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo somar(3, 5) . '<br>';
}

echo "novamente no arquivo include_funcao<br>";

carregarArquivo();
echo "variável: '{$variavel}'.";

echo '<br>' . somar(3, 7);

/* 
a diferença entre include e require
include a pagina ainda funciona mesmo se o arquivo não existe
require a pagina para seu carregamento após o require
*/