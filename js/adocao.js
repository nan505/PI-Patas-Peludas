function fnValidarAdocao(){

    const campoNome = document.getElementById("nome")
    const nomeTratado = campoNome.value.trim().replace(/\s+/g, ' ')

    const mensagemErro = document.getElementById('mensagemErro')
    const regexNomeCompleto = /^[A-Za-zÀ-ÿ]+(?:\s[A-Za-zÀ-ÿ]+)+$/

    if(nomeTratado == ""){
        mensagemErro.innerText = "Preencha o campo nome"
    }
    if(nomeTratado.value.length >= 250){
       mensagemErro.innerText = "Prencha até 250 caracteres" 
    }

    const campoRG = document.getElementById('rg')

    if(campoRG.value.length != 11){
        mensagemErro.innerText = "O valor deve ser até 11 caracter!"
    }
    
    const campoCPF = document.getElementById('cpf')
    const intCPF = parseInt(campoCPF.value) ?? null

    if(campoCPF.value.length != 11){
        mensagemErro.innerText = "O CPF informado deve possuir exatamente onze (11) caracteres numéricos."
        campoCPF.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNumeros.test(intCPF) == false){
        mensagemErro.innerText = "O CPF deve conter apenas caracteres numéricos."
        campoCPF.focus()
        fnScrollTopoFormulario()
        return
    }

}