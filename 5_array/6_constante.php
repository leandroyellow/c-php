<div class="titulo">Arrays Constante</div>

<?php

const FRUTAS = ['laranja' ,'abacaxi'];
const CARROS = array("fiat" => "uno", "fort" => "fiesta");
define ('CIDADES', array('Belo Horizonte', 'Bahia'));

//não consegue mudar nenhum elemento deles da erro

//CIDADES[0] = 'São Paulo';

echo'<br>' . CIDADES [1];
echo"<BR>" . FRUTAS[0];
echo'<br>' . CARROS['fiat'];