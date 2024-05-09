<div class="titulo">Primeira Classe</div>

<?php
class Cliente { //nome da classe sempre com letra maiúscula
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>'; //chamando um atributo específico
$c1->idade = 27.5;
echo $c1->apresentar(), '<br>';

$c2 = new Cliente();
$c2->nome = 'Gabriel';
$c2->idade = 43;
echo $c2->apresentar();