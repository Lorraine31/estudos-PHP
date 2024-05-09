<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r');//abre o arquvivo, 'r'é o modo leitura
echo fread($arquivo, 10);//passando referencia do $arquivo chamado na linha 4 e a quantidade de bites que quero ler do arquivo
echo '<br>';
echo fread($arquivo, 10);//ler mais 10 bites do arquivo
fclose($arquivo);//fecha o arquivo

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');//filesize vai me mostrar o tamanho do arquivo
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';//fgest vai ler a primeira linha, se chamar fgets de novo ele vai ler a segunda linha, e assim sucessivamente
echo fgets($arquivo), '<br>';//retorna a segunda linha. No caso desse arquivo só temos até a segunda linha, então se chamar o fgets pela terceira vez, ele retornará falso
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';

//aqui irá correr todas as linhas de arquivo sem necessariamente saber qtas linhas ele tem
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {//feof detecta o final do arquivo. Dentro do while ele vai repetir até chegar no final de $arquivo
    echo fgets($arquivo), '<br>';//fgets que vai percorrer linha por linha
}
fclose($arquivo);

//aqui irá ler caracter por caracter
echo '<hr>';
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);//fgetc vai ler por caracter
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

//abrir um arquivo que podemos ler e editar tbm
$arquivo = fopen('teste.txt', 'r+');//r+ significa que posso alterar o arquivo
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);

echo "Fim!";