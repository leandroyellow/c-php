<div class="titulo">Desafio Operadores Lógicos</div>



<!-- Dois trabalhos terça e quinta
- se os dois trabalhos forem executados -> TV 50' e sorvete
- se apenas um for executado -> TV 32' e sorvete 
- se nenhum for execultado -> fica em casa mais saudável
 -->

 <form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="1">Execultado</option>
            <option value="0">Não execultado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Execultado</option>
            <option value="0">Não execultado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button, select {
        font-size: 1.8rem;
    }
 </style>

 <?php

 if (isset($_POST['t1']) && isset($_POST['t2']) ) {
    $terca = !!$_POST['t1'];
    $quinta = !!$_POST['t2'];

    if($terca  && $quinta) {
        echo "familia compra TV 50' e toma sorvete";
    } elseif ($terca  || $quinta ) {
        echo "família compra TV 32' e toma sorvete";
    } else {
        echo "Família fica em casa";
    }
 }

 

 ?>