-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 28-Nov-2013 às 00:19
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `epiz_24982815_n3tworkbet4`
--
CREATE DATABASE IF NOT EXISTS `epiz_24982815_n3tworkbet4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_24982815_n3tworkbet4`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `campo1bd` varchar(100) DEFAULT NULL,
  `campo2bd` varchar(100) DEFAULT NULL,
  `campo3bd` varchar(100) DEFAULT NULL,
  `campo4bd` varchar(100) DEFAULT NULL,
  `campo5bd` varchar(100) DEFAULT NULL,
  `campo6bd` varchar(100) DEFAULT NULL,
  `campo7bd` varchar(100) DEFAULT NULL,
  `campo8bd` varchar(100) DEFAULT NULL,
  `campo9bd` varchar(100) DEFAULT NULL,
  `campo10bd` varchar(100) DEFAULT NULL,
  `campo11bd` varchar(100) DEFAULT NULL,
  `campo12bd` varchar(100) DEFAULT NULL,
  `campo13bd` varchar(100) DEFAULT NULL,
  `campo14bd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;