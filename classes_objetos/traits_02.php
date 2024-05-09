<div class="titulo">Traits #2</div>

<?php
trait Validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}
// os dois terão o mesmo nome para dar conflito nos nomes, porém mudando o return
trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);

    }
}

class Usuario {
    //use validacao, validacaoMelhor; apenas desse jeito não irá resolver o conflito de nomes
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao; //resolvendo o conflito: use o validarString de validacaoMelhor e não o de validacao
        //validacao::validarString insteadOf validacaoMelhor; poderia ser assim, o retorno seria um false

        validacao::validarString as validacaoSimples; //após ignorar um método para resolver o conflito dos nomes, posso mudar o nome do ignorado e assim usar ele tbm
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
