-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2017 a las 20:03:05
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `extremegames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_catalago`
--

CREATE TABLE `eg_catalago` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `descripcion` text,
  `imagen` text,
  `nu_consola` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_catalago`
--

INSERT INTO `eg_catalago` (`id`, `nombre`, `descripcion`, `imagen`, `nu_consola`) VALUES
(4, 'Call Of Duty Ghost', '<p>\r\n	<span style="font-family: sans-serif; font-size: 14px;">La historia del juego se ambienta en un futuro cercano cuando&nbsp;</span><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">Am&eacute;ric</span></font><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">a del Norte</span></font><span style="font-family: sans-serif; font-size: 14px;">&nbsp;se sit&uacute;a al borde del colapso.&nbsp;</span><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">Venezuela</span></font><span style="font-family: sans-serif; font-size: 14px;">&nbsp;y otros pa&iacute;ses de&nbsp;</span><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">Am&eacute;rica del </span></font><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">S</span></font><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">ur</span></font><span style="font-family: sans-serif; font-size: 14px;">&nbsp;se habr&iacute;an unido formando una alianza conocida como &#39;La Federaci&oacute;n&#39; con el objetivo de acabar con la hegemon&iacute;a de los&nbsp;</span><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">Estados </span></font><font face="sans-serif"><span style="background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 14px;">Unidos</span></font><span style="font-family: sans-serif; font-size: 14px;">, quienes previamente se confiaron del enemigo al considerarlos pa&iacute;ses &quot;inferiores&quot;. Debido a ese error se ha pagado un alto precio al permitir que los Estados Unidos fueran atacados masivamente. Ahora, en un intento desesperado, Am&eacute;rica del Norte est&aacute; intentando recuperar el control de la situaci&oacute;n, para ello ha recurrido a los Ghosts.</span></p>\r\n', '5ea1e-callofduty.jpg', 1),
(5, 'Ataque Titanes', '<p>\r\n	Ataque Titanes</p>\r\n', '81372-3694823-0344551340-36742.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_consolas`
--

CREATE TABLE `eg_consolas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_consolas`
--

INSERT INTO `eg_consolas` (`id`, `nombre`) VALUES
(1, 'Xbox');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_horas`
--

CREATE TABLE `eg_horas` (
  `id` bigint(20) NOT NULL,
  `tiempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_membresia`
--

CREATE TABLE `eg_membresia` (
  `id` bigint(20) NOT NULL,
  `nu_user` bigint(20) NOT NULL,
  `nu_saldo` bigint(20) DEFAULT NULL,
  `nu_puntos` bigint(20) DEFAULT NULL,
  `nu_extra` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_membresia`
--

