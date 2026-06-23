<?php

$funcao = $_POST['funcao'] ?? null;
$id = $_POST['id'] ?? null;

if( ($funcao != "atualizar" && $funcao != "deletar") || $id <= 0){
    header("location: animais-editar.php?id={$id}&mensagem=erro");
    exit;
}

include "inc-conexao.php";

$nome = trim($_POST['nome']);
$vermifugado = $_POST['vermifugado'];
$possui_doenca = trim($_POST['possui_doenca']);
$castrado = $_POST['foi_castrado'];
$idade = $_POST['idade'];
$idade_unidade = $_POST['idade_unidade'] ?? 'anos';
$imagem = trim($_POST['imagem']);

if($idade_unidade != 'anos' && $idade_unidade != 'meses'){
    $idade_unidade = 'anos';
}

$sql = "";
$params = [$nome, $vermifugado, $possui_doenca, $castrado, $idade, $idade_unidade, $imagem, $id];

if($funcao == "atualizar"){
    $sql = "UPDATE tb_informacoes_gatos SET nome = ?, vermifugado = ?, possui_doenca = ?, castrado = ?, idade = ?, idade_unidade = ?, foto = ? WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, $params);
}

if($funcao == "deletar"){
    $sql = "DELETE FROM tb_informacoes_gatos WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, [$id]);
}

mysqli_close($conn);
header("location: animais-formulario.php");
exit;

?>
