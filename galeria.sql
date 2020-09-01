-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 01, 2020 at 03:34 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `argentina`
--

DROP TABLE IF EXISTS `argentina`;
CREATE TABLE IF NOT EXISTS `argentina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `argentina`
--

INSERT INTO `argentina` (`id`, `titulo`, `imagen`) VALUES
(1, 'Que lindo pais!', 0x6d656d655f36312e6a7067),
(2, 'C pico!', 0x6d656d655f36302e6a7067),
(3, 'Solo en argentina', 0x6d656d655f35342e6a7067),
(4, 'Increible!', 0x6d656d655f35332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `autos`
--

INSERT INTO `autos` (`id`, `titulo`, `imagen`) VALUES
(1, 'Cars', 0x6d656d655f35302e6a7067),
(2, 'Cars', 0x6d656d655f35312e6a7067),
(3, 'Cars', 0x6d656d655f35322e6a7067),
(4, 'Titulo generico', 0x6d656d655f37392e6a7067),
(5, 'Titulo generico', 0x6d656d655f38302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `gif`
--

DROP TABLE IF EXISTS `gif`;
CREATE TABLE IF NOT EXISTS `gif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `gif`
--

INSERT INTO `gif` (`id`, `titulo`, `imagen`) VALUES
(13, 'Mementiste', 0x67697068795f322e676966),
(12, 'Mementiste', 0x67697068795f312e676966),
(11, 'Mementiste', 0x67697068792e676966),
(14, 'Mementiste', 0x67697068795f332e676966),
(15, 'Mementiste', 0x67697068795f342e676966);

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=569 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id`, `titulo`, `imagen`) VALUES
(568, 'No tan grande', 0x696d616765732e6a7067),
(567, 'meme_4', 0x6d656d655f38332e6a7067),
(566, 'meme_4', 0x6d656d655f38322e6a7067),
(565, 'meme_4', 0x6d656d655f38312e6a7067),
(564, 'meme_4', 0x6d656d655f38302e6a7067),
(563, 'meme_4', 0x6d656d655f37392e6a7067),
(562, 'meme_4', 0x6d656d655f37382e6a7067),
(561, 'meme_4', 0x6d656d655f37372e6a7067),
(560, 'meme_4', 0x6d656d655f37362e6a7067),
(559, 'meme_4', 0x6d656d655f37352e6a7067),
(558, 'meme_4', 0x6d656d655f37342e6a7067),
(557, 'meme_4', 0x6d656d655f37332e6a7067),
(556, 'meme_4', 0x6d656d655f37322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `negro`
--

DROP TABLE IF EXISTS `negro`;
CREATE TABLE IF NOT EXISTS `negro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `negro`
--

INSERT INTO `negro` (`id`, `titulo`, `imagen`) VALUES
(1, 'Mementiste', 0x6d656d655f34392e6a706567),
(2, 'Marge atrevida!', 0x6d656d655f35362e6a7067),
(3, 'Covid-19 Triunfando!', 0x6d656d655f34312e6a7067),
(4, 'Tipico', 0x6d656d655f37352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `politica`
--

DROP TABLE IF EXISTS `politica`;
CREATE TABLE IF NOT EXISTS `politica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `politica`
--

INSERT INTO `politica` (`id`, `titulo`, `imagen`) VALUES
(1, 'Que manera rara de abrir el paquete!!', 0x6d656d655f35372e6a7067),
(2, 'Liberales, siempre un paso adelante', 0x6d656d655f35382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `video` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `video`) VALUES
(1, 'D14 ', 0x443134415f4954425f312e6d7034);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
