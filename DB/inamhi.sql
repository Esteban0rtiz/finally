-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-06-2023 a las 20:46:32
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario-1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_ubicacion` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_ubicacion`) VALUES
(22, 'OFICINA TRANSPORTES', 'OFICINA TRANSPORTES'),
(25, 'DPA DIRECTOR', 'DPA DIRECTOR'),
(26, 'DC 4TO PISO', 'DC 4TO PISO'),
(27, 'MONITOREO HIDROLOGICO', 'MONITOREO HIDROLOGICO'),
(28, 'DPA PRONOSTICO', 'DPA PRONOSTICO'),
(29, 'EX COMEDOR', 'EX COMEDOR'),
(30, 'OFICINAS DE CONSERJES', 'OFICINAS DE CONSERJES'),
(31, 'DIRECCION DE ASESORIA JURIDICA', 'DIRECCION DE ASESORIA JURIDICA'),
(32, 'LABORATORIO MECANICA', 'LABORATORIO MECANICA'),
(33, 'VELOCIDAD DE VIENTO CERRADO', 'VELOCIDAD DE VIENTO CERRADO'),
(34, 'PRESION ATMOSFERICA', 'PRESION ATMOSFERICA'),
(35, 'VELOCIDAD DE VIENTO ABIERTO', 'VELOCIDAD DE VIENTO ABIERTO'),
(36, 'PLUVIOMETRIA', 'PLUVIOMETRIA'),
(37, 'TEMPERATURA Y HUMEDAD', 'TEMPERATURA Y HUMEDAD'),
(38, 'Oficinas RRHH', 'Oficinas RRHH'),
(39, 'DIRECCIÓN ADMINISTRATIVA FINANCIERA SECRETARIA', 'DIRECCIÓN ADMINISTRATIVA FINANCIERA SECRETARÍA'),
(40, 'Oficinas DRO', 'Oficinas DRO'),
(41, 'DIRECCIÓN DRO', 'DIRECCIÓN DRO'),
(42, 'Secretaría DRO', 'Secretaría DRO'),
(43, 'Sala de reuniones', 'Sala de reuniones'),
(44, 'Oficina DIH Gonzalo Cañizares', 'Oficina DIH Gonzalo Cañizares'),
(45, 'Archivo de Meteorología', 'Archivo de Meteorología'),
(46, 'Oficinas DIH Lourdes Suárez', 'Oficinas DIH Lourdes Suárez'),
(47, 'Oficina DIH Jacqueline De La Cruz', 'Oficina DIH Jacqueline De La Cruz'),
(48, 'Oficina DIH Juan Granda', 'Oficina DIH Jacqueline De La Cruz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `producto_id` int NOT NULL AUTO_INCREMENT,
  `producto_codigo` varchar(70) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `producto_codigoB` varchar(70) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_codigoA` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `producto_codigoP` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `producto_nombre` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_serie` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_modelo` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_marca` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_color` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_material` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_estado` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_ubicacion` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_cedulaC` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_custodioA` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_proximaC` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `producto_observaciones` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `producto_foto` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `categoria_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`producto_id`),
  KEY `categoria_id` (`categoria_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_codigo`, `producto_codigoB`, `producto_codigoA`, `producto_codigoP`, `producto_nombre`, `producto_serie`, `producto_modelo`, `producto_marca`, `producto_color`, `producto_material`, `producto_estado`, `producto_ubicacion`, `producto_cedulaC`, `producto_custodioA`, `producto_proximaC`, `producto_observaciones`, `producto_foto`, `categoria_id`, `usuario_id`) VALUES
(13, '1', '26824430', '6267', 'SIN ASIGNAR', 'IMPRESORA', 'Z532VAIV500069', 'CLX3185N', 'SAMSUNG', 'NEGRO', 'PLASTICO', 'BUENO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'IMPRESORA_18.jpg', 25, 5),
(14, '2', '24747789', 'SIN ASIGNAR', 'SIN ASIGNAR', 'IMPRESORA', 'VNBNK84CBP', 'COLOR LASER JETPRO MFPM281fdw', 'HP', 'BLANCA', 'PLASTICO', 'BUENO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'IMPRESORA_2.jpg', 25, 5),
(15, '3', '24244206', '3231', 'SIN ASIGNAR', 'IMPRESORA', 'VNB3P16097', 'LASER JET 1022N', 'HP', 'NEGRO', 'PLASTICO', 'BUENO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'IMPRESORA_75.jpg', 25, 5),
(16, '4', 'SIN ASIGNAR', 'SIN ASIGNAR', 'SINOPTICA55', 'TECLADO', 'K81000904000016', 'K8100', 'DELUX', 'NEGRO', 'PLASTICO', 'MALO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'TECLADO_44.jpg', 25, 5),
(17, '5', '11020602', '5771', 'SIN ASIGNAR', 'TELEFAX', '0DAWC034465', 'KX-FT987', 'PANASONIC', 'NEGRO', 'PLASTICO', 'MALO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'TELEFAX_75.jpg', 25, 5),
(18, '6', 'SIN ASIGNAR', 'SIN ASIGNAR', 'DPA035', 'RECEPTOR MENSAJES Y PARLANTES', '2172', 'HFTRANSCEIVER IC-775DSP', 'HFTRANSCEIVER', 'NEGRO', 'METALICO', 'MALO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'RECEPTOR_MENSAJES_Y_PARLANTES_57.jpg', 25, 5),
(19, '7', '27087578', '8306', 'SIN ASIGNAR', 'MONITOR', 'SN0J7G0Y7443132D2944A00', '6JFTWS1', 'DELL', 'BLANCO/NEGRO', 'PLASTICO', 'BUENO', 'DPA DIRECTOR', '1719816611', 'CRISTIAN PALIZ', 'SIN ASIGNAR', 'NINGUNA', 'MONITOR_1.jpg', 25, 5),
(20, '8', '24774437', 'S A', 'SIN ASIGNAR', 'IMPRESORA PLOTER', 'CN69R3H01W', 'HP-DESINJET', 'HP', 'NEGRO', 'PLASTICO', 'BUENO', 'MONITOREO HIDROLOGICO', '1723605893', 'CRISTIAN PALIZ', 'PAOLA ECHEVERRIA', 'IMPRESORA SIN TONER', 'IMPRESORA_PLOTER_77.jpg', 27, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_clave` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_email` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_usuario`, `usuario_clave`, `usuario_email`) VALUES
(1, 'Administrador', 'Principal', 'Administrador', '$2y$10$EPY9LSLOFLDDBriuJICmFOqmZdnDXxLJG8YFbog5LcExp77DBQvgC', ''),
(5, 'Esteban', 'Ortiz', 'esortiz', '$2y$10$LzacsNziS1dmxGYhxVofEeewYxiWD8hU.oghb9kge3WaKfQJK9OC6', 'esortiz@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
