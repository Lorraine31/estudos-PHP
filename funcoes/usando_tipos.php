<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>'; //usará apenas o 4, pq pega apenas a primeira parte

echo '<hr>';

function somar2(int $a, int $b) { //aqui defini um tipo para o parametro
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>'; //como declarei um valor int, o php irá converter esse valor float para um int, pegando apenas o primeiro numero
echo somar2(1, '4dois') . '<br>'; //aqui tbm ocorrerá a mesma coisa

echo '<hr>';

function somar3($a, $b): int { //aqui estou dizendo qual o tipo de resultado que quero. Nesse caso, é int
    echo "<span>Somando $a + $b = </span>"; //ou seja, não vai converter o valor de entrada, mas sim o de saída
    return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>'; //converte a resposta float para int
echo somar3(1, '4dois') . '<br>'; //converte a resposta float para int