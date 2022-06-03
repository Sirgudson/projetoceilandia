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
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

--
-- Extraindo dados da tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`ID`, `LOCAL`, `TITULO`, `DESCRICAO`, `DATA_INICIO`, `DATA_TERMINO`, `CAPACIDADE`, `FOTO`, `ATIVO`) VALUES
(12, 'Ceilândia Sul', ' Casa do Cantador', 'A Casa do Cantador, localizada em Ceilândia - DF, é o espaço cultural mais importante da Cidade, que abarca todos os movimentos artísticos e culturais do local. ', NULL, NULL, '1', '629962353656a.jpeg', 0),
(13, 'Ceilândia Sul', 'Estádio Maria de Lourdes Abadia', 'O Estádio Maria de Lourdes Abadia, conhecido popularmente como Abadião, é um estádio de esportes brasileiro, situado em Ceilândia, no Distrito Federal. ', NULL, NULL, '1', '629962c0739f6.jpg', 0),
(14, 'Ceilândia Norte', ' Centro Olímpico do Setor O', 'O programa desenvolvido pela Secretaria de Esporte e Lazer atua nas regiões administrativas do Distrito Federal por meio de parcerias público-privadas. ', NULL, NULL, '1', '62996303b0d1e.jpg', 0),
(15, 'Ceilândia Norte', 'Caixa D\'àgua ', 'O local de construção do reservatório foi onde, em 1971, o governador Hélio Prates lançou a pedra fundamental de Ceilândia. O reservatório foi construído em uma altura elevada pois tinha o propósito de abastecer regiões mais elevadas, que demandavam uma pressão adequada.', NULL, NULL, '1', '629963a569ad0.jpg', 0),
(16, 'Paróquia Senhor Bom Jesus', 'Arraiá da Paróquia Senhor Bom Jesus ', 'Paróquia localizada na EQNO 11/13 Modulo Especial Setor O, Ceilândia', '2022-06-11 19:00:00', '2022-06-12 23:00:00', '200', '629964cdccb3e.jpg', 0),
(18, 'La Fiesta Casa Noturna', 'La Fiesta Tati Zaqui', 'Tati Zaqui na La Fiesta.\r\n\r\nO Point de Brasília.  \r\n\r\nSábado 13 de Agosto as 22:30H.\r\n\r\nDuas Pistas, DJs, Drags Cantores Locais.\r\n\r\nAniversariantes da semana do mês free mais um vip até meia noite. \r\n\r\nSorteio de Combo\r\n\r\nBrincadeiras\r\n\r\n', '2022-06-13 23:00:00', '2022-06-14 06:00:00', '2000', '629965e277646.png', 0);

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
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `turismo`.`tb_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_usuarios` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `CPF` VARCHAR(11) NOT NULL UNIQUE,
  `EMAIL` VARCHAR(255) NOT NULL,
  `PASSWORD` VARCHAR(100) NOT NULL,
  `DATA_CADASTRO` datetime NOT NULL DEFAULT current_timestamp(),
  `ATIVO` TINYINT(4) NOT NULL DEFAULT 1,
  `TIPO` VARCHAR(45) NOT NULL DEFAULT '2',
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`ID`, `NOME`, `CPF`, `EMAIL`, `PASSWORD`, `DATA_CADASTRO`, `ATIVO`, `TIPO`) VALUES
(1, 'Marcelo Santos', '05115420233', 'marksantosdf@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-05 23:31:22', 1, '1'),
(2, 'Dhimylee Gomes', '23475623487', 'dhimylee.almeida@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-05 23:50:05', 1, '1'),
(3, 'Nadyr Souza', '65204892721', 'nadyr.souza@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-05 23:52:03', 1, '1'),
(4, 'Leona', '21346579845', 'leonaa@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-06 09:19:07', 0, '2'),
(5, 'Jane Gomes', '65498732444', 'jane.gomes@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-06 09:21:41', 0, '2'),
(6, 'Imperador Palpatine', '66613246578', 'imperador@starws.com', '202cb962ac59075b964b07152d234b70', '2022-05-06 09:42:05', 0, '2'),
(7, 'Luke Skywalker', '85231465978', 'luke@jedi.com', '202cb962ac59075b964b07152d234b70', '2022-05-06 09:42:56', 1, '2');


-- -----------------------------------------------------
-- Table `turismo`.`tb_avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_avaliacao` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(100) NOT NULL,
  `OPINIAO` VARCHAR(255) NOT NULL,
  `AVALIACAO` INT(1) NOT NULL,
  `tb_usuarios_ID` INT(11) NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_tb_avaliacao_tb_usuarios1_idx` (`tb_usuarios_ID` ASC),
  CONSTRAINT `fk_tb_avaliacao_tb_usuarios1`
    FOREIGN KEY (`tb_usuarios_ID`)
    REFERENCES `turismo`.`tb_usuarios` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

--
-- Extraindo dados da tabela `tb_avaliacao`
--

INSERT INTO `tb_avaliacao` (`ID`, `NOME`, `OPINIAO`, `AVALIACAO`, `tb_usuarios_ID`) VALUES
(1, 'Juscelino', 'Incrível a facilidade em salvar um evento!', 4, NULL),
(2, 'Boba Fett', 'Creio que ainda pode melhorar mais a estrutura do site', 2, NULL);


-- -----------------------------------------------------
-- Table `turismo`.`tb_usuarios_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turismo`.`tb_usuarios_eventos` (
  `USUARIOS_ID` INT(11) NOT NULL,
  `EVENTOS_ID` INT(11) NOT NULL,
  PRIMARY KEY (`USUARIOS_ID`, `EVENTOS_ID`),
  INDEX `fk_USUARIOS_has_EVENTOS_EVENTOS1_idx` (`EVENTOS_ID` ASC),
  INDEX `fk_USUARIOS_has_EVENTOS_USUARIOS1_idx` (`USUARIOS_ID` ASC),
  CONSTRAINT `fk_USUARIOS_has_EVENTOS_EVENTOS1`
    FOREIGN KEY (`EVENTOS_ID`)
    REFERENCES `turismo`.`tb_eventos` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIOS_has_EVENTOS_USUARIOS1`
    FOREIGN KEY (`USUARIOS_ID`)
    REFERENCES `turismo`.`tb_usuarios` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
