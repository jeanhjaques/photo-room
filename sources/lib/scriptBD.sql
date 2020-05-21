-- Database: photoroom

-- DROP DATABASE photoroom;

-- -----------------------------------------------------
-- Database photoroom
-- -----------------------------------------------------
CREATE DATABASE photoroom
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
  
-- -----------------------------------------------------
-- Schema photoroomschema
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS photoroomschema;
SET search_path TO photoroomschema;
-- -----------------------------------------------------
-- Table photoroomschema.usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario (
  idusuario SERIAL NOT NULL,
  nome VARCHAR(45) NOT NULL,
  sobrenome VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  cidade VARCHAR(45) NULL,
  estado VARCHAR(45) NULL,
  pais VARCHAR(45) NULL,
  telefone VARCHAR(45) NULL,
  endfotoperfil VARCHAR(45) NULL,
  idalbumprincipal VARCHAR(45) NULL,
  idalbumfavorito VARCHAR(45) NOT NULL,
  dataNascimento VARCHAR(45) NOT NULL,
  PRIMARY KEY (idusuario));
-- -----------------------------------------------------
-- Table photoroomschema.album
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS album (
  idalbum SERIAL NOT NULL,
  nomealbum VARCHAR(45) NOT NULL,
  dataCriacao time NOT NULL,
  codCompartilhamento VARCHAR(100) NULL,
  usuario_idusuario INT NOT NULL,
  PRIMARY KEY (idalbum),
  CONSTRAINT fk_album_usuario
    FOREIGN KEY (usuario_idusuario)
    REFERENCES usuario(idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
-- -----------------------------------------------------
-- Table photoroomschema.midia
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS midia (
  idmidia SERIAL NOT NULL,
  datadeenvio TIME NOT NULL,
  enderecoArquivo VARCHAR(100) NOT NULL,
  descricao VARCHAR(1000) NULL,
  tamanho INT NULL,
  extensao VARCHAR(45) NULL,
  resolucao VARCHAR(45) NULL,
  duracao VARCHAR(45) NULL,
  album_idalbum INT NOT NULL,
  PRIMARY KEY (idmidia),
  CONSTRAINT fk_midia_album
    FOREIGN KEY (album_idalbum)
    REFERENCES album(idalbum)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
