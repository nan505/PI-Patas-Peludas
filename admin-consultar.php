<?php

include "inc-conexao.php";
$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];

$sql = "SELECT * FROM tb_usuarios WHERE email = ? AND senha = ?";
$params = [$email, $senha];

$resultado = mysqli_execute_query($conn, $sql, $params);

if($resultado->num_rows > 0){
    header('location:admin-autorizado.php');
}else{
    header('location:admin.php?mensagem=erro');
}

?>