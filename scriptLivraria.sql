CREATE DATABASE db_livraria;

USE db_livraria;

CREATE TABLE editora (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE autor (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  telefone VARCHAR(17) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE admin (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  login VARCHAR(20) NOT NULL,
  senha VARCHAR(256) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE livro (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  editora_id INTEGER UNSIGNED NOT NULL,
  autor_id INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(25) NOT NULL,
  dt_edicao DATETIME NOT NULL,
  paginas INTEGER UNSIGNED NULL,
  impressao VARCHAR(15) NULL,
  descricao VARCHAR(50) NULL,
  PRIMARY KEY(id),
  INDEX livro_FKIndex1(autor_id),
  INDEX livro_FKIndex2(editora_id),
  FOREIGN KEY(autor_id)
    REFERENCES autor(id)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
  FOREIGN KEY(editora_id)
    REFERENCES editora(id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
);

INSERT INTO admin(login, senha) VALUES('admin', md5('123')); 


