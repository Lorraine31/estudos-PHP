<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1);
// echo 4 / 0 . '<br>';

error_reporting(E_ERROR); //com isso posso definir os niveis de erros que quero mostrar
// echo 4 / 0 . '<br>';

error_reporting(E_ALL); //nesse caso ele vai mostrar tudo, todos os erros, advertencias etc
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL);//aqui, usando o ~ significa que ele não vai exibir nada
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php'; //aqui tbm gera advertencias pq estamos chamando um arquivo que não existe

function filtrarMensagem($errno, $errstring) {
    $text = 'include'; //pegando pequenos trechos escritos que aparecem nos erros para serem filtrados
    // $text = 'by zero'; // mesma coisa aqui
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);//vai filtrar e mostrar apenas os warnings e/ou superiores a ele

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler(); //depois daqui, qlq mensagem vai ser tratada d forma padrao

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';