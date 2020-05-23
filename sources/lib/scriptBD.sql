-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `sobrenome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  `endfotoperfil` VARCHAR(45) NULL,
  `idalbumprincipal` VARCHAR(45) NULL,
  `idalbumfavorito` VARCHAR(45) NOT NULL,
  `dataNascimento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `album` (
  `idalbum` INT NOT NULL,
  `nomealbum` VARCHAR(45) NULL,
  `dataCriacao` DATE NULL,
  `codCompartilhamento` VARCHAR(100) NULL,
  `usuario_idusuario` INT NULL,
  PRIMARY KEY (`idalbum`, `usuario_idusuario`),
  CONSTRAINT `fk_album_usuario`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `midia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `midia` (
  `idmidia` INT AUTO_INCREMENT NULL,
  `datadeenvio` DATE NULL,
  `enderecoArquivo` VARCHAR(100) NOT NULL,
  `descricao` TEXT(1000) NULL,
  `tamanho` INT NULL,
  `extensao` VARCHAR(45) NULL,
  `resolucao` VARCHAR(45) NULL,
  `duracao` VARCHAR(45) NULL,
  `album_idalbum` INT NULL,
  PRIMARY KEY (`idmidia`, `album_idalbum`),
    FOREIGN KEY (`album_idalbum`)
    REFERENCES `album` (`idalbum`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
