<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
   1 => "Janeiro",
   2 => "Fevereiro",
   3 => "Março",
   4 => "Abril",
   5 => "Maio",
   6 => "junho",
   7 => "Julho",
   8 => "Agosto",
   9 => "Setembro",
   10 => "Outubro",
   11 => "Novembro",
   12 => "Dezembro"
); //não precisaria mudar o índice de todos, mudando apenas o primeiro para 1 ja mudaria dos outros automaticamente
print_r($meses);
echo '<br>' .$meses[5];
echo '<br>' .$meses[12];