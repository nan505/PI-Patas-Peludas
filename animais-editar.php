<?php

$id = $_GET['id'] ?? null;

if($id == null || $id == "" || $id < 1){
    header('Location:animais-formulario.php?mensagem=erro');
}

include "inc-conexao.php";

$nome = $idade = $foi_vermifugado = $possui_doenca = $foi_castrado = $imagem = "";
$resultado = mysqli_execute_query($conn, "SELECT * FROM tb_informacoes_gatos WHERE id = ?", [$id]);

while($linha = mysqli_fetch_assoc($resultado) ){
    $nome = $linha['nome'];
    $idade = $linha['idade'];
    $foi_vermifugado = $linha['vermifugado'];
    $possui_doenca = $linha['possui_doenca'];
    $foi_castrado = $linha['castrado'];
    $imagem = $linha['foto'];
}

$titulo_pagina = "Patinhas Peludas: Formulário de {$nome}";
include "inc-head.php";

?>

<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav-admin.php"; ?>
    </header>

    <main class="container page-main">
        <div class="row">

            <div class="col-8">
                <form action="animais-atualizar.php" id="formAnimais" method="post" class="form-patinhas p-4">
                    <div class="text-center mb-3">
                        <h2>Editar formulário de: <?=$nome; ?></h2>
                    </div>

                    <p id="mensagemErro" style="color: red"></p>

                    <input type="number" name="id" value="<?=$id ?>" hidden>

                    <label>Nome do animal:</label>
                    <input id="nome" type="text" name="nome" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$" value="<?=$nome; ?>" required>

                    <label>Idade:</label>
                    <input id="idade" type="number" name="idade" min="0" max="40" pattern="0-9" value="<?=$idade; ?>" required>

                    <label>Vermifugado:</label>
                    <select name="vermifugado" required>
                        <option value="1" <?php if($foi_vermifugado == 1){echo "selected";} ?>>Sim</option>
                        <option value="0" <?php if($foi_vermifugado == 0){echo "selected";} ?>>Não</option>
                    </select>

                    <label>Possui doença:</label>
                    <input id="checkbox_doenca" type="checkbox" <?php if($possui_doenca != "" && $possui_doenca != null){echo "checked";} ?>
                    onchange="fnMostrarTBoxDoenca()">
                    <label for="checkbox_doenca">Sim</label> <br>

                    <div id="campo_doenca" style="
                    <?php

                    if($possui_doenca != "" && $possui_doenca != null){
                        echo "display: block";
                    }
                    else{
                        echo "display: none";
                    }

                    ?>
                    ">
                        <label>Informe a(s) doença(s) do animal:</label>
                        <input id="input_doenca" type="text" name="possui_doenca" pattern="^[ 0-9a-zA-Z\u00C0-\u00FF\b]+$" 
                        value="<?php if($possui_doenca != "" && $possui_doenca != null){echo $possui_doenca;}?>">
                    </div>

                    <label>Castrado:</label>
                    <select name="foi_castrado" required>
                        <option value="1" <?php if($foi_castrado == 1){echo "selected";} ?>>Sim</option>
                        <option value="0" <?php if($foi_castrado == 0){echo "selected";} ?>>Não</option>
                    </select>

                    <label>Caminho da foto do animal:</label>
                    <input id="imagem" type="text" name="imagem" value="<?=$imagem; ?>" required>

                    <br><br>

                    <button type="submit" id="btnFuncao" name="funcao" value="atualizar" class="btn btn-patinhas flex-fill">Atualizar</button>
                    <button type="submit" id="btnFuncao" name="funcao" value="deletar" class="btn btn-patinhas-vermelho flex-fill">Deletar</button>
                </form>
            </div>

            <div class="col-4">
                <img class="img-fluid rounded" src="<?=$imagem; ?>" alt="Foto do animal <?=$nome ?>">
            </div>

        </div>
    </main>

    <div class="mb-4"></div>

    <script src="./js/animais-editar.js"></script>

<?php include "inc-footer-admin.php"; ?>