-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2016 at 07:45 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TRIVIAL4ALL`
--

-- --------------------------------------------------------

--
-- Table structure for table `PREGUNTAS`
--

CREATE TABLE IF NOT EXISTS `PREGUNTAS` (
  `ID` int(11) NOT NULL,
  `ENUNCIADO` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `R1` varchar(155) CHARACTER SET latin1 DEFAULT NULL,
  `R2` varchar(155) CHARACTER SET latin1 DEFAULT NULL,
  `R3` varchar(155) CHARACTER SET latin1 DEFAULT NULL,
  `R4` varchar(155) CHARACTER SET latin1 DEFAULT NULL,
  `RCORRECTA` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `SORDO` tinyint(1) DEFAULT NULL,
  `CIEGO` tinyint(1) DEFAULT NULL,
  `MANCO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `PREGUNTAS`
--

INSERT INTO `PREGUNTAS` (`ID`, `ENUNCIADO`, `R1`, `R2`, `R3`, `R4`, `RCORRECTA`, `SORDO`, `CIEGO`, `MANCO`) VALUES
(1, '(Leyes de Newton) Segunda ley: Fuerza = masa x .................', 'aceleracion', 'velocidad', 'gravedad', 'electricidad', 'a', 0, 0, 0),
(2, 'Masa por velocidad al cuadrado, dividido por el radio.¿Qué fuerza se calcula con esta fórmula?', 'perpendicular', 'base', 'cetrifuga', 'cetripeta', 'd', 0, 0, 0),
(3, '¿A cuántas calorías equivale una Kcal (kilocaloría)?', '1000', '50', '9000', '666', 'a', 0, 0, 0),
(4, '¿A cuántos grados Celsius hierve el agua?', '5', '-323', '100', '1', 'c', 0, 0, 0),
(5, '¿A cuántos grados Celsius hierve el alcohol?', '323', '100', '68', '78', 'd', 0, 0, 0),
(6, '¿A cuántos grados centígrados equivalen -40 ºF?', '-40', '50', '20', '150', 'a', 0, 0, 0),
(7, '¿A cuántos milibares equivale 1 atmósfera de presión?', '222', '59', '1033', '100', 'c', 0, 0, 0),
(8, '¿A cuántos milímetros de mercurio equivalen 101.325 pascales?', '760', '50', '666', '33', 'a', 0, 0, 0),
(9, '¿A cuántos grados da lo mismo indicar la temperatura en grados Fahrenheit que en Celsius?', '10', '-40', '33', '232', 'b', 0, 0, 0),
(10, '¿A cuántos grados está el nitrógeno en su punto de fusión?', '43', '66', '25', '-210', 'd', 0, 0, 0),
(11, '!(true)', 'false', '43', 'chocolate', 'ninguna de las anteriores', 'a', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `RESPUESTAS`
--

CREATE TABLE IF NOT EXISTS `RESPUESTAS` (
  `ID` int(100) DEFAULT NULL,
  `DISCAPACIDAD` varchar(10) DEFAULT NULL,
  `RESPUESTA` char(2) DEFAULT NULL,
  `HORA` timestamp(1) NOT NULL DEFAULT CURRENT_TIMESTAMP(1) ON UPDATE CURRENT_TIMESTAMP(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RESPUESTAS`
--

INSERT INTO `RESPUESTAS` (`ID`, `DISCAPACIDAD`, `RESPUESTA`, `HORA`) VALUES
(4, '', 'A', '0000-00-00 00:00:00.0'),
(8, '', 'A', '0000-00-00 00:00:00.0'),
(2, '', 'A', '0000-00-00 00:00:00.0'),
(2, '', 'A', '0000-00-00 00:00:00.0'),
(7, '', 'A', '0000-00-00 00:00:00.0'),
(11, '', 'A', '0000-00-00 00:00:00.0'),
(3, '', 'A', '0000-00-00 00:00:00.0'),
(2, '', 'A', '0000-00-00 00:00:00.0'),
(5, '', 'A', '0000-00-00 00:00:00.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PREGUNTAS`
--
ALTER TABLE `PREGUNTAS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PREGUNTAS`
--
ALTER TABLE `PREGUNTAS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
