<?php

$titulo_pagina = "Patinhas Peludas: Formulário de Animais";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header>
        <?php include "inc-nav.php"; ?>

        <section class="container">
            <form action="animais-salvar.php" method="post">
                <label>Nome do animal:</label>
                <input type="text" value="nome">

                <label>O animal foi vermifugado?</label>
                
            </form>
        </section>

<?php include "inc-footer.php"; ?>