<div class="titulo">Funções Anônimas</div>

<?php
//uma variavel que recebe o valor de uma função anonima com parametro
$soma = function($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

echo '<hr>';

//uma função onde um dos parametros é outra função que tbm tem parametro
function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b) {
    return $a + $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', divisao);