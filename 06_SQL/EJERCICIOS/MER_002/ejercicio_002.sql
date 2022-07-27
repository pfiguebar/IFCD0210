-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 12:30:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio_002_copia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camioneros`
--

CREATE TABLE `camioneros` (
  `dni_camionero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_camionero` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_camionero` int(11) NOT NULL,
  `direccion_camionero` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salario_camionero` decimal(8,2) NOT NULL,
  `poblacion_camionero` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `matricula_camion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `modelo_camion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_camion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `potencia_camion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones_camioneros`
--

CREATE TABLE `camiones_camioneros` (
  `id_camion_camionero` int(11) NOT NULL,
  `fk_camion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fk_camionero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `codigo_paquete` int(11) NOT NULL,
  `descripcion_paquete` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `destinatario_paquete` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_destinatario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_provincia_fk` int(11) NOT NULL,
  `dni_camionero_fk` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codigo_provincia` int(11) NOT NULL,
  `nombre_provincia` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camioneros`
--
ALTER TABLE `camioneros`
  ADD PRIMARY KEY (`dni_camionero`);

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`matricula_camion`);

--
-- Indices de la tabla `camiones_camioneros`
--
ALTER TABLE `camiones_camioneros`
  ADD PRIMARY KEY (`id_camion_camionero`),
  ADD KEY `fk_camion` (`fk_camion`),
  ADD KEY `fk_camionero` (`fk_camionero`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`codigo_paquete`),
  ADD KEY `fk_camionero_paquete` (`dni_camionero_fk`),
  ADD KEY `fk_provincia` (`codigo_provincia_fk`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codigo_provincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camiones_camioneros`
--
ALTER TABLE `camiones_camioneros`
  MODIFY `id_camion_camionero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `codigo_paquete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `codigo_provincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `camiones_camioneros`
--
ALTER TABLE `camiones_camioneros`
  ADD CONSTRAINT `fk_camion` FOREIGN KEY (`fk_camion`) REFERENCES `camiones` (`matricula_camion`),
  ADD CONSTRAINT `fk_camionero` FOREIGN KEY (`fk_camionero`) REFERENCES `camioneros` (`dni_camionero`);

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `fk_camionero_paquete` FOREIGN KEY (`dni_camionero_fk`) REFERENCES `camioneros` (`dni_camionero`),
  ADD CONSTRAINT `fk_provincia` FOREIGN KEY (`codigo_provincia_fk`) REFERENCES `provincias` (`codigo_provincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
