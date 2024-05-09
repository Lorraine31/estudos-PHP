<div class="titulo">Desafio For</div>
<!--
    Usar o For e imprimir
    #
    ##
    ###
    ####
    #####
    1) pode usar incremento $i++
    2) não pode usar incremento
-->

<?php
$desafio1 = '';
for($cont = 1; $cont <= 5; $cont++) {
    $desafio1 .= '#';
    echo "$desafio1 <br>";
}

echo '<hr>';

for($desafio2 = '#'; $desafio2 !== '######'; $desafio2 .= '#') {
    echo "$desafio2 <br>";
}