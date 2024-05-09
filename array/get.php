<!-- <div class="titulo">$_GET</div> -->

<?php
print_r($_GET); //me mostra que tenho apenas um array vazio  ->   Array()
//usando a versão "Sem formatação", na própria URL posso add elementos nesse array: 
//localhost:8888/array/get.php?nome=Leo&sobrenome=Leitao
//aparecerá: Array ( [nome] => Leo [sobrenome] => Leitao )
echo "<br>{$_GET['nome']}"; //deve pegar apenas o nome Leo