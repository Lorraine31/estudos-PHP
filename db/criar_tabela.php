<div class="titulo">Criar Tabela</div>

<?php
require_once "conexao.php";

//não precisa colocar tudo de sql com letra maiuscula, estou fazendo apenas como uma forma de marcação

//aqui criei só o sql da tabela com os campos que quero
//e essa parte é conhecida como DDL - Data Definition Lang. É um subgrupo responsavel por criar e alterar tabelas, criar banco de dados, etc
 $sql = "CREATE TABLE IF NOT EXISTS cadastro ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
    )";

    //criando a conexão
    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    //fazendo a verificação
    if($resultado) {
        echo "Sucesso :)";
    } else {
        echo "Error: " . $conexao->error;
    }
    
    $conexao->close();