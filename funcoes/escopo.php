<div class="titulo">Função e Escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá!";
    echo "Até a próxima! <br>";
}

imprimirMensagem();
imprimirMensagem();

echo '<hr>';

$variavel = 1;

function trocaValor() {
    $variavel = 2; //variavel criada internamente
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";
//obs: a variavel foi modificada apenas dentro da função, sendo assim seu valor será diferente apenas qdo a função for chamada

echo '<hr>';

function trocaValorDeVerdade() {
    global $variavel; //para modificar realmente um valor definido fora da função, preciso chamar a variável
    $variavel = 3;   // de uma forma global e depois atribuir o novo valor
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump($trocaValorDeVerdade); //Aqui podemos ver que a função não tem um valor atribuido. Ela imprime algo apenas pq 
                                // usei o echo.