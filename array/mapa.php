<div class="titulo">Mapa</div>

<?php
$dados = array(    //aqui vou definir a chave(posição) e o seu valor
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
); 

print_r($dados);
echo '<br>';

var_dump($dados[0]); //retornará um valor NULL pq não tenho a posição 0, oq tenho são os nomes que defini anteriormente
echo '<br>' . $dados["idade"]; //assim consigo chamar o valor na posição que quero
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]); //tbm retornara NULL pq não existe

$lista = array( //não é aconselhado fazer esse tipo, pq mistura as maneiras de fazer e fica difícil de entender
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);