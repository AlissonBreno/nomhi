-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2019 às 14:39
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomhi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_exercicio`
--

CREATE TABLE `tbl_exercicio` (
  `Id_Exe` int(10) NOT NULL,
  `Nom_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tip_Exe` int(10) NOT NULL,
  `Des_Exe` text COLLATE utf8_unicode_ci NOT NULL,
  `ResC_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Op1_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Op2_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Op3_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Op4_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Env_Exe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_exercicio`
--

INSERT INTO `tbl_exercicio` (`Id_Exe`, `Nom_Exe`, `Tip_Exe`, `Des_Exe`, `ResC_Exe`, `Op1_Exe`, `Op2_Exe`, `Op3_Exe`, `Op4_Exe`, `Env_Exe`) VALUES
(1, 'exer1', 5, '<p>sadsadsa</p>\r\n', 'a', 'c', 'a', 'a', 'f', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_hidrocarb`
--

CREATE TABLE `tbl_hidrocarb` (
  `Id_Hidro` int(10) NOT NULL,
  `Nom_Hidro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Desc_Hidro` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_hidrocarb`
--

INSERT INTO `tbl_hidrocarb` (`Id_Hidro`, `Nom_Hidro`, `Desc_Hidro`) VALUES
(5, 'Tipo Loco', '<h2><strong><cite>:&gt;aaaa</cite></strong></h2>\r\n'),
(6, 'chorão vive em nossos corações (Skate)', '<p><strong>Os hisdrocarben&eacute;tos s&atilde;o muito legais</strong></p>\r\n\r\n<h1>os carbonetos ~soam como p&eacute;talas de rosas choronas&nbsp;</h1>\r\n\r\n<p>&eacute; isto&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>a</td>\r\n			<td>a</td>\r\n		</tr>\r\n		<tr>\r\n			<td>assdsd</td>\r\n			<td>asdasd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>asdsadadadsadsad</td>\r\n			<td>dasda</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>flw<img alt=\"\" src=\"a\" /></p>\r\n'),
(7, 'Primeiro tipo de Usuário', '<p>Esse usu&aacute;rio &eacute; muito sapequinha&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `Id_TUsu` int(10) NOT NULL,
  `Nom_TUsu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Desc_TUsu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`Id_TUsu`, `Nom_TUsu`, `Desc_TUsu`) VALUES
(3, '123131241231', '<p>asdadsa</p>\r\n'),
(5, 'oto', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `Id_Usu` int(10) NOT NULL,
  `Nom_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `End_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cpf_Usu` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Rg_Usu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ema_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sen_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tip_Usu` int(10) NOT NULL,
  `Pon_Usu` int(10) NOT NULL,
  `Sob_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`Id_Usu`, `Nom_Usu`, `End_Usu`, `Cpf_Usu`, `Rg_Usu`, `Ema_Usu`, `Sen_Usu`, `Tel_Usu`, `Tip_Usu`, `Pon_Usu`, `Sob_Usu`) VALUES
(3, 'NILSA', 'Rua Joaquim Virgílio De Macedo, Apto', 'sadsdasd', 'dadasdsada', 'eronblackb1@gmail.com', 'ifsuldeminas', '3599940750', 5, 0, 'GOULART');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_exercicio`
--
ALTER TABLE `tbl_exercicio`
  ADD PRIMARY KEY (`Id_Exe`);

--
-- Indexes for table `tbl_hidrocarb`
--
ALTER TABLE `tbl_hidrocarb`
  ADD PRIMARY KEY (`Id_Hidro`);

--
-- Indexes for table `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`Id_TUsu`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`Id_Usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_exercicio`
--
ALTER TABLE `tbl_exercicio`
  MODIFY `Id_Exe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hidrocarb`
--
ALTER TABLE `tbl_hidrocarb`
  MODIFY `Id_Hidro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  MODIFY `Id_TUsu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `Id_Usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
