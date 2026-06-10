<?php
$titulo_pagina = "Patinhas Peludas: Formulário de Adotantes";
include "inc-head.php";
?>
<body class="bg-light pt-5">
   <header class="mb-5">
   <?php include "inc-nav-admin.php" ?>
   </header>

   <section class="container">
    <div class="row">
     <div class="col-md-12 col-lg-4">

   <form action="adotantes-salvar.php" method="post" class="border border-4 p-4">
    <label>Nome:</label><br>
    <input type="text" name="nomeadotante" required><br>
    <label>CPF:</label><br>
    <input type="text" name="cpf" required><br>
    <label>Telefone: </label><br>
    <input type="tel" name="telefone" required><br>
    <label>Nome do animal:</label><br>
    <input type="text" name="nomeanimal" required><br>
    <label>CEP:</label><br>
    <input type="text" name="cep" required><br>
    <label>Número da residência:</label><br>
    <input type="number" name="numeroresidencia" required><br>
    <label>Complemento:</label><br>
    <input type="text" name="complemento" required><br>
    <div class="mt-3">
      <button type="submit">Cadastrar</button>
      <button type="reset">Limpar</button>
   </div>
   </form>
     </div>
    <div class="col-md-12 col-lg-8">
       <section>
       <h3>Filtros: </h3>

      <?php
      include "inc-conexao.php";

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

<form action="" method="GET">
   <label>Nome: </label>
   <input type="text" name="filtro_nome">
   <br>
   <label>Nome do animal:</label>
   <input type="text" name="filtro_nome_animal">
   <button type="submit">Filtrar</button>
   <button type="reset" onclick="fnLimparURL()">Limpar Filtros</button>
</form>

      </section>
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
    </div>

</section>

<?php include "inc-footer-admin.php"; ?>
