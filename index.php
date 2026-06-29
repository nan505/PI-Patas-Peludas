<?php

$titulo_pagina = "ONG Patinhas Peludas";
include "inc-head.php";

?>

<body id="body-index" class="pt-5 d-flex flex-column min-vh-100" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0" style="scroll-behavior: smooth">
    <header>
        <?php include "inc-nav.php"; ?>

        <div id="indicadoresCarrossel" class="carousel slide home-hero" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner ratio ratio-21x9 banner-carrossel">
                <div class="carousel-item active">
                    <img src="https://inovaveterinaria.com.br/wp-content/uploads/2015/04/gato-sem-raca-INOVA-scaled.jpg" class="d-block w-100 img-fluid h-100 object-fit-cover" alt="Gato descansando">
                    <div class="carousel-caption home-hero-caption">
                        <h1 class="titulo">Patinhas Peludas</h1>
                        <p class="texto">Cuidado, acolhimento e novas chances para cada gatinho.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://cdn.prod.website-files.com/635fbf3a618e0a07a4c80313/67eef4ee1730ac44b8d96bcb_gato-solto-no-condominio-o-que-fazer.jpg" class="d-block w-100 img-fluid h-100 object-fit-cover" alt="Gato olhando para fora">
                    <div class="carousel-caption home-hero-caption">
                        <h1 class="titulo"></h1>
                        <p class="texto"></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://images.ecycle.com.br/wp-content/uploads/2023/10/09170201/nathalie-jolie-nKzeG3iE_Qg-unsplash-scaled.jpg.webp" class="d-block w-100 img-fluid h-100 object-fit-cover" alt="Gato tranquilo">
                    <div class="carousel-caption home-hero-caption">
                        <h1 class="titulo"></h1>
                        <p class="texto"></p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </header>

    <section class="container home-section">
        <div class="row align-items-center g-4">
            <div class="col-12 col-md-6">
                <span class="section-label texto">Nossa hist&oacute;ria</span>
                <h1 id="sobre" class="titulo ancoras">Um pouco sobre n&oacute;s:</h1>
                <p class="texto texto-sobre">O início de nossa ONG reflete ao carinho e gratidão ao nossos companheiros peludos que em momentos difíceis  e de tristeza ficaram ao nosso lado, trazendo calma e alívio.</p>
            </div>
            <div class="col-12 col-md-6">
                <img class="img-fluid home-about-img" src="./img/richalisodeitado.jpg" alt="Gato da ONG">
            </div>
        </div>
    </section>

    <section class="container home-section text-center">
        <div class="d-flex flex-column align-items-center">
            <h1 class="titulo">Patinhas Peludas</h1>
            <h2 class="texto">Gatos amados e bem cuidados!</h2>
        </div>

        <main class="mt-4">
            <div class="row">
                <div class="col-12">
                    <h3 id="galeria" class="titulo ancoras">Fotos da nossa ONG:</h3>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <img class="object-fit-cover rounded img-galeria" src="./img/calangoo.jpg" width="412" height="453" alt="Gato da galeria">
                </div>
                <div class="col-12 col-md-6">
                    <img class="object-fit-cover rounded img-galeria" src="./img/irma-xena.jpg" width="412" height="453" alt="Gato da galeria">
                </div>
            </div>

            <a href="./galeria.php" class="btn btn-patinhas fs-5 mt-3 texto">Nossos Gatinhos</a>
        </main>
    </section>

    <section class="container home-section pb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="titulo text-center">An&aacute;lises:</h3>
            </div>
        </div>

        <div class="row">

            <?php
            
            $nomeAdotanteReview = "Selina Kyle";
            $descAdotanteReview = "Cuidado e zelo por todos os animais resgatados, excelente trabalho!";
            $caminhoImgReview = "./img/reviews/selina.jpg";
            include "inc-card-review.php";

            $nomeAdotanteReview = "Felicia Hardy";
            $descAdotanteReview = "Adotei meu primeiro gatinho graças à Patinhas Peludas, equipe extremamente profissional e dedicada.";
            $caminhoImgReview = "./img/reviews/felicia.jpg";
            include "inc-card-review.php";

            $nomeAdotanteReview = "T'Challa";
            $descAdotanteReview = "O compromisso e zelo pelo bem-estar dos animais é impressionante, parabenizo todos os envolvidos!";
            $caminhoImgReview = "./img/reviews/tchalla.jpg";
            include "inc-card-review.php";
            
            ?>

        </div>

    </section>

<?php include "inc-footer.php"; ?>
