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
        $nomeGato = "Romeu"; $infoFrent = "Gatão branco de olhos azuis"; $infoTras = "Se faz de sonso quando causa problemas."; $fotoCat = "Romeuu.jpg";
        include "inc-card.php";
      
        ?> 
            <!-- card 2 -->
            <?php
             $nomeGato = "Rycharlison"; $infoFrent = "Querido muito fofo"; $infoTras = "Meio masoquista, gosta de tapinhas no bumbum."; $fotoCat = "NeneRycharlison.jpg";
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
             $nomeGato = "Sardinha"; $infoFrent = "Carente e mal acostumado"; $infoTras = "Ás vezes me pego refletindo quem acostumou ele a deitar no colo em momentos inoportunos, apesar de fofo é bem pesado."; $fotoCat = "sardinha.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 2 -->
             <?php
             $nomeGato = "Jurubeba"; $infoFrent = "Toxico e Grudento"; $infoTras = "Responsavel pelo sumiço de todos os lacinhos, ele não possui muita noção de espaço pessoal."; $fotoCat = "jurubeba.jpg";
             include "inc-card.php";
            ?>
            <!-- card 3  -->
             <?php
             $nomeGato = "Jorge"; $infoFrent = "Caos e fúria."; $infoTras = "Há quem dirá que no meio de toda aquela fúria á um coração fofo, mas nunca faça carinho além da cabeça, Limites."; $fotoCat = "jorja.jpg";
             include "inc-card.php";
            ?>

            <!-- card 4 -->
             <?php
             $nomeGato = "Calango"; $infoFrent = "Delicado"; $infoTras = "A frase à noite de um jeito, de dia de outro, nunca caiu tão bem. "; $fotoCat = "calango.jpg";
             include "inc-card.php";
            ?>
        </div>
    </main>
<!-- cards linha3 -->
<main class="container my-4">
        <div class="row row-cols-4 g-4">
            <!-- card 1 -->
            <?php
             $nomeGato = "Jurubeba"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "Jurubeba.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 2 -->
             <?php
             $nomeGato = "Mexirica"; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "Mexirica.jpg";
             include "inc-card.php";
            ?>
            <!-- card 3 -->
             <?php
             $nomeGato = "..."; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "....jpg";
             include "inc-card.php";
            ?>

            <!-- card 4 -->
             <?php
             $nomeGato = "."; $infoFrent = "..."; $infoTras = "..."; $fotoCat = "....jpg";
             include "inc-card.php";
            ?>
        </div>
</main>
<!-- linha 4 -->
 <main class="container my-4">
        <div class="row row-cols-4 g-4">
            <!-- card 1 -->
            <?php
             $nomeGato = "My Sheila"; $infoFrent = "Pequena e Sorrateira"; $infoTras = "Isolada e impaciente, apesar de pequena cabe bastante comida em sua barriga."; $fotoCat = "My_Sheila.jpg";
             include "inc-card.php";
            ?>
            
            <!-- card 2 -->
             <?php
             $nomeGato = "Mexirica"; $infoFrent = "Grandiosa e imponente"; $infoTras = "Chamam ela também de princesa acho que deve ser ar de imponência"; $fotoCat = "Mexirica.jpg";
             include "inc-card.php";
            ?>
            <!-- card 3 -->
             <?php
             $nomeGato = "Torresmo"; $infoFrent = "Observadora"; $infoTras = "Não sabe o significado de privacidade e espaço pessoal, seu lugar favorito é o banheiro."; $fotoCat = "Torresmo.jpg";
             include "inc-card.php";
            ?>

           <!-- card 4 -->
             <?php
             $nomeGato = "Peroba"; $infoFrent = "Falante e Educada"; $infoTras = "Incrivelmente falante e companheira, infelizmente gosta de dormir em cima do teclado durante periodos de uso."; $fotoCat = "Perubinha.jpg";
             include "inc-card.php";
            ?>
        </div>
</main>
<!-- linha 5 -->
    <script>
        document.querySelectorAll('.flip-card').forEach((card) => {
            card.addEventListener('click', () => {
                card.classList.toggle('virado');
            });
        });
    </script>
<?php include "inc-footer.php"; ?>