<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 9) . '<br>';
echo soma (34, 5, 6) . '<br>'; //vai pegar apenas os dois primeiros parametros, pq na função usei apenas dois. O restante será desconsiderado

echo '<hr>';

function somaCompleta(...$numeros) { // os ... indicam que todos os parametros que serão passados serão onsiderados (a principio eles ficam em um array)
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array); // usando ... consigo "distribuir"os valores do array dentro do array do somaCompleta
                                       // sem os ... ficaria um array dentro de outro array

echo '<hr>';

function membros($titular, ...$dependentes) { // nesse caso, apenas os valores de $dependentes ficarão armazendos no array, pq só ele é um arg variável
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}
 echo '<br>';
 membros("Maria", "João", "Zé", "Luiza");
 echo '<br>';
 membros("Maria");
 echo '<br>';
 membros("Maria", "Luiza");

