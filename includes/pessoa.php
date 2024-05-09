<?php
//arquivo faz parte do desafio e a classe pessoa foi copiada do arquivo herança, dentro de classes_objetos

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada~<br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!';
     }

     public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
     }
}