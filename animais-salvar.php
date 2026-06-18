<?php

$nome = ucfirst(trim($_POST['nome']));
$string_foi_vermifugado = $_POST['foi_vermifugado'];
$possui_doenca = ucfirst(trim($_POST['possui_doenca']) ?? '');
$string_foi_castrado = $_POST['foi_castrado'];
$idade = $_POST['idade'];

$pasta_destino = "img/";
$imagem = $pasta_destino . $_FILES['imagem']['name'];

if(strlen($imagem) > 1000){
    header("location: animais-formulario.php?mensagem=erro");
    exit;
}

move_uploaded_file($_FILES['imagem']['tmp_name'] , $imagem);

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
(?, ?, ?, ?, ?, ?)", [$nome, $foi_vermifugado, $possui_doenca, $foi_castrado, $idade, $imagem]);

mysqli_close($conn);

header("location: animais-formulario.php?mensagem=sucesso");

?>
