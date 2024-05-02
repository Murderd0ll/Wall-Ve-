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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
INSERT INTO tauditorias VALUES("37","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 16:25:56");
INSERT INTO tauditorias VALUES("38","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:26:08");
INSERT INTO tauditorias VALUES("39","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:26:17");
INSERT INTO tauditorias VALUES("40","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:26:23");
INSERT INTO tauditorias VALUES("41","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 16:35:15");
INSERT INTO tauditorias VALUES("42","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 16:35:23");
INSERT INTO tauditorias VALUES("43","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:35:35");
INSERT INTO tauditorias VALUES("44","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:35:44");
INSERT INTO tauditorias VALUES("45","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 16:35:50");
INSERT INTO tauditorias VALUES("46","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-08 16:36:20");
INSERT INTO tauditorias VALUES("47","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","mora@localhost","2024-04-08 16:39:01");
INSERT INTO tauditorias VALUES("48","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-08 16:41:30");
INSERT INTO tauditorias VALUES("49","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","mora@localhost","2024-04-08 16:41:46");
INSERT INTO tauditorias VALUES("50","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","mora@localhost","2024-04-08 16:43:00");
INSERT INTO tauditorias VALUES("51","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 16:54:27");
INSERT INTO tauditorias VALUES("52","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 16:54:31");
INSERT INTO tauditorias VALUES("53","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:22:33");
INSERT INTO tauditorias VALUES("54","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 23:24:18");
INSERT INTO tauditorias VALUES("55","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 23:24:22");
INSERT INTO tauditorias VALUES("56","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-08 23:24:28");
INSERT INTO tauditorias VALUES("57","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:25:35");
INSERT INTO tauditorias VALUES("58","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:25:41");
INSERT INTO tauditorias VALUES("59","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:25:45");
INSERT INTO tauditorias VALUES("60","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:25:49");
INSERT INTO tauditorias VALUES("61","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-08 23:25:54");
INSERT INTO tauditorias VALUES("62","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-08 23:26:52");
INSERT INTO tauditorias VALUES("63","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-09 16:34:14");
INSERT INTO tauditorias VALUES("64","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-09 16:34:18");
INSERT INTO tauditorias VALUES("65","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-09 16:34:22");
INSERT INTO tauditorias VALUES("66","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-09 16:34:28");
INSERT INTO tauditorias VALUES("67","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-09 16:34:35");
INSERT INTO tauditorias VALUES("68","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:43:44");
INSERT INTO tauditorias VALUES("69","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:44:20");
INSERT INTO tauditorias VALUES("70","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:48:59");
INSERT INTO tauditorias VALUES("71","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:02");
INSERT INTO tauditorias VALUES("72","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:10");
INSERT INTO tauditorias VALUES("73","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:23");
INSERT INTO tauditorias VALUES("74","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:36");
INSERT INTO tauditorias VALUES("75","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:40");
INSERT INTO tauditorias VALUES("76","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:46");
INSERT INTO tauditorias VALUES("77","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:49:51");
INSERT INTO tauditorias VALUES("78","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:50:18");
INSERT INTO tauditorias VALUES("79","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:50:29");
INSERT INTO tauditorias VALUES("80","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:50:44");
INSERT INTO tauditorias VALUES("81","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:50:52");
INSERT INTO tauditorias VALUES("82","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:51:32");
INSERT INTO tauditorias VALUES("83","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:51:37");
INSERT INTO tauditorias VALUES("84","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:53:08");
INSERT INTO tauditorias VALUES("85","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:53:20");
INSERT INTO tauditorias VALUES("86","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:58:26");
INSERT INTO tauditorias VALUES("87","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 16:58:57");
INSERT INTO tauditorias VALUES("88","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:59:04");
INSERT INTO tauditorias VALUES("89","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 16:59:08");
INSERT INTO tauditorias VALUES("90","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-10 19:03:46");
INSERT INTO tauditorias VALUES("91","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-10 19:04:02");
INSERT INTO tauditorias VALUES("92","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 16:31:12");
INSERT INTO tauditorias VALUES("93","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-15 16:32:11");
INSERT INTO tauditorias VALUES("94","UPDATE","Se realizó una consulta UPDATE en la tabla tUsuario","anmor@localhost","2024-04-15 16:33:11");
INSERT INTO tauditorias VALUES("95","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 16:34:51");
INSERT INTO tauditorias VALUES("96","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","jane@localhost","2024-04-15 16:42:42");
INSERT INTO tauditorias VALUES("97","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","jane@localhost","2024-04-15 17:20:15");
INSERT INTO tauditorias VALUES("98","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","jane@localhost","2024-04-15 17:20:20");
INSERT INTO tauditorias VALUES("99","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","jane@localhost","2024-04-15 17:21:02");
INSERT INTO tauditorias VALUES("100","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","jane@localhost","2024-04-15 17:21:07");
INSERT INTO tauditorias VALUES("101","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","jane@localhost","2024-04-15 17:21:21");
INSERT INTO tauditorias VALUES("102","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","jane@localhost","2024-04-15 17:21:25");
INSERT INTO tauditorias VALUES("103","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:23:00");
INSERT INTO tauditorias VALUES("104","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:23:37");
INSERT INTO tauditorias VALUES("105","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:23:41");
INSERT INTO tauditorias VALUES("106","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:23:44");
INSERT INTO tauditorias VALUES("107","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:24:45");
INSERT INTO tauditorias VALUES("108","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:24:49");
INSERT INTO tauditorias VALUES("109","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:26:02");
INSERT INTO tauditorias VALUES("110","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:26:19");
INSERT INTO tauditorias VALUES("111","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:37:36");
INSERT INTO tauditorias VALUES("112","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:37:40");
INSERT INTO tauditorias VALUES("113","INSERT","Se realizó una consulta INSERT en la tabla tUsuario","anmor@localhost","2024-04-15 17:43:24");
INSERT INTO tauditorias VALUES("114","DELETE","Se realizó una consulta DELETE en la tabla tUsuario","anmor@localhost","2024-04-15 17:43:34");
INSERT INTO tauditorias VALUES("115","INSERT","Se realizó una consulta INSERT en la tabla tVenta","jane@localhost","2024-04-16 23:03:10");
INSERT INTO tauditorias VALUES("116","INSERT","Se realizó una consulta INSERT en la tabla tVenta","jane@localhost","2024-04-16 23:10:05");
INSERT INTO tauditorias VALUES("117","INSERT","Se realizó una consulta INSERT en la tabla tVenta","mora@localhost","2024-04-16 23:24:52");



