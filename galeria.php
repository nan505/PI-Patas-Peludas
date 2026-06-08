<?php

$titulo_pagina = "ONG Patinhas Peludas";
include "inc-head.php";

?>
<body>
    <header class="mb-5">
        <?php include "inc-nav.php"; ?>
    </header>
<!-- 
     `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `vermifugado` tinyint(1) NOT NULL,
  `possui_doenca` varchar(50) DEFAULT NULL,
  `castrado` tinyint(1) NOT NULL,
  `idade` int(2) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; -->


<?php
    include "inc-conexao.php";
    $sql = "SELECT * FROM tb_informacoes_gatos";
    $resultado = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        include "inc-card.php";
        $nomeGato = $linha['nome'];
        $infoFrent = $linha['idade'];
        $infoTras = $linha['possui_doenca'] . ', ' . $linha['vermifugado'] . ', ' . $linha['castrado'];
        $fotoCat = $linha['foto'];
    }
?>


<!-- o que faz o treco gira -->
    <script>
        document.querySelectorAll('.flip-card').forEach((card) => {
            card.addEventListener('click', () => {
                card.classList.toggle('virado');
            });
        });
    </script>
<!-- bah -->
<?php include "inc-footer.php"; ?>