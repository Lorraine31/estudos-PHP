<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

//inserir um novo cadastro na tabela

//inserindo os parametros da tabela dentro da propria string
$sql = "INSERT INTO cadastro 
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme Filho',
    'guidagalera@gmail.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    0,
    3000
)";

$conexao = novaConexao();
// print_r(get_class_methods($conexao)); mostra todos os métodos de uma classe, nesse caso a classe ta dentro de conexao

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId(); //se a conexao for bem sucedida, vai pegar o id e pode mostrar uma mensagem de sucesso
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>"; //se der erro, mostra o código de erro
    print_r($conexao->errorInfo());
}

$conexao->close();