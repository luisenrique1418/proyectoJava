

CREATE DATABASE contactoitl;

USE contactoitl;




DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno`  (
  `NoCtrl` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NombreAlumno` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EdadAlumno` smallint(6) NULL DEFAULT NULL,
  `SexoAlumno` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CarreraAlumno` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Semestre` smallint(6) NULL DEFAULT NULL,
  `Email` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Password` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Habilitado` boolean NULL DEFAULT NULL,
  PRIMARY KEY (`NoCtrl`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;


DROP TABLE IF EXISTS `egresado`;
CREATE TABLE `egresado`  (
  `NoCtrlEgresado` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NombreEgresado` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EdadEgresado` smallint(6) NULL DEFAULT NULL,
  `SexoEgresado` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Profesion` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EmailEgresado` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `NombreEmpresa` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `PuestoEmpresa` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Password` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Habilitado` boolean NULL DEFAULT NULL,
  PRIMARY KEY (`NoCtrlEgresado`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;


DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor`  (
  `NoTarjeta` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NombreProfesor` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EdadProfesor` smallint(6) NULL DEFAULT NULL,
  `SexoProfesor` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Profesion` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EmailProfesor` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `CarreraImparte` varchar(95) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Password` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Habilitado` boolean NULL DEFAULT NULL,
  PRIMARY KEY (`NoTarjeta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;



DROP TABLE IF EXISTS `usuarioinvitado`;
CREATE TABLE `usuarioinvitado`  (
  `NoUsu` int(100) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `EdadUsuario` smallint(10) NULL DEFAULT NULL,
  `SexoUsuario` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Email` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`NoUsu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
















