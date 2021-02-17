-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/02/2021 às 03:28
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
  `senha_cadastro` varchar(8) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome_cadastro`, `email_cadastro`, `senha_cadastro`, `data_cadastro`) VALUES
(1, 'Nicole', 'nicole@gmail.com', '123456', '2021-02-16 20:25:12'),
(2, 'Mathias', 'mathias@gmail.com', '654321', '2021-02-16 20:25:12'),
(3, 'Nicolas', 'nicolas@outlook.com', '123', '2021-02-16 20:25:12'),
(4, 'Ana', 'ana@gmail.com', '123454', '2021-02-16 20:25:12'),
(5, 'Berg', 'corre@berg.com', '456', '2021-02-16 20:25:12'),
(7, 'Taty', 'taty@gmail.com', '789', '2021-02-16 20:25:12'),
(10, 'Thi', 'thi@gmail.com', '654', '2021-02-16 20:25:12'),
(11, 'Day', 'day@gmail.com', '012', '2021-02-16 20:25:12'),
(13, 'rafael', 'rafael@gmail.com', '789', '2021-02-16 20:25:12'),
(14, 'math', 'math@gmail.com', '987', '2021-02-16 20:25:12'),
(15, 'clovis', 'clovis@gmail.com', '123', '2021-02-16 20:25:12'),
(16, 'ingred', 'ingred@gmail.com', '123', '2021-02-16 20:25:12'),
(17, 'Angelo', 'angelo@gmail.com', '+123-', '2021-02-16 20:25:12'),
(18, 'binho', 'binho@gmail.com', '555', '2021-02-16 20:25:12'),
(19, 'Luciana', 'luciana@gmail.com', '321', '2021-02-16 20:25:12'),
(20, 'Mario', 'mario@gmail.com', '2021', '2021-02-16 20:25:12'),
(21, 'jose', 'jose@gmail.com', '369', '2021-02-16 20:25:12'),
(24, 'graca', 'graca@gmail.com', '321', '2021-02-16 20:25:12'),
(25, 'thiago', 'thiago@gmail.com', '321', '2021-02-16 20:25:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `finalizando`
--

CREATE TABLE `finalizando` (
  `cod_pedidos` int(11) NOT NULL,
  `produto_pedidos` varchar(255) NOT NULL,
  `preco_pedidos` decimal(10,2) NOT NULL,
  `quantidade_pedidos` int(100) NOT NULL,
  `subtotal_pedidos` decimal(10,2) NOT NULL,
  `total_pedidos` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `finalizando`
--

INSERT INTO `finalizando` (`cod_pedidos`, `produto_pedidos`, `preco_pedidos`, `quantidade_pedidos`, `subtotal_pedidos`, `total_pedidos`) VALUES
(2, 'Limão', '4.98', 5, '24.90', '24.90'),
(3, 'Batata_Inglesa', '4.69', 3, '14.07', '14.07'),
(4, 'Couve', '1.99', 1, '1.99', '1.99'),
(5, 'Macaxeira', '2.48', 3, '7.44', '7.44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nome_pedido` varchar(256) NOT NULL,
  `endereco_pedido` varchar(256) NOT NULL,
  `pagamento_pedido` varchar(255) NOT NULL DEFAULT 'Dinheiro',
  `data_pedidos` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nome_pedido`, `endereco_pedido`, `pagamento_pedido`, `data_pedidos`) VALUES
(1, 'Vinicius Boladão', 'Vila dos hackers', 'Débito', '2021-02-16 20:12:35'),
(2, 'Myllena Moveis e Eletro', 'Rua das Moças', 'Crédito', '2021-02-16 20:15:30'),
(3, 'Gutemberg Santos', 'Rua do Condor', 'Crédito', '2021-02-16 22:46:44'),
(4, 'Luiza', 'Canadá', 'Débito', '2021-02-16 22:47:23'),
(5, 'Cremildo', 'Rua dos cartões', 'Débito', '2021-02-17 01:56:01'),
(6, 'Diana Rafaela', 'Rua do jardim 2', 'Débito', '2021-02-17 01:58:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `image_produto` varchar(100) DEFAULT NULL,
  `setor_produto` varchar(255) NOT NULL,
  `tipo_produto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `preco_produto`, `image_produto`, `setor_produto`, `tipo_produto`) VALUES
(1, 'Abacaxi', '3.00', 'abacaxi.png', 'frutas', 'un.'),
(2, 'Banana', '3.49', 'banana.png', 'frutas', 'kg'),
(3, 'Limão', '4.98', 'limão.png', 'frutas', 'kg'),
(4, 'Maça ', '2.99', 'maça.png', 'frutas', 'kg'),
(5, 'Uva', '12.50', 'uva.png', 'frutas', 'kg'),
(6, 'Tomate ', '5.65', 'tomate.png', 'verduras', 'kg'),
(7, 'Cebola ', '6.99', 'cebola.png', 'verduras', 'kg'),
(8, 'Jerimum ', '2.88', 'jerimum.png', 'verduras', 'kg'),
(9, 'Pimentão  ', '5.59', 'pimentao.png', 'verduras', 'kg'),
(10, 'Batata_Inglesa', '4.69', 'batata.png', 'verduras', 'kg'),
(11, 'Cebolinha ', '3.65', 'cebolinha.png', 'folhagens', 'un.'),
(12, 'Alface  ', '3.68', 'alface.png', 'folhagens', 'un.'),
(13, 'Coentro ', '2.59', 'coentro.png', 'folhagens', 'un.'),
(14, 'Couve  ', '1.99', 'couve.png', 'folhagens', 'un.'),
(15, 'Repolho', '2.54', 'repolho.png', 'folhagens', 'kg'),
(16, 'Batata_Doce ', '2.86', 'batata_doce.jpg', 'raizes', 'kg'),
(17, 'Inhame ', '8.58', 'inhame.png', 'raizes', 'kg'),
(18, 'Macaxeira ', '2.48', 'macaxeira.png', 'raizes', 'kg'),
(19, 'Beterraba ', '4.19', 'beterraba.png', 'raizes', 'kg'),
(20, 'Cenoura', '3.78', 'cenoura.png', 'raizes', 'kg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_pedido`
--

CREATE TABLE `produtos_pedido` (
  `pedido_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- Índices de tabela `finalizando`
--
ALTER TABLE `finalizando`
  ADD PRIMARY KEY (`cod_pedidos`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `produtos_pedido`
--
ALTER TABLE `produtos_pedido`
  ADD UNIQUE KEY `id_produto` (`produto_id`),
  ADD UNIQUE KEY `id_pedido` (`pedido_id`) USING BTREE;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `finalizando`
--
ALTER TABLE `finalizando`
  MODIFY `cod_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
