<div class="titulo">Integração CSS</div>
<!-- Maneiras de interagir  php e html -->
<h1 center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo';
    echo '</small>';
    ?>
</h1>

<?= "<div center azul> Outra forma de 'expressar'</div>" ?>

<br>
<div center ><button dobro><?= "Legal" ?></button></div>

<style>
    button {
     padding: 5px <?= 2 * 10 ?>px; /*codigo php dentro de um css que é igual a 20px*/
    background-color: #4286f4;
    color: #eee;
    font-weight: bold;
    border-radius: 10px;
    }
    [center] {
        display: flex;
        justify-content: center; 
    }

    <?= "[azul]" ?> { /*mais um exemplo de integração*/
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>