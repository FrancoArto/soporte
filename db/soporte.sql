-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2018 a las 05:26:59
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soporte`
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
-- Estructura de tabla para la tabla `prioridades`
--

CREATE TABLE `prioridades` (
  `prioridad_id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prioridades`
--

INSERT INTO `prioridades` (`prioridad_id`, `nombre`) VALUES
(1, 'Prioridad Alta'),
(2, 'Prioridad Media'),
(3, 'Prioridad Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime DEFAULT NULL,
  `quien` varchar(40) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `solucion` varchar(500) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `prioridad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `asignado` int(11) NOT NULL,
  `fecha_limite` datetime NOT NULL,
  `creador` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `fecha_inicio`, `fecha_fin`, `quien`, `titulo`, `descripcion`, `solucion`, `sector`, `prioridad`, `estado`, `asignado`, `fecha_limite`, `creador`, `codigo`) VALUES
(12, '2018-10-17 13:09:08', '0000-00-00 00:00:00', 'Gabriel', 'No funciona', 'No me anda la pc', '', '1', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(13, '2018-10-17 13:24:50', '0000-00-00 00:00:00', 'Yo', 'Prueba', 'Mail', '', '2', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(14, '2018-10-17 13:28:07', '0000-00-00 00:00:00', 'Yo', 'Prueba 2', 'Mail', '', '2', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(15, '2018-10-17 13:29:49', '0000-00-00 00:00:00', 'Yo', 'Prueba 2', 'Mail', '', '2', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(16, '2018-10-17 13:30:44', '0000-00-00 00:00:00', 'Yo', 'Prueba 2', 'Mail', '', '2', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(17, '2018-10-17 13:33:57', '0000-00-00 00:00:00', 'Yo', 'Prueba 3', 'Mail', '', '2', 2, 0, 0, '0000-00-00 00:00:00', 2, ''),
(18, '2018-10-24 13:57:02', '0000-00-00 00:00:00', '', '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 2, ''),
(19, '2018-10-24 13:57:31', '0000-00-00 00:00:00', '', '', '', '', '', 0, 0, 0, '0000-00-00 00:00:00', 2, ''),
(21, '2018-10-24 13:59:33', '0000-00-00 00:00:00', '                                     ', 'gdhgfhgfhh', 'ghgf', '', '                  ', 0, 0, 0, '0000-00-00 00:00:00', 3, ''),
(22, '2018-10-28 22:48:48', NULL, 'Franco', 'PC', 'No anda', '', 'Ventas', 2, 1, 0, '2018-10-30 00:00:00', 1, 'Vea102818'),
(23, '2018-10-29 01:35:45', NULL, 'User', 'PC', 'Fuego', '', 'Ventas', 1, 1, 1, '0000-00-00 00:00:00', 1, 'Veh102918');

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
(1, 'admin', '12345', '2018-10-29 01:23:39', 'A', 1, 'admin', 'sistemas', 'admin@gmail.com'),
(2, 'invitado', '1234', '2018-09-26 10:59:01', 'U', 1, 'anonimo', 'invitado', ''),
(3, 'Matias', '123456', '2018-10-24 10:58:14', 'A', 1, 'Matias', 'oficina', 'mati@gmail.com'),
(4, 'User', '1234', '2018-10-29 00:05:13', 'U', 1, 'Franco', 'Ventas', 'user@app.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `prioridades`
--
ALTER TABLE `prioridades`
  ADD PRIMARY KEY (`prioridad_id`);

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
-- AUTO_INCREMENT de la tabla `prioridades`
--
ALTER TABLE `prioridades`
  MODIFY `prioridad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
