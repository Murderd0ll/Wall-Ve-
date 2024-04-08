-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2024 a las 01:40:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wallve`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tauditorias`
--

CREATE TABLE `tauditorias` (
  `idAudit` int(11) NOT NULL,
  `tipoProceso` varchar(50) NOT NULL,
  `descAudit` varchar(100) NOT NULL,
  `empleado` varchar(50) NOT NULL,
  `fechaAudit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tauditorias`
--

INSERT INTO `tauditorias` (`idAudit`, `tipoProceso`, `descAudit`, `empleado`, `fechaAudit`) VALUES
(2, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuari', 'root@localhost', '2024-04-07 02:14:14'),
(3, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuari', 'root@localhost', '2024-04-07 02:14:24'),
(4, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuari', 'root@localhost', '2024-04-07 02:14:47'),
(5, 'INSERT', 'Se realizó una consulta INSERT en la tabla tProduc', 'root@localhost', '2024-04-07 02:16:45'),
(6, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tProduc', 'root@localhost', '2024-04-07 02:16:45'),
(7, 'DELETE', 'Se realizó una consulta DELETE en la tabla tProduc', 'root@localhost', '2024-04-07 02:16:48'),
(8, 'INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', 'root@localhost', '2024-04-07 02:18:15'),
(9, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tVenta', 'root@localhost', '2024-04-07 02:18:15'),
(10, 'DELETE', 'Se realizó una consulta DELETE en la tabla tVenta', 'root@localhost', '2024-04-07 02:18:19'),
(11, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 02:26:34'),
(12, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'root@localhost', '2024-04-07 03:18:06'),
(13, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'root@localhost', '2024-04-07 03:18:15'),
(14, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:14:09'),
(15, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:19:42'),
(16, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:21:21'),
(17, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:22:28'),
(18, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:25:17'),
(19, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:37:31'),
(20, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:40:14'),
(21, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:43:07'),
(22, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:43:43'),
(23, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:51:18'),
(24, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 15:54:43'),
(25, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:00:17'),
(26, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:00:28'),
(27, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:04:21'),
(28, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:04:37'),
(29, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:04:57'),
(30, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 16:07:56'),
(31, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 16:08:15'),
(32, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:08:39'),
(33, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'root@localhost', '2024-04-07 16:13:33'),
(34, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:16:33'),
(35, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:16:51'),
(36, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:39:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tproducto`
--

CREATE TABLE `tproducto` (
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `precioProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tproducto`
--

INSERT INTO `tproducto` (`idProd`, `idEstacion`, `precioProd`) VALUES
(1, 1, 50),
(2, 2, 75);

--
-- Disparadores `tproducto`
--
DELIMITER $$
CREATE TRIGGER `deleteProd` AFTER DELETE ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertProd` AFTER INSERT ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateProd` AFTER UPDATE ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpruebausuario`
--

CREATE TABLE `tpruebausuario` (
  `idEmp` int(11) NOT NULL,
  `nombreEmp` varchar(60) NOT NULL,
  `apellidoPEmp` varchar(60) DEFAULT NULL,
  `apellidoMEmp` varchar(60) NOT NULL,
  `fechaNacEmp` date NOT NULL,
  `telEmp` int(10) NOT NULL,
  `generoEmp` varchar(6) NOT NULL,
  `emailEmp` varchar(50) NOT NULL,
  `direccionEmp` varchar(60) NOT NULL,
  `ciudadEmp` varchar(60) NOT NULL,
  `turnoEmp` varchar(10) NOT NULL,
  `rolEmp` varchar(20) NOT NULL,
  `idloginEmp` int(11) NOT NULL,
  `passEmp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `idEmp` int(11) NOT NULL,
  `nombreEmp` varchar(60) NOT NULL,
  `apellidoPEmp` varchar(60) DEFAULT NULL,
  `apellidoMEmp` varchar(60) DEFAULT NULL,
  `fechaNacEmp` date NOT NULL,
  `telEmp` bigint(20) NOT NULL,
  `generoEmp` varchar(12) NOT NULL,
  `emailEmp` varchar(50) NOT NULL,
  `direccionEmp` varchar(60) NOT NULL,
  `ciudadEmp` varchar(60) NOT NULL,
  `turnoEmp` varchar(10) NOT NULL,
  `rolEmp` varchar(20) NOT NULL,
  `idloginEmp` varchar(15) NOT NULL,
  `passEmp` varchar(60) NOT NULL,
  `fIngreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idEmp`, `nombreEmp`, `apellidoPEmp`, `apellidoMEmp`, `fechaNacEmp`, `telEmp`, `generoEmp`, `emailEmp`, `direccionEmp`, `ciudadEmp`, `turnoEmp`, `rolEmp`, `idloginEmp`, `passEmp`, `fIngreso`) VALUES
(1, 'Jane', 'Moran', 'Rivera', '0000-00-00', 6333503037, 'Femenino', 'aa@a.com', 'a', 'a', 'AAAAAAAAAA', 'Usuario', 'jane', '1', '0000-00-00'),
(2, 'Brayan', 'Moran', 'Rivera', '2001-01-29', 6333503037, 'Femenino', 'ejemplo@gmail.com', 'C 33 Ave 36 y 37', 'Agua Prieta', 'Vespertino', 'Administrador', 'anmor', '1234', '0000-00-00'),
(26, 'a', 'a', 'a', '2024-04-02', 1, 'Masculino', 'a', 'a', 'a', 'AAAAAAAAAA', 'a', 'root', ' ', '2024-04-02'),
(30, 'cc', 'c', 'c', '2024-04-01', 2, 'v', 'v', 'v', 'v', 'AAAAAAAAAA', 'v', 'v', 'v', '2024-04-09'),
(211, 'Reyna', 'Moran', 'Rivera', '2002-08-22', 6334096027, 'Femenino', 'ejemplo@mail.com', 'C 33 Ave 36', 'Agua Prieta', 'Matutino', 'Administrador', 'mora', '1234', '2024-04-06');

--
-- Disparadores `tusuario`
--
DELIMITER $$
CREATE TRIGGER `deleteUsuario` AFTER DELETE ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertUsuario` AFTER INSERT ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateUsuario` AFTER UPDATE ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tventa`
--

CREATE TABLE `tventa` (
  `folioVenta` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `idEmp` int(11) NOT NULL,
  `fechaVenta` datetime NOT NULL,
  `cantWatts` double NOT NULL,
  `efectivoVenta` double NOT NULL,
  `cambioVenta` double NOT NULL,
  `totalVenta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tventa`
--

INSERT INTO `tventa` (`folioVenta`, `idProd`, `idEstacion`, `idEmp`, `fechaVenta`, `cantWatts`, `efectivoVenta`, `cambioVenta`, `totalVenta`) VALUES
(123, 1, 1, 1, '2024-01-01 00:00:00', 100.5, 200.25, 20.5, 300.75),
(234, 1, 1, 2, '2024-02-05 08:30:00', 150.75, 300.5, 30.75, 400.25),
(321, 2, 2, 1, '2024-01-01 00:00:00', 100.5, 200.25, 20.5, 300.75),
(345, 1, 2, 1, '2024-03-10 12:15:00', 200.25, 400.75, 40.25, 500.5),
(432, 2, 2, 2, '2024-02-05 08:30:00', 150.75, 300.5, 30.75, 400.25),
(543, 2, 1, 1, '2024-03-10 12:15:00', 200.25, 400.75, 40.25, 500.5),
(567, 1, 1, 1, '2024-05-20 20:00:00', 300.75, 600.5, 60.75, 700.25),
(678, 1, 1, 2, '2024-06-25 09:30:00', 350.25, 700.75, 70.25, 800.5),
(765, 2, 2, 1, '2024-05-20 20:00:00', 432, 600.5, 60.75, 700.25),
(876, 2, 2, 2, '2024-06-25 09:30:00', 350.25, 700.75, 70.25, 800.5);

--
-- Disparadores `tventa`
--
DELIMITER $$
CREATE TRIGGER `deleteVenta` AFTER DELETE ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertVenta` AFTER INSERT ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateVenta` AFTER UPDATE ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tauditorias`
--
ALTER TABLE `tauditorias`
  ADD PRIMARY KEY (`idAudit`);

--
-- Indices de la tabla `tproducto`
--
ALTER TABLE `tproducto`
  ADD PRIMARY KEY (`idProd`);

--
-- Indices de la tabla `tpruebausuario`
--
ALTER TABLE `tpruebausuario`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indices de la tabla `tventa`
--
ALTER TABLE `tventa`
  ADD PRIMARY KEY (`folioVenta`),
  ADD KEY `idProd` (`idProd`),
  ADD KEY `idEmp` (`idEmp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tauditorias`
--
ALTER TABLE `tauditorias`
  MODIFY `idAudit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tventa`
--
ALTER TABLE `tventa`
  ADD CONSTRAINT `tventa_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `tproducto` (`idProd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tventa_ibfk_2` FOREIGN KEY (`idEmp`) REFERENCES `tusuario` (`idEmp`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
