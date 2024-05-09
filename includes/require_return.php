<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php'); // o require carrega o arquivo e pode retornar oq o arquivo retorna
echo "$valorRetorno<br>"; //aqui não preciso saber o nome da variavel do outro arquivo, pq vou usar o nome da variavel que criei aqui
echo "$variavelRetornada<br>"; //posso chamar a função diretamente tbm, mas nesse caso preciso saber o nome da variavel do outro arquivo

echo __DIR__ . '<br>'; //constante que mostra a pasta atual do script que estamos executando

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php'); //aqui usamos o caminho direto, que retornará 1 se o caminho e arquivo chamado estiverem certos
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";

