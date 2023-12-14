-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/12/2023 às 20:27
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
-- Banco de dados: `salao_cassia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_produtos`
--

CREATE TABLE `cadastro_produtos` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_quantity` int(11) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `low_stock_alert` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_produtos`
--

INSERT INTO `cadastro_produtos` (`product_id`, `product_name`, `category`, `price`, `stock_quantity`, `supplier`, `registration_date`, `update_date`, `description`, `brand`, `barcode`, `low_stock_alert`) VALUES
(1, 'shampoo Wella', 'shampoo', 150.00, 1, 'cassia', '2023-12-14', '2023-12-14 14:21:18', 'shampoo para tratamento', 'wella', NULL, 1),
(2, 'shampoo nature', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
