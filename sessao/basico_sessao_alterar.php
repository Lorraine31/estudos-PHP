<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emailaz.com.br';
?>

<p>
     <b>Nome: </b> <?= $_SESSION['nome'] ?><br><!--mostrando o Nome e definindo o nome dessa sessao -->
    <b>Email: </b> <?= $_SESSION['email'] ?><!--mostrando o Email e definindo o nome dessa sessao -->
</p>


<p>
    <a href='basico_sessao.php'>Voltar</a><!-- voltar pra pg anterior -->
</p>
<p>
    <a href='basico_sessao_limpar.php'>Limpar Sessão</a>
</p>