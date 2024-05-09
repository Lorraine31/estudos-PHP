<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!'; //não é assim que chamo a constante que criei!!!
// TAXA_DE_JUROS = 2.5;   Não posso assim tbm

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOISSIMA_TAXA', $valorVariavel); posso fazer assim, usando o define
//  const NOVISSIMA_TAXA = $valorVariavel;   Não posso fazer assim
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION; //mostra a  versão do php
echo '<br>' . PHP_INT_MAX; //mostra o max
echo '<br> linha: ' . __LINE__; //mostra linha em que esta
echo '<br>' . __FILE__; //mostra o arquivo
echo '<br>' . __DIR__; //mostra o diretório