-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2024 a las 16:18:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dictionary1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_est` varchar(45) NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_en_en`
--

CREATE TABLE `relaciones_en_en` (
  `id_sinusar` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `id_relacionado` int(10) DEFAULT NULL,
  `vid_en` int(1) NOT NULL DEFAULT 0,
  `es_en` int(10) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_en_es`
--

CREATE TABLE `relaciones_en_es` (
  `id_sinusar` int(10) NOT NULL,
  `id_es` int(10) NOT NULL,
  `id_en` int(10) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `relaciones_en_es`
--

INSERT INTO `relaciones_en_es` (`id_sinusar`, `id_es`, `id_en`, `create_at`) VALUES
(1, 1, 1, '2024-08-25 14:15:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_es_es`
--

CREATE TABLE `relaciones_es_es` (
  `id_sinusar` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `id_relacionado` int(10) DEFAULT NULL,
  `vid_es` int(1) NOT NULL DEFAULT 0,
  `es_es` int(10) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminos_en`
--

CREATE TABLE `terminos_en` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_en` varchar(70) NOT NULL,
  `des_en` varchar(12000) DEFAULT NULL,
  `not_en` varchar(1500) DEFAULT NULL,
  `est_en` varchar(45) NOT NULL DEFAULT 'Alerta' COMMENT 'Editado',
  `vid_en` int(1) DEFAULT 0,
  `crud_en` varchar(45) DEFAULT NULL,
  `user_en` varchar(45) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `terminos_en`
--

INSERT INTO `terminos_en` (`id`, `nom_en`, `des_en`, `not_en`, `est_en`, `vid_en`, `crud_en`, `user_en`, `create_at`) VALUES
(1, 'spark plug', 'a part that fits into the cylinder head of an internal combustion engine and carries two electrodes separated by an air gap across which the current from the ignition system discharges to form the spark for combustion', '', 'Editado', 0, NULL, NULL, '2024-08-25 14:15:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminos_es`
--

CREATE TABLE `terminos_es` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_es` varchar(70) NOT NULL,
  `des_es` varchar(12000) DEFAULT NULL,
  `not_es` varchar(1500) DEFAULT NULL,
  `est_es` varchar(45) NOT NULL DEFAULT 'Alerta' COMMENT 'Editado',
  `vid_es` int(1) DEFAULT 0,
  `crud_es` varchar(45) DEFAULT NULL,
  `user_es` varchar(45) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `terminos_es`
--

INSERT INTO `terminos_es` (`id`, `nom_es`, `des_es`, `not_es`, `est_es`, `vid_es`, `crud_es`, `user_es`, `create_at`) VALUES
(1, 'Bujía', 'En los motores de explosión, pieza que produce la chispa eléctrica para inflamar la mezcla gaseosa.', '<p><span data-id=\"SxiYiPt\" style=\"cursor: pointer; padding: 0px; font-family: \"Arial Unicode MS\", \"Lucida Sans Unicode\", \"Liberation Sans\", \"DejaVu Sans\", \"TITUS Cyberbit Basic\", Verdana, Arial, Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 0.26px;\">pieza</span><span style=\"font-family: \"Arial Unicode MS\", \"Lucida Sans Unicode\", \"Liberation Sans\", \"DejaVu Sans\", \"TITUS Cyberbit Basic\", Verdana, Arial, Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 0.26px;\"> </span><span data-id=\"BtDkacL|BtFYznp\" style=\"cursor: pointer; padding: 0px; font-family: \"Arial Unicode MS\", \"Lucida Sans Unicode\", \"Liberation Sans\", \"DejaVu Sans\", \"TITUS Cyberbit Basic\", Verdana, Arial, Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 0.26px;\">de</span><span style=\"font-family: \"Arial Unicode MS\", \"Lucida Sans Unicode\", \"Liberation Sans\", \"DejaVu Sans\", \"TITUS Cyberbit Basic\", Verdana, Arial, Helvetica, sans-serif; font-size: 17.3333px; letter-spacing: 0.26px;\"> </span><span data-id=\"8IBTHpQ\" style=\"cursor: pointer; padding: 0px; font-family: \"Arial Unicode MS\", \"Lucida Sans Unicode\", \"Liberation Sans\", \"DejaVu Sans\", \"TITUS Cyberbit Basic\", Verdana, Arial, Helvetica, sans-serif; font-size: 17.3333px; lette', 'Alerta', 0, NULL, NULL, '2024-08-25 14:14:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$8LnlMAct78N9bO5Do7qFn.gAmM/dhvOc0imZ9aUlFx4IWjDGQHdZe', '2024-08-25 14:12:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relaciones_en_en`
--
ALTER TABLE `relaciones_en_en`
  ADD PRIMARY KEY (`id_sinusar`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_relacionado` (`id_relacionado`);

--
-- Indices de la tabla `relaciones_en_es`
--
ALTER TABLE `relaciones_en_es`
  ADD PRIMARY KEY (`id_sinusar`),
  ADD KEY `id_es` (`id_es`),
  ADD KEY `id_en` (`id_en`);

--
-- Indices de la tabla `relaciones_es_es`
--
ALTER TABLE `relaciones_es_es`
  ADD PRIMARY KEY (`id_sinusar`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`),
  ADD KEY `id_5` (`id`),
  ADD KEY `id_6` (`id`),
  ADD KEY `id_7` (`id`),
  ADD KEY `id_8` (`id`),
  ADD KEY `id_relacionado` (`id_relacionado`);

--
-- Indices de la tabla `terminos_en`
--
ALTER TABLE `terminos_en`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom_en` (`nom_en`);

--
-- Indices de la tabla `terminos_es`
--
ALTER TABLE `terminos_es`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nom_es` (`nom_es`),
  ADD KEY `nom_es_2` (`nom_es`),
  ADD KEY `nom_es_3` (`nom_es`),
  ADD KEY `nom_es_4` (`nom_es`),
  ADD KEY `nom_es_5` (`nom_es`),
  ADD KEY `nom_es_6` (`nom_es`),
  ADD KEY `nom_es_7` (`nom_es`),
  ADD KEY `nom_es_8` (`nom_es`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relaciones_en_en`
--
ALTER TABLE `relaciones_en_en`
  MODIFY `id_sinusar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relaciones_en_es`
--
ALTER TABLE `relaciones_en_es`
  MODIFY `id_sinusar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relaciones_es_es`
--
ALTER TABLE `relaciones_es_es`
  MODIFY `id_sinusar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `terminos_en`
--
ALTER TABLE `terminos_en`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `terminos_es`
--
ALTER TABLE `terminos_es`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
