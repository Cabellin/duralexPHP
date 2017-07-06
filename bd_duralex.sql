-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2017 a las 20:36:56
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_duralex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogado`
--

CREATE TABLE `abogado` (
  `rut_abogado` varchar(11) NOT NULL,
  `numero_verificador` int(1) NOT NULL,
  `nombre_abogado` varchar(55) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `especialidad` varchar(25) NOT NULL,
  `valor_hora` int(6) DEFAULT NULL,
  `pasword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `id_atencion` int(10) NOT NULL,
  `fecha_atencion` date NOT NULL,
  `estado` varchar(12) DEFAULT NULL,
  `usuario_rut` varchar(11) NOT NULL,
  `abogado_rut_abogado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(10) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `descripcion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut` varchar(11) NOT NULL,
  `numero_verificador` int(1) NOT NULL,
  `nombre_completo` varchar(55) NOT NULL,
  `fecha_incorporacion` date NOT NULL,
  `telefono` int(10) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `tipo_usuario` int(20) NOT NULL,
  `tipo_usuario_id_tipo_usario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abogado`
--
ALTER TABLE `abogado`
  ADD PRIMARY KEY (`rut_abogado`);

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`id_atencion`),
  ADD KEY `atencion_abogado_FK` (`abogado_rut_abogado`),
  ADD KEY `atencion_usuario_FK` (`usuario_rut`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `usuario_tipo_usuario_FK` (`tipo_usuario_id_tipo_usario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `id_atencion` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD CONSTRAINT `atencion_abogado_FK` FOREIGN KEY (`abogado_rut_abogado`) REFERENCES `abogado` (`rut_abogado`),
  ADD CONSTRAINT `atencion_usuario_FK` FOREIGN KEY (`usuario_rut`) REFERENCES `usuario` (`rut`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_tipo_usuario_FK` FOREIGN KEY (`tipo_usuario_id_tipo_usario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
