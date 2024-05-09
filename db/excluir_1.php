<div class="titulo">Excluir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3"; //informando que quero deletar e onde esta a info que quero deletar
//desse modo, o id 3 foi excluido do banco que a ordem dos ids ficou 1, 2, 4, 5...

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();