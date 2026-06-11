<?php
$titulo_pagina = "Patinhas Peludas: Formulário de Adotantes";
include "inc-head.php";
?>
<body class="site-body pt-5 d-flex flex-column min-vh-100">
   <header>
   <?php include "inc-nav-admin.php" ?>
   </header>

   <main class="container page-main">
    <div class="row g-4">
     <div class="col-md-12 col-lg-4">

   <form action="adotantes-salvar.php" method="post" class="form-patinhas p-4">
    <div class="text-center mb-3">
      <h1 class="titulo fs-3">Cadastro de adotantes</h1>
    </div>

    <label>Nome:</label>
    <input type="text" name="nomeadotante" required>
    <label>CPF:</label>
    <input type="text" name="cpf" required>
    <label>Telefone: </label>
    <input type="tel" name="telefone" required>
    <label>Nome do animal:</label>
    <input type="text" name="nomeanimal" required>
    <label>CEP:</label>
    <input type="text" name="cep" required>
    <label>Número da residência:</label>
    <input type="number" name="numeroresidencia" required>
    <label>Complemento:</label>
    <input type="text" name="complemento" required>
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
      <label>Nome: </label>
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
            echo "<td> {$linha_resultado['nome_adotante']} </td>";
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

<?php include "inc-footer-admin.php"; ?>
