<div class="tiutlo">Datas #02</div>

<?php
//colocando alguns formatos pre-definidos em variaveis
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

// print_r($agora);
// echo '<br>';

echo $agora->format($formatoData1) . '<br>';//assim dará a data em ingles

setlocale(LC_TIME, 'pt_BR');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';//aqui estamos deixando em pt-br

$dataFixa = new DateTime('1975-01-25 15:30:50');//criando uma data fixa
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';//coloquei a maneira que queria a data e hora aparecendo e chamei a data fixa

$amanha = new DateTime('+2 week');//pega a data atual e soma ou subtrai quantos dias, semanas etc vc quiser
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->modify('+1 day');//vai acrescentar mais um dia no $amanha(que ja era de 2 semanas pra frente)
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 20);//podemos setar uma data específica através do setDate
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

//comparando as datas
$dataPassada = new DateTime('2000-05-17');//data passada
$dataFutura = new DateTime('2030-11-26');//data futura
$outraData = new DateTime('2030-11-26');//data igual a futura
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';//$amanha é maior ou menor que data passada?
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';//$amanha é maior ou menor que data futura?
echo $outraData == $dataFutura ? 'Igual' : 'Diferente';//comparando se as duas datas são iguais ou diferentes. Se fizer uma comparacao com igualdade estrita (===) o resultado sera diferente, pq se trata de duas instancias no computador

//mudando o time zone
echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');//chamo exatamente o local que quero chamar o time xone, nesse caso foi de sp
$agora = new DateTime(null, $tz);//o null faz com que ele continue pegando a data atual
echo $agora->format('d/M/Y H:i:s');