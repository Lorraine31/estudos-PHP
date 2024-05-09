<div class="titulo">Traits #1</div>

<?php

trait validacao {
    public $a = 'Valor a';

    public function validarString($str) {
        return isset($str) && $str !== ''; // ver se a str esta setada e se é diferente de vazia. Se tudo for correto, retorna true, caso contrario retorna false
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';


    public function validarStringMelhor($str) {
        return isset($str) && trim($str); //ver se esta setada e usando a função trim(tira os espaços em branco). Se passar uma string com algum espaço em branco, vai retornar false
    }
}

//não da pra usar o trait a partir de herança, então usamos "use"
class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' ')); //retorna true pq satisfaz as condições
echo '<br>';
var_dump($usuario->validarStringMelhor(' ')); // retorna false pq não satisfaz as condições
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo $usuario->imprimirValorC();
