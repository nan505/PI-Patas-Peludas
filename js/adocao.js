const formAdocao = document.getElementById('formAdocao')

const btnGerar = document.getElementById('btnGerar')
let valorBtnGerar = ""

btnGerar.addEventListener('submit', function(eventoClick){
    valorBtnGerar = this.value
})

formAdocao.addEventListener('submit', function(eventoSubmit){

    eventoSubmit.preventDefault()

    const mensagemErro = document.getElementById('mensagemErro')
    const regexNomeCompleto = /^[A-Za-zÀ-ÿ]+(?:\s[A-Za-zÀ-ÿ]+)+$/
    const regexNumeros = /^\d+$/
    const regexNomeRaca = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$/

    const campoNome = document.getElementById("nome")
    const nomeTratado = campoNome.value.trim().replace(/\s+/g, ' ')

    if(nomeTratado == ""){
        mensagemErro.innerText = "Preencha o campo nome!"
        return
    }
    if(nomeTratado.length >= 250){
       mensagemErro.innerText = "Prencha até 250 caracteres o campo nome!" 
       return
    }

    const campoEndereco = document.getElementById("endereco")

    if(campoEndereco.value.trim() == ""){
        mensagemErro.innerText = "Preencha o campo endereco!"
        return
    }

    if(campoEndereco.value.trim().length >= 200){
        mensagemErro.innerText = "O limite maximo de caracter é de 200 do campo endereço!"
        return
    }

    const campoRG = document.getElementById('rg')
    const intRG = parseInt(campoRG.value) ?? null

    if(campoRG.value.length != 11){
        mensagemErro.innerText = "O valor campo RG deve ser até 11 caracter!"
        return
    }
    if(regexNumeros.test(intRG) == false){
        mensagemErro.innerText = "O RG deve conter apenas caracteres numéricos." 
        return  
    }
    
    const campoCPF = document.getElementById('cpf')
    const intCPF = parseInt(campoCPF.value) ?? null

    if(campoCPF.value.length != 11){
        mensagemErro.innerText = "O CPF informado deve possuir exatamente onze (11) caracteres numéricos."
        return
    }
    if(regexNumeros.test(intCPF) == false){
        mensagemErro.innerText = "O CPF deve conter apenas caracteres numéricos."
        return
    }

    const campoTelefone = document.getElementById('telefone')
    const intTelefone = parseInt(campoTelefone.value) ?? null

    console.log(intTelefone)

    if(campoTelefone.value.length != 11){
        mensagemErro.innerText = "O número de telefone informado deve possuir exatamente onze (11) caracteres numéricos."
        return
    }
    if(regexNumeros.test(intTelefone) == false){
        mensagemErro.innerText = "O número de telefone deve conter apenas caracteres numéricos."
        return
    } 
    
    const campoNomeAnimal = document.getElementById('nomeAnimal')

    if(campoNomeAnimal.value.trim() == ""){
        mensagemErro.innerText = "Preencha o campo nome animal!"
        return
    }

    if(campoNomeAnimal.value.length >= 150){
        mensagemErro.innerText = "Limite maximo de caracter de 150 no campo de nome animal!"
        return
    }

    const campoRaca = document.getElementById('raca')

    if(campoRaca.value.trim() ==""){
        mensagemErro.innerText = "Preencha o campo raça"
        return    
    }
    if(regexNomeRaca.test(campoRaca) == false){
        mensagemErro.innerText = "O campo nome raça não permite números ou caracteres especiais."
    }

    if(campoRaca.value.length >= 75){
        mensagemErro.innerText = "Limite maximo de 75 caracter no campo raça"
        return
    }
    
    const campoIdade = document.getElementById('idade')
    const intIdade = parseInt(campoIdade.value) ?? null

    if(campoIdade.value.length != 2){
         mensagemErro.innerText = "Campo de idade possui o maximo de 2 digitos"
         return
    }

    const inputGerar = document.createElement('input')

    inputGerar.type = 'hidden'
    inputGerar.name = 'btn-gerar'
    inputGerar.value = valorBtnGerar

    this.appendChild(inputGerar)

    this.submit()

})