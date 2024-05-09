<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC); //para armazenar o resultado e pegar os registros (fetchall pega vários registros)
// PDO::FETCH_NUM  posso substituir o PDO acima por qlq um desses, tudo dependo do retorno que quero ter desse array, se é numero, se é a classe, o associativo, etc
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH pega o associativo e o numérico
print_r($resultado);

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio"; //esse vai subescrever o anterior. OFFSET= determina a partir de qual linha
//vai começar a pegar no cadastro. Se o offset for definido como 20, significa que ele começara a contagem a partir da linha 20

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);//quero apenas dois registros com o deslocamento de linha sendo 3
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

// print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado); //se der certo mostra o resultado
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());//se der erro mostra a mensagem de erro e o erro
}

echo "<hr>";

//obter um determinado elemento pelo id
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
//para usar esses métodos preciso usar ? no lugar de :id
// $stmt->bindValue(':id', 15);
// if($stmt->execute()) {
// if($stmt->execute([14])) {

if($stmt->execute([':id' => 7])) {//aqui passo o numero do id que desejo chamar
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();