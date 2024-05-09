<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida { //uso o abstract pq não quero instanciar a Comida, e sim comidas concretas como o Arroz, Feijão etc
    public $peso;
}

class Arroz extends Comida { //essas classes estão herdando de Comida

}

class ArrozAGrega extends Arroz {

}

class Feijao extends Comida {
    
}

class Sorvete extends Comida {
    
}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) { //posso colocar qlq coisa que herda de Comida, assim ira fazer a soma de tudo que a pessoa comer
        $this->peso += $comida->peso; //peso da pessoa + peso da comida vai ser o novo peso
    }
}



$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega(); //como arroz a grega esta herdando de arros, o peso final será a soma dos dois + o pesso da pessoa
$c2->peso = 0.25;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;