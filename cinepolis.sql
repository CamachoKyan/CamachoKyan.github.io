-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 22:16:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinepolis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `id_Películas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `Nombre`, `id_Películas`) VALUES
(1, 'Leon Dicap', 3),
(2, 'Kris Bel', 2),
(3, 'Bil Murra', 1),
(4, 'Ken Rivs', 4),
(5, 'Charl Dia', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `directores`
--

INSERT INTO `directores` (`id`, `Nombre`) VALUES
(1, 'Guillermito'),
(2, 'Steven'),
(3, 'Marc'),
(4, 'Antony'),
(5, 'David');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `péliculas`
--

CREATE TABLE `péliculas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Duración` time NOT NULL,
  `Año` date NOT NULL,
  `id_TiposPelicula` int(11) NOT NULL,
  `id_Directores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `péliculas`
--

INSERT INTO `péliculas` (`id`, `Nombre`, `Duración`, `Año`, `id_TiposPelicula`, `id_Directores`) VALUES
(1, 'Garfil', '01:46:54', '2008-08-24', 5, 3),
(2, 'Frosen', '01:34:12', '2016-05-04', 5, 4),
(3, 'Tytan', '03:23:54', '2000-03-17', 2, 2),
(4, 'Matriz', '02:16:32', '1999-05-21', 1, 5),
(5, 'Titan', '02:11:24', '2013-07-01', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipospelículas`
--

CREATE TABLE `tipospelículas` (
  `id` int(11) NOT NULL,
  `Generos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipospelículas`
--

INSERT INTO `tipospelículas` (`id`, `Generos`) VALUES
(1, 'Ciencia Ficción'),
(2, 'Romance'),
(3, 'Acción'),
(4, 'Terror'),
(5, 'Infantil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Películas` (`id_Películas`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `péliculas`
--
ALTER TABLE `péliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Directores` (`id_Directores`),
  ADD KEY `id_TiposPelicula` (`id_TiposPelicula`);

--
-- Indices de la tabla `tipospelículas`
--
ALTER TABLE `tipospelículas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `péliculas`
--
ALTER TABLE `péliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipospelículas`
--
ALTER TABLE `tipospelículas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `artistas_ibfk_1` FOREIGN KEY (`id_Películas`) REFERENCES `péliculas` (`id`);

--
-- Filtros para la tabla `péliculas`
--
ALTER TABLE `péliculas`
  ADD CONSTRAINT `péliculas_ibfk_1` FOREIGN KEY (`id_Directores`) REFERENCES `directores` (`id`),
  ADD CONSTRAINT `péliculas_ibfk_2` FOREIGN KEY (`id_TiposPelicula`) REFERENCES `tipospelículas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
