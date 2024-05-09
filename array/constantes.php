<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
//FRUTAS[0] = 'banana';     os elementos desse array não podem 
//FRUTAS[] = 'banana';      ser alterados pq ele é uma constante
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
//CARROS["BMW"] = '325i;    tbm não funciona pelo mesmo motivo do anteior
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro'; tbm não funciona pelo mesmo motivo do anteior
echo '<br>' . CIDADES[1];