<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); //true
var_dump(1 > 1); //false
var_dump(1 >= 1); //true
var_dump(4 < 23); //true
var_dump(1 <= 7); //true
var_dump(1 <> 1); // false     <> significa diferente
var_dump(1 != 1); //false      é o difrente mais usado

var_dump(111 == '111'); //true
var_dump(111 === '111'); //false
var_dump(111 != '111'); //false
var_dump(111 !== '111'); //true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 47;
if($idade < 18) {
    echo "Menor de idade = $idade anos";
} else if($idade <= 65){
    echo "Adulto = $idade anos";
} else {
    echo "Terceira Idade = $idade anos";
}

echo '<p class='divisao'>Spaceship</p><hr>';
var_dump(50 <=> 3); //retorna 1
var_dump(50 <=> 50); //retorna 0 
var_dump(5 <=> 50); //retorna -1

echo '<p class='divisao'>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
