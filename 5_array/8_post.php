<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="">
    <input type="text" name="sobrenome" id="">
    <button type="submit">Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php

print_r($_GET);
echo'<br>';
print_r($_POST);