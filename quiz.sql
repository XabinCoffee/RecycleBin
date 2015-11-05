-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2015 a las 17:55:41
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: 'quiz'
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'ekintzak'
--

create database quiz;
use quiz;

CREATE TABLE IF NOT EXISTS ekintzak (
  id int(11) NOT NULL,
  erabid int(11) DEFAULT NULL,
  erabiltzailea varchar(100) DEFAULT NULL,
  ekintzamota varchar(100) NOT NULL,
  ordua varchar(100) NOT NULL,
  IP varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla 'ekintzak'
--

INSERT INTO ekintzak (id, erabid, erabiltzailea, ekintzamota, ordua, IP) VALUES
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
(14, 1, 'xabin123@ikasle.ehu.es', 'Txertatu', '10:28', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'erabiltzaile'
--

CREATE TABLE IF NOT EXISTS erabiltzaile (
  Izena varchar(255) NOT NULL,
  Pasahitza varchar(255) NOT NULL,
  Eposta varchar(255) NOT NULL,
  Telefonoa varchar(255) NOT NULL,
  Espezialitatea varchar(255) NOT NULL,
  Interesak varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla 'erabiltzaile'
--

INSERT INTO erabiltzaile (Izena, Pasahitza, Eposta, Telefonoa, Espezialitatea, Interesak) VALUES
('Satelardo McFraude', 'OiAsuntoGrae', 'asuntograe420@ikasle.ehu.es', '987654321', 'I like chezz', 'I like chezz'),
('Pape', 'satela', 'dirkebab123@ikasle.ehu.es', '999888777', 'SoftwareIngeniaritza', '\r\nchez'),
('Julian Callado Monoburgos', 'kedicessatel', 'estoygraeh823@ikasle.ehu.es', '987654321', 'SoftwareIngeniaritza', 'SoftwareIngeniaritza'),
('Funciona pls', 'asdikjasoifja', 'eyboss012@ikasle.ehu.es', '987654321', 'KonputagailuIngeniaritza', 'Hello\r\n'),
('Mr Localhost', 'satelnitxok', 'grae360@ikasle.ehu.es', '987654321', 'Konputagailu', 'Konputagailu'),
('Satel McGee', 'GoikolasFarolas', 'grae362@ikasle.ehu.es', '987654321', 'Software', 'Software'),
('Pedromai', 'graeeeee', 'josepo222@ikasle.ehu.es', '987654321', 'SoftwareIngeniaritza', 'Parakaidismo'),
('Pedromai', 'sssssssssssss', 'josepo322@ikasle.ehu.es', '987654321', 'SoftwareIngeniaritza', 'Parakaidismo'),
('Paco Mprar Kebab', 'ilikechezz', 'kebab169@ikasle.ehu.es', '987654321', 'Shamwow', 'Shamwow'),
('Standing', 'OnTheEdgeeee', 'ontheedge555@ikasle.ehu.es', '987654321', 'of the craterrrrrrrrrrr', 'as the prophets once said #xe'),
('xabin', 'satela', 'xabin123@ikasle.ehu.es', '987654321', 'SoftwareIngeniaritza', 'Gaaa\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'galdera'
--

CREATE TABLE IF NOT EXISTS galdera (
  ID int(11) NOT NULL,
  galdera varchar(100) NOT NULL,
  erantzuna varchar(100) NOT NULL,
  zailtasuna int(11) DEFAULT NULL,
  posta varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla 'galdera'
--

INSERT INTO galdera (ID, galdera, erantzuna, zailtasuna, posta) VALUES
(1, 'asdasd', 'sdal', 3, 'xabin123@ikasle.ehu.es'),
(2, 'pa pedir', 'kebab', 2, 'xabin123@ikasle.ehu.es'),
(3, 'txootxue', 'piiitue', 3, 'xabin123@ikasle.ehu.es'),
(4, 'Bernard', 'satel', 2, 'xabin123@ikasle.ehu.es'),
(5, 'safkasf', 'foajksoifja', 0, 'xabin123@ikasle.ehu.es'),
(6, 'Zubimusu', 'Gravila', NULL, 'xabin123@ikasle.ehu.es'),
(7, 'sat', 'satsat', 3, 'xabin123@ikasle.ehu.es'),
(8, 'boobs', 'makina', 5, 'dirkebab123@ikasle.ehu.es'),
(9, 'Zea, harriya jasotzeko?', 'Bai', NULL, 'xabin123@ikasle.ehu.es'),
(10, 'satela', 'asdfasf', 3, 'xabin123@ikasle.ehu.es'),
(11, 'AAAAAAAAAAAAAA', 'AAAAAAAAAAAAaa', 6, 'xabin123@ikasle.ehu.es'),
(12, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAa', 'DDDDDDDDDDd', -2, 'xabin123@ikasle.ehu.es'),
(13, 'Satel al haooooooooooooooooooooo?', 'Bai', 3, 'xabin123@ikasle.ehu.es'),
(14, 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', 'ssssss', 3, 'xabin123@ikasle.ehu.es'),
(15, 'ASDASDASD', 'dddddddddddd', NULL, 'xabin123@ikasle.ehu.es'),
(16, 'Oi asunto GRAE', 'grae', 2, 'xabin123@ikasle.ehu.es'),
(17, 'ASSSSSSSSSSS', 'd', NULL, 'xabin123@ikasle.ehu.es'),
(18, 'LSOALOASFKASKF', 'aosuhfjiasjrfa', NULL, 'xabin123@ikasle.ehu.es'),
(19, 'afasf', 'okfpaosifk', 2, 'xabin123@ikasle.ehu.es'),
(20, 'sioasfasfjasofjisoafj', 'OOIJDSOJSDOIGJ', 3, 'xabin123@ikasle.ehu.es'),
(21, 'd', 'k', 2, 'xabin123@ikasle.ehu.es'),
(22, 'Pa pedir', 'kebab', 1, 'xabin123@ikasle.ehu.es'),
(23, 'graty', 'grae', 6, 'xabin123@ikasle.ehu.es'),
(24, 'ggg', 'gka', 2, 'xabin123@ikasle.ehu.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'konexioak'
--

CREATE TABLE IF NOT EXISTS konexioak (
  id int(11) NOT NULL,
  eposta varchar(100) NOT NULL,
  ordua varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla 'konexioak'
--

INSERT INTO konexioak (id, eposta, ordua) VALUES
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
(13, 'xabin123@ikasle.ehu.es', '10:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla 'ekintzak'
--
ALTER TABLE ekintzak
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla 'erabiltzaile'
--
ALTER TABLE erabiltzaile
  ADD PRIMARY KEY (Eposta);

--
-- Indices de la tabla 'galdera'
--
ALTER TABLE galdera
  ADD PRIMARY KEY (ID);

--
-- Indices de la tabla 'konexioak'
--
ALTER TABLE konexioak
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla 'ekintzak'
--
ALTER TABLE ekintzak
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla 'galdera'
--
ALTER TABLE galdera
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla 'konexioak'
--
ALTER TABLE konexioak
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
