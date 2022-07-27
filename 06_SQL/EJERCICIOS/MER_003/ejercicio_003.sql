-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 13:17:23
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
-- Base de datos: `ejercicio_003`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nexpediente_a` int(11) NOT NULL,
  `nombre_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento_a` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar_alumnos_modulos`
--

CREATE TABLE `auxiliar_alumnos_modulos` (
  `id_auxiliar` int(11) NOT NULL,
  `nexpediente_a` int(11) NOT NULL,
  `codigo_m` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `codigo_m` int(11) NOT NULL,
  `nombre_m` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni_p` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `dni_p` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_p` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_p` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`nexpediente_a`);

--
-- Indices de la tabla `auxiliar_alumnos_modulos`
--
ALTER TABLE `auxiliar_alumnos_modulos`
  ADD PRIMARY KEY (`id_auxiliar`),
  ADD KEY `fk_alumno` (`nexpediente_a`),
  ADD KEY `fk_modulo` (`codigo_m`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`codigo_m`),
  ADD KEY `fk_profesor` (`dni_p`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`dni_p`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `nexpediente_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `auxiliar_alumnos_modulos`
--
ALTER TABLE `auxiliar_alumnos_modulos`
  MODIFY `id_auxiliar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `codigo_m` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auxiliar_alumnos_modulos`
--
ALTER TABLE `auxiliar_alumnos_modulos`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`nexpediente_a`) REFERENCES `alumnos` (`nexpediente_a`),
  ADD CONSTRAINT `fk_modulo` FOREIGN KEY (`codigo_m`) REFERENCES `modulos` (`codigo_m`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `fk_profesor` FOREIGN KEY (`dni_p`) REFERENCES `profesores` (`dni_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
