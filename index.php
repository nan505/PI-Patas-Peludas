<?php

$titulo_pagina = "ONG Patas Peludas";
include "inc-head.php";

?>

<body class="bg-light pt-5">
    <header>
<!-- Navbar feita por: Nan Santos -->
        <nav id="navbar-inicio" class="navbar fixed-top navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 titulo d-flex align-items-center pt-2 me-4" href="#">
                    <img src="./img/logo-patas-peludas.jpg" width="52px" class="d-inline-block me-3 ms-4 img-logo-ong">
                    Patas Peludas
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active fs-4 texto" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 texto" href="./sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 texto" href="./galeria.html">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 texto" href="./contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- Carrossel feito por: Nan Santos -->
<!-- Importante: Mudar o "src" e o "alt" das imagens assim que possível -->
        <div id="indicadoresCarrossel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ratio ratio-21x9 banner-carrossel">
                <div class="carousel-item active">
                    <img src="https://inovaveterinaria.com.br/wp-content/uploads/2015/04/gato-sem-raca-INOVA-scaled.jpg" 
                    class="d-block w-100 img-fluid h-100 object-fit-cover" alt="DESCRIÇÃO TEMPORÁRIA, ALTERAR DEPOIS">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.prod.website-files.com/635fbf3a618e0a07a4c80313/67eef4ee1730ac44b8d96bcb_gato-solto-no-condominio-o-que-fazer.jpg" 
                    class="d-block w-100 img-fluid h-100 object-fit-cover" alt="DESCRIÇÃO TEMPORÁRIA, ALTERAR DEPOIS">
                </div>
                <div class="carousel-item">
                    <img src="https://images.ecycle.com.br/wp-content/uploads/2023/10/09170201/nathalie-jolie-nKzeG3iE_Qg-unsplash-scaled.jpg.webp" 
                    class="d-block w-100 img-fluid h-100 object-fit-cover" alt="DESCRIÇÃO TEMPORÁRIA, ALTERAR DEPOIS">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#indicadoresCarrossel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>

    </header>

<!-- Seção de introdução e fotos feita por: Nan Santos -->
    <section class="container mt-4">
        <div class="d-flex flex-column align-items-center">
            <h1 class="titulo">Patas Peludas</h1>
            <h2 class="texto">Gatos amados e bem cuidados!</h2>
        </div>

        <main class="mt-4">
            <div class="row">
                <div class="col-12">
                    <h3 class="titulo">Fotos da nossa ONG:</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <img width="600px" height="300px" class="object-fit-cover rounded img-fluid" src="./img/gatoguerra.jpg">
                </div>
                <div class="col-6">
                    <img width="600px" height="300px" class="object-fit-cover rounded img-fluid" src="./img/gatoguerra.jpg">
                </div>
            </div>

            <a href="./galeria.html" class="btn btn-primary fs-4 mt-2 texto">Galeria de Fotos</a>

        </main>
    </section>

<!-- Seção de reviews feita por: Nan Santos -->
    <section class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <img src="./img/gatoguerra.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "inc-footer.php"; ?>