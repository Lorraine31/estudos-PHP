<div class="titulo">Desafio intdiv</div>

<?php
// Sobrescreva o método intdiv para...
// - Lançar uma exceção qdo tentar dividir por zero 
// - Lançar uma exceção qdo o resultado não for inteiro
// - Dividi rnormalmente nos demais casos 

// Os testes... 
// - intdiv com os parametros 8 e 2 [Sucesso]
// - intdiv com os parametros 8 e 3 [Exceção]
// - intdiv com os parametros 8 e 0 [Exceção]
// - intdiv "original"com os parametros 8 e 3 [Sucesso]

require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>'; //como a funcao chamada é a q criei, aparece uma excecao
} catch(\Aritmetica\NaoInteiroException $e) {
    echo 'Resultado não é um número inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';