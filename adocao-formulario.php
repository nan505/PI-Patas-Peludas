<?php
$titulo_pagina = "Patinhas Peludas: Formulário de Adoção";
include "inc-head.php";

include "inc-conexao.php";

$resultadoNomeAdotantes = mysqli_execute_query($conn, "SELECT id, nome_adotante FROM tb_adotantes");
$resultadoNomeAnimais = mysqli_execute_query($conn, "SELECT id, nome FROM tb_informacoes_gatos");

?>

<body>
    <header>
   <?php include "inc-nav-admin.php" ?>
   </header>

    <main class="container page-main">
    <div class="">
    <div class="">   

    <form id="formAdocao" action="gerar-pdf.php" method="post" class="form-patinhas p-4">
    <div class="text-center mb-3">
    <h1 class="titulo fs-3">Patinhas Peludas</h1>
    </div> 
    <p id="mensagemErro" style="color: red"></p>
    <section>
    <h2>Dados do Adotante:</h2>
    <label>Nome do Adotante:</label>
    <!-- <input type="text" name="nome" required> -->
    <select name="nome" id="nome" required>
        <?php

        // Exibindo as opções com o nome de todos os nomes de adotantes cadastrados no banco de dados!
        while($linha_resultado = mysqli_fetch_assoc($resultadoNomeAdotantes) ){
            echo "<option value='{$linha_resultado['nome_adotante']}'>{$linha_resultado['nome_adotante']}</option>";
        }

        ?>
    </select>  

    <br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" id="endereco">

    <br><br>

    <label>RG:</label>
    <input type="text" name="rg" id="rg" required>

    <br><br>

    <label>CPF/CNPJ:</label>
    <input type="text" name="cpf" id="cpf">

    <br><br>

    <label>Telefone para contato:</label>
    <input type="tel" name="telefone" id="telefone">

    <br><br>

    <label>E-mail:</label>
    <input type="email" name="email" placeholder="email@dominio.com.br" id="email">
    </section>
    <br><br>
<section>
    <h2>Dados do Animal Adotado</h2>

<div>
    <label>Nome do animal:</label>
    <!-- <input type="text" name="nomeAnimal" required> -->
    <select name="nomeAnimal" id="nomeAnimal" required>
        <?php
        
        // Exibindo as opções com o nome de todos os os nomes de animais cadastrados no banco de dados!
        while($linha_resultado = mysqli_fetch_assoc($resultadoNomeAnimais) ){
            echo "<option value='{$linha_resultado['nome']}'>{$linha_resultado['nome']}</option>";
        }
        
        ?>
    </select>
</div>

<br>

<div>
    <label>Raça:</label>
    <input type="text" name="raca" id="raca">
    <br><br>

    <label>Idade:</label>
    <input type="number" name="idade" id="idade">
</div>

<br>

<div>
    <label>Porte:</label>

    <br>

    <input type="radio" name="porte" value="Mini"  required>
    <label>Mini</label>

    <input type="radio" name="porte" value="Pequeno">
    <label>Pequeno</label>

    <input type="radio" name="porte" value="Médio">
    <label>Médio</label>

    <input type="radio" name="porte" value="Grande">
    <label>Grande</label>
</div>

<br>

<div>
    <label>Espécie:</label>

    <br>

    <input type="radio" name="especie" value="Canina" required>
    <label>Canina</label>

    <input type="radio" name="especie" value="Felina">
    <label>Felina</label>
</div>

<br>

<div>
    <label>Sexo:</label>

    <br>

    <input type="radio" name="sexo" value="Fêmea" required>
    <label>Fêmea</label>

    <input type="radio" name="sexo" value="Macho">
    <label>Macho</label>
</div>

<br>

<div>
    <label>Castrado?</label>

    <br>

    <input type="radio" name="castrado" value="Sim" required>
    <label>Sim</label>

    <input type="radio" name="castrado" value="Não">
    <label>Não</label>
</div>

<br>

<div>
    <label>Vermifugado nos últimos três meses?</label>

    <br>

    <input type="radio" name="vermifugado" value="Sim" required>
    <label>Sim</label>

    <input type="radio" name="vermifugado" value="Não">
    <label>Não</label>

    <input type="radio" name="vermifugado" value="Sem informação">
    <label>Sem informação</label>
</div>

<br>

<div>
    <label>Vacinado?</label>

    <br>

    <input type="radio" name="vacinado" value="Sim">
    <label>Sim</label>

    <input type="radio" name="vacinado" value="Não">
    <label>Não</label>

    <input type="radio" name="vacinado" value="Sem informação">
    <label>Sem informação</label>
</div>

<br>

<div>
    <label>Observações:</label><br>
    <textarea name="observacoes" id="observacoes"></textarea>
</div>
</section>
<button id="btnGerar" type="submit" name="btn-gerar" value="Gerar PDF" class="btn btn-patinhas flex-fill">Gerar PDF</button>

</form>
</div> 
</div> 
</main>
<script src="./js/adocao.js"></script>
<?php include "inc-footer-admin.php"; ?>

