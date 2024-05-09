<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";
$sql = "DELETE FROM cadastro WHERE id = :id";//mostrando de onde quero pegar (cadstro) e usando qual parametro(id)
//poderia tbm mudar o valor de = e colocar maior ou menor para excluir todos mais ou menores que tal numero

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 15])) {//coloco o id que deseji excluir. Se for passado um numero de id inexistente não aparecerá um erro
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}