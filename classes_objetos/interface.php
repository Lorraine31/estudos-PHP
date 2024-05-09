<div class="titulo">Interface</div>

<?php
//toda interface pode ter apenas os métodos, não pode ter implementação. Todos os métodos são public, não pode ser privad ou protected
interface Animal {
    function respirar();
}
//pode usar o extend em interfaces, mas é preciso lembrar de chamar a função das todas as interfaces depois

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

interface Felino {
    function correr();
}

//uma classe pode implementar várias interfaces
//não posso ter uma classe herdando de multiplas classes
class Cachorro implements Animal, Canino { //qdo usamos o implements, temos a obrigatoriedade de trazer a função da interface que esta implementando. Diferente do extends
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'Au Au';
    }
    function mamar() {
        return "Irei usar leite!";
    }
    function correr() {
        return "Corro rápido!"
    }

}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro); //animal é uma instância de Cachorro?... nesse caso o resultado esperado é true
var_dump($animal instanceof Canino);//mesma coisa
var_dump($animal instanceof Mamifero);//mesma coisa
var_dump($animal instanceof Animal);//mesma coisa
var_dump($animal instanceof Felino);//a resposta aqui será false, pois não esta implementando Felino, mesmo que Cachorro tb tenho uma função correr