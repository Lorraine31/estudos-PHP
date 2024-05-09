<?php
//arquivo faz parte do desafio e a classe usuario foi copiada do arquivo herança, dentro de classes_objetos

require_once('pessoa.php');
class Usuario extends Pessoa { 
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct() {
        echo 'Usuario diz: Tchau! <br>';
        parent::__destruct();
    }
     public function apresentar() {
         echo "@{$this->login}: ";
         parent::apresentar();
    }
}
