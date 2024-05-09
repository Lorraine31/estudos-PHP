<div class="titulo">Upload</div>

<?php 
print_r($_FILES);//um array que terá os arquivos feitos upload a partir de um formulario

if($_FILES && $_FILES['arquivo']) {//se FILES existe e é m arquivo
    $pastaUpload = '/Users/lorraineletielepires/Desktop/cuuuurso/';//definir a pasta que quero salvar
    $nomeArquivo = $_FILES['arquivo']['name'];//salvar na variavel nomeArquivo
    $arquivo = $pastaUpload . $nomeArquivo;//fazer o caminho completo do arquivo
    $tmp = $_FILES['arquivo']['tmp_name'];//diretorio temporario

    if (move_uploaded_file($tmp, $arquivo)) {//se essa funcao por bem sucedida
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {//caso contrario
        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post"
    enctype="multipart/form-data"> <!-- feito para suportar arquivos do upload -->
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>