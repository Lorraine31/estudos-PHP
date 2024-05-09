<div class="titulo">Include função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '<br>';
}

echo 'novamente no arquivo include_funcao<br>';
//echo soma(1, 8) . '<br>';
carregarArquivo(); //essa função foi chamada e dentro dela será carregada a função que esta em include_arquivo

echo "Variável = '{$variavel}'"; //essa varoavel não é a mesma do include_arquivo. E se for cgamada apenas assim, não apresentará nenhum valor 
var_dump($variavel); //usando var_dump podemos ver que ela é nula. Ela foi definida dentro da função e por isso não tenho acesso fora dela
echo '<br>' . soma(3, 8); // a função soma pode ser chamada mesmo fora da outra função