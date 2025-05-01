<?php
session_start(); //iniciando a sessão 

if (isset($_SESSION['usuario'])){
    echo 'Bem-vindo, ' . $_SESSION['usuario'] . "!";
}else{
    echo"Usuário não autenticado.";
}
?>

<!-- Trazendo o que estava na pasta html para está..-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <title> HQVerse</title>
</head>
<body>
   
    <header class="menu">
        <section>
        <h1 >HQVerse</h1>
        <nav class="barras_nav">
            <a href="#"> Home </a>
            <!--O # garante que ao clicarmos no Home, voltará para o começo da página.-->
            <a href="../html/cadastrar-produto"> Cadastre uma HQ! </a>
            <a href="../html/telaLogin.html"> Já possui uma conta? </a>
        </nav> 
      </section>
    </header>

<main class="container">
    <section class="Pd-container">
        <div class="box" >
                <div class="configimg" id="img-1"> </div>
                <h3>HQ Batman Ano Um: Edição Absoluta</h3>
            
                <p>
                    R$
                    <span class="destaqueCor">236,67</span>
                </p>
                <a href="#" class="botao">Comprar</a>
            </div>

            <div class="box" >
                <div class="configimg" id="img-2"> </div>
                <h3>Batman: Louco Amor - Edição de Luxo</h3>
             
                    R$
                    <span class="destaqueCor">70,90</span>
                </p>
                <a href="#" class="botao">Comprar</a>
            </div>

            <div class="box" >
                <div class="configimg" id="img-3"> </div>
                <h3>Mulher Maravilha Hiketeia - Edição de Luxo</h3>
              
                    R$
                    <span class="destaqueCor">62,90</span>
                </p>
                <a href="#" class="botao">Comprar</a>
            </div>

            <div class="box" >
                <div class="configimg" id="img-4"> </div>
                <h3> A Morte do Superman - volume 1 </h3>
           
                    R$
                    <span class="destaqueCor"> 170,00</span>
                </p>
                <a href="#" class="botao">Comprar</a>
            </div>

            <div class="box" >
                <div class="configimg" id="img-5"> </div>
                <h3> V de Vingança</h3>
              
                    R$
                    <span class="destaqueCor">  114,90</span>
                </p>
                <a href="#" class="botao">Comprar</a>
            </div>

            <div class="box" >
                <div class="configimg" id="img-6"> </div>
                <h3>Batman: Xamã</h3>
             
                    R$
                    <span class="destaqueCor">69,90</span>
                </p>
                <a href="#" class="botao">Comprar</a>
        </div>
    </section>
</main>    
        
   
</body>
</html>