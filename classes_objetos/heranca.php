<div class="titulo">Herança</div>

<?php

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

class Usuario extends Pessoa { //Usuario é a subclasse (classe mais específica) e Pessoa é a superclasse (classe mais genérica).
    public $login;                                      //Ou seja, além de ter tudo que Pessoa tem, Usuario tbm terá características apenas dele

    function __construct($nome, $idade, $login) {
        $this->nome = $nome;
        $this->idade = $idade;
        //parent::__construct($nome, $idade); se quero chamar o construtor de Pessoa e não usar as duas linhas de codigo acima
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct() {
        echo 'Usuario diz: Tchau! <br>';
        parent::__destruct(); //chamando o destrutor de Pessoa, mesmo em Usuario
    }

     public function apresentar() { //mesmo tirando essa função apresentar, Usuario vai herdar essa função de Pessoa
         echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";    //Mas aqui, dei um comportamento diferente para a função apresentar (dei caracteristicas de Usuario)

         //outra maneira de chamar apresentar com as caracteristicas de Usuario:
         //echo "@{$this->login}: ";
         //parent::apresentar();
     }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);