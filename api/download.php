<div class="titulo">Download</div>

<?php 
session_start();//armazenar todos os arquivos que fizermos upload

$arquivos = $_SESSION['arquivos'] ?? [];//pegando os arquivos da session e começa com um array fazia pq no começo não terá nenhum arquivo

$pastaUpload = __DIR__ . '/../files/';//usando um diretorio e entrando na pasta files
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;//pasta concatenada com o nome do arquivo
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;//se foi feito o upload, vou acrescentar ao array o nome do arquivo
    $_SESSION['arquivos'] = $arquivos;//alterando a session pra receber o array ja modificado
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<!-- vamos criar um formulario junto com uma lista pra mostrar todos os arquivos que estão na sessão -->
<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?><!-- percorrendo cada arquivo aqui -->
        <li>
            <a href="../files/<?= $arquivo ?>">
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>