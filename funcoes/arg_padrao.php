<div class="titulo">Argumento Padrão</div>
<!-- exemplos de parametros pré-estabelecidos -->

<?php
function saudacao($nome='Senhor(a)', $sobrenome = 'Cliente') { //estabeleci dois parametros que serão usados se não houver outro para chamar
    echo "Bem-vindo, $nome $sobrenome! <br>";
}

echo saudacao();
echo saudacao(NULL); //não quero nenhum valor no primeiro parametro
echo saudacao(null, null); //não quero nenhum valor nos dois parametros
echo saudacao("Maria", "Luiza"); //dei valores para os parametros

echo '<br>';

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido("Batata Frita");
anotarPedido("Pizza", "Coca-Cola");