-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-10-2018 a las 11:39:55
-- Versión del servidor: 5.5.60-log
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `w6000053_soporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `nombre`) VALUES
(1, 'Pendiente'),
(2, 'En Curso'),
(3, 'Detenido'),
(4, 'Cancelado'),
(5, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `quien` varchar(40) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `solucion` varchar(500) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `prioridad` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `asignado` int(11) NOT NULL,
  `fecha_limite` datetime NOT NULL,
  `creador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `fecha_inicio`, `fecha_fin`, `quien`, `titulo`, `descripcion`, `solucion`, `sector`, `prioridad`, `estado`, `asignado`, `fecha_limite`, `creador`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'q', 'q', 'q', '', '', 0, 0, 0, '0000-00-00 00:00:00', 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'q', 'q', 'q', '', '1', 1, 0, 0, '0000-00-00 00:00:00', 1),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'q', 'q', '', '1', 1, 0, 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ult_login` datetime DEFAULT NULL,
  `rol` char(1) NOT NULL DEFAULT 'U',
  `estado` int(11) NOT NULL DEFAULT '1',
  `nombre` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `password`, `ult_login`, `rol`, `estado`, `nombre`, `sector`, `email`) VALUES
(1, 'admin', '12345', '2018-10-03 10:31:23', 'A', 1, 'pepe', 'sistemas', 'pepe@gmail.com'),
(2, 'invitado', '1234', '2018-09-26 10:59:01', 'U', 1, 'anonimo', 'invitado', ''),
(3, 'Matias', '123456', '2018-09-26 10:25:29', 'U', 0, 'Matias', 'oficina', 'mati@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
