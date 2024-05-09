<div class="titulo">Multidimensionais</div>

<?php
//array dentro de array
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade']; //acessar apenas o elemento idade do índice 0
echo '<br>' . $dados[1]['idade']; //acessar apenas o elemento idade do índice 1

$dados[] = [        //add outro elemento (nesse caso um novo array) dentro do array $dados
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade']; //acessar apenas o elemento idade do índice 2

$dados[2] ["vizinho"] = "Chaves"; //add um elemento dentro do array de índice 2
echo '<br>';
print_r($dados[2]); //mostrar apenas o array de índice 2

unset ($dados[1]); //removendo o array de índice 1. O unset não reorganiza os índices, então teremos os índices 0 e 2
echo '<br>';
print_r($dados);

var_dump($dados[1]); //posso tentar achar o array que tirei anteriormente, mas o resultado será NULL