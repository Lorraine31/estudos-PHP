<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>'; //mostra apenas Array
var_dump($lista); //mostra os valores de cada posição e oq eles são
echo '<br>';
print_r($lista); //mostra a posição e os respectivos valores
echo '<br>';

$lista[0] = 1234; //redefini o valor da posição 0
print_r($lista); // mostra o array com o novo valor da posição 0

echo '<br>' . $lista[0]; //mostra o elemento da posição chamada, nesse caso é a posição 0
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]); //se chamar uma posição que não existe, ele me retorna um valor nulo (NULL)

$texto = 'Esse é um texto de teste'; //redefini o valor de $texto
echo '<br>' . $texto[0]; //chamei a posição 0 desse novo $texto, que será a letra E
echo '<br>' . $texto[2]; //posição 2 que será a letra s
echo '<br>' . $texto[11]; //letra t, pq ta contando o acento como uma posição no array tbm
echo '<br>' . mb_substr($texto, 10, 1); //nesse caso vou desconsiderar o acento no é, e a posição 10 passa a ser o t