<?php

$nome = ucfirst(trim($_POST['nome']));
$string_foi_vermifugado = $_POST['foi_vermifugado'];
$possui_doenca = ucfirst(trim($_POST['possui_doenca']) ?? '');
$string_foi_castrado = $_POST['foi_castrado'];
$idade = $_POST['idade'];
$url_imagem = trim($_POST['url_imagem']);

$foi_vermifugado = 0;
$foi_castrado = 0;

if($string_foi_vermifugado == "sim"){
    $foi_vermifugado = 1;
}

if($string_foi_castrado == "sim"){
    $foi_castrado = 1;
}

include "inc-conexao.php";

$resultado = mysqli_execute_query($conn, "INSERT INTO tb_informacoes_gatos(nome, vermifugado, possui_doenca, castrado, idade, foto) VALUES
(?, ?, ?, ?, ?, ?)", [$nome, $foi_vermifugado, $possui_doenca, $foi_castrado, $idade, $url_imagem]);

mysqli_close($conn);

header("location: animais-formulario.php?mensagem=sucesso");

?>
