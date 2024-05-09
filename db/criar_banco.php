<div class="titulo">Criar Banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';  //criar uma nova instancia no banco de dados

$resultado = $conexao->query($sql); //aqui e o proximo if são para apresentar uma mensagem caso a conexao de certo ou errado

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Error: " . $conexao->error;
}

$conexao->close(); //para fechar/finalizar a conexão