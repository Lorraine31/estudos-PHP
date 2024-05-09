<div class="titulo">Desafio Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/ {$this->mes}/ {$this->ano}";
       // echo "{$this->dia}/ {$this->mes}/ {$this->ano}";      poderia fazer assim tbm
    }
}
$datas = new Data();
$datas->dia = 20;
$datas->mes = 05;
$datas->ano = 1996;
echo $datas->apresentar(), '<br>';
//$datas=>apresentar();     e depois chamar assim

$aniversario = new Data;
$aniversario->dia = 13;
$aniversario->mes = 11;
$aniversario->ano = 1980;
echo $aniversario->apresentar(), '<br>';

$casamento = new Data();
$casamento->dia = 31;
$casamento->mes = 07;
$casamento->ano = 2023;
echo $casamento->apresentar();