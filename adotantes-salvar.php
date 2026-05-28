<?php 
$nome = $_POST['nomeadotante'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$nomeanimal = $_POST['nomeanimal'];
$cep = $_POST['cep'];
$numeroresidencia = $_POST['numeroresidencia'];
$complemento = $_POST['complemento'];

include "inc-conexao.php";

$resultado = mysqli_execute_query($conn, "INSERT INTO tb_adotantes(nome_adotante, cpf, telefone, animal_adotado, cep, numero_residencia, complemento) VALUES (?, ?, ?, ?, ?, ?, ?)", [$nome, $cpf, $telefone, $nomeanimal, $cep, $numeroresidencia, $complemento]);

mysqli_close($conn);
header("location: adotantes-formulario.php?mensagem=sucesso");
?>