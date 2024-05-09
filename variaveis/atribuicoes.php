<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--; // é igual a $numero = $numero - 1
--$numero; //posso usar dos dois jeitos. Nesse caso, usei o decremento duas vezes, por isso o resultado é 6.5
echo '<br>' . $numero;

$numero++; // é igual a $numero = $numero + 1
++$numero;
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero; 
$numero -= 5; //subtrai 5 no valor de $numero
echo '<br>' . $numero;

$numero += 5; //somei 5 no valor de $numero
echo '<br>' . $numero;

$numero *= 10; //multipliquei por 10 o valor de $numero
echo '<br>' . $numero;

$numero /= 2; // dividi por 2 o valor de $numero
echo '<br>' . $numero;

$numero %= 6; //resto da divisão de $numero por 6
echo '<br>' . $numero;

$numero **= 4; //4 elevado ao valor de $numero
echo '<br>' . $numero;

$numero .= 4; //apenas concatenação
echo '<br>' . $numero;

$texto = 'Essa é um texto';
echo '<br>' . $texto;

$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;

// $variavelInexixtente = 'valor inexistente'; se descomentar, aparecerá valor inexistente duas vezes
echo '<br>' . $variavelInexixtente;

$valor = $variavelInexixtente ?? 'valor default';
echo '<br>' . $valor;