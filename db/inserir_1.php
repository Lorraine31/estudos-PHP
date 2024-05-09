<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

// criando campos para inserir as infos que quero e os valores
$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Andre',
        '2002-11-25',
        'andreee@email.com',
        'https//:andress.sites.com.br',
        0,
        1200
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();