-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2019 a las 17:34:09
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fabrica_simplon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fk_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre`, `fk_pais`) VALUES
(1, 'A Coruña', 54),
(2, 'Albacete', 54),
(3, 'Alcalá de Henares', 54),
(4, 'Alcobendas', 54),
(5, 'Alcorcón', 54),
(6, 'Algeciras', 54),
(7, 'Alicante', 54),
(8, 'Almería', 54),
(9, 'Badajoz', 54),
(10, 'Badalona', 54),
(11, 'Barcelona', 54),
(12, 'Bilbao', 54),
(13, 'Burgos', 54),
(14, 'Cádez', 54),
(15, 'Cartagena', 54),
(16, 'Castellón de la Plana', 54),
(17, 'Córdoba', 54),
(18, 'San Sebastián', 54),
(19, 'Dos Hermanas', 54),
(20, 'Elche', 54),
(21, 'Fuenlabrada', 54),
(22, 'Getafe', 54),
(23, 'Gijón', 54),
(24, 'Granada', 54),
(25, 'Huelva', 54),
(26, 'Jaen', 54),
(27, 'Jerez de la Frontera', 54),
(28, 'Las Palmas de Gran Canaria', 54),
(29, 'Leganés', 54),
(30, 'León', 54),
(31, 'Lleida', 54),
(32, 'Hospitalet de Llobregat', 54),
(33, 'Logroño', 54),
(34, 'Madrid', 54),
(35, 'Málaga', 54),
(36, 'Marbella', 54),
(37, 'Mataró', 54),
(38, 'Móstole', 54),
(39, 'Murcia', 54),
(40, 'Ourense', 54),
(41, 'Oviedo', 54),
(42, 'Palma', 54),
(43, 'Pamplona', 54),
(44, 'Parla', 54),
(45, 'Reus', 54),
(46, 'Sabadell', 54),
(47, 'Salamanca', 54),
(48, 'S. Cristobal de la Laguna', 54),
(49, 'S. Coloma de Gramenet', 54),
(50, 'Santa Cruz de Tenerife', 54),
(51, 'Santander', 54),
(52, 'Sevilla', 54),
(53, 'Tarragona', 54),
(54, 'Terrasa', 54),
(55, 'Torrejón de Ardoz', 54),
(56, 'Valencia', 54),
(57, 'Valladolid', 54),
(58, 'Vigo', 54),
(59, 'Citoria-Gasteiz', 54),
(60, 'Zaragoza', 54),
(61, 'Kabul', 1),
(62, 'Tirana', 2),
(63, 'Berlín', 3),
(64, 'Andorra la Bella', 4),
(65, 'Luanda', 5),
(66, 'Argél', 7),
(67, 'Buenos Aires', 8),
(68, 'Ereván', 9),
(69, 'Bakú', 10),
(70, 'Nassau', 13),
(71, 'Viena', 11),
(72, 'Daca', 14),
(73, 'Bridgetown', 15),
(74, 'Bruselas', 16),
(75, 'Belmopán', 17),
(76, 'Porto-Novo', 18),
(77, 'Minsk', 19),
(78, 'La Paz', 20),
(79, 'Sarajevo', 21),
(80, 'Gaberones', 22),
(81, 'Brasilia', 23),
(82, 'Bandar Seri Begawan', 24),
(83, 'Sofía', 25),
(84, 'Uagadugú', 26),
(85, 'Buyumbura', 27),
(86, 'Timbu', 28),
(87, 'Praia', 29),
(88, 'Pnon Pehn', 30),
(89, 'Yaunde', 31),
(90, 'Ottawa', 32),
(91, 'Yamena', 33),
(92, 'Praga', 34),
(93, 'Santiago de Chile', 35),
(94, 'Pekín', 36),
(95, 'Bogotá', 37),
(96, 'Moroni', 38),
(97, 'Pyongyang', 40),
(98, 'Seul', 41),
(99, 'Yamusukro', 42),
(100, 'San José', 43),
(101, 'La Habana', 45),
(102, 'Compenhague', 47),
(103, 'Quito', 48),
(104, 'El Cairo', 49),
(105, 'San Salvador', 50),
(106, 'Bratislava', 52),
(107, 'Washington', 55),
(108, 'Tallín', 56),
(109, 'Adís Abeba', 57),
(110, 'Suva', 58),
(111, 'Manila', 59),
(112, 'Helsinki', 60),
(113, 'París', 61),
(114, 'Libreville', 62),
(115, 'Banjul', 64),
(116, 'Tiflis', 65),
(117, 'Accra', 66),
(118, 'Saint George´s', 67),
(119, 'Atenas', 68),
(120, 'Ciudad de Guatemala', 70),
(121, 'Conakry', 71),
(122, 'Bissau', 72),
(123, 'Malabo', 73),
(124, 'Georgetown', 74),
(125, 'Puerto Príncipe', 75),
(126, 'Tegucigalpa', 77),
(127, 'Budapest', 78),
(128, 'Nueva Delhi', 79),
(129, 'Yakarta', 80),
(130, 'Londres', 81),
(131, 'Dublín', 83),
(132, 'Reikiavik', 84),
(133, 'Majuro', 86),
(134, 'Honiara', 87),
(135, 'Roma', 90),
(136, 'Kingston', 91),
(137, 'Tokio', 92),
(138, 'Astaná', 93),
(139, 'Nairobi', 94),
(140, 'Biskek', 95),
(141, 'Tarawa', 96),
(142, 'Vientián', 97),
(143, 'Maseru', 98),
(144, 'Riga', 99),
(145, 'Monrovia', 100),
(146, 'Trípoli', 101),
(147, 'Skopje', 105),
(148, 'Atananarivo', 106),
(149, 'Kuala Lumpur', 107),
(150, 'Malé', 109),
(151, 'Lilongüe', 110),
(152, 'Bamako', 111),
(153, 'La Valeta', 112),
(154, 'Rabat', 114),
(155, 'Port Louis', 116),
(156, 'Nuakchot', 117),
(157, 'México D.F.', 118),
(158, 'Chisinau', 119),
(159, 'Mónaco', 120),
(160, 'Ulan Bator', 121),
(161, 'Maputo', 122),
(162, 'Naypyidaw', 123),
(163, 'Windhoek', 124),
(164, 'Managua', 126),
(165, 'Niamey', 127),
(166, 'Abuya', 128),
(167, 'Oslo', 129),
(168, 'Tegucigalpa', 77),
(169, 'Budapest', 78),
(170, 'Nueva Delhi', 79),
(171, 'Yakarta', 80),
(172, 'Londres', 81),
(173, 'Dublín', 83),
(174, 'Reikiavik', 84),
(175, 'Majuro', 86),
(176, 'Honiara', 87),
(177, 'Roma', 90),
(178, 'Kingston', 91),
(179, 'Tokio', 92),
(180, 'Astaná', 93),
(181, 'Nairobi', 94),
(182, 'Biskek', 95),
(183, 'Tarawa', 96),
(184, 'Vientián', 97),
(185, 'Maseru', 98),
(186, 'Riga', 99),
(187, 'Monrovia', 100),
(188, 'Trípoli', 101),
(189, 'Skopje', 105),
(190, 'Atananarivo', 106),
(191, 'Kuala Lumpur', 107),
(192, 'Malé', 109),
(193, 'Lilongüe', 110),
(194, 'Bamako', 111),
(195, 'La Valeta', 112),
(196, 'Rabat', 114),
(197, 'Port Louis', 116),
(198, 'Nuakchot', 117),
(199, 'México D.F.', 118),
(200, 'Chisinau', 119),
(201, 'Mónaco', 120),
(202, 'Ulan Bator', 121),
(203, 'Maputo', 122),
(204, 'Naypyidaw', 123),
(205, 'Windhoek', 124),
(206, 'Managua', 126),
(207, 'Niamey', 127),
(208, 'Abuya', 128),
(209, 'Oslo', 129),
(210, 'Abuya', 128),
(211, 'Oslo', 129),
(212, 'Wellington', 131),
(213, 'Amsterdam', 132),
(214, 'Islamabad', 133),
(215, 'Melekeok', 134),
(216, 'Ciudad de Panamá', 135),
(217, 'Port Moresby', 136),
(218, 'Asunción', 136),
(219, 'Lima', 138),
(220, 'Varsovia', 139),
(221, 'Lisboa', 140),
(222, 'San Juan', 141),
(223, 'Bangui', 142),
(224, 'Kinshasa', 144),
(225, 'Kigali', 146),
(226, 'Bucarest', 147),
(227, 'Moscú', 148),
(228, 'Basseterre', 150),
(229, 'Kingstown', 151),
(230, 'Castries', 152),
(231, 'Dakar', 154),
(232, 'Victoria', 155),
(233, 'Freetown', 156),
(234, 'Colombo', 158),
(235, 'Mbabane', 159),
(236, 'Pretoria', 160),
(237, 'Jartum', 161),
(238, 'Estocolmo', 162),
(239, 'Berna', 163),
(240, 'Paramaribo', 167),
(241, 'Lomé', 168),
(242, 'Nuki´Alofa', 169),
(243, 'Puerto España', 170),
(244, 'Túnez', 171),
(245, 'Ankara', 172),
(246, 'Caracas', 181),
(247, 'Montevideo', 177),
(248, 'Asjabad', 173),
(249, 'Funafuti', 174),
(250, 'Kiev', 175),
(251, 'Kampala', 176),
(252, 'Tashkent', 179),
(253, 'Port Vila', 180),
(254, 'Lusaka', 183),
(255, 'Harare', 184);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coder`
--

