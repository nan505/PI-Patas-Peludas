const formAnimais = document.getElementById('formAnimais')

formAnimais.addEventListener('submit', function(eventoSubmit){
    eventoSubmit.preventDefault()

    const regexNumeros = /^\d+$/
    const mensagemErro = document.getElementById('mensagemErro')

    const campoNome = document.getElementById('nome')

    if(campoNome.value.length < 1){
        mensagemErro.innerText = "O nome do animal informado é muito curto."
        campoNome.focus()
        fnScrollTopoFormulario()
        return
    }
    if(campoNome.value.length > 150){
        mensagemErro.innerText = "O nome do animal informado é muito longo."
        campoNome.focus()
        fnScrollTopoFormulario()
        return
    }

    const campoIdade = document.getElementById('idade')
    const campoIdadeUnidade = document.getElementById('idade_unidade')
    const valueIdadeInt = parseInt(campoIdade.value) ?? null
    const idadeMaxima = campoIdadeUnidade.value === 'meses' ? 12 : 40

    if(valueIdadeInt == null){
        mensagemErro.innerText = "O campo de idade do animal deve ser preenchido."
        campoIdade.focus()
        fnScrollTopoFormulario()
        return
    }
    if(regexNumeros.test(valueIdadeInt) == false){
        mensagemErro.innerText = "A idade do animal informada deve ser um número inteiro válido."
        campoIdade.focus()
        fnScrollTopoFormulario()
        return
    }
    if(valueIdadeInt < 0){
        mensagemErro.innerText = "A idade do animal informada não pode ser menor que zero."
        campoIdade.focus()
        fnScrollTopoFormulario()
        return
    }
    if(valueIdadeInt > idadeMaxima){
        mensagemErro.innerText = "A idade do animal informada é maior que o limite máximo permitido."
        campoIdade.focus()
        fnScrollTopoFormulario()
        return
    }

    this.submit()
})

// Função que faz a página voltar ao topo
function fnScrollTopoFormulario(){
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    })
}