CREATE SCHEMA locadora;
USE locadora;

CREATE TABLE usuario(
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(24) NOT NULL,
    
    PRIMARY KEY (id)
);

CREATE TABLE filme (
	id INT NOT NULL AUTO_INCREMENT,
    nomeFilme VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    
    PRIMARY KEY (id)
);

CREATE TABLE registroAlugado(
	id INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    id_filme INT NOT NULL,
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id),
    FOREIGN KEY (id_filme) REFERENCES filme(id)
);