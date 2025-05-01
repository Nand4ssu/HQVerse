<?php

include("conexao.php");

//pegamos os dados do formulário e verificamos se eles possuem algum valor

$nome = $_POST['nome'] ?? null;
$editora = $_POST['editora'] ?? null;
$preco = $_POST['preco'] ?? null;
$descricao = $_POST['descricao'] ?? null;

//validamos que todos os campos sejam preenchidos
if (!$nome || !$editora || !$preco || !$descricao) {
    echo "Preencha todos os campos.";
    exit;
}

//Código que fizemos na aula do dia 28/04
try {
    // Verificar se o produto já existe
    $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE produto = :produto");
    $varVerifica->bindParam(':produto', $produto);
    $varVerifica->execute();

    if ($varVerifica->fetchColumn() > 0) {
        echo "HQ já cadastrada!";
        exit;
    }

    // Cadastrar/Inserir na tabela de usuario
    $varUsuario = $pdo->prepare("INSERT INTO produto (nome, editora, preco, descricao, categoria, data_cadastro, quantidade) VALUES (:nome, :editora, :preco, :descricao, :categoria, :data_cadastro, :quantidade)");
    $varUsuario->bindParam(':nome', $nome);
    $varUsuario->bindParam(':editora', $editora);
    $varUsuario->bindParam(':preco', $preco);
    $varUsuario->bindParam(':categoria', $categoria);
    $varUsuario->bindParam(':data_cadastro', $data_cadastro);
    $varUsuario->bindParam(':descricao', $descricao);
    $varUsuario->bindParam(':quantidade', $quantidade);
    $varUsuario->execute();

    // Finalizar transação
    $pdo->commit();

    echo "Cadastro de HQ realizado com sucesso!";

    //caso o cadastro de erro, irá entrar no catch e exibir o erro.
} catch (Exception $e) {
    $pdo->rollBack();
    echo "Erro ao cadastrar: " . $e->getMessage();
}

?>