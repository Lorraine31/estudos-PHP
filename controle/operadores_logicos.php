<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica<p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // o ! vai inverter a lógica, nesse caso o true passa a ser false. É o NOT

echo "<p class='divisao'>Tabela Verdade 'AND' (E)<p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
// var_dump(false && ?); Se o primeiro operador ja é falso, ele não precisa analisar o resto
echo'<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade 'OR'(OU)<p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo'<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR'(OU Exclusivo)<p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo'<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo<p><hr>";
$idade = 62;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

// $podeSeAposentar = $pagouPrevidencia &&        uma maneira de fazer
//     (
//         ($idade >= 60 && $sexo === 'F') || 
//         ($idade >= 65 && $sexo === 'M')
//     );



if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else { 
    echo 'Vai ter que trabalhar mais um pouco...';
}

echo '<br>';

?>
