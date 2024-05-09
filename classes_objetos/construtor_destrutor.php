<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    //chamando construtor
    function __construct($novoNome, $idade = 18) { //deixei uma idade inicial definida
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome; //estou dizendo que o atributo da classe Pessoa vai receber o valor do atributo definido no construtor
        $this->idade = $idade; // mesma coisa aqui
    }

    //chamando destrutor
    function __destruct() {
        echo 'E morreu! <br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br>"; //função sendo chamada para acessar variáveis que pertencem ao objeto
    }
}

$pessoaA = new Pessoa('Maria', 40); //criação do objeto, passando parâmetros no construtor
$pessoaA->apresentar();
unset($pessoaA);

$pessoaB = new Pessoa('João Pedro', 15);
$pessoaB->apresentar();
$pessoaB = null;

//OBS:
//$pesssoa = new Pessoa(); não posso fazer isso pq preciso de passar os parametros