DROP TABLE IF EXISTS tlogo;

CREATE TABLE `tlogo` (
  `idLogo` int(11) NOT NULL AUTO_INCREMENT,
  `rutaLogo` varchar(255) DEFAULT NULL,
  `nomEmpresa` varchar(250) NOT NULL,
  PRIMARY KEY (`idLogo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tlogo VALUES("1","./img/logo/logo.jpg","Wall-VE");



DROP TABLE IF EXISTS tproducto;

CREATE TABLE `tproducto` (
  `idProd` int(11) NOT NULL,
  `idEstacion` int(11) NOT NULL,
  `precioProd` int(11) NOT NULL,
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tproducto VALUES("1","1","3");
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
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tusuario VALUES("1","Jane","Moran","Rivera","0000-00-00","6333503037","Femenino","aa@a.com","a","a","Matutino  ","Administrador","jane","1","0000-00-00");
INSERT INTO tusuario VALUES("2","Brayan","Moran","Rivera","2001-01-29","6333503037","Masculino","ejemplo@gmail.com","C 33 Ave 36 y 37","Agua Prieta","Vespertino","Administrador","anmor","1234","0000-00-00");
INSERT INTO tusuario VALUES("212","asd","asd","sad","2001-06-22","6331203452","Masculino","ejemplo@gmail.com","C 2 ave 32","Agua Prieta","Vespertino","Administrador","jas","4","2024-04-08");
INSERT INTO tusuario VALUES("234","Reyna","Moran","Rivera","2002-08-22","6334096027","Femenino","ejemplo@gmail.com","C33","Agua Prieta","Vespertino","Usuario","mora","1234","2024-04-15");
INSERT INTO tusuario VALUES("245","ELY","ASD","FGH","1985-11-21","6331136570","FEMENINO","ELY@GMAIL.COM","CALLE 47 AVE 19","AP","MATUTINO","Usuario","ely","1234","2024-04-17");
INSERT INTO tusuario VALUES("248","TEST","TEST","TEST","2024-04-04","112","MASCULINO","EJEMPLO@GMAIL.COM","ASD","ASD","MATUTINO","Administrador","test","666","2024-04-23");



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

INSERT INTO tventa VALUES("55","1","1","1","2024-04-16 23:10:05","1","50","0","50");
INSERT INTO tventa VALUES("123","1","1","1","2024-01-01 00:00:00","100.5","200.25","20.5","300.75");
INSERT INTO tventa VALUES("173","1","1","245","2024-04-17 16:46:56","10","700","200","500");
INSERT INTO tventa VALUES("177","1","1","2","2024-04-17 16:34:35","10","800","300","500");
INSERT INTO tventa VALUES("234","1","1","2","2024-02-05 08:30:00","150.75","300.5","30.75","400.25");
INSERT INTO tventa VALUES("256","1","1","2","2024-04-17 16:37:21","25","100","-1150","1250");
INSERT INTO tventa VALUES("321","2","2","1","2024-01-01 00:00:00","100.5","200.25","20.5","300.75");
INSERT INTO tventa VALUES("331","1","1","234","2024-04-16 23:24:52","50","2500","0","2500");
INSERT INTO tventa VALUES("345","1","2","1","2024-03-10 12:15:00","200.25","400.75","40.25","500.5");
INSERT INTO tventa VALUES("396","1","1","2","2024-04-23 16:37:39","3","151","1","150");
INSERT INTO tventa VALUES("403","1","1","2","2024-04-29 17:04:00","10","55","5","50");
INSERT INTO tventa VALUES("432","2","2","2","2024-02-05 08:30:00","150.75","300.5","30.75","400.25");
INSERT INTO tventa VALUES("543","2","1","1","2024-03-10 12:15:00","200.25","400.75","40.25","500.5");
INSERT INTO tventa VALUES("567","1","1","1","2024-05-20 20:00:00","300.75","600.5","60.75","700.25");
INSERT INTO tventa VALUES("664","1","1","2","2024-04-17 16:36:47","4","100","-100","200");
INSERT INTO tventa VALUES("678","1","1","2","2024-06-25 09:30:00","350.25","700.75","70.25","800.5");
INSERT INTO tventa VALUES("707","1","1","2","2024-04-17 16:37:37","2","200","100","100");
INSERT INTO tventa VALUES("765","2","2","1","2024-05-20 20:00:00","432","600.5","60.75","700.25");
INSERT INTO tventa VALUES("797","1","1","2","2024-04-17 16:36:19","4","150","-50","200");
INSERT INTO tventa VALUES("876","2","2","2","2024-06-25 09:30:00","350.25","700.75","70.25","800.5");
INSERT INTO tventa VALUES("940","1","1","2","2024-04-17 16:32:26","0","0","0","0");
INSERT INTO tventa VALUES("958","1","1","1","2024-04-16 23:03:10","100","5500","500","5000");



SET FOREIGN_KEY_CHECKS=1;