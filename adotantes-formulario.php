<?php
$titulo_pagina = "Patinhas Peludas: Formulário de Adotantes";
include "inc-head.php";
?>
<body class="site-body pt-5 d-flex flex-column min-vh-100">
   <header>
   <?php include "inc-nav-admin.php" ?>
   </header>

   <main class="container page-main mb-4">
    <div class="row g-4">
     <div class="col-md-12 col-lg-4">

   <form id="formAdotantes" action="adotantes-salvar.php" method="post" class="form-patinhas p-4">
      <div class="text-center mb-3">
         <h1 class="titulo fs-3">Cadastro de adotantes</h1>
      </div>

      <p id="mensagemErro" style="color: red"></p>

      <label>Nome completo:</label>
      <input id="nomeadotante" type="text" name="nomeadotante" required>
      <label>CPF:</label>
      <input id="cpf" type="text" name="cpf" placeholder="000-000-000.00" required>
      <label>Telefone: </label>
      <input id="telefone" type="tel" name="telefone" placeholder="(19) 99999-9999" required>
    

      <label>Nome do animal:</label>
      <select name="nomeanimal" required>
         <option></option>
      <?php

      // Caso for remover esse pedaço de código, lembre-se de incluir a conexão na próxima vez que um PHP for aberto!
      include "inc-conexao.php";
      $sqlNomeSelect = "SELECT id, nome FROM tb_informacoes_gatos";
      $resultado = mysqli_execute_query($conn, $sqlNomeSelect);

      while($linha_resultado = mysqli_fetch_assoc($resultado) ){
         echo "<option value='{$linha_resultado['id']}'>{$linha_resultado['nome']}</option>";
      }

      ?>
      </select>

      <!-- <input type="text" name="nomeanimal" required> -->

      <label>CEP:</label>
      <input id="cep" type="text" name="cep" placeholder="00000-000" required>
      <label>Número da residência:</label>
      <input id="numeroresidencia" type="number" name="numeroresidencia" required>
      <label>Complemento:</label>
      <input type="text" name="complemento">
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

      $sql = "SELECT * FROM tb_adotantes WHERE 1 = 1";
      $params = [];
      
      $getNome = $_GET['filtro_nome'] ?? null;
      if(isset($getNome) && $getNome != ""){
      $getNomeTratado = trim(ucfirst(strtolower($getNome)));
      $sqlNome = " AND nome_adotante = ?";

      $sql .= $sqlNome;
      $params[] = $getNome;
      }

      $getNomeAnimal = $_GET['filtro_nome_animal'] ?? null;
      if(isset($getNomeAnimal) && $getNomeAnimal != ""){
      $getNomeAnimalTratado = trim(ucfirst(strtolower($getNomeAnimal)));
      $sqlNomeAnimal = " AND animal_adotado = ?";

      $sql .= $sqlNomeAnimal;
      $params[] = $getNomeAnimal;
      }
      ?>

<form action="" method="GET" class="filter-form row g-3 align-items-end mb-4">
   <div class="col-md-6">
      <label>Nome do adotante: </label>
      <input type="text" name="filtro_nome">
   </div>
   <div class="col-md-6">
      <label>Nome do animal:</label>
      <input type="text" name="filtro_nome_animal">
   </div>
   <div class="col-12 d-flex gap-2">
      <button class="btn btn-patinhas" type="submit">Filtrar</button>
      <button class="btn btn-patinhas-secundario" type="reset" onclick="fnLimparURL()">Limpar Filtros</button>
   </div>
</form>

      <div class="table-patinhas">
      <table class="table table-striped table-hover border">
         <thead>
            <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>CPF</th>
               <th>Telefone</th>
               <th>Nome do animal</th>
               <th>CEP</th>
               <th>Número da residência</th>
               <th>Complemento</th>
            </tr>
         </thead>
         <?php
         $resultado = mysqli_execute_query($conn, $sql, $params);

         while($linha_resultado = mysqli_fetch_assoc ($resultado))
         {
            echo '<tr>';

            echo "<td> {$linha_resultado['id']} </td>";
            echo "<td> <a href='adotantes-editar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome_adotante']} </a> </td>";
            echo "<td> {$linha_resultado['cpf']} </td>";
            echo "<td> {$linha_resultado['telefone']} </td>";
            echo "<td> {$linha_resultado['animal_adotado']} </td>";
            echo "<td> {$linha_resultado['cep']} </td>";
            echo "<td> {$linha_resultado['numero_residencia']} </td>";
            echo "<td> {$linha_resultado['complemento']} </td>";
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

<script src="./js/adotantes-formulario.js"></script>

<?php include "inc-footer-admin.php"; ?>
