-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2018 a las 07:00:19
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cadena` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `cadena`, `password`, `privilegio`, `fecha_registro`) VALUES
(1, 'Raul Montes', 'admin', 'TurnApp', '12345', 1, '2018-05-14 16:39:46'),
(2, 'Emperatriz Madrid', '36385218', 'El emperador de Campo de la Cruz', '36385218', 2, '2018-05-14 16:39:46'),
(3, 'Anay Hernandez', '26606175', 'Las innovadoras campo de la cruz', '26606175', 2, '2018-05-14 16:39:46'),
(4, 'Katerine Villegas', '1043841779', 'Las innovadoras campo de la cruz', '1043841779', 2, '2018-05-14 16:39:46'),
(5, 'Lucele Santos', '35144505', 'Las innovadoras campo de la cruz', '35144505', 2, '2018-05-14 16:39:46'),
(6, 'Maria Requena', '1007127830', 'Las innovadoras campo de la cruz', '1007127830', 2, '2018-05-14 16:39:46'),
(7, 'Rosmira Rangel', '32605472', 'Las innovadoras campo de la cruz', '32605472', 2, '2018-05-14 16:39:46'),
(8, 'Elsy Tamara', '26814081', 'Cielo azul de Campo de la cruz', '26814081', 2, '2018-05-14 16:39:46'),
(9, 'Marlyn Dita', '22665114', 'Cielo azul de Campo de la cruz', '22665114', 2, '2018-05-14 16:39:46');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
