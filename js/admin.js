function fnMostrarTBoxDoenca(){
    const checkbox_doenca = document.getElementById("checkbox_doenca")
    const campo_doenca = document.getElementById("campo_doenca")
    const input_doenca = document.getElementById("input_doenca")

    if(checkbox_doenca.checked){
        campo_doenca.style.display = "block"
    }
    else{
        campo_doenca.style.display = "none"
        input_doenca.value = ""
    }
}

function fnLimparURL(){
    window.location.href = window.location.pathname
}