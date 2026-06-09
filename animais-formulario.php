<?php

$titulo_pagina = "Patinhas Peludas: Formulário de Animais";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header class="mb-5">
        <?php include "inc-nav-admin.php"; ?>
    </header>

        <section class="container">
            <div class=row>

                <div class="col-md-12 col-lg-4">
                    <form action="animais-salvar.php" method="post" class="border border-4 p-4">
                        <div class="text-center">
                            <h3>Cadastro de animais:</h3>
                        </div>

                        <hr>

                        <label>Nome do animal:</label><br>
                        <input type="text" name="nome" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$" required><br>

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
                            <input type="text" name="possui_doenca" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$">
                        </div>

                        <br>

                        <label>O animal é castrado?</label><br>
                        <input type="radio" name="foi_castrado" value="sim" required>
                        <label>Sim</label><br>
                        <input type="radio" name="foi_castrado" value="nao">
                        <label>Não</label><br>

                        <br>

                        <label>Informe a idade do animal:</label><br>
                        <input type="number" name="idade" min="0" max="40" pattern="0-9" required><br>

                        <br>

                        <label>Imagem do animal:</label><br>
                        <input type="text" name="url_imagem" required><br>

                        <br>

                        <button type="submit">Cadastrar</button>
                        <button type="reset">Limpar</button>

                    </form>
                </div>

                <div class="col-md-12 col-lg-8">

                    <section>
                        <h3>Filtros: </h3>
                        <?php

                        include "inc-conexao.php";
                        $sql = "SELECT * FROM tb_informacoes_gatos WHERE 1 = 1";
                        $params = [];

                        $getNome = $_GET['filtro_nome'] ?? null;
                        if(isset($getNome) && $getNome != ""){
                            $sqlNome = " AND nome = ?";

                            $sql .= $sqlNome;
                            $params[] = $getNome;
                        }

                        $getVermifugado = $_GET['filtro_vermifugado'] ?? null;
                        if(isset($getVermifugado) && $getVermifugado != ""){
                            $sqlVermifugado = " AND vermifugado = ?";

                            $sql .= $sqlVermifugado;
                            $params[] = $getVermifugado;
                        }

                        $getCastrado = $_GET['filtro_castrado'] ?? null;
                        if(isset($getCastrado) && $getCastrado != ""){
                            $sqlCastrado = " AND castrado = ?";

                            $sql .= $sqlCastrado;
                            $params[] = $getCastrado;
                        }

                        ?>
                        <form method="GET" action="">

                            <label>Nome:</label>
                            <input type="text" <?php if(isset($getNome) && $getNome != ""){echo "value = '$getNome'";} ?> name="filtro_nome">
                        
                            <label>Vermifugado:</label>
                            <select name="filtro_vermifugado">
                                <option></option>
                                <option value="1" <?php if(isset($getVermifugado) && $getVermifugado == 1){echo "selected";} ?>>Sim</option>
                                <option value="0" <?php if(isset($getVermifugado) && $getVermifugado == 0){echo "selected";} ?>>Não</option>
                            </select>

                            <label>Castrado:</label>
                            <select name="filtro_castrado">
                                <option></option>
                                <option value="1" <?php if(isset($getCastrado) && $getCastrado == 1){echo "selected";} ?>>Sim</option>
                                <option value="0" <?php if(isset($getCastrado) && $getCastrado == 0){echo "selected";} ?>>Não</option>
                            </select>

                            <button type="submit">Filtrar</button>
                            <button type="reset">Limpar filtros</button>
                        </form>
                    </section>

                    <table class="table table-striped table-hover border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Vermifugado?</th>
                                <th>Possui doença?</th>
                                <th>Castrado?</th>
                            </tr>
                        </thead>
                        <?php
                        $resultado = mysqli_execute_query($conn, $sql, $params);

                        while($linha_resultado = mysqli_fetch_assoc($resultado) ){
                            echo '<tr>';

                            echo "<td> {$linha_resultado['id']} </td>";
                            echo "<td> {$linha_resultado['nome']} </td>";
                            echo "<td> {$linha_resultado['idade']} anos </td>";

                            if($linha_resultado['vermifugado'] == 1){
                                echo "<td> Sim </td>";
                            }
                            else{
                                echo "<td> Não </td>";
                            }

                            if(!empty($linha_resultado['possui_doenca']) ){
                                echo "<td> {$linha_resultado['possui_doenca']} </td>";
                            }
                            else{
                                echo "<td> Não </td>";
                            }

                            if($linha_resultado['castrado'] == 1){
                                echo "<td> Sim </td>";
                            }
                            else{
                                echo "<td> Não </td>";
                            }

                            echo '</tr>';
                        }

                        mysqli_close($conn);

                        ?>
                    </table>
                </div>

            </div>
        </section>

        <?php
        
        if(isset($_GET['mensagem'] ) && $_GET['mensagem'] == "sucesso"){
            echo "
            <script>

            window.addEventListener('load', (event) => {
                alert('O animal foi cadastrado com sucesso!');
            });

            </script>
            ";
        }
        
        ?>

        <script src="./js/animais-formulario.js"></script>

<?php include "inc-footer-admin.php"; ?>