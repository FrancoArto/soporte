-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soporte`
--

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`estado_id`, `nombre`) VALUES
(1, 'Finalizado'),
(2, 'Detenido'),
(3, 'Pendiente'),
(4, 'En Curso'),
(5, 'Cancelado');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
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
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `fecha_inicio`, `fecha_fin`, `quien`, `titulo`, `descripcion`, `solucion`, `sector`, `prioridad`, `estado`, `asignado`, `fecha_limite`, `creador`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'q', 'q', 'q', '', '', 0, 0, 0, '0000-00-00 00:00:00', 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'q', 'q', 'q', '', '1', 1, 0, 0, '0000-00-00 00:00:00', 1),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'q', 'q', '', '1', 1, 0, 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `password`, `ult_login`, `rol`, `estado`, `nombre`, `sector`, `email`) VALUES
(1, 'admin', '12345', '2018-10-03 10:31:23', 'A', 1, 'pepe', 'sistemas', 'pepe@gmail.com'),
(2, 'invitado', '1234', '2018-09-26 10:59:01', 'U', 1, 'anonimo', 'invitado', ''),
(3, 'Matias', '123456', '2018-09-26 10:25:29', 'U', 0, 'Matias', 'oficina', 'mati@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
