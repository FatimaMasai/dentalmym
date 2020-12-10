-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 23:25:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_v`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `especialidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `id_persona`, `especialidad`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ortodoncia\r\n', 1, '2020-12-03 17:58:49', '2020-12-03 17:58:49'),
(2, 11, 'ESTÉTICA', 1, '2020-12-03 18:28:15', '2020-12-03 20:32:00'),
(3, 9, 'CIRUGÍA', 1, '2020-12-03 20:33:24', '2020-12-03 20:33:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paciente`
--

CREATE TABLE `tbl_paciente` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `alergia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `antecedentes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recomendado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_paciente`
--

INSERT INTO `tbl_paciente` (`id`, `id_persona`, `alergia`, `observacion`, `responsable`, `antecedentes`, `recomendado`, `estado`, `created_at`, `updated_at`) VALUES
(1, 11, 'NINGUNA', 'DOLOR DE MUELA', 'JOSE MELGAR', 'NINGUNA', 'PUBLICIDAD DE FB', 1, '2020-12-03 01:22:08', '2020-12-03 20:35:29'),
(2, 10, 'NINGUNA', 'DOLOR DE ENCIAS', 'JOSE', 'NINGUNA', 'MARIA', 1, '2020-12-10 20:16:17', '2020-12-10 20:16:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_pat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_mat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `tipo_doc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_doc` int(16) NOT NULL,
  `sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `celular` int(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`id`, `nombre`, `apellido_pat`, `apellido_mat`, `fecha_nac`, `tipo_doc`, `numero_doc`, `sexo`, `celular`, `email`, `direccion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'DANIEL', 'CALDERON', 'CALDERON', '2020-12-03', 'fasfsa', 421412431, 'FEMENINO', 23452345, 'chamofatima123@gmail.com', 'asfasf', 1, '2020-12-03 01:21:56', '2020-12-03 03:18:31'),
(2, 'MARTHA CECILIA', 'MONTOYA', 'ROJAS', '2020-12-01', 'CI', 13241257, 'FEMENINO', 45235425, 'martha@gmail.com', '4to Anillo', 1, '2020-12-03 03:18:03', '2020-12-03 03:18:03'),
(3, 'JOSE MANUEL', 'SOLIZ', 'SOLIZ', '2006-02-01', 'CI', 12766789, 'MASCULINO', 75639887, 'josemanuel@gmail.com', 'MONTERO', 1, '2020-12-03 20:13:57', '2020-12-03 20:13:57'),
(4, 'PERCY', 'REZANDERO', 'FERNÁNDEZ', '1994-02-23', 'CI', 12677876, 'MASCULINO', 75310997, 'percy@gmail.com', 'SEGUNDO ANILLO  AV. ALEMANA', 1, '2020-12-03 20:15:51', '2020-12-03 20:15:51'),
(5, 'ADRIANA CAROLINA', 'HERNANDEZ', 'MONTERROZA', '1989-02-13', 'CI', 21345432, 'FEMENINO', 77711132, 'adriana@gmail.com', 'TERCER ANILLO BENI', 1, '2020-12-03 20:18:03', '2020-12-03 20:18:03'),
(6, 'CAMILO ALBERTO', 'CORTÉS', 'MONTEJO', '1998-06-03', 'CI', 78879865, 'MASCULINO', 75390021, 'camilo@gmail.com', 'BANZER PRIMER ANILLO CALLE 3', 1, '2020-12-03 20:19:52', '2020-12-03 20:19:52'),
(7, 'GABRIEL MAURICIO', 'NIETO', 'BUSTOS', '1984-11-23', 'CI', 34434321, 'MASCULINO', 75001234, 'gabriel@gmail.com', 'CAÑOTO PRIMER ANILLO CALLE 3 NUMERO 18', 1, '2020-12-03 20:21:18', '2020-12-03 20:21:18'),
(8, 'JORGE ESTEBAN', 'REY', 'BOTERO', '1995-12-30', 'CI', 89099087, 'MASCULINO', 750123321, 'jorge@gmail.com', '3 PASOS AL FRENTE 4TO ANILLO CALLE 3', 1, '2020-12-03 20:22:47', '2020-12-03 20:22:47'),
(9, 'LAURA CAMILA', 'PUERTO', 'CASTRO', '1976-10-20', 'CI', 12566543, 'MASCULINO', 75405663, 'laura@gmail.com', '5TO ANILLO', 1, '2020-12-03 20:25:47', '2020-12-03 20:25:47'),
(10, 'SEBASTIAN', 'BORDA', 'MELGUIZO', '1990-09-10', 'CI', 12323212, 'FEMENINO', 75587667, 'seba@gmail.com', 'PRIMER ANILLO', 1, '2020-12-03 20:26:51', '2020-12-03 20:26:51'),
(11, 'RICARDO', 'VEGA', 'ZAMBRANO', '2015-02-12', 'CI', 12566578, 'FEMENINO', 77785664, 'ricardo@gmail.com', 'SEGUNDO ANILLO  AV. ALEMANA CALLE 2', 1, '2020-12-03 20:27:58', '2020-12-03 20:27:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

CREATE TABLE `tbl_proveedor` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`id`, `id_persona`, `empresa`, `nit`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, 'BELEN', 12567978, 1, '2020-12-03 19:31:51', '2020-12-03 19:31:51'),
(2, 11, 'ODONTO-NETT', 12566565, 1, '2020-12-03 20:36:11', '2020-12-03 20:36:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicio`
--

CREATE TABLE `tbl_servicio` (
  `id` int(11) NOT NULL,
  `id_tipo_servicio` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_servicio`
--

INSERT INTO `tbl_servicio` (`id`, `id_tipo_servicio`, `nombre`, `precio`, `estado`, `created_at`, `updated_at`) VALUES
(1, 4, 'PRÓTESIS BASICO', 400, 1, '2020-12-03 20:03:24', '2020-12-03 20:03:24'),
(2, 3, 'LIMPIEZA', 300, 1, '2020-12-03 20:40:12', '2020-12-03 20:40:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_producto`
--

CREATE TABLE `tbl_tipo_producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_producto`
--

INSERT INTO `tbl_tipo_producto` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ALCOHOL', 1, '2020-12-02 17:39:12', '2020-12-02 17:57:53'),
(2, 'GUANTES DESECHABLES', 1, '2020-12-02 17:42:16', '2020-12-02 17:56:06'),
(3, 'MATERIAL DE ENDODONCIA', 1, '2020-12-02 17:56:24', '2020-12-02 17:56:24'),
(4, 'MATERIAL DE ORTODONCIA', 1, '2020-12-02 17:56:38', '2020-12-02 17:56:38'),
(5, 'INSUMOS', 1, '2020-12-02 17:57:38', '2020-12-02 17:57:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_servicio`
--

CREATE TABLE `tbl_tipo_servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_servicio`
--

INSERT INTO `tbl_tipo_servicio` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'CIRUGIA', 1, '2020-12-02 17:14:14', '2020-12-02 17:54:21'),
(2, 'ENDODONCIA', 1, '2020-12-02 17:16:05', '2020-12-02 17:54:30'),
(3, 'PERIODONCIA', 1, '2020-12-02 17:16:39', '2020-12-02 17:54:43'),
(4, 'PRÓTESIS DENTAL', 1, '2020-12-02 17:17:05', '2020-12-02 17:55:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_venta`
--

CREATE TABLE `tbl_venta` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `glosario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_venta`
--

INSERT INTO `tbl_venta` (`id`, `id_paciente`, `id_servicio`, `glosario`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Venta de servicio', 1, '2020-12-10 20:04:04', '2020-12-10 20:04:04'),
(2, 10, 1, 'VENTA DE SERVICIO', 1, '2020-12-10 20:16:48', '2020-12-10 20:16:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fatima', 'chamofatima123@gmail.com', NULL, '$2y$10$OcZn347R/ih9jVDM.DMypu6kTZBpMidtKWPaiqUXPkxOeaJzjaUxG', NULL, '2020-11-29 05:29:08', '2020-11-29 05:29:08'),
(2, 'luisa', 'luisa@gmail.com', NULL, '$2y$10$.N0kQjwBP62SVY436zldtO7wsnknZInVWwWMlah/BP5vaKYbHIufe', NULL, '2020-11-29 20:14:22', '2020-11-29 20:14:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tipo_servicio`
--
ALTER TABLE `tbl_tipo_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_venta`
--
ALTER TABLE `tbl_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_servicio`
--
ALTER TABLE `tbl_tipo_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_venta`
--
ALTER TABLE `tbl_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
