
 <div class="col">
    <div class="flip-card">
        <div class="flip-card-inner">
             <div class="card h-100 flip-card-front">
                <img src="./img/<?= $fotoCat; ?>" class="card-img-top object-fit-cover" alt=" Foto da bola de pelos: <?= $nomeGato; ?>" height="300px">
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
