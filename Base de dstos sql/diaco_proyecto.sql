-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 04:24:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diaco_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_municipio`
--

CREATE TABLE `bd_municipio` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `cod_muni` varchar(50) NOT NULL,
  `ccod_Depa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `bd_municipio`
--

INSERT INTO `bd_municipio` (`id_municipio`, `municipio`, `cod_muni`, `ccod_Depa`) VALUES
(1, 'Cobán', '1601', '160'),
(2, 'San Pedro Carchá', '1602', '160'),
(3, 'San Juan Chamelco', '1603', '160'),
(4, 'Lanquín', '1604', '160'),
(5, 'Santa Cruz Verapaz', '1605', '160'),
(6, 'Tamahú', '1606', '160'),
(7, 'Tactic', '1607', '160'),
(8, 'Tucurú', '1608', '160'),
(9, 'Panzós', '1609', '160'),
(10, 'Senahú', '1610', '160'),
(11, 'Cahabón', '1611', '160'),
(12, 'Chisec', '1612', '160'),
(13, 'Chahal', '1613', '160'),
(14, 'Fray Bartolomé de las Casas', '1614', '160'),
(15, 'Santa María Cahabón', '1615', '160'),
(16, 'Raxruhá', '1616', '160'),
(17, 'Flores', '1701', '170'),
(18, 'San José', '1702', '170'),
(19, 'San Benito', '1703', '170'),
(20, 'San Andrés', '1704', '170'),
(21, 'La Libertad', '1705', '170'),
(22, 'San Francisco', '1706', '170'),
(23, 'Santa Ana', '1707', '170'),
(24, 'Dolores', '1708', '170'),
(25, 'San Luis', '1709', '170'),
(26, 'Sayaxché', '1710', '170'),
(27, 'Melchor de Mencos', '1711', '170'),
(28, 'Poptún', '1712', '170'),
(29, 'Ciudad de Guatemala', '101', '10'),
(30, 'Santa Catarina Pinula', '102', '10'),
(31, 'San José Pinula', '103', '10'),
(32, 'San José del Golfo', '104', '10'),
(33, 'Palencia', '105', '10'),
(34, 'Chinautla', '106', '10'),
(35, 'San Pedro Ayampuc', '107', '10'),
(36, 'Mixco', '108', '10'),
(37, 'San Pedro Sacatepéquez', '109', '10'),
(38, 'San Juan Sacatepéquez', '110', '10'),
(39, 'San Raymundo', '111', '10'),
(40, 'Chuarrancho', '112', '10'),
(41, 'Fraijanes', '113', '10'),
(42, 'Amatitlán', '114', '10'),
(43, 'Villa Nueva', '115', '10'),
(44, 'Villa Canales', '116', '10'),
(45, 'San Miguel Petapa', '117', '10'),
(46, 'Guastatoya', '201', '20'),
(47, 'Morazán', '202', '20'),
(48, 'San Agustín Acasaguastlán', '203', '20'),
(49, 'San Cristóbal Acasaguastlán', '204', '20'),
(50, 'El Jícaro', '205', '20'),
(51, 'Sansare', '206', '20'),
(52, 'Sanarate', '207', '20'),
(53, 'San Antonio La Paz', '208', '20'),
(54, 'Guayabetal', '209', '20'),
(55, 'Antigua Guatemala', '301', '30'),
(56, 'Jocotenango', '302', '30'),
(57, 'Pastores', '303', '30'),
(58, 'Sumpango', '304', '30'),
(59, 'Santo Domingo Xenacoj', '305', '30'),
(60, 'Santiago Sacatepéquez', '306', '30'),
(61, 'San Bartolomé Milpas Altas', '307', '30'),
(62, 'San Lucas Sacatepéquez', '308', '30'),
(63, 'Santa Lucía Milpas Altas', '309', '30'),
(64, 'Magdalena Milpas Altas', '310', '30'),
(65, 'Santa María de Jesús', '311', '30'),
(66, 'Ciudad Vieja', '312', '30'),
(67, 'San Miguel Dueñas', '313', '30'),
(68, 'Alotenango', '314', '30'),
(69, 'San Antonio Aguas Calientes', '315', '30'),
(70, 'Chimaltenango', '401', '40'),
(71, 'San José Poaquil', '402', '40'),
(72, 'San Martín Jilotepeque', '403', '40'),
(73, 'Comalapa', '404', '40'),
(74, 'Santa Apolonia', '405', '40'),
(75, 'Tecpán Guatemala', '406', '40'),
(76, 'Patzún', '407', '40'),
(77, 'Pochuta', '408', '40'),
(78, 'Patzicía', '409', '40'),
(79, 'Santa Cruz Balanyá', '410', '40'),
(80, 'Acatenango', '411', '40'),
(81, 'Yepocapa', '412', '40'),
(82, 'San Andrés Itzapa', '413', '40'),
(83, 'Parramos', '414', '40'),
(84, 'Zaragoza', '415', '40'),
(85, 'El Tejar', '416', '40'),
(86, 'Escuintla', '501', '50'),
(87, 'Santa Lucía Cotzumalguapa', '502', '50'),
(88, 'La Democracia', '503', '50'),
(89, 'Siquinalá', '504', '50'),
(90, 'Masagua', '505', '50'),
(91, 'Tiquisate', '506', '50'),
(92, 'La Gomera', '507', '50'),
(93, 'Guanagazapa', '508', '50'),
(94, 'San José', '509', '50'),
(95, 'Iztapa', '510', '50'),
(96, 'Palín', '511', '50'),
(97, 'San Vicente Pacaya', '512', '50'),
(98, 'Nueva Concepción', '513', '50'),
(99, 'Cuilapa', '601', '60'),
(100, 'Barberena', '602', '60'),
(101, 'Santa Rosa de Lima', '603', '60'),
(102, 'Casillas', '604', '60'),
(103, 'San Rafael las Flores', '605', '60'),
(104, 'Oratorio', '606', '60'),
(105, 'San Juan Tecuaco', '607', '60'),
(106, 'Chiquimulilla', '608', '60'),
(107, 'Taxisco', '609', '60'),
(108, 'Santa María Ixhuatán', '610', '60'),
(109, 'Guazacapán', '611', '60'),
(110, 'Santa Cruz Naranjo', '612', '60'),
(111, 'Pueblo Nuevo Viñas', '613', '60'),
(112, 'Nueva Santa Rosa', '614', '60'),
(113, 'Sololá', '701', '70'),
(114, 'San José Chacayá', '702', '70'),
(115, 'Santa María Visitación', '703', '70'),
(116, 'Santa Lucía Utatlán', '704', '70'),
(117, 'Nahualá', '705', '70'),
(118, 'Santa Catarina Ixtahuacán', '706', '70'),
(119, 'Santa Clara la Laguna', '707', '70'),
(120, 'Concepción', '708', '70'),
(121, 'San Andrés Semetabaj', '709', '70'),
(122, 'Panajachel', '710', '70'),
(123, 'Santa Catarina Palopó', '711', '70'),
(124, 'San Antonio Palopó', '712', '70'),
(125, 'San Lucas Tolimán', '713', '70'),
(126, 'Santa Cruz la Laguna', '714', '70'),
(127, 'San Pablo la Laguna', '715', '70'),
(128, 'San Juan la Laguna', '716', '70'),
(129, 'San Marcos la Laguna', '717', '70'),
(130, 'San Pedro la Laguna', '718', '70'),
(131, 'Santiago Atitlán', '719', '70'),
(132, 'Totonicapán', '801', '80'),
(133, 'San Cristóbal Totonicapán', '802', '80'),
(134, 'San Francisco El Alto', '803', '80'),
(135, 'San Andrés Xecul', '804', '80'),
(136, 'Momostenango', '805', '80'),
(137, 'Santa María Chiquimula', '806', '80'),
(138, 'Santa Lucía La Reforma', '807', '80'),
(139, 'San Bartolo', '808', '80'),
(140, 'Quetzaltenango', '901', '90'),
(141, 'Salcajá', '902', '90'),
(142, 'Olintepeque', '903', '90'),
(143, 'San Carlos Sija', '904', '90'),
(144, 'Sibilia', '905', '90'),
(145, 'Cabricán', '906', '90'),
(146, 'Cajolá', '907', '90'),
(147, 'San Miguel Siguilá', '908', '90'),
(148, 'Ostuncalco', '909', '90'),
(149, 'San Mateo', '910', '90'),
(150, 'Concepción Chiquirichapa', '911', '90'),
(151, 'San Martín Sacatepéquez', '912', '90'),
(152, 'Almolonga', '913', '90'),
(153, 'Cantel', '914', '90'),
(154, 'Huitán', '915', '90'),
(155, 'Zunil', '916', '90'),
(156, 'Colomba', '917', '90'),
(157, 'San Francisco La Unión', '918', '90'),
(158, 'El Palmar', '919', '90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_departamentos`
--

CREATE TABLE `tb_departamentos` (
  `id_departamento` int(11) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `ccod_Depa` varchar(50) NOT NULL,
  `Cod_region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_departamentos`
--

INSERT INTO `tb_departamentos` (`id_departamento`, `Departamento`, `ccod_Depa`, `Cod_region`) VALUES
(1, 'Guatemala', '010', 'MET'),
(2, 'El Progreso', '020', 'MET'),
(3, 'Sacatepéquez', '030', ''),
(4, 'Chimaltenango', '040', 'MET'),
(5, 'Escuintla', '050', 'MET'),
(6, 'Santa Rosa', '060', ''),
(7, 'Sololá', '070', ''),
(8, 'Totonicapán', '080', ''),
(9, 'Quetzaltenango', '090', 'NOR'),
(10, 'Suchitepéquez', '100', ''),
(11, 'Retalhuleu', '110', ''),
(12, 'San Marcos', '120', 'NOR'),
(13, 'Huehuetenango', '130', 'NOR'),
(14, 'Quiché', '140', 'NOR'),
(15, 'Baja Verapaz', '150', 'NOR'),
(16, 'Alta Verapaz', '160', 'NOR'),
(17, 'Petén', '170', 'NOR'),
(18, 'Jutiapa', '180', ''),
(19, 'Jalapa', '190', ''),
(20, 'Zacapa', '200', 'Zacapa'),
(21, 'Chiquimula', '210', ''),
(22, 'Izabal', '220', 'NOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_dueño`
--

CREATE TABLE `tb_dueño` (
  `id_dueño` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `cod_negocio` int(11) NOT NULL,
  `Telefono_dueño` varchar(15) NOT NULL,
  `Dpi` varchar(18) NOT NULL COMMENT 'Este es el campo del Dpi',
  `Direccion` varchar(40) NOT NULL,
  `Nit` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_dueño`
--

INSERT INTO `tb_dueño` (`id_dueño`, `Nombre`, `cod_negocio`, `Telefono_dueño`, `Dpi`, `Direccion`, `Nit`, `Email`) VALUES
(1, 'Pablo Andres Santos', 1, '75524403', '111222333444555', 'casa chevez', '7819465928350', 'otaku4ever@gmail.com'),
(2, 'Astrid Carolina Hernandez', 2, '93286776', '536780916011', '8av 7-22', '2038471592034', 'animejunkie@gmail.com'),
(3, 'Pablo Rodrigo Olivares', 3, '78925069', '942561001', '5-14 zona 3', '2038471592034', 'kawaiidesu@gmail.com'),
(5, 'Ana Lucia Cordova', 5, '24358487', '621847215011', 'calle falsa 123', '2038471592034', 'senpaisama@gmail.com'),
(6, 'Jacinto Hernandez', 6, '13567550', '536780916011', '123 zona 2', '2038471592034', 'otomegamer@gmail.com'),
(11, 'Alberto Contreras Alvarado', 0, '41188606', '167878901601', '9av 7-34-12', '7819465928350', 'psantos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_negocio`
--

CREATE TABLE `tb_negocio` (
  `id_negocio` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo_Negocio` varchar(50) NOT NULL,
  `Telefono_Negocio` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Tipo_Negocio` varchar(35) NOT NULL,
  `Id_dueño` int(11) NOT NULL,
  `Id_departamento` int(11) NOT NULL,
  `Id_muni` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `Estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_negocio`
--

INSERT INTO `tb_negocio` (`id_negocio`, `Nombre`, `Correo_Negocio`, `Telefono_Negocio`, `Direccion`, `Tipo_Negocio`, `Id_dueño`, `Id_departamento`, `Id_muni`, `id_region`, `Estado`) VALUES
(3, 'casa negra', 'psantos@gmail.com', '79513130', '8av 3-12 zona 2', '4', 5, 3, 3, 3, '1'),
(5, 'Cemaco', 'Cema@cemacoshop.com.gt', '41188606', '8av 3-12 zona 2', '23', 2, 16, 1, 2, '1'),
(6, 'Tiendas Max', 'Max@max.com.gt', '29052002', '7 av 6-9', '24', 3, 17, 17, 2, '1'),
(7, 'casa blaca', 'otaku4ever@gmail.com', '75524403', '9av7-34', '9', 11, 1, 43, 1, '1'),
(8, 'motel Pasiones', 'JoseLagarza@Todos.com.gt', '79513130', '8av 3-12 zona 2', '12', 11, 16, 1, 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_queja`
--

CREATE TABLE `tb_queja` (
  `id_queja` int(11) NOT NULL,
  `NegocioQueja` varchar(50) NOT NULL,
  `Dirqueja` varchar(25) NOT NULL,
  `EmailQueja` varchar(30) NOT NULL,
  `Departamento` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Fecha_queja` date NOT NULL,
  `Propietario` varchar(20) NOT NULL,
  `Tip_queja` varchar(20) NOT NULL,
  `Factura` varchar(25) NOT NULL,
  `Telefono` varchar(25) NOT NULL,
  `NIT` varchar(25) NOT NULL,
  `Detalle_queja` varchar(5000) NOT NULL,
  `Detalle_solucion` varchar(5000) NOT NULL,
  `ccod_queja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_queja`
--

INSERT INTO `tb_queja` (`id_queja`, `NegocioQueja`, `Dirqueja`, `EmailQueja`, `Departamento`, `Municipio`, `Region`, `Fecha_queja`, `Propietario`, `Tip_queja`, `Factura`, `Telefono`, `NIT`, `Detalle_queja`, `Detalle_solucion`, `ccod_queja`) VALUES
(1, 'casa negra', '8av 3-12 zona 2', 'psantos@gmail.com', '1', '1', '1', '2023-04-05', 'Andres', '1', '22220808', '79513130', '20052642', 'se me trato de manera inadecuada en la recepcion', 'mejorar la atencion al cliente', '050620235256'),
(2, 'Cemaco', '8av 3-12 zona 2', 'Cema@cemacoshop.com.gt', '1', '1', '1', '2023-06-08', 'Andres', '1', '19-1276-1289', '41188606', '20052642', 'Me pateo la secretaria', 'Despedirla', '090620231353');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_region`
--

CREATE TABLE `tb_region` (
  `id_region` int(11) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Cod_region` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_region`
--

INSERT INTO `tb_region` (`id_region`, `Region`, `Cod_region`) VALUES
(1, 'Región Metropolitana', 'MET'),
(2, 'Región Norte', 'NOR'),
(3, 'Región Nororiente', 'NOR-ORI'),
(4, 'Región Occidente', 'OCC'),
(5, 'Región Suroriente', 'SUR-ORI'),
(6, 'Región Sur', 'SUR'),
(7, 'Región Noroccidente', 'NOR-OCC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tip_negocio`
--

CREATE TABLE `tb_tip_negocio` (
  `id_tip_nego` int(11) NOT NULL,
  `TipoNegocio` varchar(50) NOT NULL,
  `Contribullente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tip_negocio`
--

INSERT INTO `tb_tip_negocio` (`id_tip_nego`, `TipoNegocio`, `Contribullente`) VALUES
(1, 'Farmacia', 'pequeño'),
(2, 'Taller', 'pequeño'),
(3, 'Restaurante', 'pequeño'),
(4, 'Tienda de ropa', 'pequeño'),
(5, 'Salón de belleza', 'pequeño'),
(6, 'Panadería', 'pequeño'),
(7, 'Supermercado', 'pequeño'),
(8, 'Cafetería', 'pequeño'),
(9, 'Bar', 'pequeño'),
(10, 'Gimnasio', 'pequeño'),
(11, 'Librería', 'pequeño'),
(12, 'Hotel', 'pequeño'),
(13, 'Gasolinera', 'pequeño'),
(14, 'Consultorio médico', 'pequeño'),
(15, 'Droguería', 'pequeño'),
(16, 'Veterinaria', 'pequeño'),
(17, 'Óptica', 'pequeño'),
(18, 'Ferretería', 'pequeño'),
(19, 'Banco', 'pequeño'),
(20, 'Floristería', 'pequeño'),
(21, 'Spa', 'pequeño'),
(22, 'Cine', 'pequeño'),
(23, 'Mueblería', 'pequeño'),
(24, 'Juguetería', 'pequeño'),
(25, 'Agencia de viajes', 'pequeño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tip_queja`
--

CREATE TABLE `tb_tip_queja` (
  `id_queja` int(11) NOT NULL,
  `Ctip_queja` varchar(50) NOT NULL,
  `ccodQueja` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tip_queja`
--

INSERT INTO `tb_tip_queja` (`id_queja`, `Ctip_queja`, `ccodQueja`) VALUES
(1, 'Mala atención al cliente', '001'),
(2, 'Producto defectuoso', '002'),
(3, 'Retraso en la entrega', '003'),
(4, 'Publicidad engañosa', '004'),
(5, 'Precios elevados', '005'),
(6, 'Falta de higiene', '006'),
(7, 'Mal servicio postventa', '007'),
(8, 'Personal poco amable', '008'),
(9, 'Cancelación sin aviso previo', '009'),
(10, 'Falta de stock', '010'),
(11, 'Problemas con la facturación', '011'),
(12, 'Incumplimiento de garantía', '012'),
(13, 'Engaño en promociones', '013'),
(14, 'Largas filas de espera', '014'),
(15, 'Problemas con el reembolso', '015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Seccion` tinyint(1) NOT NULL,
  `inicio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `Nombre`, `Correo`, `Usuario`, `Contraseña`, `Seccion`, `inicio`) VALUES
(1, '', '', '', '', 0, '0000-00-00 00:00:00'),
(2, '', '', '', '', 0, '0000-00-00 00:00:00'),
(3, 'andr', 'Crsandres@gmial.com', '', 'asdasdas', 0, '0000-00-00 00:00:00'),
(4, 'sotecpro123', 'sotecpro123@miumg.edu.gt', 'Sotecpro100', 'sotecpro', 0, '0000-00-00 00:00:00'),
(5, 'sotecpro123', 'sotecpro123@miumg.edu.gt', 'Sotecpro100', 'sotecpro', 0, '0000-00-00 00:00:00'),
(6, 'andres', 'sotecpro123@miumg.edu.gt', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(7, 'sotecpro123', 'sotecpro123@miumg.edu.gt', 'Ostecpro100', '1234567890', 0, '0000-00-00 00:00:00'),
(9, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(10, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(11, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(12, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(13, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(14, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(15, '', '', 'asdasd', 'asdasdas', 0, '0000-00-00 00:00:00'),
(16, 'Andres Santos', 'Andres2905@gmail.com', 'AndresSpeedroid', '2905Andres', 0, '0000-00-00 00:00:00'),
(17, 'Byron Caal', 'byroncaal@gmail.com', 'caal', 'Somoskudasai17', 0, '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bd_municipio`
--
ALTER TABLE `bd_municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `tb_departamentos`
--
ALTER TABLE `tb_departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `tb_dueño`
--
ALTER TABLE `tb_dueño`
  ADD PRIMARY KEY (`id_dueño`);

--
-- Indices de la tabla `tb_negocio`
--
ALTER TABLE `tb_negocio`
  ADD PRIMARY KEY (`id_negocio`);

--
-- Indices de la tabla `tb_queja`
--
ALTER TABLE `tb_queja`
  ADD PRIMARY KEY (`id_queja`);

--
-- Indices de la tabla `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `tb_tip_negocio`
--
ALTER TABLE `tb_tip_negocio`
  ADD PRIMARY KEY (`id_tip_nego`);

--
-- Indices de la tabla `tb_tip_queja`
--
ALTER TABLE `tb_tip_queja`
  ADD PRIMARY KEY (`id_queja`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bd_municipio`
--
ALTER TABLE `bd_municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_departamentos`
--
ALTER TABLE `tb_departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tb_dueño`
--
ALTER TABLE `tb_dueño`
  MODIFY `id_dueño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_negocio`
--
ALTER TABLE `tb_negocio`
  MODIFY `id_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_queja`
--
ALTER TABLE `tb_queja`
  MODIFY `id_queja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_tip_negocio`
--
ALTER TABLE `tb_tip_negocio`
  MODIFY `id_tip_nego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tb_tip_queja`
--
ALTER TABLE `tb_tip_queja`
  MODIFY `id_queja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
