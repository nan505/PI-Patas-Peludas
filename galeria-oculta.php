<?php
$titulo_pagina = "ONG Patinhas Peludas";
include "inc-head.php";

?>
<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav.php"; ?>
    </header>

<main class="container page-main mb-5">
     <div class="text-center mb-4">
        <h1 class="titulo">Galeria</h1>
     </div>
     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">


<div class="card">
  <img class="card-img-top" src="./img/io.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card">
  <img class="card-img-top" src="./img/na.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>



</div>
</main>
<?php include "inc-footer.php"; ?>
