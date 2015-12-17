-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2015 a las 12:17:20
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ekintzak`
--

CREATE TABLE IF NOT EXISTS `ekintzak` (
  `id` int(11) NOT NULL,
  `erabid` int(11) DEFAULT NULL,
  `erabiltzailea` varchar(100) DEFAULT NULL,
  `ekintzamota` varchar(100) NOT NULL,
  `ordua` varchar(100) NOT NULL,
  `IP` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ekintzak`
--

INSERT INTO `ekintzak` (`id`, `erabid`, `erabiltzailea`, `ekintzamota`, `ordua`, `IP`) VALUES
(1, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '20:36', '::1'),
(2, NULL, NULL, 'Bistaratu', '14:31', '::1'),
(3, NULL, NULL, 'Bistaratu', '14:31', '::1'),
(4, NULL, NULL, 'Bistaratu', '14:32', '::1'),
(5, NULL, NULL, 'Bistaratu', '14:32', '::1'),
(6, NULL, NULL, 'Bistaratu', '14:33', '::1'),
(7, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '14:35', '::1'),
(8, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '14:37', '::1'),
(9, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:12', '::1'),
(10, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:14', '::1'),
(11, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:16', '::1'),
(12, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:27', '::1'),
(13, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:28', '::1'),
(14, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:28', '::1'),
(15, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '18:17', '::1'),
(16, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '18:19', '::1'),
(17, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '22:03', '::1'),
(18, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '22:10', '::1'),
(19, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:53', '::1'),
(20, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '09:37', '::1'),
(21, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '09:37', '::1'),
(22, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '14:30', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaile`
--

CREATE TABLE IF NOT EXISTS `erabiltzaile` (
  `Izena` varchar(255) NOT NULL,
  `Pasahitza` varchar(255) NOT NULL,
  `Eposta` varchar(255) NOT NULL,
  `Telefonoa` varchar(255) NOT NULL,
  `Espezialitatea` varchar(255) NOT NULL,
  `Interesak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `erabiltzaile`
--

INSERT INTO `erabiltzaile` (`Izena`, `Pasahitza`, `Eposta`, `Telefonoa`, `Espezialitatea`, `Interesak`) VALUES
('Pascal', '$2a$10$2X.fmvq3fCrHDnHTk74MVOA4TMNNxNG8pYwJm9oK.hVOK0LlfWmiG', 'web000@ehu.es', '987654321', 'Irakasleria', 'Kakahueteak\r\n'),
('Xabin', '$2a$10$/2C8Dyc7XssjQrmnCEYM1O8d0GZfNGECqdRdBnSEAXy3DrEz6EMme', 'xrodriguez012@ikasle.ehu.eus', '987654321', 'SoftwareIngeniaritza', 'Bai\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galdera`
--

CREATE TABLE IF NOT EXISTS `galdera` (
  `ID` int(11) NOT NULL,
  `galdera` varchar(100) NOT NULL,
  `erantzuna` varchar(100) NOT NULL,
  `zailtasuna` int(11) DEFAULT NULL,
  `posta` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galdera`
--

INSERT INTO `galdera` (`ID`, `galdera`, `erantzuna`, `zailtasuna`, `posta`) VALUES
(1, 'asdasd', 'sdal', 3, 'xabin123@ikasle.ehu.es'),
(2, 'pa pedir', 'kebab', 2, 'xabin123@ikasle.ehu.es'),
(3, 'Gozo', 'Grae', 3, 'xabin123@ikasle.ehu.es'),
(4, 'Bernard', 'satel', 2, 'xabin123@ikasle.ehu.es'),
(5, 'safkasf', 'foajksoifja', 0, 'xabin123@ikasle.ehu.es'),
(6, 'Zubimusu', 'Gravila', NULL, 'xabin123@ikasle.ehu.es'),
(7, 'Xabiren azan tamaÃ±a', 'Bai', 5, 'xabin123@ikasle.ehu.es'),
(8, 'Pizza zemouzkua do?', 'Earra', 5, 'xabin123@ikasle.ehu.es'),
(9, 'Kode hau zemouzkua da?', 'gozua', 2, 'xabin123@ikasle.ehu.es'),
(10, 'Antartikan ba da hartz zuririk?', 'Ez', 1, 'xabin123@ikasle.ehu.es'),
(11, 'nola da xabiÃ±en lehengusua?', 'aitor', 5, 'xrodriguez012@ikasle.ehu.eus');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `konexioak`
--

CREATE TABLE IF NOT EXISTS `konexioak` (
  `id` int(11) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `ordua` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `konexioak`
--

INSERT INTO `konexioak` (`id`, `eposta`, `ordua`) VALUES
(1, 'xabin123@ikasle.ehu.es', 'Array'),
(2, 'xabin123@ikasle.ehu.es', '19:42'),
(3, 'xabin123@ikasle.ehu.es', '20:17'),
(4, 'xabin123@ikasle.ehu.es', '20:17'),
(5, 'xabin123@ikasle.ehu.es', '20:18'),
(6, 'xabin123@ikasle.ehu.es', '20:18'),
(7, 'xabin123@ikasle.ehu.es', '20:20'),
(8, 'xabin123@ikasle.ehu.es', '20:21'),
(9, 'xabin123@ikasle.ehu.es', '20:22'),
(10, 'xabin123@ikasle.ehu.es', '20:31'),
(11, 'xabin123@ikasle.ehu.es', '20:42'),
(12, 'xabin123@ikasle.ehu.es', '14:35'),
(13, 'xabin123@ikasle.ehu.es', '10:12'),
(14, 'xabin123@ikasle.ehu.es', '18:15'),
(15, 'xabin123@ikasle.ehu.es', '18:17'),
(16, 'xabin123@ikasle.ehu.es', '18:19'),
(17, 'xabin123@ikasle.ehu.es', '22:03'),
(18, 'xabin123@ikasle.ehu.es', '10:53'),
(19, 'xabin123@ikasle.ehu.es', '09:36'),
(20, 'xabin123@ikasle.ehu.es', '14:29'),
(21, 'xabin123@ikasle.ehu.es', '16:40'),
(22, 'xabin123@ikasle.ehu.es', '17:04'),
(23, 'xabin123@ikasle.ehu.es', '17:05'),
(24, 'xabin123@ikasle.ehu.es', '10:42'),
(25, 'web000@ehu.es', '11:18'),
(26, 'web000@ehu.es', '11:18'),
(27, 'xabin123@ikasle.ehu.es', '12:25'),
(28, 'web000@ehu.es', '12:25'),
(29, 'web000@ehu.es', '13:46'),
(30, 'web000@ehu.es', '13:46'),
(31, 'xabin123@ikasle.ehu.es', '13:37'),
(32, 'xabin123@ikasle.ehu.es', '13:38'),
(33, 'xabin123@ikasle.ehu.es', '13:40'),
(34, 'xabin123@ikasle.ehu.es', '13:41'),
(35, 'web000@ehu.es', '13:45'),
(36, 'xabin123@ikasle.ehu.es', '15:35'),
(37, 'xabin123@ikasle.ehu.es', '15:44'),
(38, 'xabin123@ikasle.ehu.es', '15:47'),
(39, 'xabin123@ikasle.ehu.es', '15:49'),
(40, 'xabin123@ikasle.ehu.es', '16:26'),
(41, 'xabin123@ikasle.ehu.es', '12:35'),
(42, 'web000@ehu.es', '12:36'),
(43, 'xabin123@ikasle.ehu.es', '12:41'),
(44, 'web000@ehu.es', '12:45'),
(45, 'xabin123@ikasle.ehu.es', '15:45'),
(46, 'xabin123@ikasle.ehu.es', '10:56'),
(47, 'web000@ehu.es', '10:56'),
(48, 'xabin123@ikasle.ehu.es', '11:27'),
(49, 'xabin123@ikasle.ehu.es', '12:19'),
(50, 'xabin123@ikasle.ehu.es', '12:27'),
(51, 'xabin123@ikasle.ehu.es', '21:14'),
(52, 'web000@ehu.es', '21:15'),
(53, 'web000@ehu.es', '21:36'),
(54, 'xabin123@ikasle.ehu.es', '21:43'),
(55, 'xabin123@ikasle.ehu.es', '21:46'),
(56, 'web000@ehu.es', '21:50'),
(57, 'xabin123@ikasle.ehu.es', '18:30'),
(58, 'web000@ehu.es', '18:32'),
(59, 'xabin123@ikasle.ehu.es', '18:33'),
(60, 'web000@ehu.es', '18:33'),
(61, 'xrodriguez012@ikasle.ehu.eus', '17:03'),
(62, 'xrodriguez012@ikasle.ehu.eus', '17:07'),
(63, 'web000@ehu.es', '17:11'),
(64, 'web000@ehu.es', '17:33'),
(65, 'xrodriguez012@ikasle.ehu.eus', '17:54'),
(66, 'web000@ehu.es', '17:55'),
(67, 'xrodriguez012@ikasle.ehu.eus', '10:52'),
(68, 'xrodriguez012@ikasle.ehu.eus', '10:55'),
(69, 'xrodriguez012@ikasle.ehu.eus', '10:56'),
(70, 'web000@ehu.es', '10:57'),
(71, 'xrodriguez012@ikasle.ehu.eus', '10:58'),
(72, 'xrodriguez012@ikasle.ehu.eus', '13:11'),
(73, 'web000@ehu.es', '13:18'),
(74, 'xrodriguez012@ikasle.ehu.eus', '13:19'),
(75, 'xrodriguez012@ikasle.ehu.eus', '13:20'),
(76, 'xrodriguez012@ikasle.ehu.eus', '13:22'),
(77, 'xrodriguez012@ikasle.ehu.eus', '17:03'),
(78, 'xrodriguez012@ikasle.ehu.eus', '09:30'),
(79, 'xrodriguez012@ikasle.ehu.eus', '09:31'),
(80, 'web000@ehu.es', '13:29'),
(81, 'xrodriguez012@ikasle.ehu.eus', '17:34'),
(82, 'web000@ehu.es', '09:14'),
(83, 'xrodriguez012@ikasle.ehu.eus', '11:23'),
(84, 'xrodriguez012@ikasle.ehu.eus', '11:24'),
(85, 'web000@ehu.es', '11:24'),
(86, 'xrodriguez012@ikasle.ehu.eus', '09:15'),
(87, 'web000@ehu.es', '09:15'),
(88, 'web000@ehu.es', '11:04'),
(89, 'web000@ehu.es', '11:12'),
(90, 'web000@ehu.es', '11:22'),
(91, 'xrodriguez012@ikasle.ehu.eus', '12:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ekintzak`
--
ALTER TABLE `ekintzak`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `erabiltzaile`
--
ALTER TABLE `erabiltzaile`
  ADD PRIMARY KEY (`Eposta`);

--
-- Indices de la tabla `galdera`
--
ALTER TABLE `galdera`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ekintzak`
--
ALTER TABLE `ekintzak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `galdera`
--
ALTER TABLE `galdera`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
