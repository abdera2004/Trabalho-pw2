-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/11/2023 às 03:12
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdloja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadm`
--

CREATE TABLE `tbadm` (
  `idAdm` int(11) NOT NULL,
  `nomeAdm` varchar(50) NOT NULL,
  `sobrenomeAdm` varchar(50) NOT NULL,
  `cpfAdm` varchar(11) NOT NULL,
  `nascAdm` date NOT NULL,
  `emailAdm` varchar(100) NOT NULL,
  `passwordAdm` varchar(30) NOT NULL,
  `imagemAdm` varchar(100) NOT NULL,
  `tokenAdm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `tbadm`
--

INSERT INTO `tbadm` (`idAdm`, `nomeAdm`, `sobrenomeAdm`, `cpfAdm`, `nascAdm`, `emailAdm`, `passwordAdm`, `imagemAdm`, `tokenAdm`) VALUES
(1, 'Ruan', 'Santos', '893.048.349', '2004-01-04', 'ruanpereira405@gmail.com', '123', '', '608ae85e84ac9c4fe70cb3fca95b1f3c');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcompra`
--

CREATE TABLE `tbcompra` (
  `codCompra` int(11) NOT NULL,
  `qtdJogosCompra` int(11) NOT NULL,
  `valorTotalCompra` double NOT NULL,
  `dataCompra` date NOT NULL,
  `formaPagamento` int(11) NOT NULL,
  `statusCompra` varchar(100) NOT NULL,
  `codUser` int(11) NOT NULL,
  `codJogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbformapagamento`
--

CREATE TABLE `tbformapagamento` (
  `codPagamento` int(11) NOT NULL,
  `descFormaPagamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbformapagamento`
--

INSERT INTO `tbformapagamento` (`codPagamento`, `descFormaPagamento`) VALUES
(33, 'Boleto'),
(31, 'Crédito'),
(32, 'Débito'),
(1, 'Pix');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbgenerojogo`
--

CREATE TABLE `tbgenerojogo` (
  `codGeneroJogo` int(11) NOT NULL,
  `descGeneroJogo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbjogo`
--

CREATE TABLE `tbjogo` (
  `codJogo` int(11) NOT NULL,
  `nomeJogo` varchar(100) NOT NULL,
  `generoJogo` varchar(50) NOT NULL,
  `plataformaJogo` varchar(100) NOT NULL,
  `precoJogo` varchar(10) NOT NULL,
  `tamanhoJogo` varchar(10) NOT NULL,
  `imagemJogo` varchar(100) NOT NULL,
  `dataJogo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `tbjogo`
--

INSERT INTO `tbjogo` (`codJogo`, `nomeJogo`, `generoJogo`, `plataformaJogo`, `precoJogo`, `tamanhoJogo`, `imagemJogo`, `dataJogo`) VALUES
(5, 'NFS Unbound', 'Corrida', 'Xbox Series, PS5, PC', 'R$ 199.99', '100GB', '2fefba86e1b8911b47522975b5bf19f3.jpg', '2023-11-15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbplataformajogo`
--

CREATE TABLE `tbplataformajogo` (
  `codPlataformaJogo` int(11) NOT NULL,
  `descPlataformaJogo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(50) NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `cpfUser` varchar(11) NOT NULL,
  `nascUser` date NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `passwordUser` int(30) NOT NULL,
  `imagemUser` varchar(100) NOT NULL,
  `tokenUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `sobrenomeUser`, `cpfUser`, `nascUser`, `emailUser`, `passwordUser`, `imagemUser`, `tokenUser`) VALUES
(1, 'jailson', 'santos', '111.111.111', '2023-11-09', 'ruan@admin.com', 123, '', 'c2ac106101e9b00cb89fec15f42a6bdc'),
(2, 'oi', 'santos', '544.444.444', '2023-11-11', 'oi@admin.com', 123, '', '44bc82732260b05f0cd008d4af75f535');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teladm`
--

CREATE TABLE `teladm` (
  `codTelAdm` int(11) NOT NULL,
  `numTelAdm` varchar(11) NOT NULL,
  `idAdm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadm`
--
ALTER TABLE `tbadm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices de tabela `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD PRIMARY KEY (`codCompra`);

--
-- Índices de tabela `tbformapagamento`
--
ALTER TABLE `tbformapagamento`
  ADD PRIMARY KEY (`codPagamento`),
  ADD UNIQUE KEY `UNIQUE` (`descFormaPagamento`);

--
-- Índices de tabela `tbgenerojogo`
--
ALTER TABLE `tbgenerojogo`
  ADD PRIMARY KEY (`codGeneroJogo`);

--
-- Índices de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  ADD PRIMARY KEY (`codJogo`);

--
-- Índices de tabela `tbplataformajogo`
--
ALTER TABLE `tbplataformajogo`
  ADD PRIMARY KEY (`codPlataformaJogo`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- Índices de tabela `teladm`
--
ALTER TABLE `teladm`
  ADD PRIMARY KEY (`codTelAdm`),
  ADD KEY `idAdm` (`idAdm`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadm`
--
ALTER TABLE `tbadm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `codCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbformapagamento`
--
ALTER TABLE `tbformapagamento`
  MODIFY `codPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `tbgenerojogo`
--
ALTER TABLE `tbgenerojogo`
  MODIFY `codGeneroJogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `codJogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbplataformajogo`
--
ALTER TABLE `tbplataformajogo`
  MODIFY `codPlataformaJogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `teladm`
--
ALTER TABLE `teladm`
  MODIFY `codTelAdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `teladm`
--
ALTER TABLE `teladm`
  ADD CONSTRAINT `teladm_ibfk_1` FOREIGN KEY (`idAdm`) REFERENCES `tbadm` (`idAdm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
