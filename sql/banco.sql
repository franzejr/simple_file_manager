CREATE SCHEMA IF NOT EXISTS trab3_franzejr;
USE trab3_franzejr;

CREATE TABLE usuario (
	id_usu INT AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	apelido VARCHAR(255),
	cpf VARCHAR(100),
	email VARCHAR(100),
	endereco VARCHAR(255),
	complemento VARCHAR(255),
	telefone INT,
	telefone2 INT,
	PRIMARY KEY (id_usu)
) ENGINE = InnoDB;

CREATE TABLE arquivo (
	id_arq INT AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	caminho VARCHAR(255),
	user INT,
	PRIMARY KEY (id_arq),
	CONSTRAINT fk_arq_usu FOREIGN KEY (user) REFERENCES usuario(id_usu)
) ENGINE = InnoDB;

CREATE TABLE categoria (
	id_cat INT AUTO_INCREMENT,
	nome VARCHAR(255),
    PRIMARY KEY (id_cat)
) ENGINE = InnoDB;

CREATE TABLE arq_cat (
	id_arq INT NOT NULL,
	id_cat INT NOT NULL,
	CONSTRAINT fk_id_arq FOREIGN KEY (id_arq) REFERENCES arquivo(id_arq),
	CONSTRAINT fk_id_cat FOREIGN KEY (id_cat) REFERENCES categoria(id_cat)
) ENGINE = InnoDB;