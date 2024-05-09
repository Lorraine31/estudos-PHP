<?php
// nesse arquivo vou criar uma conexão com todos os outros de banco de dados

function novaConexao($banco = 'curso_php') {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco); //criando nova instancia do myqsli e armazenando em uma variavel $conexao

    if($conexao->connect_error) {
        die ('Erro: ' . $conexao->connect_error); //esse tipo de erro não é o ideal, estou usando só no caso desse exemplo
    }

    return $conexao;
}