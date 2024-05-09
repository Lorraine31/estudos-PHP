<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {       //com o while temos a possibilidade de não executar nenhuma repetição, 
    echo "while $contador <br>";        //se o primeiro valor ja for falso
    $contador++;
}

$contador = 100;
do {                                    //com o do while, mesmo tendo o primeiro valor sendo 
    echo "do-while $contador <br>";     //falso ele ainda garante pelo menos 1 repetição pq a expressão vem depois do bloco
    $contador++;
} while($contador < VALOR_LIMITE); //não esquecer que aqui tem vírgula


//podemos tbm ter um while infinito e para que ele tenha fim é necessário usar o break
$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}