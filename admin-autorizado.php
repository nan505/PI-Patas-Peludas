<?php

include "inc-sessao-login.php";

$titulo_pagina = "Patinhas Peludas: Administração";
include "inc-head.php";
?>

<body class="site-body pt-5 d-flex flex-column min-vh-100">
    <header class="mb-5">
        <?php include "inc-nav-admin.php" ?>
    </header>

    <section class="mt-4 mb-5 container page-section d-flex justify-content-center align-items-center flex-column">
        <h1 class="mb-5">Patinhas Peludas: Administração</h1>
        <p class="fs-5 text-center">Seja bem-vinda à página de administração da ONG Patinhas Peludas! Aqui você pode cadastrar, consultar, alterar e deletar informações de animais e adotantes! Na aba "Formulário de adoção" é possível preencher as informações necessárias e gerar um contrato de adoção em formato PDF!</p>
    </section>

<?php include "inc-footer-admin.php"; ?>