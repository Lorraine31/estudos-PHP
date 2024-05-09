<?php

function novaConexao($banco = 'curso_php') {
$servidor = 'localhost';
$usuario = 'root';
$senha = ''; //deixei sem senha pq o erro que aparecia era como se a senha estivesse errada

try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", //informar dentro da string de conexao qual o banco que estamos usando ja mostra que o PDO é genérico (não trabalho só com mySql)
            $usuario, $senha);
        return $conexao;
    } catch(PDOException $e) {
        die('Erro: ' . $e->getMessage()); //se der algum erro de conxao ele cai aqui no catch
    }
}
