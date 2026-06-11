<?php
$titulo_pagina = "Sobre";
include "inc-head.php";
?>
<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav.php"; ?>
    </header>

    <main class="container page-main">
        <section class="page-section text-center">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1 class="titulo">Um pouco sobre nós:</h1>
                    <p class="texto fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iusto fuga tenetur asperiores reiciendis magni? Dicta dolores a hic temporibus commodi expedita aperiam nisi. Repudiandae necessitatibus similique iusto fugiat dolorem?</p>
                </div>
                <div class="col-md-6">
                    <img class="img-sobre" src="./img/gatoguerra.jpg" alt="gato-de-guerra">
                </div>
            </div>
        </section>
    </main>

<?php include "inc-footer.php"; ?>
