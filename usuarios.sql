-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:56:09
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`, `fecha_nacimiento`, `sexo`) VALUES
(1, 'Nico Vidal Rendón', 'NicoVidal@cetis.edu.mx', '6078133121', '2006-07-14', 1),
(2, 'Elías Orfeo Castro', 'EliasCastro@cetis.edu.mx', '5393578322', '2006-03-24', 1),
(3, 'Cruz Anastasia Guerrero', 'CruzGuerrero@cetis.ed.mx', '7812004946', '2006-05-22', 0),
(4, 'María Dolores Valdez', 'MariaValdez@cetis.ed.mx', '5796639079', '2006-11-04', 0),
(5, 'Irene Martita Gonzalo', 'IreneGonzalo@cetis.edu.mx', '6834057409', '2006-05-11', 0),
(6, 'Faustina Reyna Menéndez', 'FaustinaMenéndez@cetis.edu.mx', '5918686277', '2006-09-07', 0),
(7, 'Yésica Mercedes Mendoza', 'YésicaMendoza@cetis.edu.mx', '6771570427', '2006-02-24', 0),
(8, 'Aarón Xavier Félix', 'AarónFélix@cetis.edu.mx', '6263886388', '2006-04-05', 1),
(9, 'Matías Lisandro Zambrano', 'MatíasZambrano@cetis.edu.mx', '6234911590', '2006-12-17', 1),
(10, 'Benjamín César Gonzalo', 'BenjamínGonzalo@cetis.edu.mx', '5721523378', '2006-08-01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