CREATE TABLE `coder` (
  `id_coder` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni_nie` varchar(9) NOT NULL,
  `fecha_nac` date NOT NULL,
  `fk_nacionalidad` int(11) NOT NULL,
  `fk_promocion` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coder`
--

INSERT INTO `coder` (`id_coder`, `nombre`, `apellido`, `dni_nie`, `fecha_nac`, `fk_nacionalidad`, `fk_promocion`, `estado`) VALUES
(5, 'lorena', 'solis', '123456asd', '1985-05-26', 17, 1, '0'),
(6, 'luis', 'saenco', '12345678p', '1989-11-25', 107, 2, '0'),
(7, 'mariana', 'solis', '123456asd', '1985-05-26', 1, 1, '1'),
(8, 'elena', 'sachez', '66666666g', '1989-11-25', 161, 1, '1'),
(9, 'Stive', 'Rodriguez', '66666666G', '1998-02-06', 1, 2, '1'),
(10, 'Luis', 'guerrero', '32184516P', '1989-04-15', 16, 2, '1'),
(11, 'Juan', 'Soliz', '22348759J', '1982-01-12', 153, 2, '1'),
(12, 'Hana', 'Romero', '32184516P', '1994-06-23', 154, 6, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `id_fabrica` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fk_ciudad` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`id_fabrica`, `nombre`, `fk_ciudad`, `estado`) VALUES
(1, 'tomillo', 34, '1'),
(2, 'fabrica2', 219, '1'),
(3, 'fabrica3', 157, '0'),
(4, 'fabrica3', 157, '1'),
(5, 'Factoria', 11, '1'),
(6, 'Las Rosas', 94, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idHistorial` int(11) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_promocion` int(11) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`idHistorial`, `fk_usuario`, `fk_promocion`, `estado`) VALUES
(1, 1, 5, 'I'),
(2, 2, 6, 'A'),
(3, 3, 3, 'I'),
(4, 1, 2, 'I'),
(5, 6, 6, 'I'),
(6, 7, 6, 'I'),
(9, 10, 6, 'I'),
(10, 1, 6, 'I'),
(14, 6, 1, 'A'),
(15, 11, 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idUser` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `usuario` varchar(12) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `fk_nacionalidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idUser`, `nombre`, `apellido`, `usuario`, `password`, `tipo`, `fk_nacionalidad`) VALUES
(1, 'Edgar', 'Costilla', 'edgarc', 'edgarc', 'f', 54),
(2, 'Nuria', 'Nuriez', 'nurian', 'nurian', 'r', 53),
(3, 'Conchi', 'Conchez', 'conchic', 'conchic', 'a', 52),
(5, 'pedro', 'navaja', 'pedron', '$2y$10$fXBmeGNzrSIQ7QL2/4a8NuaHJINRKBjgH9.s5JrlklfomODemZKse', 'a', 184),
(6, 'juanito', 'alimaña', 'juanitoa', 'juanitoa', 'a', 54),
(7, 'juanelo', 'alimaña', 'juaneloa', 'juaneloa', 'a', 57),
(10, 'pancho', 'pantera', 'panchop', '$2y$10$o5EDj1FNEs7L5jNEoZAoQ.FuLY27bDlSKoi7pstFnrwv3T4mBS0HW', 'a', 184),
(11, 'lorena', 'romero', 'lorenar', '$2y$10$dvDsuo2Gy1Tb92aZ2PAQLu6QFl/N0jvL3.VHZfc4iBjwexuvxSvCG', 'f', 169);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`, `nacionalidad`) VALUES
(1, 'Afganistan', 'afgano/a'),
(2, 'Albania', 'albanes'),
(3, 'Alemania', 'aleman/a'),
(4, 'Andorra', 'andorrano'),
(5, 'Angola', 'angoleno/a'),
(6, 'Antillas Holandesas', 'antillano/a'),
(7, 'Argelia', 'argelino/a'),
(8, 'Argentina', 'argentino/a'),
(9, 'Armenia', 'armenio'),
(10, 'Azerbaiyan', 'azerbaiyano/a'),
(11, 'Australia', 'australiano/a'),
(12, 'Austria', 'austriaco/a'),
(13, 'Bahamas', 'bahames, bahameno'),
(14, 'Bangladesh', 'bengali'),
(15, 'Barbados', 'barbandense'),
(16, 'Belgica', 'belga'),
(17, 'Belice', 'beliceno/a'),
(18, 'Benin', 'benines/sa'),
(19, 'Bielorrusia', 'bielorruso/a'),
(20, 'Bolivia', 'boliviano/a'),
(21, 'Bosnia-Herzegovina', 'bosnio'),
(22, 'Botswana', 'botswano/a'),
(23, 'Brasil', 'brasileno/a'),
(24, 'Brunei', 'bruneano/a'),
(25, 'Bulgaria', 'bulgaro/a'),
(26, 'Burkina Faso', 'Uagadugu'),
(27, 'Burundi', 'burundiano/a'),
(28, 'Butan', 'butanes/a'),
(29, 'Cabo Verde', 'caboverdiano'),
(30, 'Camboya', 'camboyano/a'),
(31, 'Camerun', 'camerunes'),
(32, 'Canada', 'canadiense'),
(33, 'Chad', 'chadiano/a'),
(34, 'Chequia', 'checo/a'),
(35, 'Chile', 'chileno/a'),
(36, 'China', 'chino/a'),
(37, 'Colombia', 'colombiano/a'),
(38, 'Comores', 'comorano/a'),
(39, 'Congo', 'congoles'),
(40, 'Corea del Norte', 'norcoreano/a'),
(41, 'Corea del Sur', 'surcoreano/a'),
(42, 'Costa de Marfil', 'marfileno/a'),
(43, 'Costa Rica', 'costarricense'),
(44, 'Croacia', 'croata'),
(45, 'Cuba', 'cubano/a'),
(46, 'Yibuti', 'yibutiano/a'),
(47, 'Dinamarca', 'danes/danesa'),
(48, 'Ecuador', 'ecuatoriano/a'),
(49, 'Egipto', 'egipcio/a'),
(50, 'El Salvador', 'salvadoreno/a'),
(51, 'Escocia', 'escoces /escocesa'),
(52, 'Eslovaquia', 'eslovaco/a'),
(53, 'Eslovenia', 'esloveno/a'),
(54, 'España', 'español/a'),
(55, 'Estados Unidos, EE.UU', 'estadounidense'),
(56, 'Estonia', 'estonio'),
(57, 'Etiopia', 'etiope'),
(58, 'Fiji', 'fiyiano/a'),
(59, 'Filipinas', 'filipino/a'),
(60, 'Finlandia', 'finlandes/finlandesa'),
(61, 'Francia', 'frances/francesa'),
(62, 'Gabon', 'gabones'),
(63, 'Gales', 'gales'),
(64, 'Gambia', 'gambiense'),
(65, 'Georgia', 'georgiano/a'),
(66, 'Ghana', 'ghanes'),
(67, 'Granada', 'granadino/a'),
(68, 'Grecia', 'griego/a'),
(69, 'Guayana Francesa', 'guayanes'),
(70, 'Guatemala', 'guatemalteco/a'),
(71, 'Guinea Conakry', 'guineano/a'),
(72, 'Guinea Bissay', 'guineano/a'),
(73, 'Guinea Ecuatorial', 'ecuatoguineano/a'),
(74, 'Guyana', 'guyanes'),
(75, 'Haiti', 'haitiano/a'),
(76, 'Holanda', 'holandes/holandesa'),
(77, 'Honduras', 'honduren/a'),
(78, 'Hungria', 'hungaro/a'),
(79, 'India', 'indio/a'),
(80, 'Indonesia', 'indonesio'),
(81, 'Inglaterra', 'ingles/inglesa'),
(83, 'Irlanda, Eire', 'irlandes/irlandesa'),
(84, 'Islandia', 'islandes/islandesa'),
(85, 'Islas Caiman', 'caimanes'),
(86, 'Islas Marshall', 'marshales'),
(87, 'Islas Salomon', 'salomonense'),
(88, 'Islas Virgenes Americanas', 'de Islas Virgenes'),
(89, 'Islas Vírgenes Britanicas', 'de Islas Virgenes britanicas'),
(90, 'Italia', 'italiano/a'),
(91, 'Jamaica', 'jamaicano/a'),
(92, 'Japon', 'japones/a'),
(93, 'Kazajstan', 'kazajo'),
(94, 'Kenia', 'keniata'),
(95, 'Kirguizistan', 'kirguiz'),
(96, 'Kiribati', 'kiribatense,'),
(97, 'Laos', 'laosiano/a'),
(98, 'Lesoto', 'basuto, lesotense'),
(99, 'Letonia', 'leton/a'),
(100, 'Liberia', 'liberiano/a'),
(101, 'Libia', 'libio'),
(102, 'Liechtenstein', 'liechtensteiniano/a'),
(103, 'Lituania', 'lituano/a'),
(104, 'Luxemburgo', 'luxemburgues/a'),
(105, 'Macedonia', 'macedonio/a'),
(106, 'Madagascar', 'malgache'),
(107, 'Malasia', 'malayo/a'),
(109, 'Maldivas', 'maldivo/a'),
(110, 'Malawi', 'malawiano/a'),
(111, 'Mali', 'mali'),
(112, 'Malta', 'maltes/maltesa'),
(114, 'Marruecos', 'marroqui'),
(115, 'Martinica', 'martiniques'),
(116, 'Mauricio', 'mauriciano'),
(117, 'Mauritania', 'mauritano'),
(118, 'Mexico', 'mexicano/a'),
(119, 'Moldavia', 'moldavo'),
(120, 'Monaco', 'monegasco/a'),
(121, 'Mongolia', 'mongol'),
(122, 'Mozambique', 'mozambiqueno/a'),
(123, 'Myanmar', 'birmano/a'),
(124, 'Namibia', 'namibio'),
(125, 'Nauru', 'nauruano'),
(126, 'Nicaragua', 'nicaragüense'),
(127, 'Niger', 'nigeriano/a'),
(128, 'Nigeria', 'nigeriano/a'),
(129, 'Noruega', 'noruego/a'),
(130, 'Nueva Caledonia', 'neocaledonio'),
(131, 'Nueva Zelanda', 'neozelandes'),
(132, 'Paises Bajos', 'neerlandes'),
(133, 'Pakistan', 'pakistani'),
(134, 'Palau', 'palauano/a'),
(135, 'Panama', 'panameno/a'),
(136, 'Papua-Nueva Guinea', 'papu'),
(137, 'Paraguay', 'paraguayo/a'),
(138, 'Peru', 'peruano/a'),
(139, 'Polonia', 'polaco/a'),
(140, 'Portugal', 'portugues/portuguesa'),
(141, 'Puerto Rico', 'portorriqueno/a'),
(142, 'Republica Centroaficana', 'centroafricano/a'),
(143, 'Republica Checa', 'checo/a'),
(144, 'Republica Democratica del Congo', 'zaireno/a'),
(145, 'Republica Dominicana', 'dominicano/a'),
(146, 'Ruanda', 'ruandes'),
(147, 'Rumania', 'rumano/a'),
(148, 'Rusia', 'ruso/a'),
(149, 'Samoa Occidental', 'samoano/a'),
(150, 'San Cristobal y Nieves', 'sancristobalense'),
(151, 'San Vicente y Granadinas', 'sanvicentino/a'),
(152, 'Santa Lucia', 'santalucense'),
(153, 'Ciudad de Vaticano', 'vaticano'),
(154, 'Senegal', 'senegales'),
(155, 'Seychelles', 'seychelense'),
(156, 'Sierra Leona', 'sierraleones'),
(157, 'Somalia', 'somali'),
(158, 'Sri Lanka', 'esrilanques/sa'),
(159, 'Suazilandia', 'suazi'),
(160, 'Sudafrica', 'sudafricano/a'),
(161, 'Sudan', 'sudanes'),
(162, 'Suecia', 'sueco/a'),
(163, 'Suiza', 'suizo/a'),
(164, 'Surinam', 'surinames'),
(165, 'Tadzhikistan', 'tadzhik'),
(166, 'Tanzania', 'tanzano'),
(167, 'Tayikistan', 'tayiko'),
(168, 'Togo', 'togoles'),
(169, 'Tonga', 'tongano'),
(170, 'Trinidad y Tobago', 'trinitario/a'),
(171, 'Tunez', 'tunecino/a'),
(172, 'Turquia', 'turco'),
(173, 'Turkmenistan', 'turcomano,'),
(174, 'Tuvalu', 'tuvaluano/a'),
(175, 'Ucrania', 'ucraniano/a'),
(176, 'Uganda', 'ugandes'),
(177, 'Uruguay', 'uruguayo/a'),
(178, 'Rusia', 'ruso'),
(179, 'Uzbekistan', 'uzbeko'),
(180, 'Vanuatu', 'vanuatuense'),
(181, 'Venezuela', 'venezolano/a'),
(182, 'Yugoslavia', 'yugoslavo/a'),
(183, 'Zambia', 'zambiano'),
(184, 'Zimbabwe', 'zimbabuense');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_promocion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ano` year(4) NOT NULL,
  `fk_fabrica` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_promocion`, `nombre`, `ano`, `fk_fabrica`, `estado`) VALUES
(1, 'promo_1', 2019, 1, '1'),
(2, 'promo_2', 2020, 2, '1'),
(3, 'Ninguno', 2020, 1, '1'),
(5, 'promo_3', 2020, 1, '0'),
(6, 'Factorina', 0000, 6, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id_coder`),
  ADD KEY `fk_nacionalidad` (`fk_nacionalidad`),
  ADD KEY `fk_promocion` (`fk_promocion`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`id_fabrica`),
  ADD KEY `fk_ciudad` (`fk_ciudad`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idHistorial`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_promocion` (`fk_promocion`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_nacionalidad` (`fk_nacionalidad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id_promocion`),
  ADD KEY `fk_fabrica` (`fk_fabrica`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT de la tabla `coder`
--
ALTER TABLE `coder`
  MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  MODIFY `id_fabrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `idHistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `coder`
--
ALTER TABLE `coder`
  ADD CONSTRAINT `coder_ibfk_1` FOREIGN KEY (`fk_nacionalidad`) REFERENCES `pais` (`id_pais`),
  ADD CONSTRAINT `coder_ibfk_2` FOREIGN KEY (`fk_promocion`) REFERENCES `promocion` (`id_promocion`);

--
-- Filtros para la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD CONSTRAINT `fabrica_ibfk_1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `login` (`idUser`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`fk_promocion`) REFERENCES `promocion` (`id_promocion`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`fk_nacionalidad`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `promocion_ibfk_2` FOREIGN KEY (`fk_fabrica`) REFERENCES `fabrica` (`id_fabrica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
