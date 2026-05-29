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
    </div>
</section>

<?php include "inc-footer.php"; ?>