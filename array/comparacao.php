<div class="titulo">Comparação entre Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20]; 
var_dump($arr1 == $arr2); //fazendo comparação, resultado true
echo '<br>';
var_dump($arr1 === $arr2); //fazendo comparação estritamente igual, resultado true
echo '<br>';


$arr3 = ['idade' => 20, 'nome' => 'Maria'];
var_dump($arr1 == $arr3); //fazendo comparação, resultado true pq tem os mesmos tipos de elementos (inteiro e string, independente da ordem)
echo '<br>';
var_dump($arr1 === $arr3); //fazendo comparação estritamente igual, resultado false pq eles não são exatamente iguais
echo '<br>';
var_dump($arr1 != $arr3); //são diferentes! Resultado false pq eles são iguais sim
echo '<br>';
var_dump($arr1 !== $arr3); //são estritamente diferentes! Resultado true pq eles são diferentes
echo '<br>';

$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //fazendo comparação, resultado true pq a string '20'tem o mesmo valor do 20.
                          //Porém, se colocar '21' por exemplo, o resultado será false
echo '<br>';
var_dump($arr1 === $arr4); //estritamente iguais, resultado false pq um tem string e inteiro e ou outro tem string e string