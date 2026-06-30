const formAdmin = document.getElementById('formAdmin')

formAdmin.addEventListener('submit', function(eventoSubmit){
    eventoSubmit.preventDefault()

    const mensagemErro = document.getElementById('mensagemErro')

    const campoEmailUsuario = document.getElementById('email_usuario')

    if(campoEmailUsuario.value.length > 320){
        mensagemErro.innerText = "O e-mail não pode ultrapassar 320 caracteres."
        return
    }

    const campoSenhaUsuario = document.getElementById('senha_usuario')

    if(campoSenhaUsuario.value.length > 128){
        mensagemErro.innerText = "A senha não pode ultrapassar 128 caracteres."
        return
    }

    console.log("Sucesso na validação!")
    this.submit()
})