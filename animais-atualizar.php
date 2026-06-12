<?php

$funcao = $_POST['funcao'] ?? null;
$id = $_POST['id'] ?? null;

if( ($funcao != "atualizar" && $funcao != "deletar") || $id == null || $id == "" || $id <= 0){
    header("location: animais-editar.php?id={$id}&mensagem=erro");
}

include "inc-conexao.php";

$nome = $_POST['nome'];
$vermifugado = $_POST['vermifugado'];
$possui_doenca = $_POST['possui_doenca'];
$castrado = $_POST['castrado'];
$idade = $_POST['idade'];
$foto = $_POST['foto'];

$sql = "";
$params = [$nome, $vermifugado, $possui_doenca, $castrado, $idade, $foto, $id];

if($funcao == "atualizar"){
    $sql = "UPDATE tb_informacoes_gatos SET nome = ?, vermifugado = ?, possui_doenca = ?, castrado = ?, idade = ?, foto = ? WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, $params);
}

if($funcao == "deletar"){
    $sql = "DELETE FROM tb_informacoes_gatos WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, $id);
}

mysqli_close($conn);
header("location: animais-formulario.php");

?>