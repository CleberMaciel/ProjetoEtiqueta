
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/07/2015 às 11:34:42
-- Versão do Servidor: 10.0.11-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u641942045_etiqu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `etiquetas`
--

CREATE TABLE IF NOT EXISTS `etiquetas` (
  `idEtiquetas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext COLLATE utf8_unicode_ci,
  `altura` tinytext COLLATE utf8_unicode_ci,
  `largura` tinytext COLLATE utf8_unicode_ci,
  `tipoPapel` tinytext COLLATE utf8_unicode_ci,
  `idFabricantes` int(11) NOT NULL,
  PRIMARY KEY (`idEtiquetas`),
  KEY `idFabricantes` (`idFabricantes`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `etiquetas`
--

INSERT INTO `etiquetas` (`idEtiquetas`, `nome`, `altura`, `largura`, `tipoPapel`, `idFabricantes`) VALUES
(1, 'Etiqueta1', '10', '11', 'A4', 1),
(2, 'Etiqueta2', '11', '9', 'A4', 1),
(3, 'Etiqueta3', '11', '9', 'A4', 1),
(4, 'Etiqueta4', '11', '11', 'A3', 2),
(5, 'Etiqueta5', '10', '12', 'A3', 2),
(6, 'Etiqueta6', '9', '8', 'A3', 2),
(7, 'Etiqueta7', '8', '10', 'A3', 1),
(8, 'Etiqueta8', '10', '10', 'A4', 4),
(9, 'Etiqueta9', '10', '10', 'A4', 4),
(10, 'Etiqueta10', '7', '12', 'A4', 4),
(11, 'Etiqueta11', '12', '7', 'A3', 1),
(12, 'Etiqueta12', '11', '15', 'A3', 7),
(13, 'Etiqueta13', '13', '15', 'A4', 7),
(14, 'Etiqueta14', '16', '11', 'A4', 1),
(15, 'Etiqueta15', '5', '12', 'A4', 1),
(16, 'Etiqueta16', '2', '6', 'A3', 1),
(17, 'Etiqueta17', '2', '6', 'A4', 3),
(18, 'Etiqueta18', '4', '6', 'A4', 3),
(19, 'Etiqueta19', '4', '6', 'A3', 1),
(20, 'Etiqueta20', '10', '10', 'A4', 1),
(21, 'Etiqueta21', '10', '10', 'A4', 1),
(22, 'RafaECleber', '12', '12', 'A4', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE IF NOT EXISTS `fabricantes` (
  `idFabricantes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`idFabricantes`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`idFabricantes`, `nome`) VALUES
(1, 'Fabricante1'),
(2, 'Fabricante2'),
(3, 'Fabricante3'),
(4, 'Fabricante4'),
(5, 'Fabricante5'),
(6, 'Fabricante6'),
(7, 'Fabricante7'),
(8, 'Fabricante8'),
(9, 'Fabricante9'),
(10, 'Fabricante10'),
(11, 'Fabricante11'),
(12, 'Fabricante12'),
(13, 'Fabricante13'),
(14, 'Fabricante14'),
(15, 'Fabricante15'),
(16, 'CasaComigo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsers`, `nome`, `password`) VALUES
(7, 'teste-teste', '1'),
(6, 'cleber-maciel', '1234'),
(1, 'adm', 'adm'),
(8, 'usuario-usuario', '1234'),
(9, 'rafala-username', '191196'),
(10, 'rafaela-depre', 'adm'),
(11, 'fsdfsdf-fgdsfdsf', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
