<?php
echo 'Carregando: include_arquivo <br>';

$variavel = 'Estou definida';

if(!function_exists('soma')){ //preciso usar function_exists se quero chamar esse arquivo em include.php mais de uma vez (não posso chamar a mesma função duas vezes)
    function soma($a, $b) {
        return $a + $b;
    } 
}
