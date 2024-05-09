<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET); //mostrar'dir, array e post
echo '<br>';
print_r($_POST); //mostra um array(), porém qdo add nome e sobrenome esses valores vão para o array que estava vazio

echo '<br>' . count($_POST); //mostra a quantidade de elementos do array