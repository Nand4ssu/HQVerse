function cadastrar(event){
    event.preventDefault();

    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    var email = document.getElementById('email').value;

    if(usuario == 'admin' && senha == 'cadastro' && email =='testecadastro@gmail.com'){
        Swal.fire({
            title: 'Cadastro realizado com sucesso!',
            text: 'Bem vindo ' + usuario + '!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() => {
         location.href="../telaLogin.html";
            }, 100);
        });
        }else{
        Swal.fire({
            title: 'Erro!',
            text: 'O nome de usuário ja existe!.',
            icon: 'error',
            confirmButtonText: 'Tentar novamente'
        });
   
}}