<div class="titulo">Break/Continue</div>
<!-- Formas de mudar o fluxo normal de repetições, tirando (talvez) da ordem-->

<?php
$cont = 10;
for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont > 20) {
        break;   //não consigo usar mais um de break, pq sempre que encontra o primeiro
    }           //ja vai sair do laço. Então usamos apenas um por bloco
}

echo "<br><hr>";

for(;;) {
    $cont++;
    if($cont % 2 === 1) {
        continue; //posso usar continue várias vezes dentro de um bloco
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}

foreach(array(1, 2, 3, 4, 5, 6) as $valor) {
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo "Fim";

//É bom evitar o uso exagerado de break/continue para deixar o código mais simples e limpo