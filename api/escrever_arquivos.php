<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');//fopen= responsavel por abrir o arquivo. o 'w'diz que é o modo write (escrito)
fwrite($arquivo, "Valor inicial\n");//criei um 'valor inicial'no arquivo teste.txt que foi criado
$str = "Segunda linha\n";
fwrite($arquivo, $str); //posso criar uma string dentro do arquivo
fclose($arquivo);//para fechar o arquivo

$arquivo = fopen('teste.txt', 'w');//como anteriormente ja fechei o arquivo, agora vou abrir de novo e colocar o um novo conteudo que substituirá o anterior. 
//abrindo o arquivo no formato write, sempre vai subscrever um anterior e ficar pronto para receber mais coisas
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');//'a' significa que vai acrescentar algo ao arquivo ja existente
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');//'x'quero garantir que esse arquivo é inexistente. Nesse caso dara um erro pq aqui o arquivo ja existe