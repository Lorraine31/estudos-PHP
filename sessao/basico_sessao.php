<div class="titulo">Sessão</div>

<?php
session_start();//para iniciar a sessão

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {//se não existir na sessao uma chave com o nome "nome", vou atribuir o nome Gabriel
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {//se não existir na sessao uma chave com o nome "email", vou atribuir oemail gabriel@azmail.com
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='/sessao/basico_sessao_alterar.php'>
        Alterar Sessão
    </a>
</p>