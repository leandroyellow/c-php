<div class="titulo">Desafio For</div>

<!-- 
    mostrar na tela:
    #
    ##
    ###
    ####
    #####
    1 pode usar incremento $i++
    2 não pode usar incremento $i++
 -->

 <?php

 $text = "#";

 for ($i = 0; $i < 5; $i++){
     echo "$text <br>";
     $text .= "#";
 }

 echo "<hr>";
 $text2 = " "; 
 for ($text2 = "#"; $text2 !== "######"; $text2 .= "#"){
     echo "$text2 <br>";
}

echo "<hr>";

$text3 = " ";

for (; strlen($text3) <= 5 ;){
    $text3 .= "#";
    echo "$text3 <br>";
}



