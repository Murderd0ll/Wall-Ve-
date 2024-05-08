-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 01:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallbee`
--
CREATE DATABASE IF NOT EXISTS `wallbee` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wallbee`;

-- --------------------------------------------------------

--
-- Table structure for table `tauditorias`
--

DROP TABLE IF EXISTS `tauditorias`;
CREATE TABLE `tauditorias` (
  `idAudit` int(11) NOT NULL,
  `tipoProceso` varchar(50) NOT NULL,
  `descAudit` varchar(100) NOT NULL,
  `empleado` varchar(50) NOT NULL,
  `fechaAudit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tauditorias`
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
(36, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-07 16:39:59'),
(37, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:25:56'),
(38, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:26:08'),
(39, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:26:17'),
(40, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:26:23'),
(41, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:35:15'),
(42, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:35:23'),
(43, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:35:35'),
(44, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:35:44'),
(45, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:35:50'),
(46, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'mora@localhost', '2024-04-08 16:36:20'),
(47, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'mora@localhost', '2024-04-08 16:39:01'),
(48, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'mora@localhost', '2024-04-08 16:41:30'),
(49, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'mora@localhost', '2024-04-08 16:41:46'),
(50, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'mora@localhost', '2024-04-08 16:43:00'),
(51, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:54:27'),
(52, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 16:54:31'),
(53, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:22:33'),
(54, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:24:18'),
(55, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:24:22'),
(56, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:24:28'),
(57, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:25:35'),
(58, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:25:41'),
(59, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:25:45'),
(60, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:25:49'),
(61, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:25:54'),
(62, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-08 23:26:52'),
(63, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-09 16:34:14'),
(64, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-09 16:34:18'),
(65, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-09 16:34:22'),
(66, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-09 16:34:28'),
(67, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-09 16:34:35'),
(68, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:43:44'),
(69, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:44:20'),
(70, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:48:59'),
(71, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:02'),
(72, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:10'),
(73, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:23'),
(74, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:36'),
(75, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:40'),
(76, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:46'),
(77, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:49:51'),
(78, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:50:18'),
(79, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:50:29'),
(80, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:50:44'),
(81, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:50:52'),
(82, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:51:32'),
(83, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:51:37'),
(84, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:53:08'),
(85, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:53:20'),
(86, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:58:26'),
(87, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:58:57'),
(88, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:59:04'),
(89, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 16:59:08'),
(90, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-10 19:03:46'),
(91, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-10 19:04:02'),
(92, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 16:31:12'),
(93, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 16:32:11'),
(94, 'UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 16:33:11'),
(95, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 16:34:51'),
(96, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'jane@localhost', '2024-04-15 16:42:42'),
(97, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:20:15'),
(98, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:20:20'),
(99, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:21:02'),
(100, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:21:07'),
(101, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:21:21'),
(102, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'jane@localhost', '2024-04-15 17:21:25'),
(103, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:23:00'),
(104, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:23:37'),
(105, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:23:41'),
(106, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:23:44'),
(107, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:24:45'),
(108, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:24:49'),
(109, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:26:02'),
(110, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:26:19'),
(111, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:37:36'),
(112, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:37:40'),
(113, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:43:24'),
(114, 'DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', 'anmor@localhost', '2024-04-15 17:43:34'),
(115, 'INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', 'jane@localhost', '2024-04-16 23:03:10'),
(116, 'INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', 'jane@localhost', '2024-04-16 23:10:05'),
(117, 'INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', 'mora@localhost', '2024-04-16 23:24:52'),
(118, 'INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', 'anmor@localhost', '2024-05-07 16:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `tlogo`
--

DROP TABLE IF EXISTS `tlogo`;
CREATE TABLE `tlogo` (
  `idLogo` int(11) NOT NULL,
  `rutaLogo` varchar(255) DEFAULT NULL,
  `nomEmpresa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tlogo`
--

INSERT INTO `tlogo` (`idLogo`, `rutaLogo`, `nomEmpresa`) VALUES
(1, './img/logo/logo.jpg', 'Wall-VE');

-- --------------------------------------------------------

--
-- Table structure for table `tproducto`
--

DROP TABLE IF EXISTS `tproducto`;
CREATE TABLE `tproducto` (
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `precioProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tproducto`
--

INSERT INTO `tproducto` (`idProd`, `idEstacion`, `precioProd`) VALUES
(1, 1, 3),
(2, 2, 75);

--
-- Triggers `tproducto`
--
DROP TRIGGER IF EXISTS `deleteProd`;
DELIMITER $$
CREATE TRIGGER `deleteProd` AFTER DELETE ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertProd`;
DELIMITER $$
CREATE TRIGGER `insertProd` AFTER INSERT ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateProd`;
DELIMITER $$
CREATE TRIGGER `updateProd` AFTER UPDATE ON `tproducto` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tProducto', USER(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tpruebausuario`
--

DROP TABLE IF EXISTS `tpruebausuario`;
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
-- Table structure for table `tusuario`
--

DROP TABLE IF EXISTS `tusuario`;
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
-- Dumping data for table `tusuario`
--

INSERT INTO `tusuario` (`idEmp`, `nombreEmp`, `apellidoPEmp`, `apellidoMEmp`, `fechaNacEmp`, `telEmp`, `generoEmp`, `emailEmp`, `direccionEmp`, `ciudadEmp`, `turnoEmp`, `rolEmp`, `idloginEmp`, `passEmp`, `fIngreso`) VALUES
(1, 'Jane', 'Moran', 'Rivera', '0000-00-00', 6333503037, 'Femenino', 'aa@a.com', 'a', 'a', 'Matutino  ', 'Administrador', 'jane', '1', '0000-00-00'),
(2, 'Brayan', 'Moran', 'Rivera', '2001-01-29', 6333503037, 'Masculino', 'ejemplo@gmail.com', 'C 33 Ave 36 y 37', 'Agua Prieta', 'Vespertino', 'Administrador', 'anmor', '1234', '0000-00-00'),
(212, 'asd', 'asd', 'sad', '2001-06-22', 6331203452, 'Masculino', 'ejemplo@gmail.com', 'C 2 ave 32', 'Agua Prieta', 'Vespertino', 'Administrador', 'jas', '4', '2024-04-08'),
(234, 'Reyna', 'Moran', 'Rivera', '2002-08-22', 6334096027, 'Femenino', 'ejemplo@gmail.com', 'C33', 'Agua Prieta', 'Vespertino', 'Usuario', 'mora', '1234', '2024-04-15'),
(245, 'ELY', 'ASD', 'FGH', '1985-11-21', 6331136570, 'FEMENINO', 'ELY@GMAIL.COM', 'CALLE 47 AVE 19', 'AP', 'MATUTINO', 'Usuario', 'ely', '1234', '2024-04-17'),
(248, 'TEST', 'TEST', 'TEST', '2024-04-04', 112, 'MASCULINO', 'EJEMPLO@GMAIL.COM', 'ASD', 'ASD', 'MATUTINO', 'Administrador', 'test', '666', '2024-04-23'),
(249, 'ASDFG', 'QWERTY', 'QWERTY', '2024-02-08', 1234321, 'MASCULINO', 'ASD@GMAIL.COM', 'ASDF', 'ASDF', 'MATUTINO', 'Administrador', 'qwerty', '666', '2024-05-07'),
(250, 'ZXCVZ', 'XC', 'ZXCXC', '2006-01-10', 123, 'MASCULINO', 'SAD@GMAIL.COM', 'SAD', 'ASD', 'MATUTINO', 'Administrador', 'ghj', '1233', '2024-05-07');

--
-- Triggers `tusuario`
--
DROP TRIGGER IF EXISTS `deleteUsuario`;
DELIMITER $$
CREATE TRIGGER `deleteUsuario` AFTER DELETE ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertUsuario`;
DELIMITER $$
CREATE TRIGGER `insertUsuario` AFTER INSERT ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateUsuario`;
DELIMITER $$
CREATE TRIGGER `updateUsuario` AFTER UPDATE ON `tusuario` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tUsuario', USER(), NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tventa`
--

DROP TABLE IF EXISTS `tventa`;
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
-- Dumping data for table `tventa`
--

INSERT INTO `tventa` (`folioVenta`, `idProd`, `idEstacion`, `idEmp`, `fechaVenta`, `cantWatts`, `efectivoVenta`, `cambioVenta`, `totalVenta`) VALUES
(55, 1, 1, 1, '2024-04-16 23:10:05', 1, 50, 0, 50),
(123, 1, 1, 1, '2024-01-01 00:00:00', 100.5, 200.25, 20.5, 300.75),
(173, 1, 1, 245, '2024-04-17 16:46:56', 10, 700, 200, 500),
(177, 1, 1, 2, '2024-04-17 16:34:35', 10, 800, 300, 500),
(234, 1, 1, 2, '2024-02-05 08:30:00', 150.75, 300.5, 30.75, 400.25),
(256, 1, 1, 2, '2024-04-17 16:37:21', 25, 100, -1150, 1250),
(321, 2, 2, 1, '2024-01-01 00:00:00', 100.5, 200.25, 20.5, 300.75),
(331, 1, 1, 234, '2024-04-16 23:24:52', 50, 2500, 0, 2500),
(345, 1, 2, 1, '2024-03-10 12:15:00', 200.25, 400.75, 40.25, 500.5),
(396, 1, 1, 2, '2024-04-23 16:37:39', 3, 151, 1, 150),
(403, 1, 1, 2, '2024-04-29 17:04:00', 10, 55, 5, 50),
(432, 2, 2, 2, '2024-02-05 08:30:00', 150.75, 300.5, 30.75, 400.25),
(543, 2, 1, 1, '2024-03-10 12:15:00', 200.25, 400.75, 40.25, 500.5),
(567, 1, 1, 1, '2024-05-20 20:00:00', 300.75, 600.5, 60.75, 700.25),
(664, 1, 1, 2, '2024-04-17 16:36:47', 4, 100, -100, 200),
(678, 1, 1, 2, '2024-06-25 09:30:00', 350.25, 700.75, 70.25, 800.5),
(707, 1, 1, 2, '2024-04-17 16:37:37', 2, 200, 100, 100),
(765, 2, 2, 1, '2024-05-20 20:00:00', 432, 600.5, 60.75, 700.25),
(797, 1, 1, 2, '2024-04-17 16:36:19', 4, 150, -50, 200),
(876, 2, 2, 2, '2024-06-25 09:30:00', 350.25, 700.75, 70.25, 800.5),
(940, 1, 1, 2, '2024-04-17 16:32:26', 0, 0, 0, 0),
(958, 1, 1, 1, '2024-04-16 23:03:10', 100, 5500, 500, 5000);

--
-- Triggers `tventa`
--
DROP TRIGGER IF EXISTS `deleteVenta`;
DELIMITER $$
CREATE TRIGGER `deleteVenta` AFTER DELETE ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('DELETE', 'Se realizó una consulta DELETE en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertVenta`;
DELIMITER $$
CREATE TRIGGER `insertVenta` AFTER INSERT ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('INSERT', 'Se realizó una consulta INSERT en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `updateVenta`;
DELIMITER $$
CREATE TRIGGER `updateVenta` AFTER UPDATE ON `tventa` FOR EACH ROW INSERT INTO tauditorias (tipoProceso, descAudit, empleado,fechaAudit)
  VALUES ('UPDATE', 'Se realizó una consulta UPDATE en la tabla tVenta', USER(), NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tauditorias`
--
ALTER TABLE `tauditorias`
  ADD PRIMARY KEY (`idAudit`);

--
-- Indexes for table `tlogo`
--
ALTER TABLE `tlogo`
  ADD PRIMARY KEY (`idLogo`);

--
-- Indexes for table `tproducto`
--
ALTER TABLE `tproducto`
  ADD PRIMARY KEY (`idProd`);

--
-- Indexes for table `tpruebausuario`
--
ALTER TABLE `tpruebausuario`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indexes for table `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indexes for table `tventa`
--
ALTER TABLE `tventa`
  ADD PRIMARY KEY (`folioVenta`),
  ADD KEY `idProd` (`idProd`),
  ADD KEY `idEmp` (`idEmp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tauditorias`
--
ALTER TABLE `tauditorias`
  MODIFY `idAudit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tlogo`
--
ALTER TABLE `tlogo`
  MODIFY `idLogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tventa`
--
ALTER TABLE `tventa`
  ADD CONSTRAINT `tventa_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `tproducto` (`idProd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tventa_ibfk_2` FOREIGN KEY (`idEmp`) REFERENCES `tusuario` (`idEmp`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
