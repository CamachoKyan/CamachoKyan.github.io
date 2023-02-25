-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:51:49
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Piedra ', 200, 'Piedra pequeña de gran utilidad para el jardin, arrojarla, pisar hojas de papel o para cualquier otro uso que desee', 'Gris', 500, 'Piedra', '5 centimetros'),
(2, 'Silla de plastico', 490, 'Silla de plastico', 'Blanco', 140, 'Plastic Chair Inc', '58 x 54 x 78 centimetros'),
(3, 'Duracell Pila', 230, 'specializada De Litio Modelo 2032 Tipo Moneda De 3v Contiene 1 Paquete Con 2 Pilas', 'N/A', 64, 'Duracell', 'N/A'),
(4, 'Pou Triste Peluche ', 160, 'Mi Mascota Alien Pou Peluche Emoción Triste Alien ', 'Cafe', 32, 'FDRE', '22 centimetros'),
(5, 'Hot Wheels', 160, 'Colección Retro Entertainment de vehículos a Escala 1:64 de Películas, TV y Videojuegos, réplicas icónicas para Jugar o exhibir, Regalo para coleccionistas', 'Negro', 16, 'Hot Wheels', '5 centimetros'),
(6, 'LEGO City', 330, 'LEGO Kit de construcción City 60283 Casa Rodante de Vacaciones (190 Piezas)\r\n', 'N/A', 128, 'LEGO', '15 centimetros'),
(7, 'Tira LED ', 500, 'Tira LED de Bluetooth 10M ,Luces LED RGB 5050 Música de Tira. Con Control de APP +Control Remoto IR de 44 Teclas, Sincronización Musical, 16 Millones de Colores', 'RGB', 16, 'Salanders', '300 centimetros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
