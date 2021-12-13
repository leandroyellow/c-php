<div class="titulo">Desafio switch</div>

<!-- converter unidades de medidas -->

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conver">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="km-metro">Km -> Metro</option>
        <option value="metro-km">Metro -> Km</option>
        <option value="cel-fah">Celsius -> Fahrenheit</option>
        <option value="fah-cel">Fahrenheit -> Celsius</option>
    </select>
    <button type="submit">Calcular</button>
</form>

<style>
    form > * {
        font-size:1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.62371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;



$param = $_POST['param'] ?? 0;


switch ($_POST['conversao']) {
    case 'km-milha':
        $resultado = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $resultado Milhas";
        break;
    
    case 'milha-km':
        $resultado = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $resultado Km";
        break;
    
    case 'km-metro':
        $resultado = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $resultado Metros";
        break;
    
    case 'metro-km':
        $resultado = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $resultado Km";
        break;
    
    case 'cel-fah':
        $resultado = $param * FATOR_CEL_FAH + 32;
        $mensagem = "$param Celsius = $resultado Fahrenheit";
        break;
    
    case 'fah-cel':
        $resultado = ($param -32) / FATOR_CEL_FAH;
        $mensagem = "$param Fahrenheit = $resultado Celsius";
        break;
    
    default:
        $mensagem = "Nenhum valor calculado!";
    break;
}

echo "<p>$mensagem</p>";