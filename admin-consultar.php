<?php

// Comando necessário para iniciar e/ou validar a sessão de login
session_start();

include "inc-conexao.php";
$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];

$sql = "SELECT * FROM tb_usuarios WHERE email = ? AND senha = ?";
$params = [$email, $senha];

$resultado = mysqli_execute_query($conn, $sql, $params);

if($resultado->num_rows > 0){
    // Armazenando o e-mail e senha da sessão, e redirecionando o usuário para a página inicial de administração!
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:admin-autorizado.php');
}else{
    header('location:admin.php?mensagem=erro');
}

?>