<?php

$titulo_pagina = "ONG Patinhas Peludas";
include "inc-head.php";

?>
<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header>
        <?php include "inc-nav.php"; ?>
    </header>
<?php
    include "inc-conexao.php";
    $sql = "SELECT nome, vermifugado, possui_doenca, castrado, idade, foto FROM tb_informacoes_gatos";
    $resultado = mysqli_query($conn, $sql);
?>

<main class="container page-main mb-5">
    <div class="text-center mb-4">
        <h1 class="titulo">Galeria de Fotos</h1>
        <p class="texto fs-5">Conheça os gatos que estão recebendo cuidado e carinho na ONG.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
        if ($resultado) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $nomeGato = htmlspecialchars($linha['nome'], ENT_QUOTES, 'UTF-8');

                $infoFrent = $linha['idade'] ?? null;
                if($infoFrent == 1){
                    $infoFrent = (int) $infoFrent . ' ano';
                }
                else{
                    $infoFrent = (int) $infoFrent . ' anos';
                }

                $doenca = !empty($linha['possui_doenca']) ? htmlspecialchars($linha['possui_doenca'], ENT_QUOTES, 'UTF-8') : 'Não possui doença informada';
                $vermifugado = $linha['vermifugado'] == 1 ? 'Sim' : 'Não';
                $castrado = $linha['castrado'] == 1 ? 'Sim' : 'Não';
                $infoTras = "Vermifugado: {$vermifugado}<br>Doença: {$doenca}<br>Castrado: {$castrado}";
                $fotoCat = htmlspecialchars($linha['foto'], ENT_QUOTES, 'UTF-8');

                include "inc-card.php";
            }
        }
        else {
            echo '<p class="text-danger">Nao foi possivel carregar as informacoes dos gatos.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>
</main>

<!-- o que faz o treco gira -->
    <script>
        document.querySelectorAll('.flip-card').forEach((card) => {
            card.addEventListener('click', () => {
                card.classList.toggle('virado');
            });
        });
    </script>
<?php include "inc-footer.php"; ?>