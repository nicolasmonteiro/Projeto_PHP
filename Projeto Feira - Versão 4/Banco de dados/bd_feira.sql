-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/02/2021 às 02:57
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_feira`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(11) NOT NULL,
  `nome_cadastro` varchar(500) NOT NULL,
  `email_cadastro` varchar(256) NOT NULL,
  `senha_cadastro` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome_cadastro`, `email_cadastro`, `senha_cadastro`) VALUES
(1, 'Nicole', 'nicole@gmail.com', '123456'),
(2, 'Mathias', 'mathias@gmail.com', '654321'),
(3, 'Nicolas', 'nicolas@outlook.com', '123'),
(4, 'Ana', 'ana@gmail.com', '123454'),
(5, 'Berg', 'corre@berg.com', '456'),
(7, 'Taty', 'taty@gmail.com', '789'),
(10, 'Thi', 'thi@gmail.com', '654'),
(11, 'Day', 'day@gmail.com', '012'),
(13, 'rafael', 'rafael@gmail.com', '789'),
(14, 'math', 'math@gmail.com', '987'),
(15, 'clovis', 'clovis@gmail.com', '123'),
(16, 'ingred', 'ingred@gmail.com', '123'),
(17, 'Angelo', 'angelo@gmail.com', '+123-'),
(18, 'binho', 'binho@gmail.com', '555'),
(19, 'Luciana', 'luciana@gmail.com', '321'),
(20, 'Mario', 'mario@gmail.com', '2021'),
(21, 'jose', 'jose@gmail.com', '369');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
