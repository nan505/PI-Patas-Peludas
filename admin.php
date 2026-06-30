<?php

$titulo_pagina = "Patinhas Peludas: Login de Administrador";
include "inc-head.php";

?>

<body class="site-body pt-5 d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <main class="container page-main">
        <section class="page-section">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">
                    <form id="formAdmin" method="post" action="admin-consultar.php" class="form-patinhas p-4">
                        <div class="text-center mb-3">
                            <h1 class="titulo fs-3">Área administrativa</h1>
                            <p class="texto mb-0">Acesse para gerenciar animais e adotantes.</p>
                        </div>

                        <p id="mensagemErro" style="color: red"></p>

                        <label for="email_usuario">E-mail:</label>
                        <input id="email_usuario" type="email" name="email_usuario" required>

                        <label for="senha_usuario">Senha:</label>
                        <input id="senha_usuario" type="password" name="senha_usuario" required>

                        <div class="d-flex gap-2 mt-4">
                            <button class="btn btn-patinhas flex-fill" type="submit">Login</button>
                            <button class="btn btn-patinhas-secundario flex-fill" type="reset">Limpar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="./js/admin-formulario.php"></script>

</body>
</html>