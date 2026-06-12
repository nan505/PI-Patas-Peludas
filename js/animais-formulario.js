const formAnimais = document.getElementById('formAnimais')

formAnimais.addEventListener('submit', function(eventoSubmit){
    eventoSubmit.preventDefault()

    const regexNumeros = /^\d+$/
    const mensagemErro = document.getElementById('mensagemErro')

    const campoNome = document.getElementById('nome')

    if(campoNome.value.length < 1){
        mensagemErro.innerText = "O nome do animal informado é muito curto."
        return
    }
    if(campoNome.value.length > 150){
        mensagemErro.innerText = "O nome do animal informado é muito longo."
        return
    }

    const campoIdade = document.getElementById('idade')
    const valueIdadeInt = parseInt(campoIdade.value)

    if(regexNumeros.test(valueIdadeInt) == false){
        mensagemErro.innerText = "A idade do animal informada deve ser um número inteiro válido"
        return
    }
    if(Number.isInteger(valueIdadeInt))
    if(valueIdadeInt < 0){
        return
    }
    if(valueIdadeInt > 40){
        return
    }

    const campoFoto = document.getElementById('url_imagem')

    if(campoFoto.value.length < 3){
        return
    }
    if(campoFoto.value.length > 1000){
        return
    }

    eventoSubmit.submit()
})