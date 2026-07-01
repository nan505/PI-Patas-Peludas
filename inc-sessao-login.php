<?php

// Iniciando a sessão e validando se as variáveis globais de e-mail e senha foram declaradas
session_start();
if ($_SESSION['email'] == false && $_SESSION['senha'] == false) {
    header('location:admin.php?mensagem=errologin');
}

?>