<div class="titulo">Desafio Tabela</div>

<?php

$matrix = [
    ['Leandro', '156854', 'São Paulo'],
    ['Maria', '345674', 'Minas Gerais'],
    ['Kelly', '896456', 'Bahia'],
    ['Aspargo', '698574', 'Santa Catarina'],
    ['Leoncio', '747556', 'Rio de Janeiro']
];

foreach ($matrix as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}

?>
<hr>

<table>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
    </tr>
    <?php
    foreach ($matrix as $linha) {
        echo '<tr>';
        foreach ($linha as $valor) {
            echo "<td> $valor </td>";
        }
        echo '</tr>';
    }
    ?>
</table>
<hr>

<table>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
    </tr>
    <?php
    foreach ($matrix as $index => $linha) {
        $style = $index % 2 === 0 ? 'background-color: #8feeff;' : '';
        echo "<tr style='{$style}'>";

        foreach ($linha as $valor) {
            echo "<td> $valor </td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;

    }

    table th {
        color: red;
        border: 1px solid red;
        background: #107623;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
        border: 1px solid #444;
    }
</style>