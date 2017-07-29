-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 31-Maio-2017 às 10:16
-- Versão do servidor: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codigniter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teCliente`
--

CREATE TABLE `teCliente` (
  `idCliente` int(11) NOT NULL,
  `cpNomeCliente` varchar(255) NOT NULL,
  `cpTelefone` varchar(20) NOT NULL,
  `cpEmail` varchar(255) DEFAULT NULL,
  `cpCep` varchar(20) NOT NULL,
  `cpRua` varchar(255) NOT NULL,
  `cpBairro` varchar(255) NOT NULL,
  `cpCidade` varchar(255) NOT NULL,
  `cpEstado` char(2) NOT NULL,
  `cpObservacao` text,
  `cpRgCliente` varchar(15) NOT NULL,
  `cpOrgaoExpedidorRgCliente` varchar(10) NOT NULL,
  `cpSobreNomeCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teCliente`
--

INSERT INTO `teCliente` (`idCliente`, `cpNomeCliente`, `cpTelefone`, `cpEmail`, `cpCep`, `cpRua`, `cpBairro`, `cpCidade`, `cpEstado`, `cpObservacao`, `cpRgCliente`, `cpOrgaoExpedidorRgCliente`, `cpSobreNomeCliente`) VALUES
(4, 'Fabio', ' (31)99180-3131', 'fsomerlat@gmail.com', '32241150', 'Rua Pégaso', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '', '', '', ''),
(5, 'Amanda', '(31) 8668-0664', 'amanda@gmail.com', '32241-150', 'Rua Pégaso', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teProfissional`
--

CREATE TABLE `teProfissional` (
  `idProfissional` int(11) NOT NULL,
  `cpNomeProfissional` varchar(255) NOT NULL,
  `cpCepProfissional` varchar(15) NOT NULL,
  `cpRuaProfissional` varchar(2555) NOT NULL,
  `cpBairroProfissional` varchar(255) NOT NULL,
  `cpCidadeProfissional` varchar(255) NOT NULL,
  `cpEstadoProfissional` char(2) NOT NULL,
  `cpTelefoneProfissional` varchar(20) NOT NULL,
  `cpEmailProfissional` varchar(255) NOT NULL,
  `cpObservacaoProfissional` text NOT NULL,
  `cpDataEntrada` varchar(20) NOT NULL,
  `cpDataSaida` int(11) DEFAULT NULL,
  `cpEspecilidadeProfissional` varchar(100) NOT NULL,
  `cpSobreNomeProfissional` varchar(100) NOT NULL,
  `cpRgProfissional` varchar(10) NOT NULL,
  `cpOrgaoExpedidorRgProfissional` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teProfissional`
--

INSERT INTO `teProfissional` (`idProfissional`, `cpNomeProfissional`, `cpCepProfissional`, `cpRuaProfissional`, `cpBairroProfissional`, `cpCidadeProfissional`, `cpEstadoProfissional`, `cpTelefoneProfissional`, `cpEmailProfissional`, `cpObservacaoProfissional`, `cpDataEntrada`, `cpDataSaida`, `cpEspecilidadeProfissional`, `cpSobreNomeProfissional`, `cpRgProfissional`, `cpOrgaoExpedidorRgProfissional`) VALUES
(3, 'Juliana', '32241-150', 'Rua Pégaso', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '(32) 8668-0652', 'julianavilelamendes@gmail.com', 'Administradora', 'America/Sao_Paulo', NULL, '', '', '', ''),
(5, 'Fabio', '32241-150', 'Rua Pégaso', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '(31) 9180-3131', 'fsomerlat@gmail.com', 'Desenvolvedor de sistemas', '14/05/2017 22:32:51', NULL, '', '', '', ''),
(6, 'Amanda', '32241-150', 'Rua Pégaso', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '(31) 8668-0664', 'amanda@gmail.com', 'Nutricionista', '14/05/2017 22:33:27', NULL, '', '', '', ''),
(7, 'Jonatas', '32241-360', 'Rua Libra', 'Jardim Riacho das Pedras', 'Contagem', 'MG', '(31) 3665-6565', 'jonatas@gmail.com', 'Dentista', '14/05/2017 22:34:16', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teServico`
--

CREATE TABLE `teServico` (
  `idServico` int(11) NOT NULL,
  `cpNomeServico` varchar(255) NOT NULL,
  `cpValorServico` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teServico`
--

INSERT INTO `teServico` (`idServico`, `cpNomeServico`, `cpValorServico`) VALUES
(1, 'Corte masculio', 15),
(16, 'Prancha', 12.13),
(18, 'Escova', 205),
(19, 'Progressiva ', 100),
(21, 'Hidratação', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tsUsuario`
--

CREATE TABLE `tsUsuario` (
  `idUsuario` int(11) NOT NULL,
  `cpNome` varchar(255) NOT NULL,
  `cpSenha` varchar(60) NOT NULL,
  `cpStatus` char(1) NOT NULL DEFAULT 'A',
  `cpNivelAcesso` char(1) NOT NULL DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tsUsuario`
--

INSERT INTO `tsUsuario` (`idUsuario`, `cpNome`, `cpSenha`, `cpStatus`, `cpNivelAcesso`) VALUES
(190, 'Amanda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'B', 'S'),
(194, 'Fabio', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'A', 'A'),
(195, 'Juliana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'A', 'S'),
(196, 'Leo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'A', 'C'),
(197, 'Carla', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'A', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tuAgenda`
--

CREATE TABLE `tuAgenda` (
  `idAgenda` int(11) NOT NULL,
  `teCliente_idCliente` int(11) NOT NULL,
  `cpClienteNaoCadastrado` varchar(255) DEFAULT NULL,
  `teServico_idServico` int(11) NOT NULL,
  `cpDataAgendamento` varchar(15) NOT NULL,
  `cpHoraAgendamento` varchar(5) NOT NULL,
  `cpObservacao` text,
  `cpDataCancelamento` varchar(20) DEFAULT NULL,
  `cpObservacaoAgenda` varchar(45) DEFAULT NULL,
  `teProfissional_idProfissional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tuAgenda`
--

INSERT INTO `tuAgenda` (`idAgenda`, `teCliente_idCliente`, `cpClienteNaoCadastrado`, `teServico_idServico`, `cpDataAgendamento`, `cpHoraAgendamento`, `cpObservacao`, `cpDataCancelamento`, `cpObservacaoAgenda`, `teProfissional_idProfissional`) VALUES
(1, 5, 'NULL', 1, '31/05/2017', '23:23', NULL, NULL, '', 6),
(2, 0, 'Fabio', 1, '31/05/2017', '23:23', NULL, NULL, 'Com shampo', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teCliente`
--
ALTER TABLE `teCliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `teProfissional`
--
ALTER TABLE `teProfissional`
  ADD PRIMARY KEY (`idProfissional`);

--
-- Indexes for table `teServico`
--
ALTER TABLE `teServico`
  ADD PRIMARY KEY (`idServico`);

--
-- Indexes for table `tsUsuario`
--
ALTER TABLE `tsUsuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `tuAgenda`
--
ALTER TABLE `tuAgenda`
  ADD PRIMARY KEY (`idAgenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teCliente`
--
ALTER TABLE `teCliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teProfissional`
--
ALTER TABLE `teProfissional`
  MODIFY `idProfissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teServico`
--
ALTER TABLE `teServico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tsUsuario`
--
ALTER TABLE `tsUsuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `tuAgenda`
--
ALTER TABLE `tuAgenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
