<?php

$titulo_pagina = "Patinhas Peludas: Formulário de Animais";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header class="mb-5">
        <?php include "inc-nav.php"; ?>
    </header>

        <section class="container">
            <form action="animais-salvar.php" method="post">
                <label>Nome do animal:</label><br>
                <input type="text" name="nome"><br>

                <br>

                <label>O animal foi vermifugado?</label><br>
                <input type="radio" name="animal_foi_vermifugado" value="sim">
                <label>Sim</label><br>
                <input type="radio" name="animal_foi_vermifugado" value="nao">
                <label>Não</label>
            </form>
        </section>

<?php include "inc-footer.php"; ?>