-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 08:16 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clientes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nacionalidad_id` int(11) unsigned NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nacionalidad_id` (`nacionalidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `apellido`, `nombre`, `fecha_nacimiento`, `nacionalidad_id`, `activo`) VALUES
(1, 'Flores', 'Montoto', '1989-03-01', 4, 0),
(2, 'Perez', 'Jose', '1988-02-14', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nacionalidades`
--

CREATE TABLE IF NOT EXISTS `nacionalidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Dumping data for table `nacionalidades`
--

INSERT INTO `nacionalidades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Afgano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(2, 'Alemán/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(3, 'Árabe', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(4, 'Argentino/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(5, 'Australiano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(6, 'Belga', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(7, 'Boliviano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(8, 'Brasilero/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(9, 'Camboyano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(10, 'Canadiense', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(11, 'Chileno/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(12, 'Chino/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(13, 'Colombiano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(14, 'Coreano/a', '2016-08-26 13:16:47', '2016-08-26 13:16:47'),
(15, 'Costarricense', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(16, 'Cubano/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(17, 'Danés/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(18, 'Ecuatoriano/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(19, 'Egipcio/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(20, 'Salvadoreño/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(21, 'Español/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(22, 'Estadounidense', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(23, 'Estonia/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(24, 'Etiope', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(25, 'Filipino/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(26, 'Francés/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(27, 'Galés/a', '2016-08-26 13:16:48', '2016-08-26 13:16:48'),
(28, 'Griego/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(29, 'Guatemalteco/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(30, 'Haitiano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(31, 'Holandés/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(32, 'Hondureño/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(33, 'Inglés/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(34, 'Israelí', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(35, 'Italiano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(36, 'Japonés/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(37, 'Mexicano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(38, 'Panameño/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(39, 'Paraguayo/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(40, 'Peruano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(41, 'Portugués/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(42, 'Dominicano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(43, 'Ruso/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(44, 'Uruguayo/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49'),
(45, 'Venezolano/a', '2016-08-26 13:16:49', '2016-08-26 13:16:49');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`nacionalidad_id`) REFERENCES `nacionalidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
