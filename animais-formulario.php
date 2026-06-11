<?php

$titulo_pagina = "Patinhas Peludas: Formulário de Animais";
include "inc-head.php";

?>

<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav-admin.php"; ?>
    </header>

        <main class="container page-main">
            <div class="row g-4">

                <div class="col-md-12 col-lg-4">
                    <form action="animais-salvar.php" method="post" class="form-patinhas p-4">
                        <div class="text-center mb-3">
                            <h1 class="titulo fs-3">Cadastro de animais</h1>
                        </div>

                        <label>Nome do animal:</label>
                        <input type="text" name="nome" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$" required>

                        <label>Informe a idade do animal:</label>
                        <input type="number" name="idade" min="0" max="40" pattern="0-9" required>

                        <label>O animal foi vermifugado?</label>
                        <div>
                            <input type="radio" name="foi_vermifugado" value="sim" required>
                            <label>Sim</label>
                        </div>
                        <div>
                            <input type="radio" name="foi_vermifugado" value="nao">
                            <label>Não</label>
                        </div>

                        <label>O animal possui alguma doença?</label>
                        <div>
                            <input id="checkbox_doenca" type="checkbox" onchange="fnMostrarTBoxDoenca()">
                            <label for="checkbox_doenca">Sim</label>
                        </div>

                        <div id="campo_doenca" style="display: none">
                            <label>Informe a(s) doença(s) do animal:</label>
                            <input id="input_doenca" type="text" name="possui_doenca" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$">
                        </div>

                        <label>O animal é castrado?</label>
                        <div>
                            <input type="radio" name="foi_castrado" value="sim" required>
                            <label>Sim</label>
                        </div>
                        <div>
                            <input type="radio" name="foi_castrado" value="nao">
                            <label>Não</label>
                        </div>

                        <label>Imagem do animal:</label>
                        <input type="text" name="url_imagem" required>

                        <div class="d-flex gap-2 mt-4">
                            <button class="btn btn-patinhas flex-fill" type="submit">Cadastrar</button>
                            <button class="btn btn-patinhas-secundario flex-fill" type="reset">Limpar</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-12 col-lg-8">

                    <section class="page-section">
                        <h2 class="titulo fs-3">Filtros</h2>
                        <?php

                        include "inc-conexao.php";
                        $sql = "SELECT * FROM tb_informacoes_gatos WHERE 1 = 1";
                        $params = [];
                        $isIdadeMaximaValida = false;

                        $getNome = $_GET['filtro_nome'] ?? null;
                        if(isset($getNome) && $getNome != ""){
                            $getNomeTratado = trim(ucfirst(strtolower($getNome)));
                            $sqlNome = " AND nome = ?";

                            $sql .= $sqlNome;
                            $params[] = $getNome;
                        }

                        $getIdadeMinima = $_GET['filtro_idade_minima'] ?? null;
                        if(isset($getIdadeMinima) && $getIdadeMinima >= 0){
                            $sqlIdadeMinima = " AND idade >= ?";

                            $sql .= $sqlIdadeMinima;
                            $params[] = $getIdadeMinima;
                        }

                        $getIdadeMaxima = $_GET['filtro_idade_maxima'] ?? null;
                        if(isset($getIdadeMaxima) && $getIdadeMaxima >= 0){

                            if($getIdadeMinima == null || $getIdadeMaxima >= $getIdadeMinima){
                                $isIdadeMaximaValida = true;
                                $sqlIdadeMaxima = " AND idade <= ?";

                                $sql .= $sqlIdadeMaxima;
                                $params[] = $getIdadeMaxima;

                            }
                        }

                        $getVermifugado = $_GET['filtro_vermifugado'] ?? null;
                        if(isset($getVermifugado) && $getVermifugado != ""){
                            $sqlVermifugado = " AND vermifugado = ?";

                            $sql .= $sqlVermifugado;
                            $params[] = $getVermifugado;
                        }

                        $getDoenca = $_GET['filtro_doenca'] ?? null;
                        if(isset($getDoenca) && ($getDoenca == 1 || $getDoenca == 0) ){
                            if($getDoenca == 1){
                                $sqlDoenca = " AND possui_doenca IS NOT NULL AND possui_doenca != ''";
                            }
                            else if($getDoenca == 0){
                                $sqlDoenca = " AND (possui_doenca IS NULL OR possui_doenca = '')";
                            }
                            $sql .= $sqlDoenca;
                            $getDoencaValidada = $getDoenca;
                        }

                        $getCastrado = $_GET['filtro_castrado'] ?? null;
                        if(isset($getCastrado) && $getCastrado != ""){
                            $sqlCastrado = " AND castrado = ?";

                            $sql .= $sqlCastrado;
                            $params[] = $getCastrado;
                        }

                        ?>
                        <form method="GET" action="" class="filter-form row g-3 align-items-end mb-4">

                            <div class="col-md-6">
                                <label>Nome:</label>
                                <input type="text" name="filtro_nome" <?php if(isset($getNome) && $getNome != ""){echo "value = '$getNome'";} ?> >
                            </div>

                            <div class="col-md-3">
                                <label>Idade mínima:</label>
                                <input type="number" name="filtro_idade_minima" <?php if(isset($getIdadeMinima) && $getIdadeMinima >= 0){echo "value = '$getIdadeMinima'";} ?> >
                            </div>

                            <div class="col-md-3">
                                <label>Idade máxima:</label>
                                <input type="number" name="filtro_idade_maxima" <?php if(isset($getIdadeMaxima) && $isIdadeMaximaValida){echo "value = '$getIdadeMaxima'";} ?> >
                            </div>

                            <div class="col-md-4">
                                <label>Vermifugado:</label>
                                <select name="filtro_vermifugado">
                                    <option></option>
                                    <option value="1" <?php if(isset($getVermifugado) && $getVermifugado == 1){echo "selected";} ?>>Sim</option>
                                    <option value="0" <?php if(isset($getVermifugado) && $getVermifugado == 0){echo "selected";} ?>>Não</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Possui doença:</label>
                                <select name="filtro_doenca">
                                    <option></option>
                                    <option value="1" <?php if(isset($getDoencaValidada) && $getDoencaValidada == 1){echo "selected";} ?> >Sim</option>
                                    <option value="0" <?php if(isset($getDoencaValidada) && $getDoencaValidada == 0){echo "selected";} ?> >Não</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Castrado:</label>
                                <select name="filtro_castrado">
                                    <option></option>
                                    <option value="1" <?php if(isset($getCastrado) && $getCastrado == 1){echo "selected";} ?>>Sim</option>
                                    <option value="0" <?php if(isset($getCastrado) && $getCastrado == 0){echo "selected";} ?>>Não</option>
                                </select>
                            </div>

                            <div class="col-12 d-flex gap-2">
                                <button class="btn btn-patinhas" type="submit">Filtrar</button>
                                <button class="btn btn-patinhas-secundario" type="reset" onclick="fnLimparURL()">Limpar filtros</button>
                            </div>
                        </form>

                    <div class="table-patinhas">
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
                            echo "<td> <a href='animais-editar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td>";
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
                    </section>
                </div>

            </div>
        </main>

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

<?php include "inc-footer-admin.php"; ?>
