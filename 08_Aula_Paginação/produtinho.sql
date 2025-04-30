-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30/04/2025 às 10:35
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtinho`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `ID_PRODUTO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(45) DEFAULT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL,
  `ID_AREA` int DEFAULT NULL,
  `PRECO_UNI` double DEFAULT NULL,
  `MOEDA` varchar(3) DEFAULT NULL,
  `PAIS_ORIGEM` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_PRODUTO`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`ID_PRODUTO`, `NOME`, `DESCRICAO`, `ID_AREA`, `PRECO_UNI`, `MOEDA`, `PAIS_ORIGEM`) VALUES
(1, 'Notebook', 'Notebook 2', 1, 3000, 'R$', 'China'),
(2, 'Notebook', 'Notebook 3', 1, 3000, 'R$', 'China'),
(3, 'Notebook', 'Notebook 4', 1, 3000, 'R$', 'China'),
(4, 'Notebook', 'Notebook 5', 1, 3000, 'R$', 'China'),
(5, 'Notebook', 'Notebook 6', 1, 3000, 'R$', 'China'),
(6, 'Notebook', 'Notebook 7', 1, 3000, 'R$', 'China'),
(7, 'Notebook', 'Notebook 8', 1, 3000, 'R$', 'China'),
(8, 'Notebook', 'Notebook 9', 1, 3000, 'R$', 'China'),
(9, 'Notebook', 'Notebook 10', 1, 3000, 'R$', 'China'),
(10, 'Notebook', 'Notebook 11', 1, 3000, 'R$', 'China'),
(11, 'Notebook', 'Notebook 12', 1, 3000, 'R$', 'China'),
(12, 'Notebook', 'Notebook 13', 1, 3000, 'R$', 'China'),
(13, 'Notebook', 'Notebook 14', 1, 3000, 'R$', 'China'),
(14, 'Notebook', 'Notebook 15', 1, 3000, 'R$', 'China'),
(15, 'Notebook', 'Notebook 16', 1, 3000, 'R$', 'China'),
(16, 'Notebook', 'Notebook 17', 1, 3000, 'R$', 'China'),
(17, 'Notebook', 'Notebook 18', 1, 3000, 'R$', 'China'),
(18, 'Notebook', 'Notebook 19', 1, 3000, 'R$', 'China'),
(19, 'Notebook', 'Notebook 20', 1, 3000, 'R$', 'China');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
