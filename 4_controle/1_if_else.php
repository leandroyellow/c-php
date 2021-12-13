<div class="titulo">If Else</div>

<?php

if(true){
    echo "serei impresso? <br>";
    echo "serei impresso novamente?";
}

if (false)
    echo "<br>verdadeiro";
else
    echo "<br>falso";
    
echo "<br> fim!!";

if(false){
    echo "<br> passo A";
} else if (false){
    echo "<br> passo B";
} elseif (true){
    echo "<br> passo C";
} else{
    echo "<br> passo D";
}