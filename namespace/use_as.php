<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php'); //estou chamando o arquivo use_as_arquivo

function soma($a, $b) { //chmanado uma função com o mesmo nome da outra função para causar um conflito
    return $a . $b; // concatenando mesmo sabendo que é errado aqui ara comparar as duas função
}

class Classe { //gerar um erro na classe tbm
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante; //usando o use não vou ter conflito na constante
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(1, 2) . '<br>';//aqui estou acessando fç soma desse arquivo
echo ctx\soma(1, 2) . '<br>'; //esout acessando a fç do outro arquivo