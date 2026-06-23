<?php

$conn = mysqli_connect("localhost", "root", "", "db_patinhapeludas");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

mysqli_set_charset($conn, "utf8mb4");

$resultado_coluna_idade_unidade = mysqli_query($conn, "SHOW COLUMNS FROM tb_informacoes_gatos LIKE 'idade_unidade'");
if($resultado_coluna_idade_unidade && mysqli_num_rows($resultado_coluna_idade_unidade) == 0){
    mysqli_query($conn, "ALTER TABLE tb_informacoes_gatos ADD COLUMN idade_unidade ENUM('anos', 'meses') NOT NULL DEFAULT 'anos' AFTER idade");
}

?>
