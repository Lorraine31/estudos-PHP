<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal; //temos aqui um sub-namespace, ele esta dentro de App
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Especifico; //outro namespace
echo __NAMESPACE__ . '<br>';
const constante = 345; //outra const

echo constante . '<br>'; //retornará o valor do último namespace, que nesse caso é o 345
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>'; // tbm retornará o 345 pq assim eu chamo o namespace atual
echo \App\constante . '<br>'; //assim estou acessando um namespace espaecífico, que é o de valor 123
echo \App\Principal\constante . '<br>'; //aqui estpu acessando o 234
echo \App\Principal\Especifico\constante . '<br>'; //e aqui o 345 novamente 