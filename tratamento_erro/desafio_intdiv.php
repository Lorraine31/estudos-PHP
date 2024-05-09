<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception { //usar p / para conseguir acessar o namespace

}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError(); //mostrando que não esta dentro do namespace
    }

    if($a % $b > 0) {
        throw new NaoInteiroException();
    }
    
    return $a / $b;
}