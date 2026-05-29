<?php

$titulo_pagina = "Patinhas Peludas: Administração";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header class="mb-5">
        <?php include "inc-nav-admin.php"; ?>
    </header>

    <section class="container d-flex justify-content-center align-items-center">
        <form method="post" action="...">
            <label>E-mail:</label><br>
            <input type="email" name="email_usuario" required><br>

            <label>Senha:</label><br>
            <input type="password" name="senha_usuario" required><br>

            <br>

            <button type="submit">Login</button>
            <button type="reset">Limpar</button>
        </form>
    </section>

<?php include "inc-footer.php"; ?>