<div class="titulo">Classe Abstrata</div>

<?php
//uma classe abstrata não pode ser instanciada (não pode usar o "new...")
// e pode ter todos os métodos implementados concretos, ou abstratos e concretos, ou só abstratos

abstract class Abstrata {
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Executando método 2, com parametro $parametro<br>";
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2(); não consigo acessar pq esse método esta protegido (protected)
$c->metodo3();

echo "<br>";
var_dump($c);

echo "<br>";
var_dump($c instanceof Concreta);
echo "<br>";
var_dump($c instanceof FilhaAbstrata);
echo "<br>";
var_dump($c instanceof Abstrata);
