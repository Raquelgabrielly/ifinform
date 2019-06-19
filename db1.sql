-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 09:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `AGENDAMENTO_ID` int(11) NOT NULL,
  `AGENDADO_PARA` datetime NOT NULL,
  `VISITANTE_ID` int(11) DEFAULT NULL,
  `DOCENTE_ID` int(11) DEFAULT NULL,
  `DISCENTE_ID` int(11) DEFAULT NULL,
  `AGENDADO_EM` datetime NOT NULL,
  `ASSUNTO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`AGENDAMENTO_ID`, `AGENDADO_PARA`, `VISITANTE_ID`, `DOCENTE_ID`, `DISCENTE_ID`, `AGENDADO_EM`, `ASSUNTO`, `NOME`) VALUES
(3, '2019-06-19 06:30:00', NULL, 1, 1, '2019-06-19 03:28:48', 'teste pc', 'Professor'),
(4, '2019-06-19 18:40:00', NULL, 1, 1, '2019-06-19 03:40:21', 'TESTE TABELA', 'Professor'),
(5, '2019-06-20 06:30:00', NULL, 1, 1, '2019-06-19 03:42:54', 'TESTE ORDEM', 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `discente`
--

CREATE TABLE `discente` (
  `DISCENTE_ID` int(11) NOT NULL,
  `DISCENTE_NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DISCENTE_EMAIL` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `DISCENTE_TELEFONE` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DISCENTE_SENHA` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DISCENTE_FOTO` blob,
  `DISCENTE_MATRICULA` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `discente`
--

INSERT INTO `discente` (`DISCENTE_ID`, `DISCENTE_NOME`, `DISCENTE_EMAIL`, `DISCENTE_TELEFONE`, `DISCENTE_SENHA`, `DISCENTE_FOTO`, `DISCENTE_MATRICULA`) VALUES
(1, 'Filipe Izidorio', 'fizidorio7@gmail.com', '8135450711', '123456', NULL, '20171infig0100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `docente`
--

CREATE TABLE `docente` (
  `DOCENTE_ID` int(11) NOT NULL,
  `DOCENTE_NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOCENTE_EMAIL` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `DOCENTE_TELEFONE` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DOCENTE_SENHA` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DOCENTE_FOTO` blob,
  `DOCENTE_SIAPE` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `docente`
--

INSERT INTO `docente` (`DOCENTE_ID`, `DOCENTE_NOME`, `DOCENTE_EMAIL`, `DOCENTE_TELEFONE`, `DOCENTE_SENHA`, `DOCENTE_FOTO`, `DOCENTE_SIAPE`) VALUES
(1, 'Professor', 'prof@essor.com', '123456', '123456', NULL, '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitante`
--

CREATE TABLE `visitante` (
  `VISITANTE_ID` int(11) NOT NULL,
  `VISITANTE_NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VISITANTE_EMAIL` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `VISITANTE_TELEFONE` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `VISITANTE_SENHA` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `VISITANTE_FOTO` blob,
  `VISITANTE_CPF` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`AGENDAMENTO_ID`),
  ADD KEY `fk_AGENDAMENTO_VISITANTE_idx` (`VISITANTE_ID`),
  ADD KEY `fk_AGENDAMENTO_DOCENTE1_idx` (`DOCENTE_ID`),
  ADD KEY `fk_AGENDAMENTO_DISCENTE1_idx` (`DISCENTE_ID`);

--
-- Indexes for table `discente`
--
ALTER TABLE `discente`
  ADD PRIMARY KEY (`DISCENTE_ID`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`DOCENTE_ID`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`VISITANTE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `AGENDAMENTO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discente`
--
ALTER TABLE `discente`
  MODIFY `DISCENTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `docente`
--
ALTER TABLE `docente`
  MODIFY `DOCENTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitante`
--
ALTER TABLE `visitante`
  MODIFY `VISITANTE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_AGENDAMENTO_DISCENTE1` FOREIGN KEY (`DISCENTE_ID`) REFERENCES `discente` (`DISCENTE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AGENDAMENTO_DOCENTE1` FOREIGN KEY (`DOCENTE_ID`) REFERENCES `docente` (`DOCENTE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AGENDAMENTO_VISITANTE` FOREIGN KEY (`VISITANTE_ID`) REFERENCES `visitante` (`VISITANTE_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
