-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/05/2022 às 05:03
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `turismo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `DATA_CADASTRO` datetime NOT NULL DEFAULT current_timestamp(),
  `ATIVO` tinyint(4) NOT NULL,
  `TIPO` varchar(45) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `USUARIOS`
--

INSERT INTO `USUARIOS` (`ID`, `NOME`, `CPF`, `EMAIL`, `PASSWORD`, `DATA_CADASTRO`, `ATIVO`, `TIPO`) VALUES
(1, 'Marcelo Santos', '05115420233', 'marksantosdf@gmail.com', '123', '2022-05-05 23:31:22', 1, '1'),
(2, 'Dhimylee Gomes', '23475623487', 'dhimylee.almeida@gmail.com', '123', '2022-05-05 23:50:05', 1, '1'),
(3, 'Nadyr Souza', '65204892721', 'nadyr.souza@gmail.com', '123', '2022-05-05 23:52:03', 1, '1');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
