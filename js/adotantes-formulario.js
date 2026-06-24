const formAdotantes = document.getElementById('formAdotantes')

formAdotantes.addEventListener('submit', function(eventoSubmit){
    eventoSubmit.preventDefault()

    const regexNomeCompleto = /^[A-Za-zÀ-ÿ]+(?:\s[A-Za-zÀ-ÿ]+)+$/
    const regexNumeros = /^\d+$/
    const mensagemErro = document.getElementById('mensagemErro')

    const campoNomeAdotante = document.getElementById('nomeadotante')
    const nomeAdotanteTratado = campoNomeAdotante.value.trim().replace(/\s+/g, ' ')

    if(nomeAdotanteTratado.length < 2){
        mensagemErro.innerText = "O nome do adotante informado é muito curto."
        campoNomeAdotante.focus()
        fnScrollTopoFormulario()
        return
    }
    if(nomeAdotanteTratado.length > 250){
        mensagemErro.innerText = "O nome do adotante informado é muito longo."
        campoNomeAdotante.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNomeCompleto.test(nomeAdotanteTratado) == false){
        mensagemErro.innerText = "O nome completo do adotante deve ser informado."
        campoNomeAdotante.focus()
        fnScrollTopoFormulario()
        return
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

    const campoTelefone = document.getElementById('telefone')
    const intTelefone = parseInt(campoTelefone.value) ?? null

    if(campoTelefone.value.length != 11){
        mensagemErro.innerText = "O número de telefone informado deve possuir exatamente onze (11) caracteres numéricos."
        campoTelefone.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNumeros.test(intTelefone) == false){
        mensagemErro.innerText = "O número de telefone deve conter apenas caracteres numéricos."
        campoTelefone.focus()
        fnScrollTopoFormulario()
        return
    }

    const campoCEP = document.getElementById('cep')
    const intCEP = parseInt(campoCEP.value)

    if(campoCEP.value.length != 8){
        mensagemErro.innerText = "O CEP informado deve possuir exatamente oito (8) caracteres numéricos."
        campoCEP.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNumeros.test(intCEP) == false){
        mensagemErro.innerText = "O CEP deve conter apenas caracteres numéricos."
        campoCEP.focus()
        fnScrollTopoFormulario()
        return
    }

    const campoNumeroResidencia = document.getElementById('numeroresidencia')
    const intNumeroResidencia = parseInt(campoNumeroResidencia.value)

    if(campoNumeroResidencia.value.length > 11){
        mensagemErro.innerText = "O número de residência informado é muito longo."
        campoNumeroResidencia.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNumeros.test(intNumeroResidencia) == false){
        mensagemErro.innerText = "O número de residência deve conter apenas caracteres numéricos."
        campoNumeroResidencia.focus()
        fnScrollTopoFormulario()
        return
    }
    if(intNumeroResidencia <= 0){
        mensagemErro.innerText = "O número da residência não pode ser zero (0) ou um número negativo."
        campoNumeroResidencia.focus()
        fnScrollTopoFormulario()
        return
    }

    this.submit()
})

function fnScrollTopoFormulario(){
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    })
}