<div class="titulo">Métodos Mágicos</div>

<?php
//converter um objeto em string = toString
//acessar um método que não existe dentro de uma classe no php = método GET 
//alterar um atributo que não foi setado dentro do objeto = método SET
//chama o método de um objeto que não existe = método call

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo '<br> e morreu!';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>"; //ele vai identificar através do this que estou chamando o método toString
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método '${metodo}'";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa ('Ricardo', 40); // __construct
$pessoa->apresentar();  //chamando o __toString
echo $pessoa, '<br>'; //chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); //chamando o __toString

//get e set
$pessoa->nomeCompleto; // (chamando __get) por ter o get, consigo ler o atributo nomeCompleto mesmo não declarando ele em nenhum lugar
$pessoa->nomeCompleto = 'Muito legal'; // (chamando __set) aqui modificando um atributo que não existe
echo $pessoa->nome; //acessa o atributo diretamente sem o __get

//call
$pessoa->exec(1, 'teste', true, [1, 2, 3]); //chamando __call

$pessoa = null; // __destruct