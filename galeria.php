<?php

$titulo_pagina = "ONG Patinhas Peludas";
include "inc-head.php";

?>
<body>
    <header class="mb-5">
        <?php include "inc-nav.php"; ?>
    </header>

    <br>

    <!-- cards linha1 -->
    <main class="container my-4">
         <div class="row row-cols-4 g-4">
        <!-- card 1 -->
        <?php 
        $nomeGato = "Romeu"; $infoFrent = "Gatão branco de olhos azuis"; $infoTras = "Raça: Gatoxinha Função: Gordo"; $fotoCat = "Romeuu.jpg";
        include "inc-card.php";
        ?> 
            <!-- card 2 -->
            <?php
             $nomeGato = "Rycharlison"; $infoFrent = "Querido muito fofo"; $infoTras = "..."; $fotoCat = "NeneRycharlison.jpg";
             include "inc-card.php";
            ?>

            <!-- card 3 -->
             <?php
             $nomeGato = "Alecrim"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "alecrim.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 4 -->
            <?php
             $nomeGato = "Mine-Rycharlison"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "Rycharlison.jpg";
             include "inc-card.php";
            ?>
        </div>
    </main>
    <!-- cards linha2 -->
    <main class="container my-4">
        <div class="row row-cols-4 g-4">
            <!-- card 1 --> 
            <?php
             $nomeGato = "Sardinha"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "sardinha.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 2 -->
             <?php
             $nomeGato = "Jurubeba"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "jurubeba.jpg";
             include "inc-card.php";
            ?>
            <!-- card 3  -->
             <?php
             $nomeGato = "Jorja"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "jorja.jpg";
             include "inc-card.php";
            ?>

            <!-- card 4 -->
             <?php
             $nomeGato = "Calango"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "calango.jpg";
             include "inc-card.php";
            ?>
        </div>
    </main>
<!-- cards linha3 -->


    <script>
        document.querySelectorAll('.flip-card').forEach((card) => {
            card.addEventListener('click', () => {
                card.classList.toggle('virado');
            });
        });
    </script>
<?php include "inc-footer.php"; ?>