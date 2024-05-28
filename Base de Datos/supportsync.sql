-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2024 a las 19:41:17
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
  `id_tipo_consulta` int(11) NOT NULL,
  `estado_caso` varchar(50) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `fecha_registro_caso` datetime NOT NULL,
  `fecha_actualizacion_caso` datetime NOT NULL,
  `id_documento_solucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`id`, `numero_caso`, `id_tipo_consulta`, `estado_caso`, `id_producto`, `id_usuario`, `id_cliente`, `observacion`, `fecha_registro_caso`, `fecha_actualizacion_caso`, `id_documento_solucion`) VALUES
(219, 1, 1, 'Solucionado', 1, 2, 1, 'Guardado Correctamente', '2024-05-14 04:56:51', '2024-05-14 04:57:14', 9),
(220, 2, 4, 'Solucionado', 1, 2, 1, 'Cliente Satisfecho', '2024-05-14 04:58:42', '2024-05-14 04:59:25', 5),
(221, 3, 4, 'Escalado', 2, 2, 2, 'no se encuentra solucion, el cliente requiere un avance en una tarjeta con una tasa diferente', '2024-05-14 04:59:53', '2024-05-14 04:59:53', 5),
(222, 4, 1, 'Solucionado', 3, 3, 2, 'Se soluciono', '2024-05-14 05:00:19', '2024-05-14 05:01:06', 19),
(223, 5, 2, 'Escalado', 1, 2, 1, 'no se encuentra solucion al caso', '2024-05-16 00:51:48', '2024-05-16 00:51:48', 5),
(224, 6, 2, 'Solucionado', 1, 2, 1, 'se soluciona caso satisfactoriamente', '2024-05-20 02:12:45', '2024-05-20 02:13:07', 8),
(225, 7, 2, 'Escalado', 3, 3, 1, 'se escala caso por que no se encuentra tasa de interes para el cliente', '2024-05-20 03:18:00', '2024-05-20 03:18:00', 5),
(226, 8, 2, 'Escalado', 2, 2, 1, 'se escala caso por cliente', '2024-05-20 04:09:52', '2024-05-20 04:12:37', 13),
(227, 9, 4, 'Escalado', 2, 2, 1, 'se escala por inconsistencias', '2024-05-20 04:21:03', '2024-05-20 04:21:22', 10),
(228, 10, 4, 'Escalado', 2, 2, 1, 'se escala por inconsistencias', '2024-05-20 04:23:50', '2024-05-20 04:23:50', 5),
(229, 11, 1, 'Escalado', 1, 2, 1, 'no se puede resolver caso', '2024-05-20 04:24:09', '2024-05-20 04:29:13', 9),
(230, 12, 1, 'Solucionado', 1, 2, 1, 'se soluciona caso correctamente', '2024-05-21 01:23:35', '2024-05-21 01:24:17', 9),
(231, 13, 4, 'Pendiente', 2, 2, 1, '', '2024-05-21 01:29:09', '2024-05-21 01:29:09', 5),
(232, 14, 4, 'Solucionado', 3, 4, 1, 'se soluciona correctamente el caso', '2024-05-21 02:15:12', '2024-05-21 02:15:25', 16),
(233, 15, 4, 'Solucionado', 3, 2, 1, 'se soluciona caso con exito', '2024-05-21 12:07:21', '2024-05-21 12:07:44', 15),
(234, 16, 4, 'Solucionado', 1, 2, 1, 'Solucionado correctamente', '2024-05-21 23:42:05', '2024-05-21 23:43:27', 5),
(235, 17, 1, 'Pendiente', 1, 2, 1, '', '2024-05-23 04:15:41', '2024-05-23 04:15:41', 5),
(236, 18, 1, 'Pendiente', 1, 2, 1, '', '2024-05-23 04:33:13', '2024-05-23 04:33:13', 5),
(237, 19, 2, 'Pendiente', 3, 2, 1, '', '2024-05-23 05:51:25', '2024-05-23 05:51:25', 5),
(238, 20, 1, 'Pendiente', 1, 2, 1, '', '2024-05-23 06:06:50', '2024-05-23 06:06:50', 5),
(239, 21, 1, 'Pendiente', 1, 2, 1, '', '2024-05-25 00:30:00', '2024-05-25 00:30:00', 5),
(240, 22, 1, 'Pendiente', 1, 2, 1, '', '2024-05-25 00:34:39', '2024-05-25 00:34:39', 5),
(241, 23, 4, 'Pendiente', 3, 2, 1, '', '2024-05-25 03:46:14', '2024-05-25 03:46:14', 5),
(242, 24, 2, 'Pendiente', 3, 2, 1, '', '2024-05-25 03:50:18', '2024-05-25 03:50:18', 5),
(243, 25, 1, 'Pendiente', 4, 2, 1, '', '2024-05-26 04:26:34', '2024-05-26 04:26:34', 5),
(244, 26, 1, 'Pendiente', 3, 2, 1, '', '2024-05-26 04:31:13', '2024-05-26 04:31:13', 5),
(245, 27, 1, 'Solucionado', 2, 2, 1, 'se soluciona caso con el documento consulta de saldo, el cliente solo necesitaba saber como consultar el saldo desde su movil', '2024-05-26 04:42:09', '2024-05-26 04:42:52', 14),
(246, 28, 4, 'Escalado', 2, 4, 1, 'no se especifica bien la duda por el cliente', '2024-05-26 04:55:42', '2024-05-26 04:56:35', 10),
(247, 29, 1, 'Escalado', 2, 4, 2, 'fsdfs', '2024-05-26 05:02:03', '2024-05-26 05:16:10', NULL),
(248, 30, 2, 'Comunicacion Interrumpida', 1, 4, 1, 'jhghg', '2024-05-26 05:16:41', '2024-05-26 05:16:46', NULL),
(249, 31, 1, 'Solucionado', 2, 4, 1, 'gtfghf', '2024-05-26 05:17:09', '2024-05-26 05:17:21', 14),
(250, 32, 2, 'Pendiente', 2, 2, 1, '', '2024-05-28 04:23:36', '2024-05-28 04:23:36', 5),
(251, 33, 1, 'Pendiente', 3, 2, 1, '', '2024-05-28 04:30:00', '2024-05-28 04:30:00', 5),
(252, 34, 4, 'Pendiente', 3, 2, 3, '', '2024-05-28 05:08:50', '2024-05-28 05:08:50', 5),
(253, 35, 1, 'Solucionado', 1, 2, 1, 'Se resolvio y cliente satisfecho', '2024-05-28 06:33:02', '2024-05-28 06:34:02', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `numero_contacto` varchar(15) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `identificacion`, `nombre`, `email`, `numero_contacto`, `id_pais`) VALUES
(1, 1004, 'Felipe Mendez', 'df@gmail.com', '3203953368', 1),
(2, 1104, 'Jhonathan Silva', 'js@gmail.com', '3028548763', 1),
(3, 1077873980, 'JHONATHAN ARLEY SILVA', 'jasilva1302@gmail.com', '3028274587', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_solucion`
--

