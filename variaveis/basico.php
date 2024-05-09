<div class="titulo">Variáveis</div>

<?php
//para declarar uma variavel é preciso usar $ na frente do nome
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset ($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida'; //porm é bom evitar esse tipo
// $6ar = 'invalida'; 
// $%var7 = 'invalida';
// $bar8% = 'invalida';
// $vár-9 = 'valida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);