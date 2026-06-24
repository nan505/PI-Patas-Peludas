<?php

function formatar_idade_animal($idade, $idade_unidade = "anos"){
    $idade = (int) $idade;
    $idade_unidade = $idade_unidade === "meses" ? "meses" : "anos";

    if($idade_unidade === "meses"){
        return $idade . ($idade == 1 ? " mes" : " meses");
    }

    return $idade . ($idade == 1 ? " ano" : " anos");
}

?>
