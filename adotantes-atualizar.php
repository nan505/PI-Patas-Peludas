<?php

include "inc-sessao-login.php";

// Obtendo a função equivalente ao botão apertado!
$funcao = $_POST['funcao'] ?? null;
$id = $_POST['id'] ?? null;

if( ($funcao != "atualizar" && $funcao != "deletar") || $id <= 0){
    header("location: adotantes-editar.php?id={$id}&mensagem=erro");
    exit;
}

include "inc-conexao.php";

$nome_adotante = trim($_POST['nome_adotante']);
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$animal_adotado = trim($_POST['animal_adotado']);
$cep = $_POST['cep'];
$numero_residencia = $_POST['numero_residencia'];
$complemento = $_POST['complemento'];

$sql = "";

// Parâmetros que substituirão as interrogações (?) do script SQL com o comando "mysqli_execute_query()"
$params = [$nome_adotante, $cpf, $telefone, $animal_adotado, $cep, $numero_residencia, $complemento, $id];

// Alterando o script SQL com base na função obtida via POST

if($funcao == "atualizar"){
    $sql = "UPDATE tb_adotantes SET nome_adotante = ?, cpf = ?, telefone = ?, animal_adotado = ?, cep = ?, numero_residencia = ?, complemento = ? WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, $params);
}

if($funcao == "deletar"){
    $sql = "DELETE FROM tb_adotantes WHERE id = ?";
    $resultado = mysqli_execute_query($conn, $sql, [$id]);
}

mysqli_close($conn);
header("location: adotantes-formulario.php");
exit;

?>