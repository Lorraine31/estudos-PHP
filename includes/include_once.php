<div class="titulo">Include Once</div>

<?php
//trazer um determinado arquivo apenas uma vez, mesmo que ele seja chamado várias vezes

ini_set('display_errors', 1);
include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variavel = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include_once('include_once_arquivo.php'); //nesse caso ele carregará o arquivo de novo mas a variavel não é setada
//include('include_once_arquivo.php'); assim a variavel seria setada
echo "Variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php'); //continua carregando de novo mas deixando a variavel com as mesmas alterações de antes
echo "Variável = '{$variavel}'.<br>";