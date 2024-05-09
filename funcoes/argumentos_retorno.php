<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem-vindo(a)!';
}

obterMensagem(); //não tera um valor aparecendo na tela, mas foi atribuído um return na função
//echo obterMensagem(); nesse caso apareceria Seja bem-vindo (a)! devido ao echo
$m = obterMensagem(); //usando oq foi retornado de uma função e atribuindo a uma variável.
echo $m; //ex 1
echo '<br>', obterMensagem(); //ex 2
echo '<br>'; 
var_dump(obterMensagem()); //ex 3

function obterMensagemComNome($nome) { //nesse caso, tenho uma função com um parametro
    return "bem-vindo(a), {$nome}";
}

echo '<br>', obterMensagemComNome('Maria');
echo '<br>', obterMensagemComNome('João');

function soma($a, $b) { // função com mais de um parametro
    return $a + $b;
}

echo '<br>', soma(45, 83);

//posso definir tbm variaveis e usa-las na função
$x = 4;
$y = 5;
echo '<br>', soma($x, $y);

echo '<hr>';

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo $variavel; //nesse caso o valor não será trocado. Continua sendo 1


function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel; //nesse caso o valor realmente sera trocado