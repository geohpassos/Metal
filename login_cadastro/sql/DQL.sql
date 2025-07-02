CREATE DATABASE site_pdo;

USE site_pdo;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR (255)
);
CREATE TABLE produtos(
id_produto INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(250)  NOT NULL,
preco DECIMAL(10,2) NOT NULL ,
descricao VARCHAR(350) NOT NULL UNIQUE
);
DROP TABLE produtos;
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produtos(id_produto)
);