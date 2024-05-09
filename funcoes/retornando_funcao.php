<div class="titulo">Retornando Função</div>

<?php

function soma($a) {
    return function($b) use ($a) { //preciso usar o use() para chamar o paramentro $a e usa-lo dentro da segunda função
        return $a + $b;
    };
}

echo soma(13) (3); //primeiro() é o paramentro $a e o segundo() é o parametro $b

$doisMais = soma(2); //aqui ja defini o parametro de soma
echo '<br>', $doisMais(10); //defini o segundo parametro
echo '<br>', $doisMais(18); //defini o segundo parametro