INSERT INTO `eg_membresia` (`id`, `nu_user`, `nu_saldo`, `nu_puntos`, `nu_extra`) VALUES
(1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_promociones`
--

CREATE TABLE `eg_promociones` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `descripcion` text,
  `imagen` text,
  `vigencia` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_puntos`
--

CREATE TABLE `eg_puntos` (
  `id` bigint(20) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_puntos`
--

INSERT INTO `eg_puntos` (`id`, `puntos`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_puntos_horas`
--

CREATE TABLE `eg_puntos_horas` (
  `id` bigint(20) NOT NULL,
  `nu_puntos` bigint(20) NOT NULL,
  `nu_tiempo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_roles`
--

CREATE TABLE `eg_roles` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_roles`
--

INSERT INTO `eg_roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_saldos`
--

CREATE TABLE `eg_saldos` (
  `id` bigint(20) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_saldos`
--

INSERT INTO `eg_saldos` (`id`, `saldo`) VALUES
(1, 100),
(4, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eg_users`
--

CREATE TABLE `eg_users` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `paterno` varchar(512) DEFAULT NULL,
  `materno` varchar(512) DEFAULT NULL,
  `usuario` varchar(256) NOT NULL,
  `contraseña` varchar(512) DEFAULT NULL,
  `correo` varchar(512) DEFAULT NULL,
  `telefono` varchar(128) DEFAULT NULL,
  `direccion` varchar(256) DEFAULT NULL,
  `nu_rol` bigint(20) NOT NULL,
  `imagen` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eg_users`
--

INSERT INTO `eg_users` (`id`, `nombre`, `paterno`, `materno`, `usuario`, `contraseña`, `correo`, `telefono`, `direccion`, `nu_rol`, `imagen`) VALUES
(1, 'Luis', 'Morales', 'Escobar', 'DXMOE', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'luis_me95@hotmail.com', '9999999999', 'Calle 123', 1, NULL),
(5, 'Juan', 'Lopez', 'Sanchez', 'Packmoe', 'd94019fd760a71edf11844bb5c601a4de95aacaf', 'jsj@hotmail.com', '0123456789', 'Calle 456', 3, NULL),
(6, 'Jose', 'Luna', 'Moreno', 'empleado1', 'a4cd48b29fcab02707e48a97f2ceec340047cf86', 'empleado@hotmail.com', '0987654321', 'Calle 897', 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eg_catalago`
--
ALTER TABLE `eg_catalago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nu_consola` (`nu_consola`);

--
-- Indices de la tabla `eg_consolas`
--
ALTER TABLE `eg_consolas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_horas`
--
ALTER TABLE `eg_horas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_membresia`
--
ALTER TABLE `eg_membresia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nu_user` (`nu_user`),
  ADD KEY `nu_saldo` (`nu_saldo`),
  ADD KEY `nu_puntos` (`nu_puntos`);

--
-- Indices de la tabla `eg_promociones`
--
ALTER TABLE `eg_promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_puntos`
--
ALTER TABLE `eg_puntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_puntos_horas`
--
ALTER TABLE `eg_puntos_horas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nu_puntos` (`nu_puntos`),
  ADD KEY `nu_tiempo` (`nu_tiempo`);

--
-- Indices de la tabla `eg_roles`
--
ALTER TABLE `eg_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_saldos`
--
ALTER TABLE `eg_saldos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eg_users`
--
ALTER TABLE `eg_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nu_rol` (`nu_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eg_catalago`
--
ALTER TABLE `eg_catalago`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `eg_consolas`
--
ALTER TABLE `eg_consolas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eg_horas`
--
ALTER TABLE `eg_horas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eg_membresia`
--
ALTER TABLE `eg_membresia`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eg_promociones`
--
ALTER TABLE `eg_promociones`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eg_puntos`
--
ALTER TABLE `eg_puntos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eg_puntos_horas`
--
ALTER TABLE `eg_puntos_horas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `eg_roles`
--
ALTER TABLE `eg_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eg_saldos`
--
ALTER TABLE `eg_saldos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `eg_users`
--
ALTER TABLE `eg_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eg_catalago`
--
ALTER TABLE `eg_catalago`
  ADD CONSTRAINT `eg_catalago_ibfk_1` FOREIGN KEY (`nu_consola`) REFERENCES `eg_consolas` (`id`);

--
-- Filtros para la tabla `eg_membresia`
--
ALTER TABLE `eg_membresia`
  ADD CONSTRAINT `eg_membresia_ibfk_1` FOREIGN KEY (`nu_user`) REFERENCES `eg_users` (`id`),
  ADD CONSTRAINT `eg_membresia_ibfk_2` FOREIGN KEY (`nu_saldo`) REFERENCES `eg_saldos` (`id`),
  ADD CONSTRAINT `eg_membresia_ibfk_3` FOREIGN KEY (`nu_puntos`) REFERENCES `eg_puntos` (`id`);

--
-- Filtros para la tabla `eg_puntos_horas`
--
ALTER TABLE `eg_puntos_horas`
  ADD CONSTRAINT `eg_puntos_horas_ibfk_1` FOREIGN KEY (`nu_puntos`) REFERENCES `eg_puntos` (`id`),
  ADD CONSTRAINT `eg_puntos_horas_ibfk_2` FOREIGN KEY (`nu_tiempo`) REFERENCES `eg_horas` (`id`);

--
-- Filtros para la tabla `eg_users`
--
ALTER TABLE `eg_users`
  ADD CONSTRAINT `eg_users_ibfk_1` FOREIGN KEY (`nu_rol`) REFERENCES `eg_roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
