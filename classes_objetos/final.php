<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() { //final: a implementacao do método não pode ser mudado nas heranças
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1<br>';
    }

    // public function metodo2() {
    //     echo 'Extendendo método 2 <br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica { //posso definir o final na própria classe tbm
    public $attr = 'Valor único!';
}

$unica = new Unica();
echo $unica->attr; //posso instanciar normalmente. Ela só não permitirá herança

// class Duplicata extends Unica {   isso gera um erro pq não podemos usar extends em uma classe com final
//     public $att2;
// }