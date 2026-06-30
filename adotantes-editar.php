<?php

include "inc-sessao-login.php";

$id = $_GET['id'] ?? null;

// Validando se o ID é nulo, vazio ou menor que um, e envia o usuário de volta para a página de formulário caso seja verdadeiro
if($id == null || $id == "" || $id < 1){
    header('Location:adotantes-formulario.php?mensagem=erro');
    exit;
}

include "inc-conexao.php";

$nome_adotante = $cpf = $telefone = $animal_adotado = $cep = $numero_residencia = $complemento = "";
$resultado = mysqli_execute_query($conn, "SELECT * FROM tb_adotantes WHERE id = ?", [$id]);

while($linha = mysqli_fetch_assoc($resultado) ){
    $nome_adotante = $linha['nome_adotante'];
    $cpf = $linha['cpf'];
    $telefone = $linha['telefone'];
    $animal_adotado = $linha['animal_adotado'];
    $cep = $linha['cep'];
    $numero_residencia = $linha['numero_residencia'];
    $complemento = $linha['complemento'];
}

$titulo_pagina = "Patinhas Peludas: Formulário de {$nome_adotante}";
include "inc-head.php";

?>

<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav-admin.php"; ?>
    </header>

    <main class="container page-main">
        <div class="row">

            <div class="col-12">
                <form action="adotantes-atualizar.php" id="formAdotantes" method="post" class="form-patinhas p-4">
                    <div class="text-center mb-3">
                        <h2>Editar formulário de: <?=$nome_adotante; ?></h2>
                    </div>

                    <p id="mensagemErro" style="color: red"></p>

                    <input type="number" name="id" value="<?=$id ?>" hidden>

                    <label>Nome do adotante:</label>
                    <input id="nome_adotante" type="text" name="nome_adotante" pattern="^[ a-zA-Z\u00C0-\u00FF\b]+$" value="<?=$nome_adotante; ?>" required>

                    <label>CPF:</label>
                    <input id="cpf" type="text" name="cpf" value="<?=$cpf; ?>" required>

                    <label>Telefone:</label>
                    <input id="telefone" type="tel" name="telefone" value="<?=$telefone; ?>" required>

                    <label>Animal adotado:</label>
                    <input id="animal_adotado" type="text" name="animal_adotado" value="<?=$animal_adotado ?>">

                    <label>CEP:</label>
                    <input id="cep" type="text" name="cep" value="<?=$cep; ?>" required>

                    <label>Número da residência:</label>
                    <input id="numero_residencia" type="number" name="numero_residencia" value="<?=$numero_residencia ?>">

                    <label>Complemento:</label>
                    <input id="complemento" type="text" name="complemento" value="<?=$complemento ?>">

                    <br><br>

                    <button type="submit" id="btnFuncao" name="funcao" value="atualizar" class="btn btn-patinhas flex-fill">Atualizar</button>
                    <button type="submit" id="btnFuncao" name="funcao" value="deletar" class="btn btn-patinhas-vermelho flex-fill">Deletar</button>
                </form>
            </div>

        </div>
    </main>

    <div class="mb-4"></div>

<?php include "inc-footer-admin.php"; ?>