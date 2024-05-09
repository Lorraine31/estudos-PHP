<div class="titulo">Desafio Sorteio</div>
<!-- Mostrar um dos nomes, mas de forma aleatória -->

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$index = array_rand($nomes); 
echo "<h1><center>$nomes[$index]</center></h1>"

?>