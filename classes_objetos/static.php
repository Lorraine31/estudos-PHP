<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estática)'; // não é mais uma variavel de instancia, ela pertence apenas a classe. Porém, as instancias conseguem acessae esse valor

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática =  " . self::$static . "<br>"; //forma correta de acessar um membro estatica
    }

    public static function mostrarStaticA() {
        echo "Estática = " . self::$static . "<br>"; //mesmo jeito para acessar uma função estatica
    }
}

$objetoA = new A();
$objetoA->mostrarA();

echo '<br>';
echo A::$static, '<br>'; //acessar diretamente pela classe
A::mostrarStaticA(); //acessar diretamente pela classe

echo '<br>';
A::$static = 'Alterando membro de classe';
echo A::$static, '<br>';