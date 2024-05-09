<div class="tit">Include vs Require</div>

<?php
// Include e Require são duas funções muito parecidas, o que muda é a maneira que o php lida com os possíveis erro que cada uma pode gerar.
// Exemplo: tentar carregar um arquivo inexistente. No include vai gerar uma advertencia e no require gera um erro fatal
// No caso de ter certeza que determinado sistema só funcione se o arquivo existir de fato, é melhor usar o require pq rapidamente percebemos que falta algum arquivo
// Mas se trabalhamos com um arquivo que pode ou não existir, é melhor usar include

echo 'Usando include com um arquivo inexistente...<br>';
ini_set('display_errors', 1); //para mostrar os eventuais erros gerados
include('arquivo_inexistente.php');