CREATE TABLE `documento_solucion` (
  `id_documento_solucion` int(11) NOT NULL,
  `ruta_documento` varchar(250) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `observacion` text NOT NULL,
  `fecha_creacion_documento` date NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_tipo_consulta` int(11) NOT NULL,
  `estado_caso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento_solucion`
--

INSERT INTO `documento_solucion` (`id_documento_solucion`, `ruta_documento`, `nombre`, `observacion`, `fecha_creacion_documento`, `id_producto`, `id_tipo_consulta`, `estado_caso`) VALUES
(5, 'assets/pdf/tarjeta_de_credito_one_rewards_classic.pdf', 'Tarjeta de crédito One Rewards Classic', '3.000 puntos de bienvenida por compras de 600 USD durante los primeros 3 meses.* Los beneficios y características del producto dependen de la categoría aprobada. Conoce más Acumula 2 puntos por cada dólar en compras**', '2024-05-13', 1, 4, 'Activo'),
(6, 'assets/pdf/catalogo_de_puntos_one_rewards.pdf', 'Descubre el catálogo de puntos One Rewards', 'Todas las compras que realices con las Tarjetas One Rewards te regalan 3 puntos por cada dólar si tu tarjeta es Infinite y 2 puntos por cada dólar para el resto de Tarjetas. Además las nuevas tarjetas reciben puntos de bienvenida. (no aplica para cambio de producto).', '2024-05-13', 1, 4, 'Activo'),
(7, 'assets/pdf/asistencias_tarjetas.pdf', 'Asistencias Tarjetas \r\nde Crédito', 'Asistencias Nacionales exclusivas Scotiabank Colpatria', '2024-05-13', 1, 3, 'Inactivo'),
(8, 'assets/pdf/tasas_y_tarifas.pdf', 'Tasas y tarifas', 'Saca el máximo provecho de tus productos y servicios con información sobre sus tasas y tarifas.', '2024-05-13', 1, 2, 'Activo'),
(9, 'assets/pdf/consulta_de_saldo.pdf', 'Consulta de saldo', 'Nuestro menú ha cambiado,\npor eso queremos que te familiarices con el.\n', '2024-05-13', 1, 1, 'Activo'),
(10, 'assets/pdf/asistencias_franquicias.pdf', 'Asistencias Franquicias', '', '2024-05-13', 2, 4, 'Inactivo'),
(11, 'assets/pdf/tarjeta_de_credito_one_light.pdf', 'Tarjeta de crédito One Light', 'Olvídate de pagar cuota de manejo y cuida al planeta con un extracto totalmente digital.*\r\n\r\n', '2024-05-13', 2, 4, 'Activo'),
(12, 'interes_tarjeta_de_credito_one_light.pdf', 'Conoce los beneficios de tu tarjeta One Light', 'Sin cuota de manejo\r\n¡Olvidate de pagar tu cuota de manejo! Tu cobro de cuota de manejo será $0.', '2024-05-13', 2, 3, 'Activo'),
(13, 'assets/pdf/tasas_y_tarifas.pdf', 'Tasas y tarifas', 'Saca el máximo provecho de tus productos y servicios con información sobre sus tasas y tarifas.', '2024-05-13', 2, 2, 'Activo'),
(14, 'assets/pdf/consulta_de_saldo.pdf', 'Consulta de saldo', 'Nuestro menú ha cambiado,\r\npor eso queremos que te familiarices con el.\r\n', '2024-05-13', 2, 1, 'Activo'),
(15, 'assets/pdf/tarjeta_debito_mastercard.pdf', 'Tarjeta Débito Mastercard', 'Con la Tarjeta Débito Mastercard y la clave personal puedes realizar retiros, consignaciones, transferencias entre cuentas y consultas de Cuentas de Ahorro y Corriente, a través de los servicios electrónicos de Scotiabank Colpatria (Cajeros Automáticos, Banca Virtual y la Línea Scotiabank Colpatria).\r\nPara tarjetas emitidas a partir de enero de 2021 en la ciudad de Bogotá podrás contar con la Función Transporte, que te permite hacer uso del sistema Transmilenio y Sistema Integrado de Transporte Público con cargo a tu Cuenta de Ahorros. Sin tener que hacer fila en el cajero y hasta $10.000 diarios; en las estaciones del sistema podrás solicitar la activación de la tarifa de Transbordos que tiene la Tarjeta Tu Llave personalizada. Los términos y condiciones del servicio los puedes consultar', '2024-05-13', 3, 4, 'Activo'),
(16, 'assets/pdf/condiciones_de_uso_tarjeta_debito_transporte_colpatria.pdf', 'CONDICIONES ESPECIALES PARA USO DE LA TARJETA INTELIGENTE\r\n', '', '2024-05-13', 3, 4, 'Inactivo'),
(17, 'assets/pdf/cuenta_de_ahorros_transaccional_Banco_Scotiabank_Colpatria.pdf', 'Cuentas de ahorro transaccionales\r\n', 'Con la cuenta de ahorros Scotiabank Colpatria puedes ahorrar los excedentes de dinero, recibir el pago de tu nómina, generar mesadas pensionales y disponer de tus recursos en cajeros automáticos o establecimientos de comercio. Realiza tus transacciones sin costos adicionales a través de tu tarjeta débito.', '2024-05-13', 3, 3, 'Activo'),
(18, 'assets/pdf/tasas_y_tarifas.pdf', 'Tasas y tarifas', 'Saca el máximo provecho de tus productos y servicios con información sobre sus tasas y tarifas.', '2024-05-13', 3, 2, 'Activo'),
(19, 'assets/pdf/consulta_de_saldo.pdf', 'Consulta de saldo', 'Nuestro menú ha cambiado,\r\npor eso queremos que te familiarices con el.\r\n', '2024-05-13', 3, 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_especialidad`
--

CREATE TABLE `grupo_especialidad` (
  `id_grupo_especialidad` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_especialidad`
--

INSERT INTO `grupo_especialidad` (`id_grupo_especialidad`, `nombre`, `estado`) VALUES
(2, 'Cuenta de ahorros', 'Activo'),
(3, 'Tarjetas de Credito', 'Activo');

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
(1, 3, 1),
(2, 3, 1),
(3, 3, 1),
(4, 3, 2);

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
  `id_grupo_especialidad` int(11) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_producto`, `estado`, `id_grupo_especialidad`, `updated_at`, `created_at`) VALUES
(1, 'Tarjeta de crédito One Rewards Classic 1', 'Inactivo', 3, '2024-05-27 08:36:16.000000', NULL),
(2, 'Tarjeta de crédito One Light\n', 'Activo', 1, NULL, NULL),
(3, 'Tarjeta Débito Mastercard', 'Activo', 3, '2024-05-25 06:24:25.000000', NULL),
(4, 'Tarjeta Ahorro multiservicio', 'Inactivo', 3, '2024-05-22 04:46:58.000000', '2024-05-21 11:07:36.000000'),
(5, 'Tarjeta Ahorro multiservicio', 'Inactivo', 3, '2024-05-25 06:41:30.000000', '2024-05-22 04:47:21.000000'),
(6, 'Nuevo', 'Activo', 3, '2024-05-27 08:49:56.000000', '2024-05-27 08:49:56.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_consulta`
--

CREATE TABLE `tipo_consulta` (
  `id` int(11) NOT NULL,
  `nombre_tipo_consulta` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_consulta`
--

INSERT INTO `tipo_consulta` (`id`, `nombre_tipo_consulta`, `estado`) VALUES
(1, 'Aclaración de saldos', 'Activo'),
(2, 'Reclamos por cobros', 'Activo'),
(3, 'Acuerdos de pago', 'Activo'),
(4, 'Productos', 'Activo');

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
  `name` varchar(100) DEFAULT NULL,
  `failed_login_attempts` int(100) NOT NULL DEFAULT 0,
  `last_login_attempt_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `estado`, `id_tipo_usuario`, `id_grupo_especialidad`, `id_pais`, `email_verified_at`, `remember_token`, `updated_at`, `created_at`, `name`, `failed_login_attempts`, `last_login_attempt_at`) VALUES
(2, 'daniel_mendez@gmail.com', '$2y$12$ePQen08Ewa29P6nqP25xouij8fPIux/QQFZLAJsUCMRWO3CFjj5iq', 'Activo', 1, 3, 1, '2024-05-20 00:10:23', NULL, NULL, NULL, 'daniel', 0, NULL),
(3, 'jasilva1302@gmail.com', '$2y$12$ePQen08Ewa29P6nqP25xouij8fPIux/QQFZLAJsUCMRWO3CFjj5iq', 'Activo', 2, 3, 2, '2024-05-28 05:14:41', 'fNqSqJcsqLPaO7cd1pd7MWPwzeS4Ooxsi024152OtQ0tOmtXeZOKlNOAVWRX', '2024-05-27 00:02:24', NULL, 'Jhonathan', 10, '2024-05-20 02:58:08.580000'),
(4, 'sebastian@gmail.com', '$2y$12$ePQen08Ewa29P6nqP25xouij8fPIux/QQFZLAJsUCMRWO3CFjj5iq', NULL, 1, 3, 1, '2024-05-21 02:13:36', NULL, NULL, NULL, 'Sebastian', 0, NULL);

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
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_grupo_especialidad` (`id_tipo_consulta`),
  ADD KEY `id_documento_solucion` (`id_documento_solucion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `documento_solucion`
--
ALTER TABLE `documento_solucion`
  ADD PRIMARY KEY (`id_documento_solucion`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_grupo_especialidad` (`id_tipo_consulta`),
  ADD KEY `id_documento_solucion` (`id_tipo_consulta`);

--
-- Indices de la tabla `grupo_especialidad`
--
ALTER TABLE `grupo_especialidad`
  ADD PRIMARY KEY (`id_grupo_especialidad`);

--
-- Indices de la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grupo_especialidad` (`id_grupo_especialidad`,`id_pais`),
  ADD KEY `id_pais` (`id_pais`);

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
-- Indices de la tabla `tipo_consulta`
--
ALTER TABLE `tipo_consulta`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documento_solucion`
--
ALTER TABLE `documento_solucion`
  MODIFY `id_documento_solucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `grupo_especialidad`
--
ALTER TABLE `grupo_especialidad`
  MODIFY `id_grupo_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_consulta`
--
ALTER TABLE `tipo_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_4` FOREIGN KEY (`id_tipo_consulta`) REFERENCES `tipo_consulta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `caso_ibfk_5` FOREIGN KEY (`id_documento_solucion`) REFERENCES `documento_solucion` (`id_documento_solucion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento_solucion`
--
ALTER TABLE `documento_solucion`
  ADD CONSTRAINT `documento_solucion_ibfk_1` FOREIGN KEY (`id_tipo_consulta`) REFERENCES `tipo_consulta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_solucion_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_especialidad_pais`
--
ALTER TABLE `grupo_especialidad_pais`
  ADD CONSTRAINT `grupo_especialidad_pais_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_especialidad_pais_ibfk_2` FOREIGN KEY (`id_grupo_especialidad`) REFERENCES `grupo_especialidad` (`id_grupo_especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
