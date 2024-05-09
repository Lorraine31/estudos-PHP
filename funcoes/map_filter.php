<div class="titulo">Map & Filter</div>

<!-- 
    MAP: pode transformar um array em outro array (ou qlq outra transformação, como transf um string em um número)
 e cada elemnto poderá ser transformado a partir de uma função.
    FILTER: vai "filtrar" algo. O retorno do filter é true ou false. Assim, o que será filtrado depende do que será 
passado.
-->

<?php
// Aqui temos um array de notas, onde quero deixar essas notas com valores arredondados
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round ($nota);
}

print_r($notasFinais1);
echo '<br>';

//usando um método mais rápido
$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);

$apenasOsAprovados1 = [];
foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

echo '<br>';
print_r($apenasOsAprovados1);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasOsAprovados2 = array_filter($notas, aprovados);
print_r($apenasOsAprovados2);

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);