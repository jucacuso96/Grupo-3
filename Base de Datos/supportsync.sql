-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2024 a las 04:24:02
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
-- Base de datos: `supportsync`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

CREATE TABLE `caso` (
  `id` int(11) NOT NULL,
  `numero_caso` int(11) NOT NULL,
  `tipo_consulta` varchar(100) NOT NULL,
  `estado_caso` varchar(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `fecha_registro_caso` datetime NOT NULL,
  `fecha_actualizacion_caso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`id`, `numero_caso`, `tipo_consulta`, `estado_caso`, `id_producto`, `id_usuario`, `id_cliente`, `observacion`, `fecha_registro_caso`, `fecha_actualizacion_caso`) VALUES
(2, 1, 'Aclaración de Saldo', 'Solucionado', 2, 2, 1, 'Cliente Satisfecho', '2024-04-11 12:11:12', '2024-04-11 12:50:12'),
(3, 2, 'Productos', 'Solucionado', 2, 2, 1, 'Cliente Satisfecho', '2024-04-20 11:53:33', '2024-04-20 11:58:33'),
(4, 3, 'Acuerdos de Pago', 'Solucionado', 2, 2, 1, '', '2024-05-02 10:53:29', '2024-05-02 11:53:41'),
(5, 5, 'Reclamo de Cobros', 'Solucionado', 2, 2, 1, 'bueno', '2024-05-02 10:53:29', '2024-05-02 11:22:29'),
(6, 6, 'Productos', 'Solucionado', 1, 2, 1, 'Escalar Caso', '2024-05-02 11:53:29', '2024-05-02 12:08:29'),
(7, 7, 'Acuerdos de Pago', 'Solucionado', 1, 2, 1, 'Escalar Caso', '2024-05-02 11:54:29', '2024-05-02 12:26:56'),
(112, 8, 'Acuerdos de Pago', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:29:34', '2024-05-04 11:30:34'),
(113, 9, 'Acuerdos de Pago', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:39:08', '2024-05-04 11:39:08'),
(114, 10, 'Acuerdos de Pago', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:39:54', '2024-05-04 11:39:54'),
(115, 11, 'Acuerdos de Pago', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:39:58', '2024-05-04 11:39:58'),
(116, 12, 'Productos', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:47:24', '2024-05-04 11:52:24'),
(117, 13, 'Productos', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:47:27', '2024-05-04 11:52:27'),
(118, 14, 'Productos', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:47:31', '2024-05-04 11:52:31'),
(119, 15, 'Productos', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:47:34', '2024-05-04 11:52:34'),
(120, 16, 'Aclaración de Saldo', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:49:39', '2024-05-04 11:54:39'),
(121, 17, 'Aclaración de Saldo', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:49:55', '2024-05-04 11:59:55'),
(122, 18, 'Aclaración de Saldo', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:49:58', '2024-05-04 11:59:58'),
(123, 19, 'Aclaración de Saldo', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:50:02', '2024-05-04 12:00:02'),
(124, 20, 'Aclaración de Saldo', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:50:06', '2024-05-04 12:00:06'),
(125, 21, 'Aclaración de Saldo', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:50:09', '2024-05-04 12:00:09'),
(126, 22, 'Reclamo de Cobros', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:50:17', '2024-05-04 12:00:17'),
(127, 23, 'Reclamo de Cobros', 'Solucionado', 1, 2, 1, '', '2024-05-04 11:50:22', '2024-05-04 12:00:22'),
(128, 24, 'Reclamo de Cobros', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:50:25', '2024-05-04 12:00:25'),
(129, 25, 'Reclamo de Cobros', 'Solucionado', 2, 2, 1, '', '2024-05-04 11:50:27', '2024-05-04 12:00:27'),
(130, 26, 'Reclamo de Cobros', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:50:32', '2024-05-04 12:00:32'),
(131, 27, 'Reclamo de Cobros', 'Solucionado', 3, 2, 1, '', '2024-05-04 11:50:34', '2024-05-04 12:00:34'),
(132, 28, 'Aclaracion de Saldo', 'Pendiente', 1, 2, 1, '', '2024-05-04 23:38:44', '2024-05-04 23:48:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `numero_contacto` varchar(15) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `identificacion`, `nombre`, `email`, `numero_contacto`, `id_pais`) VALUES
(1, 1004, 'Felipe Mendez', 'df@gmail.com', '3203953368', 1),
(2, 1104, 'Jhonathan Silva', 'js@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_especialidad`
--

CREATE TABLE `grupo_especialidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_especialidad`
--

INSERT INTO `grupo_especialidad` (`id`, `nombre`, `estado`) VALUES
(1, 'Aclaración de saldos', 'Activo'),
(2, 'Reclamos por cobros', 'Activo'),
(3, 'Acuerdos de pago', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_especialidad_pais`
--

CREATE TABLE `grupo_especialidad_pais` (
  `id` int(11) NOT NULL,
  `id_grupo_especialidad` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_especialidad_pais`
--

INSERT INTO `grupo_especialidad_pais` (`id`, `id_grupo_especialidad`, `id_pais`) VALUES
(1, 1, 1),
(4, 1, 2),
(3, 2, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manual_producto`
--

CREATE TABLE `manual_producto` (
  `id` int(11) NOT NULL,
  `nombre_documento` varchar(100) NOT NULL,
  `ubicacion_documento` varchar(200) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre_pais` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre_pais`, `estado`) VALUES
(1, 'Colombia', 'Activo'),
(2, 'Peru', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `id_grupo_especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_producto`, `estado`, `id_grupo_especialidad`) VALUES
(1, 'Tarjeta de crédito N1', 'Activo', 2),
(2, 'Tarjeta de crédito N2', 'Activo', 1),
(3, 'Cuenta de ahorrros', 'Activo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `estado`) VALUES
(1, 'Asesor', 'Activo'),
(2, 'Coordinador', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_grupo_especialidad` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `estado`, `id_tipo_usuario`, `id_grupo_especialidad`, `id_pais`, `email_verified_at`, `remember_token`, `updated_at`, `created_at`, `name`) VALUES
(2, 'daniel_mendez@gmail.com', '$2y$12$fOfSlgAtXi3piIDYbYadJ.o3mq7LlhIDRPV.kKbHnw4.Uem89PBAO', 'Activo', 1, 1, 1, '2024-04-23 20:25:26', NULL, NULL, NULL, 'daniel'),
(3, 'jasilva1302@gmail.com', '$2y$12$osElf3bCjOqibUr1agYNuO7h9mRiQmiIiv65ThUj3y2DEpX8Hu9uq', 'Activo', 1, 1, 2, '2024-04-23 20:46:22', 'jAvp8qy9pRy09TjpmxQtjoBOBZGhdq0hZj3iziaxvy4rJ0M7QLR8UZPj5Wk6', NULL, NULL, 'Jhonathan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`,`id_usuario`,`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `grupo_especialidad`
--
ALTER TABLE `grupo_especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grupo_especialidad` (`id_grupo_especialidad`,`id_pais`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `manual_producto`
--
ALTER TABLE `manual_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grupo_especialidad` (`id_grupo_especialidad`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grupo_especialidad` (`id_grupo_especialidad`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `id_pais` (`id_pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caso`
--
ALTER TABLE `caso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grupo_especialidad`
--
ALTER TABLE `grupo_especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `manual_producto`
--
ALTER TABLE `manual_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  ADD CONSTRAINT `grupo_especialidad_pais_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_especialidad_pais_ibfk_2` FOREIGN KEY (`id_grupo_especialidad`) REFERENCES `grupo_especialidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manual_producto`
--
ALTER TABLE `manual_producto`
  ADD CONSTRAINT `manual_producto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_grupo_especialidad`) REFERENCES `grupo_especialidad_pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_grupo_especialidad`) REFERENCES `grupo_especialidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
