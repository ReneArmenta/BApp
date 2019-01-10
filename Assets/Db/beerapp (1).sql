-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2018 a las 05:51:42
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beerapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id`, `nombre`, `imagen`) VALUES
(1, 'Cerveza', 'Assets/img/Categorias/cerveza.png'),
(2, 'Coolers', 'Assets/img/Categorias/coctel.png'),
(3, 'Cigarros', 'Assets/img/Categorias/cigarrillo.png'),
(4, 'Otros', 'Assets/img/Categorias/patatas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido`
--

CREATE TABLE `tbl_pedido` (
  `Id` int(11) NOT NULL,
  `Nombre_Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Cambio` float NOT NULL,
  `Total` float NOT NULL,
  `Fecha_Pedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos_pedidos`
--

CREATE TABLE `tbl_productos_pedidos` (
  `Id_Pedido` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_solicitudes`
--

CREATE TABLE `tbl_solicitudes` (
  `id` int(11) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `tipo_solicitud` int(11) NOT NULL,
  `fecha_solicitud` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_solicitudes`
--

INSERT INTO `tbl_solicitudes` (`id`, `telefono`, `tipo_solicitud`, `fecha_solicitud`) VALUES
(41, '6681583157', 0, '2018-10-11 21:04:18'),
(42, '6681583157', 0, '2018-10-11 21:04:18'),
(43, '6681583157', 0, '2018-10-11 21:06:07'),
(44, '6681583157', 0, '2018-10-11 21:06:08'),
(45, '6681583157', 0, '2018-10-11 21:16:45'),
(46, '6681583157', 0, '2018-10-11 21:16:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_subcategorias`
--

CREATE TABLE `tbl_subcategorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_subcategorias`
--

INSERT INTO `tbl_subcategorias` (`id`, `nombre`, `imagen`, `categoria`) VALUES
(2, 'Tecate', 'Assets/img/Subcategorias/tecate.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Contrasena` varchar(32) NOT NULL,
  `Tipo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`Id`, `Nombre`, `Numero`, `Contrasena`, `Tipo`) VALUES
(14, 'Sandra', '6682717099', '3fc5586bed4fb9f745500c0605197924', 0),
(15, 'Fernando Armenta', '6681583157', 'c9dff63a0b2907f170accc9e5f1c1e12', 0),
(19, 'Marcos', '0000000001', '4c882dcb24bcb1bc225391a602feca7c', 0),
(20, 'Â ', '6681038415', '8df6fbcc43d31d99e5112eb009ed8a2d', 0),
(21, 'Â ', '6666666666', '8df6fbcc43d31d99e5112eb009ed8a2d', 0),
(22, 'asdasd', '5555555555', 'b4b147bc522828731f1a016bfa72c073', 0),
(23, 'Â ', '8888888888', '8df6fbcc43d31d99e5112eb009ed8a2d', 0),
(24, 'Umberto Sin H', '6681378165', '5812d274d1aa649a682ec488e6426dcd', 0),
(25, 'brian', '6684635299', '929064f2a141f812f1c2efb3ff8194ca', 0),
(26, 'Mario', '6681583150', '7b6cf1f9168cdfa3135ce28ec84ac693', 0),
(27, 'asdf', '6861615616', '6168f305888c3d795e67c6de17bf8a21', 0),
(28, 'asdasdasd', '6681111231', '3a5bbd8779162f922f8c8a61a5362ac9', 0),
(29, 'asdfasdfasdfasdf', '6681568464', '7fd7c4c8543f6d19ff4e68474e4a4475', 0),
(30, 'asdf', '6681583111', '25f9e794323b453885f5181f1b624d0b', 0),
(31, 'fernando', '6681864864', '25f9e794323b453885f5181f1b624d0b', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_subcategoria_id` (`categoria`);

--
-- Indices de la tabla `tbl_productos_pedidos`
--
ALTER TABLE `tbl_productos_pedidos`
  ADD KEY `fk_tbl_pedido_Id` (`Id_Pedido`);

--
-- Indices de la tabla `tbl_solicitudes`
--
ALTER TABLE `tbl_solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_subcategorias`
--
ALTER TABLE `tbl_subcategorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_categoria_id` (`categoria`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_solicitudes`
--
ALTER TABLE `tbl_solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `tbl_subcategorias`
--
ALTER TABLE `tbl_subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `fk_tbl_subcategoria_id` FOREIGN KEY (`categoria`) REFERENCES `tbl_subcategorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_productos_pedidos`
--
ALTER TABLE `tbl_productos_pedidos`
  ADD CONSTRAINT `fk_tbl_pedido_Id` FOREIGN KEY (`Id_Pedido`) REFERENCES `tbl_pedido` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_subcategorias`
--
ALTER TABLE `tbl_subcategorias`
  ADD CONSTRAINT `fk_tbl_categoria_id` FOREIGN KEY (`categoria`) REFERENCES `tbl_categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
