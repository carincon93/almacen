-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 19:02:11
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambientes`
--

CREATE TABLE `ambientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_ambiente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_ambiente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movilidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `cupo` int(11) NOT NULL,
  `id_instructor` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` bigint(20) NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` int(11) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`id`, `nombre`, `apellidos`, `documento`, `area`, `ip`, `celular`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'ALEXANDER ', 'GARCIA VASQUEZ', 7684828, 'Instructor  G-19 Mantenimiento', 62500, 3148515827, 'agarciavasquez@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(2, 'APARICIO', 'MEJIA RENDON', 75091846, 'Instructor G-16 Construccion', 0, 3014160504, 'apariciomejia@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(3, 'CONSUELO', 'GARCIA ESCOBAR ', 24318223, 'Instructor  G-20 Emprendimiento', 0, 3113076751, 'cgarciae@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(4, 'CRISTIAN MAURICIO', 'TORO', 16071103, 'Instructor G-6 Soldadura', 0, 3136501532, 'mtorov@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(5, 'DIEGO ALEXANDER', 'GRAJALES PEREZ', 75096903, 'Instructor G-11 Mantenimiento', 0, 3163965678, 'dagrajales@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(6, 'ELVER', 'VALENCIA', 75064699, 'Instructor G- 14 Soldadura', 0, 3117385100, 'elvervalencia@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(7, 'FERNANDO', 'RODRIGUEZ VALENCIA ', 10232014, 'Equipo Tecnico Pedagogico Instructor G-20', 62263, 3122588689, 'ferrodriguezv@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(8, 'FRANCISCO JAVIER', 'VARGAS   ', 10243995, 'Instructor G-16 Mantenimiento', 0, 3104707065, 'fjvargas@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(9, 'GUILLERMO ANTONIO', 'VALENCIA VELASQUEZ', 10279010, 'Instructor G-13 Electricidad', 0, 3137656579, 'guivalen@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(10, 'JAIME', 'GIRALDO ORREGO', 10286761, 'Instructor G-19 Electricidad', 0, 3136443404, 'jagio13@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(11, 'JAIME', 'TREJOS LONDONO', 10274114, 'Instructor G-16 Electricidad', 0, 3147392470, 'jtrejos@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(12, 'JHON FREDY', 'CORTES SOTO', 10279373, 'Instructor G-11 Mantenimiento', 0, 3103598404, 'jfrecos@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(13, 'JHON JAIRO', 'CARDENAS ROMERO', 10279651, 'Instructor G-20 -Gestor Red de Conocimiento Automotor', 62093, 3117784659, 'jotajota@misena.edu.co', '2017-07-26 05:00:00', NULL),
(14, 'JOSE ALIRIO', 'LONDONO RIVERA ', 10241219, 'Instructor G-13 Mantenimiento', 0, 3122972801, 'alonri@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(15, 'JOSE FERNANDO', 'VERGARA GALLEGO ', 10271981, 'Instructor G-17 Metalmecanica', 0, 3217068789, 'jfvergara@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(16, 'JUAN CARLOS', 'ARANGO ARBELAEZ', 79274609, 'Instructor G-12 Automotriz', 0, 3137169379, 'jcarango@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(17, 'JUAN CARLOS', 'LOPEZ MORALES', 94283555, 'Instructor G-10 Electricidad', 0, 3122430542, 'juanclopez10@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(18, 'JUAN CARLOS', 'RUGE OSORIO', 10286847, 'Instructor G-20 Calidad- Evaluador Competencias Laborales', 62097, 3108326255, 'juanruge@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(19, 'LUIS ENRIQUE', 'BRAVO CARDONA', 15903478, 'Instructor G-20 Saludo Ocupacional', 0, 3137485587, 'lebravocardona@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(20, 'LUZ DE FATIMA', 'ALVAREZ OSORIO ', 25232397, 'Instructora G-20 Confección', 0, 3113851917, 'lfalvarez@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(21, 'MIRIAM CLAUDINA', 'GARCIA NARANJO ', 30287195, 'Instructora  G-20 Electricidad', 0, 3104931245, 'mcgarcian@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(22, 'ROBERTO', 'ESTRADA HERRERA ', 10248388, 'Instructor G-12 Sistemas', 0, 3002024140, 'restradah@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(23, 'RUBY ', 'VARGAS RUIZ', 30292725, 'Instructora G-14 Confección', 0, 3168756222, 'ruvaruiz@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(24, 'VICTOR MAURICIO', 'ACEVEDO CORREA', 9817289, 'Instructor Mecánica Automotriz', 0, 3137086769, 'vmacevedo@misena.edu.co ', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(25, 'PAULA ANDREA', 'LONDOÑO', 30394952, 'Instructora G-11 Sistemas', 0, 3105312798, 'palondono25@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00'),
(26, 'DAIRO DE JESUS', 'GAÑAN GALLO', 75089861, 'Instructor Diseño Mecánico', 0, 3108223340, 'dairog@misena.edu.co', '2017-07-26 05:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_26_151324_create_instructores_table', 1),
(4, '2017_07_26_151325_create_ambientes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambientes_id_instructor_foreign` (`id_instructor`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructores_correo_unique` (`correo`);

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `ambientes_id_instructor_foreign` FOREIGN KEY (`id_instructor`) REFERENCES `instructores` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
