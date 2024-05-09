<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero; //aspas simples aparece o nome da variavel, não o seu valor
echo '<br> $numero';
echo "<br> $numero"; //aspas dupla aparece o valor atribuido a variavel


$texto = "A sua nota é: $numero"; //declarar uma variável contendo outra variável definida antes
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos"; //coloquei o s no final para aparecer 'canetas', porém esse não é o jeito certo
echo "<br>Eu tenho 5 {$objeto}s mas perdi 3 {$objeto }s"; //essa é a maneira correta