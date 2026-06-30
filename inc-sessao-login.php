<?php

session_start();
if ($_SESSION['email'] == false && $_SESSION['senha'] == false) {
    header('location:admin.php?mensagem=errologin');
}

?>