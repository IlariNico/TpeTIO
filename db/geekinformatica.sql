-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2022 a las 01:35:02
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
-- Base de datos: `geekinformatica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` text NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `email`, `mensaje`) VALUES
(1, 'nicolas', 'ilari', 'ilarinico40@gmail.com', 'esto es una prueba!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `pedidos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pedidos`)),
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `nombreCorto` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--


INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`, `nombreCorto`, `marca`, `descripcion`, `img`) VALUES
(1, 'ASUS X515EA 15.6 INTEL I3-1115', 118843, 50, 'X515', 'ASUS', 'Ya sea para trabajar o para jugar, ASUS 15 X515, es una computadora portatil que ofrece un potente rendimiento y efectos visuales envolventes.', '.img/prod1.jpg'),
(2, 'LENOVO THINKBOOK PANTALLA 15.6', 240933, 30, 'ThinkBook Gen 2 ITL', 'Lenovo', 'Con paneles de aluminio, esta laptop presenta una estetica elegante y profesional. Es de las mas delgadas hasta la fecha, lo que las hace facil de transportar y perfectas para el trabajo remoto', './img/prod2.jpg'),
(3, 'LENOVO V15 PANTALLA 15,6 CORE ', 209517, 20, 'V15', 'Lenovo', 'Esta no es la típica laptop de plástico o metal frío que llevas de un lado a otro: es un accesorio de moda. La IdeaPad 5 se ha diseñado poniendo especial atención en los detalles, lo que queda patente en la suavidad al tacto de la superficie de esta computadora', './img/prod3.jpg'),
(4, 'BANGHO 14\" MAX L4 I5 8GB 240GB', 180843, 50, 'max l4 i5', 'BANGHO', 'Gracias a su peso ligero y tamaño reducido podrás llevar tus archivos y documentos a todos lados sin perder prestaciones, tiene una pantalla de 14 pulgadas HD para visualización completa y Windows 11.', './img/prod4.jpg'),
(5, 'lenovo thinkpad L15 15,6\" core', 199099, 40, 'thinkpad L15', 'Lenovo', 'Esta laptop cuenta con pantallas HD y FHD de 15.6” con la opción touch. Si a esto le añades Dolby Audio para mejorar el sonido, podrás disfrutar a lo grande de la transmisión de películas en este equipo, además de escuchar tu música favorita.', './img/prod5.jpg'),
(6, 'Acer aspire 3 15.6\" core i5 11', 165890, 20, 'Aspire 3 A315', 'Aspire', 'Calidad que entra por los ojos! diseño elegante y superior, pantalla de alta definicion con panel IPS recomendado para creadores de contenido, colores excepcionales y mayores angulos de vision. Recomendada para diseño grafico y fotografia.', './img/prod6.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CLIENTE_FK` (`cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
