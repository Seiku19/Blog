-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2020 a las 21:00:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ISBN` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Titulo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Genero` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Editorial` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Autor` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sinopsis` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Portada` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Disponibilidad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ISBN`, `Titulo`, `Genero`, `Editorial`, `Autor`, `Sinopsis`, `Portada`, `Disponibilidad`) VALUES
('1999', 'One Piece', 'Aventura', 'Panini', 'Oda', 'La historia de un pirata de goma', 'onepiece.jpg', 'No'),
('2008', '20th Century Boys', 'Misterio', 'VIZ', 'Naoki Urasawa', 'Kenji Endō es encargado de un pequeño supermercado', 'century.jpg', 'Si'),
('5678', 'Monster', 'Thriller', 'Norma', 'Naoki Urasawa', 'La serie sigue los pasos del neurocirujano Kenzo', 'monster.jpg', 'Si'),
('7531', 'One Punch-Man', 'Comedia', 'Ivrea', 'One', 'La historia tiene lugar en una metrópolis ficticia', 'punch.jpg', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `CodigoPrestamo` int(11) NOT NULL,
  `DNI_usuario` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ISBN_libro` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`CodigoPrestamo`, `DNI_usuario`, `ISBN_libro`) VALUES
(19, '43460274a', '1999'),
(20, '35492854z', '7531');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Contraseña` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Dirección` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `Nombre`, `Apellidos`, `Contraseña`, `Telefono`, `Dirección`) VALUES
('35492854z', 'Manolo', 'Sanchez', '$2y$10$t1s5J1QeEE89ni05t2IuK.x61aZ/fnzAyexjHlNAToWSNzdOjVGXC', 635175682, 'Valencia'),
('43460274a', 'Jesus', 'Cordoba', '$2y$10$0.poiGQJ7aGX76Eo82lCXe/H9NlBNCpXfMeMPSDVA2r5jh8X7NWLW', 615213093, 'Son Ferrer'),
('admin', 'admin', 'admin', '$2y$10$NEln6pHI/MQMBFqldFBOr.mRCyMiCx.lvW4C2y2dvhhWf5LRPdG0C', 12345, 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`CodigoPrestamo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `CodigoPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
