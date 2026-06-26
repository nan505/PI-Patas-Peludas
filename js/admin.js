function fnMostrarTBoxDoenca(){
    const checkbox_doenca = document.getElementById("checkbox_doenca")

    // <div> oculta que será exibida caso a checkbox seja marcada
    const campo_doenca = document.getElementById("campo_doenca")

    // Input para o usuário informar a(s) doença(s) que o animal possui
    const input_doenca = document.getElementById("input_doenca")

    // Exibe a <div> oculta caso a checkbox esteja marcada
    if(checkbox_doenca.checked){
        campo_doenca.style.display = "block"
    }
    // Senão, oculta a <div> e remove o valor do input
    else{
        campo_doenca.style.display = "none"
        input_doenca.value = ""
    }
}

// Limpa a URL do site de possíveis GET
function fnLimparURL(){
    window.location.href = window.location.pathname
}