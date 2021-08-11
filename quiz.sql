-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2021 às 15:51
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quizzycrazy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz`
--

CREATE TABLE `quiz` (
  `code` varchar(300) NOT NULL,
  `nome_autor` varchar(200) NOT NULL,
  `nome_quiz` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `pergunta1` varchar(50) NOT NULL,
  `resposta1` varchar(30) NOT NULL,
  `resposta2` varchar(30) NOT NULL,
  `resposta3` varchar(30) NOT NULL,
  `resposta4` varchar(30) NOT NULL,
  `resposta5` varchar(30) NOT NULL,
  `status1` varchar(10) NOT NULL,
  `pergunta2` varchar(50) NOT NULL,
  `resposta6` varchar(30) NOT NULL,
  `resposta7` varchar(30) NOT NULL,
  `resposta8` varchar(30) NOT NULL,
  `resposta9` varchar(30) NOT NULL,
  `resposta10` varchar(10) NOT NULL,
  `status2` varchar(10) NOT NULL,
  `pergunta3` varchar(50) NOT NULL,
  `resposta11` varchar(30) NOT NULL,
  `resposta12` varchar(30) NOT NULL,
  `resposta13` varchar(30) NOT NULL,
  `resposta14` varchar(30) NOT NULL,
  `resposta15` varchar(30) NOT NULL,
  `status3` varchar(15) NOT NULL,
  `pergunta4` varchar(50) NOT NULL,
  `resposta16` varchar(30) NOT NULL,
  `resposta17` varchar(30) NOT NULL,
  `resposta18` varchar(30) NOT NULL,
  `resposta19` varchar(30) NOT NULL,
  `resposta20` varchar(30) NOT NULL,
  `status4` varchar(10) NOT NULL,
  `pergunta5` varchar(50) NOT NULL,
  `resposta21` varchar(30) NOT NULL,
  `resposta22` varchar(30) NOT NULL,
  `resposta23` varchar(30) NOT NULL,
  `resposta24` varchar(30) NOT NULL,
  `resposta25` varchar(30) NOT NULL,
  `status5` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `nome_quiz` (`nome_quiz`),
  ADD UNIQUE KEY `code` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
