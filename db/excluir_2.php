<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registro #2</div>

<?php

require_once "conexao.php";

//mesmo processo pra criar a tabela e armazenar
$conexao = novaConexao();
$registros = [];

//aqui acontece todo o processo de excluir que acontece ao clicar no botão. Foi feito antes do SELECT pq assim depois da exclusão a tabela ja atualiza com os valores atuais
if($_GET['excluir']) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?"; //é melhor definir um parametro como o ? do que colocar o $_GET, pq isso pode causar problemas e até excluir todos os dados da tabela
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT id, nome, email, nascimento FROM cadastro";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>"
                    class="btn btn-danger"> <!-- passando o id correto do que quero excluir e fazendo o botao de excluir -->
                        Excluir
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>