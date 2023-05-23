.0-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2023 a las 03:56:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0101`
--

CREATE TABLE `0101` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0101`
--

INSERT INTO `0101` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Listón otobo 2\" X 2\" X 3.00', 'Un', '0,280', '5.300 '),
(2, 'Puntilla 2\" con cabeza', 'Lb', '0,020', '3.200 '),
(3, 'Piola gruesa rollo', 'Un', '0,060', '2.700 '),
(4, 'Mineral rojo', 'Kg', '0,004', '5.200 '),
(5, 'Mano de obra albañilería OAA', 'HC', '0,060', '29.757 '),
(6, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0201`
--

CREATE TABLE `0201` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0201`
--

INSERT INTO `0201` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Mano de obra albañilería A', 'HC', '1,500', '8.109 '),
(2, 'Herramienta menor', 'Un', '0,168', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0202`
--

CREATE TABLE `0202` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0202`
--

INSERT INTO `0202` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor unitario`) VALUES
(1, 'Mano de obra albañilería A', 'HC', '0,700', '8.109 '),
(2, 'Carreta tipo buggy', 'DD', '0,070', '3.570'),
(3, 'Herramienta menor', 'Un', '0,400', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0203`
--

CREATE TABLE `0203` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0203`
--

INSERT INTO `0203` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Acarreo volqueta M3/Km (Hasta 10 Km) ', 'Km', '10,000', '1.663 '),
(2, 'Mano de obra albañilería AA', 'HC', '0,100', '16.218 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0204`
--

CREATE TABLE `0204` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0204`
--

INSERT INTO `0204` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Rocamuerta', 'M3', '1,300', '8.000'),
(2, 'Gasolina corriente', 'Gl', '0,050', '9.100'),
(3, 'Aceite motor 4 tiempos', 'Gl', '0,010', '76.000'),
(4, 'Mano de obra albañilería AA', 'HC', '0,600', '16.218'),
(5, 'Vibrocompactador', 'DD', '0,080', '49.200'),
(6, 'Acarreo volqueta M3/Km', 'Km', '5,500', '1.663'),
(7, 'Herramienta menor+-', 'Un', '0,070', '1.600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0204_1`
--

CREATE TABLE `0204_1` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0204_1`
--

INSERT INTO `0204_1` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor unitario`) VALUES
(1, 'Cemento gris', 'Kg', '230,000', '519'),
(2, 'Arena gruesa', 'M3', '0,550', '38.000'),
(3, 'Grava mediana', 'M3', '0,920', '45.000'),
(4, 'Mano de obra albañilería OA', 'H3', '0,320', '21.648'),
(5, 'Mezcladora eléctrica 1 M3', 'DD', '0,125', '38.800'),
(6, 'Herramienta menor', 'Un', '0,150', '1.600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0205`
--

CREATE TABLE `0205` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0205`
--

INSERT INTO `0205` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor unitario`) VALUES
(1, 'Cuartón otobo 2\" X 4\" X 3.00', 'Un', '0,400', '14.600 '),
(2, 'Puntilla 2 1/2\" con cabeza', 'Lb', '0,400', '3.400 '),
(3, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '0,300', '12.250'),
(4, 'Mezcla de concreto 1:2:3.5  3.000 PSI', 'M3', '1,050', '193.648'),
(5, 'Mano de obra albañilería OA', 'HC', '2,730', '21.648'),
(6, 'Herramienta menor', 'Un', '0,220', '1.600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0206`
--

CREATE TABLE `0206` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0206`
--

INSERT INTO `0206` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cuartón otobo 2\" X 4\" X 3.00', 'Un', '0,380', '14.600 '),
(2, 'Puntilla 2 1/2\" con cabeza', 'Lb', '2,000', '3.400 '),
(3, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '2,700', '12.250 '),
(4, 'Mezcla de concreto 1:2:3.5  3.000 PSI', 'M3', '1,050', '193.690 '),
(5, 'Mano de obra albañilería OA', 'HC', '3,000', '21.648 '),
(6, 'Herramienta menor', 'Un', '0,190', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0207`
--

CREATE TABLE `0207` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0207`
--

INSERT INTO `0207` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Gasolina corriente', 'Gl', '0,050', '9.100'),
(2, 'Aceite motor 4 tiempos', 'Gl', '0,010', '76.000'),
(3, 'Mano de obra albañilería AA', 'HC', '0,600', '16.218 '),
(4, 'Vibrocompactador', 'DD', '0,080', '49.200 '),
(5, 'Herramienta menor', 'Un', '0,070', '1.600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0208`
--

CREATE TABLE `0208` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0208`
--

INSERT INTO `0208` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Bastidor otobo 2\" X 2\" X 3.00', 'Un', '3,300', '3.200 '),
(2, 'Puntilla 2 1/2\" con cabeza', 'Lb', '1,500', '3.400 '),
(3, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '5,000', '12.250 '),
(4, 'Mezcla de concreto 1:2:3.5  3.000 PSI', 'M3', '1,050', '193.690 '),
(5, 'Mano de obra albañilería OAA', 'HC', '3,100', '29.757 '),
(6, 'Herramienta menor', 'Un', '0,190', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0209`
--

CREATE TABLE `0209` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0209`
--

INSERT INTO `0209` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Alambre negro #18', 'Kg', '0,030', '4.600'),
(2, 'Segueta sin marco', 'Un', '0,015', '11.900 '),
(3, 'Varilla hierro 37.000 PSI', 'Kg', '1,000', '2.950 '),
(4, 'Mano de obra albañilería A', 'HC', '0,020', '8.109 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0301`
--

CREATE TABLE `0301` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0301`
--

INSERT INTO `0301` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Alambre negro #18', 'Un', '0,060', '4.600 '),
(2, 'Refuerzo hierro figurado 37.000 PSI', 'Kg', '4,500', '3.590 '),
(3, 'Rocamuerta', 'M3', '0,190', '17.147 '),
(4, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '3,400', '12.250 '),
(5, 'Mezcla concreto 3.100 PSI', 'M3', '0,490', '258.190 '),
(6, 'Mezcla mortero 1:2', 'M3', '0,050', '294.362 '),
(7, 'Mano de obra albañilería OA', 'HC', '4,750', '21.648 '),
(8, 'Herramienta menor', 'Un', '0,190', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0302`
--

CREATE TABLE `0302` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0302`
--

INSERT INTO `0302` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Alambre negro #18', 'Un', '0,050', '4.600'),
(2, 'Refuerzo hierro figurado 37.000 PSI', 'Kg', '4,300', '3.590 '),
(3, 'Rocamuerta', 'M3', '0,170', '17.147 '),
(4, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '3,400', '12.250 '),
(5, 'Mezcla concreto 3.100 PSI', 'M3', '0,400', '258.190 '),
(6, 'Mezcla mortero 1:2', 'M3', '0,050', '21.648 '),
(7, 'Mano de obra albañilería OA', 'HC', '4,500', '21.648 '),
(8, 'Herramienta menor', 'Un', '0,150', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0303`
--

CREATE TABLE `0303` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0303`
--

INSERT INTO `0303` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,008', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,008', '24.350 '),
(3, 'Tubo ventilación PVC lluvias 3\"', 'ML', '1,000', '10.660 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,350', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0304`
--

CREATE TABLE `0304` (
  `ID` int(15) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0304`
--

INSERT INTO `0304` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,008', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,008', '24.350 '),
(3, 'Tubo sanitario PVC aguas negras 3\"', 'ML', '1,000', '16.433 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,350', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0305`
--

CREATE TABLE `0305` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0305`
--

INSERT INTO `0305` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,008', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,008', '24.350 '),
(3, 'Tubo PVC sanitario 4\"', 'ML', '1,000', '21.480 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,350', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0306`
--

CREATE TABLE `0306` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0306`
--

INSERT INTO `0306` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,004', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,004', '24.350 '),
(3, 'Tubo PVC sanitario 3\"', 'ML', '1,000', '11.580 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,300', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0307`
--

CREATE TABLE `0307` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0307`
--

INSERT INTO `0307` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,004', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,004', '24.350 '),
(3, 'Tubo PVC sanitario 2\"', 'ML', '1,000', '6.736 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,250', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0308`
--

CREATE TABLE `0308` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0308`
--

INSERT INTO `0308` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `valor unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,004', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,004', '24.350 '),
(3, 'Codo PVC sanitario 3\" X 90', 'Un', '1,000', '4.100 '),
(4, 'Tubo PVC sanitario 3\"', 'ML', '1,000', '11.580 '),
(5, 'Mano de obra hidrosanitaria OA', 'HC', '0,600', '23.002 '),
(6, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0309`
--

CREATE TABLE `0309` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0309`
--

INSERT INTO `0309` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,004', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,004', '24.350 '),
(3, 'Codo PVC sanitario 2\" X 90', 'Un', '1,000', '1.900'),
(4, 'Tubo PVC sanitario 2\"', 'ML', '1,000', '6.736 '),
(5, 'Mano de obra hidrosanitaria OA', 'HC', '0,400', '23.002 '),
(6, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0310`
--

CREATE TABLE `0310` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0310`
--

INSERT INTO `0310` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,005', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,005', '24.350 '),
(3, 'Codo PVC sanitario 3\" X 90', 'Un', '1,000', '4.100'),
(4, 'Tubo PVC sanitario 3\"', 'ML', '1,000', '11.580'),
(5, 'Mano de obra hidrosanitaria OA', 'HC', '1,080', '23.002 '),
(6, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0311`
--

CREATE TABLE `0311` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0311`
--

INSERT INTO `0311` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,008', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,008', '24.350 '),
(3, 'Codo PVC sanitario 2\" X 90', 'Un', '1,000', '1.900'),
(4, 'Tubo PVC sanitario 2\"', 'ML', '1,000', '6.736 '),
(5, 'Mano de obra hidrosanitaria OA', 'HC', '0,790', '23.002 '),
(6, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0401`
--

CREATE TABLE `0401` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0401`
--

INSERT INTO `0401` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Tabla otobo 1\" X 4\" X 3.00', 'Un', '0,330', '6.500 '),
(2, 'Puntilla 2 1/2\"con cabeza', 'Lb', '0,050', '3.400 '),
(3, 'Mezcla concreto 2.500 PSI', 'M3', '0,100', '232.000 '),
(4, 'Mano de obra albañilería OA', 'HC', '0,600', '21.648 '),
(5, 'Herramienta menor', 'Un', '0,140', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0401_1`
--

CREATE TABLE `0401_1` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0401_1`
--

INSERT INTO `0401_1` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cemento gris', 'Kg', '300,000', '519 '),
(2, 'Arena gruesa', 'M3', '0,720', '38.000 '),
(3, 'Grava mediana', 'M3', '0,720', '45.000 '),
(4, 'Mano de obra albañilería OA', 'HC', '0,300', '21.648 '),
(5, 'Mezcladora eléctrica 1 M3', 'DD', '0,250', '38.800 '),
(6, 'Herramienta menor', 'Un', '0,215', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0501`
--

CREATE TABLE `0501` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(30) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0501`
--

INSERT INTO `0501` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cemento gris', 'Kg', '350,000', '519 '),
(2, 'Arena gruesa', 'M3', '0,550', '38.000 '),
(3, 'Grava mediana', 'M3', '0,840', '45.000 '),
(4, 'Mano de obra albañilería OA', 'HC', '0,360', '21.648 '),
(5, 'Mezcladora eléctrica 1 M3', 'DD', '0,250', '38.800 '),
(6, 'Herramienta menor', 'Un', '0,215', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0502`
--

CREATE TABLE `0502` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0502`
--

INSERT INTO `0502` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cuartón otobo 2\" X 4\" X 3.00', 'Un', '5,600', '14.600 '),
(2, 'Puntilla 2 1/2\" con cabeza', 'Lb', '8,000', '3.400 '),
(3, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '5,000', '12.250 '),
(4, 'Bastidor de otobo 2\" X 2\" X 3.00', 'Un', '5,650', '3.200 '),
(5, 'Mezcla de concreto 1:2:3.5  3.000 PSI', 'M3', '1,050', '258.190 '),
(6, 'Mano de obra albañilería OAAA', 'HC', '8,200', '37.866 '),
(7, 'Vibrador eléctrico', 'DD', '0,200', '38.000 '),
(8, 'Taco metálico extensión hasta 3.00 ML', 'DD', '24,000', '250 '),
(9, '', '', '', ''),
(10, 'Andamio metálico tubular', 'Un/DD', '4,000', '3.200 '),
(11, 'Herramienta menor', 'Un', '0,455', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0503`
--

CREATE TABLE `0503` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0503`
--

INSERT INTO `0503` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cuartón otobo 2\" X 4\" X 3.00', 'Un', '5,300', '14.600 '),
(2, 'Puntilla 2 1/2\" con cabeza', 'Lb', '6,000', '3.400 '),
(3, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '6,900', '12.250 '),
(4, 'Bastidor de otobo 2\" X 2\" X 3.00', 'Un', '4,800', '3.200 '),
(5, 'Mezcla de concreto 1:2:3.5  3.000 PSI', 'M3', '1,050', '258.190 '),
(6, 'Mano de obra albañilería OAAA', 'HC', '9,300', '37.866 '),
(7, 'Vibrador eléctrico', 'DD', '0,200', '38.000 '),
(8, 'Taco metálico extensión hasta 3.00 ML', 'DD', '46,000', '250 '),
(9, 'Andamio metálico tubular', 'Un/DD', '8,000', '3.200 '),
(10, 'Herramienta menor', 'Un', '0,445', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0504`
--

CREATE TABLE `0504` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(60) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0504`
--

INSERT INTO `0504` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Alambre negro #18', 'Kg', '0,050', '4.600 '),
(2, 'Perfil 6.00 ml placafácil 1.5 mm', 'ML', '1,000', '20.250 '),
(3, 'Bloquelón gres placafácil 0.80 X 0.23 X 0.08', 'Un', '5,000', '4.300 '),
(4, 'Malla electrosoldada 6 mm X 6 mm espacio 0.15', 'Un', '0,070', '190.100 '),
(5, 'Mezcla de concreto 1:2:3.5  3.100 PSI', 'M3', '0,075', '258.190 '),
(6, 'Mano de obra albañilería OAAA', 'HC', '0,500', '37.866 '),
(7, 'Vibrador eléctrico', 'DD', '0,100', '38.000 '),
(8, 'Herramienta menor', 'Un', '0,230', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0505`
--

CREATE TABLE `0505` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0505`
--

INSERT INTO `0505` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Alambre negro #18', 'Kg', '1,800', '4.600 '),
(2, 'Guadua taco 3.00 ML', 'Un', '5,000', '7.500 '),
(3, 'Cuartón otobo 2\" X 4\" X 3.00', 'Un', '4,400', '14.600 '),
(4, 'Puntilla 2 1/2\" con cabeza', 'Lb', '1,900', '3.400 '),
(5, 'Tabla otobo 1\" X 10\" X 3.00', 'Un', '0,800', '12.250 '),
(6, 'Bastidor de otobo 2\" X 2\" X 3.00', 'Un', '6,500', '3.200 '),
(7, 'Mezcla de concreto 1:2:3.5  3.100 PSI', 'M3', '1,050', '258.190 '),
(8, 'Mano de obra albañilería OAAA', 'HC', '14,000', '37.866 '),
(9, 'Vibrador eléctrico', 'DD', '0,500', '38.000 '),
(10, 'Herramienta menor', 'Un', '0,195', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0506`
--

CREATE TABLE `0506` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0506`
--

INSERT INTO `0506` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `valor unitario`) VALUES
(1, 'Alambre negro #18', 'Kg', '0,030', '4.600 '),
(2, 'Segueta sin marco', 'Un', '0,015', '11.900 '),
(3, 'Varilla hierro 37.000 PSI', 'Kg', '1,000', '2.950 '),
(4, 'Mano de obra albañilería A', 'HC', '0,020', '8.109 '),
(5, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0601`
--

CREATE TABLE `0601` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0601`
--

INSERT INTO `0601` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Disolvente\r\n', 'Gl', '0,025', '35.200 '),
(2, 'Anticorrosivo PHCL\r\n', 'Gl', '0,040', '38.500 '),
(3, 'Soldadura 6011 X 1/8\"\r\n', 'Kg', '0,050', '6.780 '),
(4, 'Perfil abierto 120 X 60 calibre 18 pintado\r\n', 'ML', '0,166', '66.624 '),
(5, 'Mano de obra albañilería AA\r\n', 'HC', '0,025', '16.218 '),
(6, 'Mano de obra carpintería metálica taller OAA\r\n', 'HC', '0,230', '37.895 '),
(7, 'Mano de obra carpintería metálica pintura OAA\r\n', 'HC', '0,050', '37.895 '),
(8, 'Pulidora disco\r\n', 'DD', '0,020', '28.000 '),
(9, 'Soldador eléctrico\r\n', 'DD', '0,050', '39.000 '),
(10, 'Andamio metálico tubular\r\n', 'Un/DD', '0,080', '3.200 '),
(11, 'Herramienta menor\r\n', 'Un', '0,110', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0602`
--

CREATE TABLE `0602` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0602`
--

INSERT INTO `0602` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Amarra para teja', 'Un', '4,000', '150 '),
(2, 'Teja ondulada fibrocemento perfil 7', 'Un', '1,080', '11.019 '),
(3, 'Mano de obra albañilería OAA', 'HC', '0,400', '29.757 '),
(4, 'Andamio metálico tubular', 'Un/DD', '0,200', '3.200 '),
(5, 'Herramienta menor', 'Un', '0,300', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0603`
--

CREATE TABLE `0603` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0603`
--

INSERT INTO `0603` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Amarra para teja', 'Un', '4,000', '150 '),
(2, 'Caballete teja termoacústica UPVC', 'Un', '1,080', '28.900 '),
(3, 'Mano de obra albañilería OAA', 'HC', '0,100', '29.757 '),
(4, 'Andamio metálico tubular', 'Un/DD', '0,100', '3.200 '),
(5, 'Herramienta menor', 'Un', '0,110', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0604`
--

CREATE TABLE `0604` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0604`
--

INSERT INTO `0604` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Lámina galvanizada calibre 22\r\n', 'Un', '0,550', '84.180 '),
(2, 'Soldadura estaño plata\r\n', 'Lb', '0,500', '84.150 '),
(3, 'Platina 1/8\" X 1\" X 6.00 ML\r\n', 'Un', '0,165', '15.170 '),
(4, 'Anticorrosivo rojo\r\n', 'Gl', '0,150', '46.650 '),
(5, 'Esmalte \r\n', 'Gl', '0,100', '66.500 '),
(6, 'Mano de obra albañilería AA\r\n', 'HC', '0,300', '16.218 '),
(7, 'Mano de obra carpintería metálica taller OAA\r\n', 'HC', '1,360', '23.002 '),
(8, 'Mano de obra carpintería metálica pintura OAA\r\n', 'HC', '0,300', '23.002 '),
(9, 'Andamio metálico tubular\r\n', 'Un/DD', '0,500', '3.200 '),
(10, 'Herramienta menor\r\n', 'Un', '0,120', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0701`
--

CREATE TABLE `0701` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(5) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0701`
--

INSERT INTO `0701` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Bloque estructural cerámico 12 X 10 X 29\r\n', 'Un', '31,000', '810 '),
(2, 'Mezcla mortero 1:4\r\n', 'M3', '0,020', '235.390 '),
(3, 'Mano de obra albañilería OA\r\n', 'HC', '0,600', '21.648 '),
(4, 'Andamio metálico tubular\r\n', 'Un/DD', '0,100', '3.200 '),
(5, 'Herramienta menor\r\n', 'Un', '0,200', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0701_1`
--

CREATE TABLE `0701_1` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0701_1`
--

INSERT INTO `0701_1` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `valor unitario`) VALUES
(1, 'Cemento gris', 'Kg', '364,000', '519 '),
(2, 'Arena mediana', 'M3', '1,110', '38.000 '),
(3, 'Mano de obra albañilería OA', 'HC', '0,190', '21.648 '),
(4, 'Herramienta menor', 'Un', '0,110', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0801`
--

CREATE TABLE `0801` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(11) NOT NULL,
  `Valor Unitario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0801`
--

INSERT INTO `0801` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,004', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,004', '24.350 '),
(3, 'Tubo PVC presión 1/2\" RDE 9', 'ML', '1,000', '2.550 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,120', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,300', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0802`
--

CREATE TABLE `0802` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0802`
--

INSERT INTO `0802` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,040', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,040', '24.350 '),
(3, 'Adaptador macho PVC presión 1/2\"', 'Un', '2,000', '300 '),
(4, 'Codo galvanizado 1/2\" X 90', 'Un', '1,000', '3.900 '),
(5, 'Codo PVC presión 1/2\"', 'Un', '3,000', '490 '),
(6, 'Niple galvanizado 1/2\" X 2\"', 'Un', '1,000', '2.190 '),
(7, 'Tapón PVC presión 1/2\" roscado', 'Un', '1,000', '400 '),
(8, 'Tubo PVC presión 1/2\" RDE 9', 'ML', '1,500', '2.550 '),
(9, 'Mano de obra hidrosanitaria OA', 'HC', '1,000', '23.002 '),
(10, 'Herramienta menor', 'Un', '0,300', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0803`
--

CREATE TABLE `0803` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0803`
--

INSERT INTO `0803` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cinta teflón 1/2\" rollo 10 ML', 'Un', '0,200', '1.700 '),
(2, 'Adaptador macho PVC presión 1/2\"', 'Un', '2,000', '300 '),
(3, 'Válvula cierre metálico 1/2\"', 'Un', '1,000', '25.350 '),
(4, 'Mano de obra hidrosanitaria OA', 'HC', '0,540', '23.002 '),
(5, 'Herramienta menor', 'Un', '0,300', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0804`
--

CREATE TABLE `0804` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0804`
--

INSERT INTO `0804` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cemento blanco', 'Kg', '0,200', '1.100 '),
(2, 'Caja plástica registro 8\" X 8\"', 'Un', '1,000', '17.700 '),
(3, 'Mano de obra hidrosanitaria OA', 'HC', '0,300', '23.002 '),
(4, 'Herramienta menor', 'Un', '0,300', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0901`
--

CREATE TABLE `0901` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0901`
--

INSERT INTO `0901` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,006', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,006', '24.350 '),
(3, 'Alambre cobre THWN #12', 'ML', '8,000', '2.120 '),
(4, 'Alambre cobre THWN #14', 'ML', '3,000', '1.690 '),
(5, 'Conector terminal PVC 1/2\"', 'Un', '2,000', '550 '),
(6, 'Caja octogonal PVC', 'Un', '1,000', '1.000 '),
(7, 'Tubo conduit PVC 1/2\" X 3.00 ML', 'Un', '1,000', '3.950 '),
(8, 'Alambre galvaniado #18', 'Kg', '0,100', '7.550 '),
(9, 'Cinta aislante #33 rollo 20 ML', 'Un', '0,100', '16.900 '),
(10, 'Mano de obra eléctrica OA', 'HC', '0,600', '30.308 '),
(11, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0902`
--

CREATE TABLE `0902` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0902`
--

INSERT INTO `0902` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón\r\n', 'Un', '0,006', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón\r\n', 'Un', '0,006', '24.350 '),
(3, 'Curva PVC conduit 1/2\"\r\n', 'Un', '1,000', '690 '),
(4, 'Alambre cobre THWN #12\r\n', 'ML', '15,000', '2.120 '),
(5, 'Conector terminal PVC 1/2\"\r\n', 'Un', '2,000', '550 '),
(6, 'Caja 2\" X 4\" PVC\r\n', 'Un', '1,000', '1.890 '),
(7, 'Tubo conduit PVC 1/2\" X 3.00 ML\r\n', 'Un', '2,000', '3.950 '),
(8, 'Alambre galvaniado #18\r\n', 'Kg', '0,200', '7.550 '),
(9, 'Cinta aislante #33 rollo 20 ML\r\n', 'Un', '0,200', '16.900 '),
(10, 'Interruptor doble Luz piloto Ornatto\r\n', 'Un', '1,000', '18.290 '),
(11, 'Mano de obra eléctrica OA\r\n', 'HC', '0,700', '30.308 '),
(12, 'Herramienta menor\r\n', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0903`
--

CREATE TABLE `0903` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0903`
--

INSERT INTO `0903` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón\r\n', 'Un', '0,006', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón\r\n', 'Un', '0,006', '24.350 '),
(3, 'Curva PVC conduit 1/2\"\r\n', 'Un', '1,000', '690 '),
(4, 'Alambre cobre THWN #12\r\n', 'ML', '15,000', '2.120 '),
(5, 'Conector terminal PVC 1/2\"\r\n', 'Un', '2,000', '550 '),
(6, 'Caja 2\" X 4\" PVC\r\n', 'Un', '1,000', '1.890 '),
(7, 'Tubo conduit PVC 1/2\" X 3.00 ML\r\n', 'Un', '2,000', '3.950 '),
(8, 'Alambre galvaniado #18\r\n', 'Kg', '0,200', '7.550 '),
(9, 'Cinta aislante #33 rollo 20 ML\r\n', 'Un', '0,200', '16.900 '),
(10, 'Interruptor sencillo Luz piloto Ornatto\r\n', 'Un', '1,000', '9.410 '),
(11, 'Mano de obra eléctrica OA\r\n', 'HC', '0,600', '30.308 '),
(12, 'Herramienta menor\r\n', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0904`
--

CREATE TABLE `0904` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0904`
--

INSERT INTO `0904` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón\r\n', 'Un', '0,006', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón\r\n', 'Un', '0,006', '24.350 '),
(3, 'Curva PVC conduit 1/2\"\r\n', 'Un', '1,000', '690 '),
(4, 'Alambre cobre THWN #12\r\n', 'ML', '6,800', '2.120 '),
(5, 'Conector terminal PVC 1/2\"\r\n', 'Un', '2,000', '550 '),
(6, 'Caja 2\" X 4\" PVC\r\n', 'Un', '1,000', '1.890 '),
(7, 'Tubo conduit PVC 1/2\" X 3.00 ML\r\n', 'Un', '2,000', '3.950 '),
(8, 'Alambre galvaniado #18\r\n', 'Kg', '0,200', '7.550 '),
(9, 'Cinta aislante #33 rollo 20 ML\r\n', 'Un', '0,200', '16.900 '),
(10, 'Interruptor conmutable Luz piloto Ornatto\r\n', 'Un', '1,000', '9.320 '),
(11, 'Mano de obra eléctrica OA\r\n', 'HC', '0,600', '30.308 '),
(12, 'Herramienta menor\r\n', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0905`
--

CREATE TABLE `0905` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0905`
--

INSERT INTO `0905` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Interruptor sencillo Luz piloto Ornatto', 'Un', '1,000', '9.410 '),
(2, 'Mano de obra eléctrica OA', 'HC', '0,200', '30.308 '),
(3, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0906`
--

CREATE TABLE `0906` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0906`
--

INSERT INTO `0906` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Interruptor doble Luz piloto Ornatto', 'Un', '1,000', '18.290 '),
(2, 'Mano de obra eléctrica OA', 'HC', '0,200', '30.308 '),
(3, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0907`
--

CREATE TABLE `0907` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0907`
--

INSERT INTO `0907` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Interruptor conmutable Luz piloto Ornatto', 'Un', '1,000', '9.320 '),
(2, 'Mano de obra eléctrica OA', 'HC', '0,200', '30.308 '),
(3, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0908`
--

CREATE TABLE `0908` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0908`
--

INSERT INTO `0908` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Interruptor toma Luz piloto Ornatto', 'Un', '1,000', '10.300 '),
(2, 'Mano de obra eléctrica OA', 'HC', '0,200', '30.308 '),
(3, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0909`
--

CREATE TABLE `0909` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0909`
--

INSERT INTO `0909` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Soldadura PVC 1/8\" galón', 'Un', '0,006', '49.900 '),
(2, 'Limpiador PVC 1/8\" galón', 'Un', '0,006', '24.350 '),
(3, 'Curva PVC conduit 1/2\"', 'Un', '1,000', '690 '),
(4, 'Alambre cobre THWN #12', 'ML', '6,000', '2.120 '),
(5, 'Alambre cobre THWN #14', 'ML', '3,000', '1.690 '),
(6, 'Conector terminal PVC 1/2\"', 'Un', '2,000', '550 '),
(7, 'Caja 2\" X 4\" PVC', 'Un', '1,000', '1.890 '),
(8, 'Tubo conduit PVC 1/2\" X 3.00 ML', 'Un', '1,000', '3.950 '),
(9, 'Alambre galvaniado #18', 'Kg', '0,200', '7.550 '),
(10, 'Cinta aislante #33 rollo 20 ML', 'Un', '0,200', '16.900 '),
(11, 'Toma doble Ornatto', 'Un', '1,000', '6.300 '),
(12, 'Mano de obra eléctrica OA', 'HC', '0,600', '30.308 '),
(13, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `0910`
--

CREATE TABLE `0910` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(60) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `0910`
--

INSERT INTO `0910` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Toma doble polo a tierra Ornatto', 'Un', '1,000', '6.300 '),
(2, 'Mano de obra eléctrica OA', 'HC', '0,200', '30.308 '),
(3, 'Herramienta menor', 'Un', '0,040', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1001`
--

CREATE TABLE `1001` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1001`
--

INSERT INTO `1001` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Mezcla mortero 1:3', 'M3', '0,050', '281.340 '),
(2, 'Mano de obra albañilería OA', 'HC', '0,410', '21.648 '),
(3, 'Herramienta menor', 'Un', '0,175', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1001_1`
--

CREATE TABLE `1001_1` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `valor unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1001_1`
--

INSERT INTO `1001_1` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `valor unitario`) VALUES
(1, 'Cemento gris', 'Kg', '454,000', '519 '),
(2, 'Arena mediana', 'M3', '1,090', '38.000 '),
(3, 'Mano de obra albañilería OA', 'HC', '0,190', '21.648 '),
(4, 'Herramienta menor', 'Un', '0,110', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1002`
--

CREATE TABLE `1002` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1002`
--

INSERT INTO `1002` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Pegante porcelanato baja absorción saco 23 Kg\r\n', 'Un', '0,174', '39.900 '),
(2, 'Porcelanato 0.60 X 0.60\r\n', 'M2', '1,000', '25.820 '),
(3, 'Emboquillador látex\r\n', 'Kg', '0,300', '9.750 '),
(4, 'Wipe\r\n', 'Kg', '0,100', '6.500 '),
(5, 'Mano de obra albañilería OA\r\n', 'HC', '0,750', '21.648 '),
(6, 'Herramienta menor\r\n', 'Un', '0,500', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1101`
--

CREATE TABLE `1101` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1101`
--

INSERT INTO `1101` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Pegante cerámica saco 25 Kg', 'Un', '0,174', '36.900 '),
(2, 'Cerámica 0.33 X 0.60', 'M2', '1,000', '19.530 '),
(3, 'Emboquillador látex', 'Kg', '0,300', '9.750 '),
(4, 'Wipe', 'Kg', '0,100', '6.500 '),
(5, 'Mano de obra albañilería OA', 'HC', '0,690', '21.648 '),
(6, 'Herramienta menor', 'Un', '0,500', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1102`
--

CREATE TABLE `1102` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1102`
--

INSERT INTO `1102` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Rejilla sosco 3\" X 2\"', 'Un', '1,000', '15.480 '),
(2, 'Cemento gris', 'Kg', '0,100', '519 '),
(3, 'Mano de obra albañilería OA', 'HC', '0,250', '21.648 '),
(4, 'Herramienta menor', 'Un', '0,020', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1103`
--

CREATE TABLE `1103` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1103`
--

INSERT INTO `1103` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cemento blanco', 'Kg', '1,000', '1.100 '),
(2, 'Acople flexible griflex', 'Un', '1,000', '28.900 '),
(3, 'Sanitario Aquaplus Corona', 'Un', '1,000', '197.570 '),
(4, 'Mano de obra albañilería OA', 'HC', '1,300', '21.648 '),
(5, 'Herramienta menor', 'Un', '0,025', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1104`
--

CREATE TABLE `1104` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(50) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1104`
--

INSERT INTO `1104` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cemento blanco', 'Kg', '0,500', '1.100 '),
(2, 'Acople flexible griflex', 'Un', '1,000', '28.900 '),
(3, 'Lavamanos Providence Corona', 'Un', '1,000', '128.500 '),
(4, 'Mano de obra albañilería OA', 'HC', '1,250', '21.648 '),
(5, 'Herramienta menor', 'Un', '0,025', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1105`
--

CREATE TABLE `1105` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(60) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1105`
--

INSERT INTO `1105` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cinta teflón rollo 10.00 ML', 'Un', '0,120', '1.700 '),
(2, 'Grifería mezclador ducha Toscana 8\"', 'Un', '1,000', '145.530 '),
(3, 'Mano de obra albañilería OA', 'HC', '1,000', '21.648 '),
(4, 'Herramienta menor', 'Un', '0,100', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1106`
--

CREATE TABLE `1106` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1106`
--

INSERT INTO `1106` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Cinta teflón rollo 10.00 ML\r\n', 'Un', '0,120', '1.700 '),
(2, 'Niple galvanizado 1/2\" X 2\"\r\n', 'Un', '2,000', '2.190 '),
(3, 'Tee galvanizada 1/2\"\r\n', 'Un', '1,000', '2.900 '),
(4, 'Grifería galvanizada lavamanos 8\" Artesa\r\n', 'Un', '1,000', '59.630 '),
(5, 'Mano de obra albañilería OA\r\n', 'HC', '0,800', '21.648 '),
(6, 'Herramienta menor\r\n', 'Un', '0,050', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1201`
--

CREATE TABLE `1201` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(60) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1201`
--

INSERT INTO `1201` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Lija 320 agua pliego', 'Un', '1,000', '1.600 '),
(2, 'Soldadura 6011 X 1/8\"', 'Kg', '0,080', '6.780 '),
(3, 'Lámina cold rolled calibre 20', 'Un', '0,750', '54.600 '),
(4, 'Anticorrosivo PHCL', 'Gl', '0,020', '42.300 '),
(5, 'Masilla nitro metal resane', 'Gl', '0,010', '26.100 '),
(6, 'Mano de obra carpintería metálica OA', 'HC', '2,000', '25.978 '),
(7, 'Herramienta menor', 'Un', '7,500', '1.600 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1202`
--

CREATE TABLE `1202` (
  `ID` int(5) NOT NULL,
  `Nombre del item` varchar(70) NOT NULL,
  `Unidad de medida` varchar(3) NOT NULL,
  `Cantidad` varchar(15) NOT NULL,
  `Valor Unitario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `1202`
--

INSERT INTO `1202` (`ID`, `Nombre del item`, `Unidad de medida`, `Cantidad`, `Valor Unitario`) VALUES
(1, 'Perfil aluminio sillar 7-44\r\n', 'Un', '0,138', '51.700 '),
(2, 'Perfil aluminio cabezal 7-44\r\n', 'Un', '0,138', '50.600 '),
(3, 'Chazo plástico 1/4\" \r\n', 'Un', '8,000', '250 '),
(4, 'Perfil aluminio horizontal 7-44\r\n', 'Un', '0,138', '39.600 '),
(5, 'Perfil aluminio vertical 7-45\r\n', 'Un', '0,138', '52.800 '),
(6, 'Vidrio transparente 4 mm\r\n', 'M2', '0,850', '28.000 '),
(7, 'Perfil aluminio enganche 7-44\r\n', 'Un', '0,494', '53.200 '),
(8, 'Perfil aluminio jamba 7-44\r\n', 'Un', '0,988', '48.400 '),
(9, 'Perfil aluminio traslape 7-44\r\n', 'Un', '0,125', '52.800 '),
(10, 'Rodamiento nylon VC 5020\r\n', 'Un', '4,000', '3.560 '),
(11, 'Tornillo PAMPH 1/2\" X 8\r\n', 'Un', '20,000', '200 '),
(12, 'Tornillo PAMPH 1\" X 8\r\n', 'Un', '8,000', '250 '),
(13, 'Empaque neopreno\r\n', 'ML', '7,595', '1.800 '),
(14, 'Guía plástica VC 5020\r\n', 'Un ', '0,800', '120 '),
(15, 'Rodamiento nylon PC 7-44\r\n', 'Un', '1,230', '4.600 '),
(16, 'Remache POT 4 X 4\r\n', 'Un', '4,900', '35 '),
(17, 'Cerradura aluminio Jaguar\r\n', 'Un', '0,617', '7.700 '),
(18, 'Mano de obra carpintería metálica OA\r\n', 'HC', '2,850', '25.978 '),
(19, 'Herramienta menor\r\n', 'Un', '4,900', '1.600 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `0101`
--
ALTER TABLE `0101`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0201`
--
ALTER TABLE `0201`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0202`
--
ALTER TABLE `0202`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0203`
--
ALTER TABLE `0203`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0204`
--
ALTER TABLE `0204`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0204_1`
--
ALTER TABLE `0204_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0205`
--
ALTER TABLE `0205`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0206`
--
ALTER TABLE `0206`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0207`
--
ALTER TABLE `0207`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0208`
--
ALTER TABLE `0208`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0209`
--
ALTER TABLE `0209`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0301`
--
ALTER TABLE `0301`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0302`
--
ALTER TABLE `0302`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0303`
--
ALTER TABLE `0303`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0304`
--
ALTER TABLE `0304`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0305`
--
ALTER TABLE `0305`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0306`
--
ALTER TABLE `0306`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0307`
--
ALTER TABLE `0307`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0308`
--
ALTER TABLE `0308`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0309`
--
ALTER TABLE `0309`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0310`
--
ALTER TABLE `0310`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0311`
--
ALTER TABLE `0311`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0401`
--
ALTER TABLE `0401`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0401_1`
--
ALTER TABLE `0401_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0501`
--
ALTER TABLE `0501`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0502`
--
ALTER TABLE `0502`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0503`
--
ALTER TABLE `0503`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0504`
--
ALTER TABLE `0504`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0505`
--
ALTER TABLE `0505`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0506`
--
ALTER TABLE `0506`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0601`
--
ALTER TABLE `0601`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0602`
--
ALTER TABLE `0602`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0603`
--
ALTER TABLE `0603`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0604`
--
ALTER TABLE `0604`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0701`
--
ALTER TABLE `0701`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0701_1`
--
ALTER TABLE `0701_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0801`
--
ALTER TABLE `0801`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0802`
--
ALTER TABLE `0802`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0803`
--
ALTER TABLE `0803`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0804`
--
ALTER TABLE `0804`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0901`
--
ALTER TABLE `0901`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0902`
--
ALTER TABLE `0902`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0903`
--
ALTER TABLE `0903`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0904`
--
ALTER TABLE `0904`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0905`
--
ALTER TABLE `0905`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0906`
--
ALTER TABLE `0906`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0907`
--
ALTER TABLE `0907`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0908`
--
ALTER TABLE `0908`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0909`
--
ALTER TABLE `0909`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `0910`
--
ALTER TABLE `0910`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1001`
--
ALTER TABLE `1001`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1001_1`
--
ALTER TABLE `1001_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1002`
--
ALTER TABLE `1002`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1101`
--
ALTER TABLE `1101`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1102`
--
ALTER TABLE `1102`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1103`
--
ALTER TABLE `1103`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1104`
--
ALTER TABLE `1104`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1105`
--
ALTER TABLE `1105`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1106`
--
ALTER TABLE `1106`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1201`
--
ALTER TABLE `1201`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `1202`
--
ALTER TABLE `1202`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `0101`
--
ALTER TABLE `0101`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0201`
--
ALTER TABLE `0201`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `0202`
--
ALTER TABLE `0202`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `0203`
--
ALTER TABLE `0203`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `0204`
--
ALTER TABLE `0204`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `0204_1`
--
ALTER TABLE `0204_1`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0205`
--
ALTER TABLE `0205`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0206`
--
ALTER TABLE `0206`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0207`
--
ALTER TABLE `0207`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0208`
--
ALTER TABLE `0208`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0209`
--
ALTER TABLE `0209`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0301`
--
ALTER TABLE `0301`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `0302`
--
ALTER TABLE `0302`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `0303`
--
ALTER TABLE `0303`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0304`
--
ALTER TABLE `0304`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0305`
--
ALTER TABLE `0305`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0306`
--
ALTER TABLE `0306`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0307`
--
ALTER TABLE `0307`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0308`
--
ALTER TABLE `0308`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0309`
--
ALTER TABLE `0309`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0310`
--
ALTER TABLE `0310`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0311`
--
ALTER TABLE `0311`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0401`
--
ALTER TABLE `0401`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0401_1`
--
ALTER TABLE `0401_1`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0501`
--
ALTER TABLE `0501`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `0502`
--
ALTER TABLE `0502`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `0503`
--
ALTER TABLE `0503`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `0504`
--
ALTER TABLE `0504`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `0505`
--
ALTER TABLE `0505`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `0506`
--
ALTER TABLE `0506`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0601`
--
ALTER TABLE `0601`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `0602`
--
ALTER TABLE `0602`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0603`
--
ALTER TABLE `0603`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0604`
--
ALTER TABLE `0604`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `0701`
--
ALTER TABLE `0701`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0701_1`
--
ALTER TABLE `0701_1`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `0801`
--
ALTER TABLE `0801`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0802`
--
ALTER TABLE `0802`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `0803`
--
ALTER TABLE `0803`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `0804`
--
ALTER TABLE `0804`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `0901`
--
ALTER TABLE `0901`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `0902`
--
ALTER TABLE `0902`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `0903`
--
ALTER TABLE `0903`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `0904`
--
ALTER TABLE `0904`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `0905`
--
ALTER TABLE `0905`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `0906`
--
ALTER TABLE `0906`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `0907`
--
ALTER TABLE `0907`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `0908`
--
ALTER TABLE `0908`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `0909`
--
ALTER TABLE `0909`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `0910`
--
ALTER TABLE `0910`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `1001`
--
ALTER TABLE `1001`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `1001_1`
--
ALTER TABLE `1001_1`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `1002`
--
ALTER TABLE `1002`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `1101`
--
ALTER TABLE `1101`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `1102`
--
ALTER TABLE `1102`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `1103`
--
ALTER TABLE `1103`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `1104`
--
ALTER TABLE `1104`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `1105`
--
ALTER TABLE `1105`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `1106`
--
ALTER TABLE `1106`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `1201`
--
ALTER TABLE `1201`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `1202`
--
ALTER TABLE `1202`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
