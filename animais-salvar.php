<?php

$nome = $_POST['nome'];
$foi_vermifugado = $_POST['foi_vermifugado'];
$possui_doenca = $_POST['possui_doenca'];
$foi_castrado = $_POST['foi_castrado'];
$url_imagem = $_POST['idade'];

include "inc-conexao.php";

$resultado = mysqli_execute_query($conn, "INSERT INTO tb_informacoes_gatos(nome, vermifugado, possui_doenca, castrado, idade, foto) VALUES
(?, ?, ?, ?, ?, ?)", [$nome, $foi_vermifugado, $possui_doenca, $foi_castrado, $url_imagem]);

mysqli_close($conn);

header("location: animais-formulario.php?mensagem=sucesso");

?>