function fnMostrarTBoxDoenca(){
    const checkbox_doenca = document.getElementById("checkbox_doenca")
    const campo_doenca = document.getElementById("campo_doenca")

    if(checkbox_doenca.checked){
        campo_doenca.style.display = "block"
    }
    else{
        campo_doenca.style.display = "none"
    }
}