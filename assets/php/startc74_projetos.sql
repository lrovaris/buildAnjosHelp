-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14-Fev-2020 às 16:16
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startc74_projetos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acess`
--

CREATE TABLE `acess` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plano` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `validade` date DEFAULT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `acess`
--

INSERT INTO `acess` (`id`, `user`, `pass`, `status`, `codigo`, `plano`, `validade`, `tipo`) VALUES
(2, '', '?DknYzgEtO11', '', NULL, '0', NULL, 0),
(3, '', '?DknYzgEtO11', '', NULL, '0', NULL, 0),
(4, '', '?DknYzgEtO11', '', NULL, '0', NULL, 0),
(5, 'email', 'passwd', '0', NULL, '0', NULL, 1),
(6, 'email', 'passwd', '0', NULL, '0', NULL, 1),
(7, 'email', 'passwd', '0', NULL, '0', NULL, 1),
(8, 'antoniocarlosmonteirosilvajr@gmail.com', '123456', '0', NULL, '0', NULL, 1),
(9, 'alessandroleguir@gmail.com', 'Analista10', '0', NULL, '0', NULL, 1),
(10, 'guilherme.fernandes52@yahoo.com.br', 'Gui1234*', '0', NULL, '0', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `controleAcess`
--

CREATE TABLE `controleAcess` (
  `id` bigint(20) NOT NULL,
  `projeto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` bigint(20) NOT NULL,
  `id_login` bigint(20) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobenome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` longblob,
  `servico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacao` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registro` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `especialidade` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curso` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experiencia` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referencias` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feed` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `id_login`, `nome`, `sobenome`, `email`, `cpf`, `fone`, `foto`, `servico`, `formacao`, `registro`, `especialidade`, `curso`, `experiencia`, `referencias`, `feed`, `tipo`) VALUES
(1, 1, '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 6, 'firstname', 'lastname', 'email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 7, 'firstname', 'lastname', 'email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 8, 'teste5', 'teste5', 'antoniocarlosmonteirosilvajr@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 9, 'Alessandro', 'Leguir Pereira', 'alessandroleguir@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 10, 'Guilherme', 'Fernandes', 'guilherme.fernandes52@yahoo.com.br', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Root', 'root@startcafe.com.br', '613bb11572951d37bd20869cf5976f9e', 1, 1, '2020-01-30 00:00:01', '2020-01-31 15:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acess`
--
ALTER TABLE `acess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controleAcess`
--
ALTER TABLE `controleAcess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acess`
--
ALTER TABLE `acess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `controleAcess`
--
ALTER TABLE `controleAcess`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
