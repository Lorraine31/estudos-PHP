<div class="titulo">Desafio do Módulo</div>

<?php
//DESAFIO:usar exemplos passados e fazer um require de um arquivo para outro arquivo 
require_once('usuario.php');

ini_set('display_errors', 1);

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);