-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


-- -----------------------------------------------------
-- Schema turismo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `turismo` DEFAULT CHARACTER SET utf8 ;
USE `turismo` ;

-- -----------------------------------------------------
-- Table `turismo`.`tb_avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_avaliacao` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `OPINIAO` VARCHAR(255) NOT NULL,
  `AVALIACAO` INT(1) NOT NULL,
  PRIMARY KEY (`ID`));

USE `turismo` ;

-- -----------------------------------------------------
-- Table `turismo`.`tb_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_eventos` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `LOCAL` VARCHAR(45) NOT NULL,
  `TITULO` VARCHAR(45) NOT NULL,
  `DESCRICAO` VARCHAR(550) NOT NULL,
  `DATA_INICIO` datetime DEFAULT NULL,
  `DATA_TERMINO` datetime DEFAULT NULL,
  `CAPACIDADE` VARCHAR(45) NOT NULL DEFAULT '1',
  `FOTO` VARCHAR(60) DEFAULT NULL,
  `ATIVO` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`ID`, `LOCAL`, `TITULO`, `DESCRICAO`, `DATA_INICIO`, `DATA_TERMINO`, `CAPACIDADE`, `ATIVO`) VALUES
(1, 'Ceilândia', 'Casa do Cantador', 'A Casa do Cantador, localizada em Ceilândia - DF, é o espaço cultural mais importante da Cidade, que abarca todos os movimentos artísticos e culturais do local.', NULL, NULL, '1', 0),
(3, 'Ceilândia Sul', 'Estádio Maria de Lourdes Abadia', 'O Estádio Maria de Lourdes Abadia, conhecido popularmente como Abadião, é um estádio de esportes brasileiro, situado em Ceilândia, no Distrito Federal. ', NULL, NULL, '1', 0),
(4, 'Ceilândia Norte', 'Centro Olímpico do Setor O', 'O programa desenvolvido pela Secretaria de Esporte e Lazer atua nas regiões administrativas do Distrito Federal por meio de parcerias público-privadas. ', NULL, NULL, '1', 0);

-- -----------------------------------------------------
-- Table `turismo`.`tb_arquivos_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_arquivos_eventos` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(45) NOT NULL,
  `CAMINHO` VARCHAR(255) NOT NULL,
  `EVENTOS_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_ARQUIVOS_EVENTOS_EVENTOS_idx` (`EVENTOS_ID` ASC),
  CONSTRAINT `fk_ARQUIVOS_EVENTOS_EVENTOS`
    FOREIGN KEY (`EVENTOS_ID`)
    REFERENCES `turismo`.`tb_eventos` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turismo`.`tb_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_usuarios` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `CPF` VARCHAR(11) NOT NULL,
  `EMAIL` VARCHAR(255) NOT NULL,
  `PASSWORD` VARCHAR(100) NOT NULL,
  `DATA_CADASTRO` datetime NOT NULL DEFAULT current_timestamp(),
  `ATIVO` TINYINT(4) NOT NULL DEFAULT '1',
  `TIPO` VARCHAR(45) NOT NULL DEFAULT '2',
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`ID`, `NOME`, `CPF`, `EMAIL`, `PASSWORD`, `DATA_CADASTRO`, `ATIVO`, `TIPO`) VALUES
(1, 'Marcelo Santos', '05115420233', 'marksantosdf@gmail.com', '123', '2022-05-05 23:31:22', 1, '1'),
(2, 'Dhimylee Gomes', '23475623487', 'dhimylee.almeida@gmail.com', '123', '2022-05-05 23:50:05', 1, '1'),
(3, 'Nadyr Souza', '65204892721', 'nadyr.souza@gmail.com', '123', '2022-05-05 23:52:03', 1, '1'),
(4, 'Leona', '21346579845', 'leonaa@gmail.com', '123', '2022-05-06 09:19:07', 0, '2'),
(6, 'Jane Gomes', '65498732444', 'jane.gomes@gmail.com', '123', '2022-05-06 09:21:41', 0, '2'),
(7, 'Jane Gomes', '65498732444', 'jane.gomes@gmail.com', '123', '2022-05-06 09:22:35', 0, '2'),
(8, 'JoaoGomes', '14298732444', 'joe.gomes@gmail.com', '123', '2022-05-06 09:24:29', 0, '2'),
(9, 'Lino Gomes', '96325841174', 'lino.gomes@gmail.com', '123', '2022-05-06 09:25:28', 0, '2'),
(10, 'Imperador Palpatine', '66613246578', 'imperador@starws.com', 'password214', '2022-05-06 09:42:05', 0, '2'),
(11, 'Luke Skywalker', '85231465978', 'luke@jedi.com', 'darkside34576', '2022-05-06 09:42:56', 0, '2');


-- -----------------------------------------------------
-- Table `turismo`.`tb_usuarios_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_usuarios_eventos` (
  `USUARIOS_ID` INT NOT NULL,
  `EVENTOS_ID` INT NOT NULL,
  PRIMARY KEY (`USUARIOS_ID`, `EVENTOS_ID`),
  INDEX `fk_USUARIOS_has_EVENTOS_EVENTOS1_idx` (`EVENTOS_ID` ASC),
  INDEX `fk_USUARIOS_has_EVENTOS_USUARIOS1_idx` (`USUARIOS_ID` ASC),
  CONSTRAINT `fk_USUARIOS_has_EVENTOS_USUARIOS1`
    FOREIGN KEY (`USUARIOS_ID`)
    REFERENCES `turismo`.`tb_usuarios` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIOS_has_EVENTOS_EVENTOS1`
    FOREIGN KEY (`EVENTOS_ID`)
    REFERENCES `turismo`.`tb_eventos` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
