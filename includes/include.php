<div class="titulo">Include</div>

<?php
echo ' Executei essa linha do arquivo include <br>';
include('include_arquivo.php'); //incluindo nesse arquivo o outro arquivo que criei. A partir daqui, tenho a minha disposição as funções e demais coisas que coloquei no arquivo chamado
//include('include_arquivo.php');

echo soma(3, 8) . '<br>'; //chamando função de include_arquivo.php
echo "O conteúdo da variável é '{$variavel}'"; //chamando variavel de include_arquivo.php