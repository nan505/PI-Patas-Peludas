<?php

$titulo_pagina = "Patinhas Peludas: Formulário de Animais";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header class="mb-5">
        <?php include "inc-nav.php"; ?>
    </header>

        <section class="container">
            <div class=row>

                <div class="col-6">
                    <form action="animais-salvar.php" method="post">
                        <label>Nome do animal:</label><br>
                        <input type="text" name="nome" required><br>

                        <br>

                        <label>O animal foi vermifugado?</label><br>
                        <input type="radio" name="foi_vermifugado" value="sim" required>
                        <label>Sim</label><br>
                        <input type="radio" name="foi_vermifugado" value="nao">
                        <label>Não</label><br>

                        <br>

                        <label>O animal possui alguma doença?</label><br>
                        <input id="checkbox_doenca" type="checkbox" onchange="fnMostrarTBoxDoenca()">

                        <br>

                        <div id="campo_doenca" style="display: none">
                            <label>Informe a(s) doença(s) do animal:</label><br>
                            <input type="text" name="possui_doenca">
                        </div>

                        <br>

                        <label>O animal é castrado?</label><br>
                        <input type="radio" name="foi_castrado" value="sim" required>
                        <label>Sim</label><br>
                        <input type="radio" name="foi_castrado" value="nao">
                        <label>Não</label><br>

                        <br>

                        <label>Informe a idade do animal:</label><br>
                        <input type="number" name="idade" required><br>

                        <br>

                        <label>Imagem do animal: (Ainda não sabemos se será necessário)</label><br>
                        <input type="text" name="url_imagem"><br>

                        <br>

                        <button type="submit">Cadastrar</button>
                        <button type="reset">Limpar</button>

                    </form>
                </div>

            <div>
        </section>

        <script src="./js/animais-formulario.js"></script>

<?php include "inc-footer.php"; ?>