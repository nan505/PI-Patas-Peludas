
 <div class="col">
    <div class="flip-card card-clicavel">
        <div class="flip-card-inner">
             <div class="card h-100 flip-card-front">
                <img src="<?= $fotoCat; ?>" class="card-img-top img-card-gato img-fluid" alt="Foto da bola de pelos: <?= $nomeGato; ?>">
                    <div class="card-body">
                         <h5 class="card-title"><?= $nomeGato; ?></h5>
                        <p class="card-text"><?= $infoFrent; ?></p>
                     </div>
                </div>

                <div class="card h-100 flip-card-back">
                    <div class="card-body">
                        <h5 class="card-title">Mais informações</h5>
                        <p class="card-text"><?= $infoTras; ?></p>
                    </div>
                </div>
            </div>
        </div>
</div>
