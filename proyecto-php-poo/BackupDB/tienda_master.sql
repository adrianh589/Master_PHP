-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2020 a las 03:39:25
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORIAS`
--

CREATE TABLE `CATEGORIAS` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CATEGORIAS`
--

INSERT INTO `CATEGORIAS` (`id`, `nombre`) VALUES
(1, 'manga corta'),
(2, 'tirantes'),
(3, 'manga larga'),
(4, 'sudaderas'),
(5, 'Lucha Libre'),
(6, 'Chaquetas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LINEAS_PEDIDOS`
--

CREATE TABLE `LINEAS_PEDIDOS` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `LINEAS_PEDIDOS`
--

INSERT INTO `LINEAS_PEDIDOS` (`id`, `pedido_id`, `producto_id`, `unidades`) VALUES
(1, 18, 19, 1),
(2, 19, 19, 1),
(3, 20, 19, 2),
(4, 21, 19, 2),
(5, 22, 19, 2),
(6, 23, 19, 3),
(7, 24, 19, 3),
(8, 24, 1, 1),
(9, 25, 1, 1),
(10, 26, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PEDIDOS`
--

CREATE TABLE `PEDIDOS` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PEDIDOS`
--

INSERT INTO `PEDIDOS` (`id`, `usuario_id`, `provincia`, `localidad`, `direccion`, `coste`, `estado`, `fecha`, `hora`) VALUES
(6, 13, 'Cundinamarca', 'Bogotá', 'Calle 140 Carrera 7ma No. 4 - 61', 233.00, 'confirmed', '2020-06-21', '12:06:53'),
(14, 13, 'Cundinamarca', 'Bogotá', 'Calle 140 Carrera 7ma No. 4 - 61', 233.00, 'confirmed', '2020-06-21', '13:28:54'),
(15, 13, 'Cundinamarca', 'Bogotá', 'Calle 140 Carrera 7ma No. 4 - 61', 233.00, 'confirmed', '2020-06-21', '13:30:00'),
(16, 13, 'asdf', 'asdasd', 'adasda', 233.00, 'confirmed', '2020-06-21', '13:48:43'),
(17, 13, 'asdf', 'asdasd', 'adasda', 233.00, 'confirmed', '2020-06-21', '13:49:36'),
(18, 13, 'ad', 'asdas', 'asd', 233.00, 'confirmed', '2020-06-21', '13:50:47'),
(19, 13, 'ad', 'asdas', 'asd', 233.00, 'confirmed', '2020-06-21', '13:54:25'),
(20, 13, 'asdfadsf', 'dasfasdf', 'adfaf', 466.00, 'confirmed', '2020-06-21', '13:54:46'),
(21, 13, 'asdfadsf', 'dasfasdf', 'adfaf', 466.00, 'confirmed', '2020-06-21', '13:58:41'),
(22, 13, 'sgsf', 'sdfsdf', 'sdfsdf', 466.00, 'confirmed', '2020-06-21', '14:03:51'),
(23, 13, 'adsasd', 'asdad', 'asdasdasdasd', 699.00, 'confirmed', '2020-06-21', '15:07:11'),
(24, 13, 'dfdf', 'sdfsdf', 'sdfsds', 799.00, 'confirmed', '2020-06-21', '15:16:49'),
(25, 13, 'asdasdasd', 'asas', 'asdasdasdasd', 100.00, 'preparation', '2020-06-21', '15:53:32'),
(26, 13, 'gvsfd', 'sfd', 'fgh', 233.00, 'sended', '2020-06-21', '19:19:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTOS`
--

CREATE TABLE `PRODUCTOS` (
  `id` int(255) NOT NULL,
  `categoria_id` int(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PRODUCTOS`
--

INSERT INTO `PRODUCTOS` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(1, 5, 'Chaqueta Rey Misterio', 'Flamas Barbaras Rey misterio', 100.00, 20, NULL, '2020-06-07', NULL),
(19, 1, 'Manjaro', 'Arch Linux T shirt', 233.00, 1, NULL, '2020-06-20', 'camisetaManjaro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`id`, `nombre`, `apellidos`, `email`, `password`, `rol`, `imagen`) VALUES
(2, 'ad', 'add', 'yesith@hotmail.com', '$2y$04$GNgRASOWtFPW6HbTgjHG6.rgka7hewqvVWAHSbM1XFrVa/cQQhFRK', 'user', NULL),
(4, 'dddda', 'asdasd', 'yesiths@hotmail.com', '$2y$04$xhR/QDzrH4MAURQ9tihKLuV2SEY3A/xtpwBdD7cXoSREFUlmeWtq2', 'user', NULL),
(5, 'dddda', 'asdasd', 'yesithss@hotmail.com', '$2y$04$VVDlevHrYmuK31oOA3cDn.ct6BfBIqSB30IDJE4AkGwNbDDjV4lYW', 'user', NULL),
(6, 'dddda', 'asdasd', 'asdyesithss@hotmail.com', '$2y$04$Xk9cDRfPjukTQ5NSbiWHwu3WKfXTWyZzwf6o4QOfmQUd0c/breEGu', 'user', NULL),
(7, 'cmla', 'asdasd', 'ityssithss@hotmail.com', '$2y$04$rSewp9Ln5TSKjfKagGcZ0ePkURSY2WP/6ROKoO1Lf.c1q9jzczPPu', 'user', NULL),
(8, 'cmla', 'asdasd', 'fgo@hotmail.com', '$2y$04$bkZj.DlDYie1MwmsHPBk7eihwP4Pd9.nEE1gklqycaQW9aYRXo/mS', 'user', NULL),
(9, 'adri', 'marquez', 'ah@hotmail.com', '$2y$04$HlBPZQeMTQID.6cyPUteA.AvBAG8/pE696Zm.X9Hzpz.BDy2n.xmC', 'user', NULL),
(10, 'adasdasd', 'asdasdsad', 'asasddyesithss@hotmail.com', '$2y$04$sg6NmH5gfqWU/ZJSjUdgmOV1tc965c62GTkKqoHaxsyhJLw1MDCC.', 'user', NULL),
(11, '123', '123', '123@hotmail.com', '$2y$04$4sipjVXlkyo/Z0sKpOAI..k5hBVsqPu28wk6v1Zd1jRmg/XbIVfFy', 'user', NULL),
(12, 'adrian', 'hoyos', 'adrianh_589@hotmail.com', '$2y$04$RompyH2QsENeijBpQWXN2u4SpYAozMF0nF1srIjmszlgdmKVD8ILW', 'user', NULL),
(13, 'admin', 'admin', 'admin@admin.com', '$2y$04$JDLzf3/ElYWJCtJGVOYdnOLcx7V8JbiNOGquPuzxXJqVpvme6K9IW', 'admin', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CATEGORIAS`
--
ALTER TABLE `CATEGORIAS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `LINEAS_PEDIDOS`
--
ALTER TABLE `LINEAS_PEDIDOS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_linea_pedido` (`pedido_id`),
  ADD KEY `fk_producto` (`producto_id`);

--
-- Indices de la tabla `PEDIDOS`
--
ALTER TABLE `PEDIDOS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_usuario` (`usuario_id`);

--
-- Indices de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`categoria_id`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CATEGORIAS`
--
ALTER TABLE `CATEGORIAS`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `LINEAS_PEDIDOS`
--
ALTER TABLE `LINEAS_PEDIDOS`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `PEDIDOS`
--
ALTER TABLE `PEDIDOS`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `LINEAS_PEDIDOS`
--
ALTER TABLE `LINEAS_PEDIDOS`
  ADD CONSTRAINT `fk_linea_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `PEDIDOS` (`id`),
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`producto_id`) REFERENCES `PRODUCTOS` (`id`);

--
-- Filtros para la tabla `PEDIDOS`
--
ALTER TABLE `PEDIDOS`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `USUARIOS` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `CATEGORIAS` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
