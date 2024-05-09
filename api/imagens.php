<div class="titulo">Imagens</div>

<?php 
//proposa do desafio é filtrar alguns tipos de arquivo, por exemplo arquivos png. É igual o arquivo download, com algumas mudanças de filtros na parte do formulario
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(stripos($arquivo, '.png') > 0): ?><!--verifica se o arquivo tem uma extenção png e se é maior que 0 -->
            <li>
                <!-- substitui a tag a por img e ja da a imagem na pag com a altura definida em height-->
                 <img src="../files/<?= $arquivo ?>"
                    height="120" />
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>