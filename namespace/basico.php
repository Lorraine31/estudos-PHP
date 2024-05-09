<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<!-- 
    Namespace precisa vir antes de qlq sentença escrita no código
    Namespace tem como função evitar conflitos entre funções (usando o mesmo nome por exemplo), dentro da sua própria aplicação ou qdo usamos bibliotecas de terceiros.
    Além de poder criar "apelidos" para os nomes de funções/classes/variaveis que são grandes 
-->

<?php
echo __NAMESPACE__ . '<br>'; //chamando o nome do namespace que defini
const constante1 = 123; //essa const ja fica declarada no namespace
//define('constante2', 1234); //const que ta na raíz do namespace
define('contexto\constante2', 234); //(const modificada apenas aqui) usando o define pra criar uma const, preciso colocar o nome do namespace, o nome da const e depois o seu valor
define(__NAMESPACE__ . '\constante3', 345); //ou posso tbm chamar o nome do namespace criado e concatenar com a constante + valor dela
define('outro_contexto\constante4', 456); //posso criar uma constante em outro namespace, mesmo que esse namespace nem exista ainda

echo constante1 . '<br>';
echo constante2 . '<br>'; //chamo a const modificada aqui
//echo \constante2 . '<br>'; //com a \ chamo a const da raíz
echo \contexto\constante3 . '<br>'; //maneiras de chamar a const
echo constant(__NAMESPACE__ . '\constante3') . '<br>'; //maneiras de chamar a const
//echo constante4 . '<br>'; //não é a maneira correta de chamar essa constante
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma (1, 2) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '[$str} <br>";
    return 1;
}

echo strpos('Texto genérico para buscar', 'busca') . '<br>';
echo \strpos('Texto genérico para buscar', 'busca') . '<br>';