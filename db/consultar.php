<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registro</div>

<?php
require_once "conexao.php";

$sql = "SELECT * FROM cadastro"; //lembrar de sempre especificar qual tabela quero trazer, caso contrario trará inumeras tabelas (se ouver varias definidas pq ele pegará todas)

$conexao = novaConexao();
$resultado = $conexao->query($sql);

//aqui precisamos receber o resultado obtido da consulta e salvar esses resultados (aqui salvarei em $registros)
$registros = []; //criei um array vazio

if($resultado->num_rows > 0) { // verifico se numero de linhas maior que 0. Se maior que 0 significa que alguma tabela foi criada e vai ter um valor retornando
    while($row = $resultado->fetch_assoc()) { //criando um array associativo que corresponde a cada linha da tabela que criei
        $registros[] = $row; //atribuindo os arrays associativos no $registro, para assim ter um array para cada linha da tabela
    }
} elseif($conexao->error) { //verificando se há algum erro na conexao
    echo "Erro: " . $conexao->error;
}

// print_r($registros); uso para ver os dados, mas eles ja vão aparecer organizados na tabela, então não preciso usar

$conexao->close();
?>

<!-- criando a tabela para armazenar os registros que coletei anteriormente(uso de bootstrap 4) -->
<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>