function salvar(event){
    event.preventDefault();

    var nome = document.getElementById('nome').value;
    var preco = document.getElementById('preco').value;
    var editora = document.getElementById('editora').value;

    if(nome == 'Crise nas Infinitas Terras' && preco == 200.00 && editora =='PaniniComics'){
        // Para funcionar: nome: Crise nas Infinitas Terras; preço = 200,00 e editora: PaniniComics
        Swal.fire({
            title: 'Cadastro de Produto realizado com sucesso!',
            text:  nome + ' foi adicionado ao catalogo om sucesso.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() => {
         location.href="../html/home.html";
            }, 100);
        });
        }else{
        Swal.fire({
            title: 'Erro!',
            text: 'HQ já cadastrada!.',
            icon: 'error',
            confirmButtonText: 'Cadastre outra HQ!!'
        });
   
}}