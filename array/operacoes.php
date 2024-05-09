<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2 = ["endereço" => "Rua A"];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

unset ($dadosCompletos["nome"]); //funçao unset remove o elemento selecionado
echo '<br>';
print_r($dadosCompletos);

unset ($dadosCompletos);
echo '<br>';
print_r($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $impares + $pares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); //funçao merge junta os dois arrais
echo '<br>';
print_r($decimais);

sort($decimais); //função sorte, faz a ordenação do array
echo '<br>';
print_r($decimais);


