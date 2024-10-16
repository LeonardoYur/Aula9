-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/10/2024 às 06:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprodutos`
--
CREATE DATABASE IF NOT EXISTS `bdprodutos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdprodutos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblprodutos`
--

CREATE TABLE `tblprodutos` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `url` varchar(512) NOT NULL,
  `descricao` varchar(512) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblprodutos`
--

INSERT INTO `tblprodutos` (`id`, `nome`, `url`, `descricao`, `preco`) VALUES
(6, 'Moto G7', '', 'Tela Touchscreen capacitivo - Multitouch - com proteção Corning Gorilla Glass 3 Sensor Impressão digital (montada na traseira), acelerômetro, giroscópio, proximidade', 660.00),
(7, 'Sal', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAOD5l8SEYJQzCjRDOr-G5oqNoTp4RoVkijQ&s', 'Salgado', 19.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
