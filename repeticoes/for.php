<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) { //como não tenho a primeira parte do contador, ele vai pegar a que vem antes,
     echo "$cont <br>";      //então continuará a contagem de acordo com o anterior 
}

echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++; //posso colocar a terceira parte dentro do próprio bloco, mas é melhor colocar na próprio estrutura do for
}

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);

echo'<hr>';

for ($i = 1; $i < count ($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo'<hr>';

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}