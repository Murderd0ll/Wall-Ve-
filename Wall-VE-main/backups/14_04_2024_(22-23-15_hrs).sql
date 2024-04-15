SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS wallve;

USE wallve;

DROP TABLE IF EXISTS tauditorias;

CREATE TABLE `tauditorias` (
  `idAudit` int(11) NOT NULL AUTO_INCREMENT,
  `tipoProceso` varchar(50) NOT NULL,
  `descAudit` varchar(100) NOT NULL,
  `empleado` varchar(50) NOT NULL,
  `fechaAudit` datetime NOT NULL,
  PRIMARY KEY (`idAudit`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tauditorias VALUES("2","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuari","root@localhost","2024-04-07 02:14:14");
INSERT INTO tauditorias VALUES("3","DELETE","Se realizó una consulta DELETE en la tabla tUsuari","root@localhost","2024-04-07 02:14:24");
INSERT INTO tauditorias VALUES("4","INSERT","Se realizó una consulta INSERT en la tabla tUsuari","root@localhost","2024-04-07 02:14:47");
INSERT INTO tauditorias VALUES("5","INSERT","Se realizó una consulta INSERT en la tabla tProduc","root@localhost","2024-04-07 02:16:45");
INSERT INTO tauditorias VALUES("6","UPDATE","Se realizó una consulta UPDATE en la tabla tProduc","root@localhost","2024-04-07 02:16:45");
INSERT INTO tauditorias VALUES("7","DELETE","Se realizó una consulta DELETE en la tabla tProduc","root@localhost","2024-04-07 02:16:48");
INSERT INTO tauditorias VALUES("8","INSERT","Se realizó una consulta INSERT en la tabla tVenta","root@localhost","2024-04-07 02:18:15");
INSERT INTO tauditorias VALUES("9","UPDATE","Se realizó una consulta UPDATE en la tabla tVenta","root@localhost","2024-04-07 02:18:15");
INSERT INTO tauditorias VALUES("10","DELETE","Se realizó una consulta DELETE en la tabla tVenta","root@localhost","2024-04-07 02:18:19");
INSERT INTO tauditorias VALUES("11","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 02:26:34");
INSERT INTO tauditorias VALUES("12","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","root@localhost","2024-04-07 03:18:06");
INSERT INTO tauditorias VALUES("13","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","root@localhost","2024-04-07 03:18:15");
INSERT INTO tauditorias VALUES("14","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:14:09");
INSERT INTO tauditorias VALUES("15","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:19:42");
INSERT INTO tauditorias VALUES("16","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:21:21");
INSERT INTO tauditorias VALUES("17","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:22:28");
INSERT INTO tauditorias VALUES("18","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:25:17");
INSERT INTO tauditorias VALUES("19","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:37:31");
INSERT INTO tauditorias VALUES("20","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:40:14");
INSERT INTO tauditorias VALUES("21","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:43:07");
INSERT INTO tauditorias VALUES("22","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:43:43");
INSERT INTO tauditorias VALUES("23","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:51:18");
INSERT INTO tauditorias VALUES("24","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 15:54:43");
INSERT INTO tauditorias VALUES("25","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:00:17");
INSERT INTO tauditorias VALUES("26","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:00:28");
INSERT INTO tauditorias VALUES("27","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:04:21");
INSERT INTO tauditorias VALUES("28","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:04:37");
INSERT INTO tauditorias VALUES("29","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:04:57");
INSERT INTO tauditorias VALUES("30","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 16:07:56");
INSERT INTO tauditorias VALUES("31","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 16:08:15");
INSERT INTO tauditorias VALUES("32","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:08:39");
INSERT INTO tauditorias VALUES("33","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 16:13:33");
INSERT INTO tauditorias VALUES("34","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:16:33");
INSERT INTO tauditorias VALUES("35","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-07 16:16:51");
INSERT INTO tauditorias VALUES("36","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-07 16:39:59");
INSERT INTO tauditorias VALUES("37","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-07 17:22:21");
INSERT INTO tauditorias VALUES("38","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 17:30:23");
INSERT INTO tauditorias VALUES("39","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 17:30:36");
INSERT INTO tauditorias VALUES("40","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","root@localhost","2024-04-07 17:30:41");
INSERT INTO tauditorias VALUES("41","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-07 18:24:05");
INSERT INTO tauditorias VALUES("42","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","mora@localhost","2024-04-07 18:57:05");
INSERT INTO tauditorias VALUES("43","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","mora@localhost","2024-04-07 18:57:11");
INSERT INTO tauditorias VALUES("44","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","root@localhost","2024-04-08 23:04:10");
INSERT INTO tauditorias VALUES("45","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","root@localhost","2024-04-08 23:04:40");
INSERT INTO tauditorias VALUES("46","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-09 00:41:42");
INSERT INTO tauditorias VALUES("47","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","mora@localhost","2024-04-09 00:41:47");
INSERT INTO tauditorias VALUES("48","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","mora@localhost","2024-04-09 00:41:52");
INSERT INTO tauditorias VALUES("49","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","mora@localhost","2024-04-09 00:42:05");
INSERT INTO tauditorias VALUES("50","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","mora@localhost","2024-04-09 00:42:09");
INSERT INTO tauditorias VALUES("51","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 01:28:05");
INSERT INTO tauditorias VALUES("52","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 01:40:10");
INSERT INTO tauditorias VALUES("53","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 01:40:25");
INSERT INTO tauditorias VALUES("54","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 01:41:46");
INSERT INTO tauditorias VALUES("55","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 01:41:51");
INSERT INTO tauditorias VALUES("56","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 02:02:54");
INSERT INTO tauditorias VALUES("57","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 02:03:26");
INSERT INTO tauditorias VALUES("58","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 02:03:48");
INSERT INTO tauditorias VALUES("59","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 02:07:25");
INSERT INTO tauditorias VALUES("60","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:14:02");
INSERT INTO tauditorias VALUES("61","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:14:07");
INSERT INTO tauditorias VALUES("62","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:15:46");
INSERT INTO tauditorias VALUES("63","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:15:56");
INSERT INTO tauditorias VALUES("64","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:19:31");
INSERT INTO tauditorias VALUES("65","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:19:37");
INSERT INTO tauditorias VALUES("66","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:23:10");
INSERT INTO tauditorias VALUES("67","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:23:23");
INSERT INTO tauditorias VALUES("68","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:24:13");
INSERT INTO tauditorias VALUES("69","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:24:19");
INSERT INTO tauditorias VALUES("70","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:33:03");
INSERT INTO tauditorias VALUES("71","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:33:08");
INSERT INTO tauditorias VALUES("72","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:33:11");
INSERT INTO tauditorias VALUES("73","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:33:14");
INSERT INTO tauditorias VALUES("74","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:50:31");
INSERT INTO tauditorias VALUES("75","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:50:45");
INSERT INTO tauditorias VALUES("76","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:51:58");
INSERT INTO tauditorias VALUES("77","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:54:03");
INSERT INTO tauditorias VALUES("78","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:54:10");
INSERT INTO tauditorias VALUES("79","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 03:55:50");
INSERT INTO tauditorias VALUES("80","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:56:09");
INSERT INTO tauditorias VALUES("81","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 03:58:42");
INSERT INTO tauditorias VALUES("82","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:58:45");
INSERT INTO tauditorias VALUES("83","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 03:58:49");
INSERT INTO tauditorias VALUES("84","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:00:24");
INSERT INTO tauditorias VALUES("85","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:00:30");
INSERT INTO tauditorias VALUES("86","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:00:35");
INSERT INTO tauditorias VALUES("87","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:00:56");
INSERT INTO tauditorias VALUES("88","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:02:43");
INSERT INTO tauditorias VALUES("89","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:02:47");
INSERT INTO tauditorias VALUES("90","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:02:54");
INSERT INTO tauditorias VALUES("91","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:03:31");
INSERT INTO tauditorias VALUES("92","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:03:35");
INSERT INTO tauditorias VALUES("93","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:03:40");
INSERT INTO tauditorias VALUES("94","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:04:42");
INSERT INTO tauditorias VALUES("95","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:06:24");
INSERT INTO tauditorias VALUES("96","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-11 04:10:19");
INSERT INTO tauditorias VALUES("97","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:14:13");
INSERT INTO tauditorias VALUES("98","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:16:16");
INSERT INTO tauditorias VALUES("99","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:16:20");
INSERT INTO tauditorias VALUES("100","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:16:23");
INSERT INTO tauditorias VALUES("101","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-11 04:16:33");
INSERT INTO tauditorias VALUES("102","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-11 04:16:44");
INSERT INTO tauditorias VALUES("103","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-14 20:34:38");



DROP TABLE IF EXISTS tproducto;

CREATE TABLE `tproducto` (
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `precioProd` int(11) NOT NULL,
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tproducto VALUES("1","1","50");
INSERT INTO tproducto VALUES("2","2","75");



DROP TABLE IF EXISTS tpruebausuario;

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
  `passEmp` varchar(11) NOT NULL,
  PRIMARY KEY (`idEmp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS tusuario;

CREATE TABLE `tusuario` (
  `idEmp` int(11) NOT NULL AUTO_INCREMENT,
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
  `fIngreso` date NOT NULL,
  PRIMARY KEY (`idEmp`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tusuario VALUES("1","Jane","Moran","Rivera","2002-08-22","6334096027","Femenino","aa@a.com","C 33 ave 36 y 37","Agua Prieta","Vespertino","Administrador","jane","1","0000-00-00");
INSERT INTO tusuario VALUES("2","Brayan","Moran","Rivera","2001-01-29","6333503037","Femenino","ejemplo@gmail.com","C 33 Ave 36 y 37","Agua Prieta","Vespertino","Administrador","anmor","1234","0000-00-00");
INSERT INTO tusuario VALUES("26","a","a","a","2024-04-02","1","Masculino","a","a","a","Matutino  ","a","root"," ","2024-04-02");
INSERT INTO tusuario VALUES("30","cc","c","c","2024-04-01","2","v","v","v","v","Vespertino","v","v","v","2024-04-09");
INSERT INTO tusuario VALUES("213","Reyna","Moran","","2002-08-22","6334096027","Femenino","ejemplo@gmail.com","C 33 Ave 36 y 37","Agua Prieta","Vespertino","Administrador","mora","1234","0000-00-00");
INSERT INTO tusuario VALUES("216","","","","2024-04-12","0","","","","","        \n","","","asd","2024-04-11");
INSERT INTO tusuario VALUES("232","","","","0000-00-00","0","","","","","","","","","2024-04-14");



DROP TABLE IF EXISTS tventa;

CREATE TABLE `tventa` (
  `folioVenta` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `idEmp` int(11) NOT NULL,
  `fechaVenta` datetime NOT NULL,
  `cantWatts` double NOT NULL,
  `efectivoVenta` double NOT NULL,
  `cambioVenta` double NOT NULL,
  `totalVenta` double NOT NULL,
  PRIMARY KEY (`folioVenta`),
  KEY `idProd` (`idProd`),
  KEY `idEmp` (`idEmp`),
  CONSTRAINT `tventa_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `tproducto` (`idProd`) ON UPDATE CASCADE,
  CONSTRAINT `tventa_ibfk_2` FOREIGN KEY (`idEmp`) REFERENCES `tusuario` (`idEmp`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tventa VALUES("123","1","1","1","2024-01-01 00:00:00","100.5","200.25","20.5","300.75");
INSERT INTO tventa VALUES("234","1","1","2","2024-02-05 08:30:00","150.75","300.5","30.75","400.25");
INSERT INTO tventa VALUES("321","2","2","1","2024-01-01 00:00:00","100.5","200.25","20.5","300.75");
INSERT INTO tventa VALUES("345","1","2","1","2024-03-10 12:15:00","200.25","400.75","40.25","500.5");
INSERT INTO tventa VALUES("432","2","2","2","2024-02-05 08:30:00","150.75","300.5","30.75","400.25");
INSERT INTO tventa VALUES("543","2","1","1","2024-03-10 12:15:00","200.25","400.75","40.25","500.5");
INSERT INTO tventa VALUES("567","1","1","1","2024-05-20 20:00:00","300.75","600.5","60.75","700.25");
INSERT INTO tventa VALUES("678","1","1","2","2024-06-25 09:30:00","350.25","700.75","70.25","800.5");
INSERT INTO tventa VALUES("765","2","2","1","2024-05-20 20:00:00","432","600.5","60.75","700.25");
INSERT INTO tventa VALUES("876","2","2","2","2024-06-25 09:30:00","350.25","700.75","70.25","800.5");



SET FOREIGN_KEY_CHECKS=1;