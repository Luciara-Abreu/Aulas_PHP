<div class="titulo">Integração CSS</div>

<h1 center>
<?php
echo 'Olá ...';
echo '<small>';
echo ' Mundo! Aula 30';
echo '</small>';
?>
</h1>

<?= "<div center azul> Outra forma de imprimir na tela e usando seletor</div>" ?>
<br>

<!--- Botão em php dentro de uma div html -->

<div center>
    <button dobro>
        <?= "Botão" ?>
    </button>
</div>

<style>
    button {
        padding:  5px 20px;
        background-color: #a716f0;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    /*Usando seletor*/

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: 2rem;
    }



</style>

