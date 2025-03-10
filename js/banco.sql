CREATE DATABASE estoque;
USE estoque;

CREATE TABLE produto(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    quantidade INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);