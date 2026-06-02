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
        $nomeGato = "Romeu"; $infoFrent = "Gatão branco de olhos azuis"; $infoTras = "Raça: Gatoxinha Personalidade: Cínico e bocó "; $fotoCat = "Romeuu.jpg";
        include "inc-card.php";
      
        ?> 
            <!-- card 2 -->
            <?php
             $nomeGato = "Rycharlison"; $infoFrent = "Querido muito fofo"; $infoTras = "Raça: Coitado Personalidade: Meio masoquista, gosta de tapinhas no bumbum"; $fotoCat = "NeneRycharlison.jpg";
             include "inc-card.php";
            ?>

            <!-- card 3 -->
             <?php
             $nomeGato = "Alecrim"; $infoFrent = "Timido e silencioso"; $infoTras = "Incrivelmente oculto e passa a maior parte do tempo dormindo "; $fotoCat = "alecrim.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 4 -->
            <?php
             $nomeGato = "Mini-Rycharlison"; $infoFrent = "Grande e gordo"; $infoTras = "Criatura colossal, pesquisadores acreditam que logo irá se criar um satélite natural em volta."; $fotoCat = "Rycharlison.jpg";
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
             $nomeGato = "Jorge"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "jorja.jpg";
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