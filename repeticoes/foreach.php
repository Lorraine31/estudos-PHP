<div class="titulo">Foreach</div>

<!-- O foreach é uma maneira mais comum de percorrer um array passando por todos os elementos -->

<?php
$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($array as $valor) { //mostra apenas o valor
    echo "$valor <br>";
}

echo '<hr>';

foreach ($array as $indice => $valor) { //mostra o indice de acordo com oq declarei (nesse caso foi 1) e o valor
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    //echo "$linha <br>; aqui irá aparecer apenas Array Array

    foreach($linha as $letra) { // irá mostrar os valores das linhas
        echo "$letra ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeors as $dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r ($numeros);