function fnValidarAdocao(){
    const mensagemErro = document.getElementById('mensagemErro')
    const regexNomeCompleto = /^[A-Za-zÀ-ÿ]+(?:\s[A-Za-zÀ-ÿ]+)+$/
    const regexNumeros = /^\d+$/
    const regexNomeRaca = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$/

    const campoNome = document.getElementById("nome")
    const nomeTratado = campoNome.value.trim().replace(/\s+/g, ' ')

    if(nomeTratado == ""){
        mensagemErro.innerText = "Preencha o campo nome"
    }
    if(nomeTratado.value.length >= 250){
       mensagemErro.innerText = "Prencha até 250 caracteres" 
    }

    const campoEndereco = document.getElementById("endereco")

    if(campoEndereco.value.trim() == ""){
        mensagemErro.innerText = "Preencha o campo endereco"
    }

    if(campoEndereco.value.trim() >= 200){
        mensagemErro.innerText = "O limite maximo de caracter é de 200"
    }

    const campoRG = document.getElementById('rg')
    const intRG = parseInt(campoRG.value) ?? null

    if(campoRG.value.length != 11){
        mensagemErro.innerText = "O valor deve ser até 11 caracter!"
    }
    if(regexNumeros.test(intRG) == false){
    mensagemErro.innerText = "O RG deve conter apenas caracteres numéricos."   
    }
    
    const campoCPF = document.getElementById('cpf')
    const intCPF = parseInt(campoCPF.value) ?? null

    if(campoCPF.value.length != 11){
        mensagemErro.innerText = "O CPF informado deve possuir exatamente onze (11) caracteres numéricos."
    }
    if(regexNumeros.test(intCPF) == false){
        mensagemErro.innerText = "O CPF deve conter apenas caracteres numéricos."
    }

    const campoTelefone = document.getElementById('telefone')
    const intTelefone = parseInt(campoTelefone.value) ?? null

    if(campoTelefone.value.length != 11){
        mensagemErro.innerText = "O número de telefone informado deve possuir exatamente onze (11) caracteres numéricos."
    }
    if(regexNumeros.test(intTelefone) == false){
        mensagemErro.innerText = "O número de telefone deve conter apenas caracteres numéricos."
    } 
    
    const campoNomeAnimal = document.getElementById('nomeAnimal')

    if(campoNomeAnimal.value.trim() == ""){
        mensagemErro.innerText = "Preencha o campo"
    }

    if(campoNomeAnimal.value.length() >= 150){
        mensagemErro.innerText = "Limite maximo de caracter de 150!"
    }

    const campoRaca = document.getElementById('raca')
    if(campoRaca.value.trim() ==""){
        mensagemErro.innerText = "Preencha o campo"    
    }
    if(campoRaca.value.length() >= 75){
        mensagemErro.innerText = "limite maximo de 75 caracter"
    }
    
    const campoIdade = document.getElementById('i')
    const intIdade = parseInt(campoIdade.value) ?? null

    if(regexNumeros.test(intIdade) == false){
        mensagemErro.innerText = "Campo permite apenas numeros"
    }
    if(campoIdade.value.length != 2){
         mensagemErro.innerText = "Campo com maximo de 2 digitos"
    }
}