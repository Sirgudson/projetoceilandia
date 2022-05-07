-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Maio-2022 às 14:47
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

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
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `DATA_CADASTRO` datetime NOT NULL DEFAULT current_timestamp(),
  `ATIVO` tinyint(4) NOT NULL DEFAULT '1',
  `TIPO` varchar(45) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
