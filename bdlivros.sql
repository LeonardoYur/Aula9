-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/10/2024 às 06:09
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
-- Banco de dados: `bdlivros`
--
CREATE DATABASE IF NOT EXISTS `bdlivros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdlivros`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbllivros`
--

CREATE TABLE `tbllivros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `data` varchar(10) NOT NULL,
  `ISBN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbllivros`
--

INSERT INTO `tbllivros` (`id`, `titulo`, `idioma`, `quantidade`, `editora`, `data`, `ISBN`) VALUES
(1, 'Percy', 'Inglês', 300, 'HP', '2024-10-08', 156546165),
(3, 'Harry Potter', 'Inglês', 300, 'HP', '2024-10-08', 156546165),
(4, 'Harry Potter', 'Inglês', 300, 'HP', '2024-10-08', 156546165),
(5, 'Percy', 'PT', 14314, 'JP', '2024-10-21', 2147483647);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbllivros`
--
ALTER TABLE `tbllivros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbllivros`
--
ALTER TABLE `tbllivros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
