CREATE DATABASE IF NOT EXISTS db_pw2;
USE db_pw2;

CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(100) NOT NULL,
    idade VARCHAR(40),
    id_login INT NOT NULL,
    FOREIGN KEY (id_login) REFERENCES login(id) ON DELETE CASCADE
);


CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    preco VARCHAR(40) NOT NULL,
    editora VARCHAR(40) NOT NULL,
    descricao VARCHAR(255),
    quantidade INT NOT NULL, 
    categoria VARCHAR(255),
    data_cadastro DATE NOT NULL,
    ativo BOOLEAN
    -- Não entendi a parte do "caminho do produto."
);
