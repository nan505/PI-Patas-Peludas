const formAnimais = document.getElementById('formAnimais')

// querySelectorAll retorna ambos os botões submit pelo ID "btnFuncao"
const botoesSubmit = document.querySelectorAll('#btnFuncao')
let valorBtnSubmit = ""

// Verificando cada um dos botões caso um deles seja clicado, e captura o valor do botão clicado na variável "funcaoSubmit"
botoesSubmit.forEach(btn => {
    btn.addEventListener('click', function(eventoClick){
        valorBtnSubmit = this.value
    })
})

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

    // Criando o input escondido que será enviado via POST para a página PHP
    const inputFuncao = document.createElement('input')

    inputFuncao.type = 'hidden'
    inputFuncao.name = 'funcao'
    inputFuncao.value = valorBtnSubmit
    
    // Adiciona o input escondido no formulário para ser enviado
    this.appendChild(inputFuncao)

    this.submit()
})

function fnScrollTopoFormulario(){
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    })
}
