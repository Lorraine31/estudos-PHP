<div class="titulo">Desafio Palindromo</div>

<?php
//jeito "manual" de se fazer. aqui comparo cada indice inicial com o indice final
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1; //aqui tenho o ultimo índice da palavra
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('arvore') . ' ';
echo '<br>';

//jeito mais simples.Há uma função que faz o reverso de uma string, usarei essa função. Aqui farei uma comparação entre a palavra inicial e o seu reverso
function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('arvore') . ' ';
