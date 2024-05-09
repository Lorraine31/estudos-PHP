<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() { //essa função tem acesso aos 3 atributos pq ela esta dentro da classe A
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir! <br>';
    }
}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>"; //visivel para todos
        echo "Class B) Protegido = {$this->protegido}<br>"; //visivel através da herança, herdado do pai
        echo "Class B) Privado = {$this->privado}<br>"; //não é visivel pq é restrito a propria classe que ele foi definido

        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();