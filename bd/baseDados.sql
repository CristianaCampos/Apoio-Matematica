-- Apaga a base de dados
DROP DATABASE IF EXISTS baseDados;

-- Cria a base de dados
CREATE DATABASE baseDados DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE baseDados;

CREATE TABLE account
(id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
pass VARCHAR(50),
PRIMARY KEY (id)
);


