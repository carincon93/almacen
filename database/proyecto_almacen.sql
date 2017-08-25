-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2017 a las 23:50:42
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_ambiente` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `centro` text COLLATE utf8mb4_unicode_ci,
  `tipo_ambiente` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movilidad` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `cupo` int(11) NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponibilidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'disponible',
  `prestado_en` datetime DEFAULT NULL,
  `instructor_id` int(10) UNSIGNED DEFAULT NULL,
  `classgroup_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `classrooms`
--

INSERT INTO `classrooms` (`id`, `nombre_ambiente`, `descripcion`, `centro`, `tipo_ambiente`, `movilidad`, `estado`, `cupo`, `imagen`, `disponibilidad`, `prestado_en`, `instructor_id`, `classgroup_id`, `created_at`, `updated_at`) VALUES
(1, 'sistemas 1', NULL, NULL, 'aula', 'fijo', 'activo', 60, NULL, 'disponible', '2017-08-25 14:30:59', NULL, NULL, NULL, NULL),
(2, 'sistemas 2', NULL, NULL, 'aula', 'fijo', 'activo', 40, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(3, 'ambiente lego', NULL, NULL, 'aula', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(4, 'auditorio procesos industriales y construccion', NULL, NULL, 'auditorio', 'fijo', 'activo', 200, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(5, 'autocad', NULL, NULL, 'laboratorio', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(6, 'automotriz', NULL, NULL, 'taller', 'fijo', 'activo', 90, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(7, 'confeccion', NULL, NULL, 'taller', 'fijo', 'activo', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(8, 'diesel', NULL, NULL, 'taller', 'fijo', 'activo', 100, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(9, 'electricidad 1 ', NULL, NULL, 'taller', 'fijo', 'activo', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(10, 'electricidad 2', NULL, NULL, 'taller', 'fijo', 'activo', 70, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(11, 'electricidad 3', NULL, NULL, 'aula', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(12, 'electricidad 4', NULL, NULL, 'taller', 'fijo', 'activo', 30, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(13, 'espacio deportivo para la practica del futbol baloncesto voleibol', NULL, NULL, 'campo deportivo', 'fijo', 'activo', 300, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(14, 'espacio para trabajo en alturas', NULL, NULL, 'taller', 'fijo', 'activo', 350, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(15, 'gas', NULL, NULL, 'taller', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(16, 'gimnasio regional caldas', NULL, NULL, 'aula', 'fijo', 'activo', 1000, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(17, 'maderas', NULL, NULL, 'taller', 'fijo', 'activo', 35, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(18, 'mantenimiento', NULL, NULL, 'taller', 'fijo', 'activo', 105, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(19, 'mecanizado', NULL, NULL, 'taller', 'fijo', 'activo', 80, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(20, 'metalografia', NULL, NULL, 'taller', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(21, 'motos cpi', NULL, NULL, 'taller', 'fijo', 'activo', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(22, 'refrigeracion', NULL, NULL, 'taller', 'fijo', 'activo', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(23, 'sistemas 3', NULL, NULL, 'aula', 'fijo', 'activo', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(24, 'salud ocupacional', NULL, NULL, 'aula', 'fijo', 'activo', 70, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(25, 'soldadura', NULL, NULL, 'taller', 'fijo', 'activo', 75, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00'),
(26, 'tecnoparque procesos industriales', NULL, NULL, 'taller', 'fijo', 'activo', 50, NULL, 'disponibe', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class_groups`
--

CREATE TABLE `class_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ficha` int(10) UNSIGNED NOT NULL,
  `nombre_ficha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_id` int(10) UNSIGNED DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_lectiva` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `horario` text COLLATE utf8mb4_unicode_ci,
  `tipo_formacion` varchar(91) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `class_groups`
--

INSERT INTO `class_groups` (`id`, `id_ficha`, `nombre_ficha`, `especialidad`, `instructor`, `instructor_id`, `fecha_inicio`, `fecha_lectiva`, `fecha_final`, `horario`, `tipo_formacion`, `disponibilidad`, `created_at`, `updated_at`) VALUES
(1, 1132816, 'analisis y desarrollo de sistemas de informacion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(2, 1323395, 'analisis y desarrollo de sistemas de informacion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(3, 1368665, 'especializacion tecnologica metodologias de calidad para el desarrollo de software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(4, 1375843, 'aux. trabajador de la madera', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(5, 1094381, 'topografia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(6, 1261608, 'tecnologo en construccion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(7, 1261604, 'tgo  desarrollo grafico de proyectos de arquitectura e ingenieria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(8, 1301351, 'mantenimiento y reparacion de edificaciones', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(9, 1368569, 'tgo  desarrollo grafico de proyectos de arquitectura e ingenieria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(10, 1075391, 'topografia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(11, 1323382, 'tecnologo en topografia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(12, 1368604, 'tgo en obras civiles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(13, 1132795, 'mantenimiento mecanico industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(14, 1132701, 'soldadura de productos metalicos (platina)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(15, 1182104, 'mecanizado de productos metalmecanicos ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(16, 1197616, 'mantenimiento mecanico industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(17, 1368653, 'mantenimiento mecanico industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(18, 1132756, 'tgo electricidad industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(19, 1197544, 'mantenimiento electromecanico industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(20, 1197576, 'elctricidad industrial ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(21, 1368673, 'tecnologo en electricidad  industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(22, 1368529, 'tc en electricidad residencial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(23, 1323358, 'tgo supervision de redes de distribucion de energia electrica', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(24, 1367722, 'mantenimiento electromecanico industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(25, 1114874, 'mantenimiento mecatronico de automotores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(26, 1343933, 'tc mantenimiento de las motocicletas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(27, 1368501, 'tco en mantenimiento de motores diesel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(28, 1368642, 'tgo en mantenimiento mecatronico de automotores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(29, 1368642, 'tgo en mantenimiento mecatronico de automotores (b)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(30, 1306630, 'tc  en seguridad vial control de transito y transporte', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(31, 1368498, 'tco en mantenimiento de motores diesel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(32, 1369525, 'tc patronaje industrial de prendas de vestir (a)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(33, 1369525, 'tc patronaje industrial de prendas de vestir (b)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(34, 1368558, 'tgo en gestion integrada de la calidad medio ambiente seguridad y salud ocupacional (a)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(35, 1368558, 'tgo en gestion integrada de la calidad medio ambiente seguridad y salud ocupacional (b)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(36, 1343983, 'mantenimiento electrico y electromecanico en automotores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(37, 1374264, 'operario en confeccion industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(38, 1362328, 'operario en confeccion industrial', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL),
(39, 1343061, 'tc mantenimiento de motocicletas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'presencial', 'disponible', NULL, NULL);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_records`
--

CREATE TABLE `history_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `classgroup_id` int(10) UNSIGNED NOT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `prestado_en` datetime NOT NULL,
  `entregado_en` datetime DEFAULT NULL,
  `novedad` longtext COLLATE utf8mb4_unicode_ci,
  `novedad_nueva` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `history_records`
--

INSERT INTO `history_records` (`id`, `instructor_id`, `classgroup_id`, `classroom_id`, `prestado_en`, `entregado_en`, `novedad`, `novedad_nueva`) VALUES
(1, 57, 1, 1, '2017-08-25 14:30:59', '2017-08-25 14:31:33', 'se robo mouse', 'entrego mouse');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructors`
--

CREATE TABLE `instructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vinculacion1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoplanta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipocontrato` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidadhoras` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actadministrativas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centro` text COLLATE utf8mb4_unicode_ci,
  `numero_documento` int(10) UNSIGNED NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `celular` bigint(20) NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '/images/perdefault.png',
  `disponibilidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'disponible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructors`
--

INSERT INTO `instructors` (`id`, `nombre`, `apellidos`, `especialidad`, `vinculacion1`, `tipoplanta`, `tipocontrato`, `cantidadhoras`, `actadministrativas`, `area`, `centro`, `numero_documento`, `ip`, `celular`, `email`, `imagen`, `disponibilidad`, `created_at`, `updated_at`) VALUES
(1, 'alexander ', 'garcia vasquez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor  g-19 mantenimiento', NULL, 7684828, 62500, 3148515827, 'agarciavasquez@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(2, 'aparicio', 'mejia rendon', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-16 construccion', NULL, 75091846, 0, 3014160504, 'apariciomejia@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(3, 'consuelo', 'garcia escobar ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora  g-20 emprendimiento', NULL, 24318223, 0, 3113076751, 'cgarciae@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(4, 'cristian mauricio', 'toro', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-6 soldadura', NULL, 16071103, 0, 3136501532, 'mtorov@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(5, 'diego alexander', 'grajales perez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-11 mantenimiento', NULL, 75096903, 0, 3163965678, 'dagrajales@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(6, 'elver', 'valencia', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g- 14 soldadura', NULL, 75064699, 0, 3117385100, 'elvervalencia@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(7, 'fernando', 'rodriguez valencia ', NULL, 'planta', NULL, NULL, NULL, NULL, 'equipo tecnico pedagogico instructor g-20', NULL, 10232014, 62263, 3122588689, 'ferrodriguezv@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(8, 'francisco javier', 'vargas   ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-16 mantenimiento', NULL, 10243995, 0, 3104707065, 'fjvargas@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(9, 'guillermo antonio', 'valencia velasquez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-13 electricidad', NULL, 10279010, 0, 3137656579, 'guivalen@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(10, 'jaime', 'giraldo orrego', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-19 electricidad', NULL, 10286761, 0, 3136443404, 'jagio13@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(11, 'jaime', 'trejos londono', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-16 electricidad', NULL, 10274114, 0, 3147392470, 'jtrejos@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(12, 'jhon fredy', 'cortes soto', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-11 mantenimiento', NULL, 10279373, 0, 3103598404, 'jfrecos@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(13, 'jhon jairo', 'cardenas romero', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-20 -gestor red de conocimiento automotor\n', NULL, 10279651, 62093, 3117784659, 'jotajota@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(14, 'jose alirio', 'londono rivera ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-13 mantenimiento', NULL, 10241219, 0, 3122972801, 'alonri@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(15, 'jose fernando', 'vergara gallego ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-17 metalmecanica', NULL, 10271981, 0, 3217068789, 'jfvergara@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(16, 'juan carlos', 'arango arbelaez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-12 automotriz', NULL, 79274609, 0, 3137169379, 'jcarango@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(17, 'juan carlos', 'lopez morales', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-10 electricidad', NULL, 94283555, 0, 3122430542, 'juanclopez10@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(18, 'juan carlos', 'ruge osorio', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-20 calidad- evaluador competencias laborales', NULL, 10286847, 62097, 3108326255, 'juanruge@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(19, 'luis enrique', 'bravo cardona', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-20 saludo ocupacional', NULL, 15903478, 0, 3137485587, 'lebravocardona@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(20, 'luz de fatima', 'alvarez osorio ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora g-20 confeccion', NULL, 25232397, 0, 3113851917, 'lfalvarez@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(21, 'miriam claudina', 'garcia naranjo ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora  g-20 electricidad', NULL, 30287195, 0, 3104931245, 'mcgarcian@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(22, 'roberto', 'estrada herrera ', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor g-12 sistemas', NULL, 10248388, 0, 3002024140, 'restradah@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(23, 'ruby ', 'vargas ruiz', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora g-14 confeccion', NULL, 30292725, 0, 3168756222, 'ruvaruiz@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(24, 'victor mauricio', 'acevedo correa', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 9817289, 0, 3137086769, 'vmacevedo@misena.edu.co ', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(25, 'paula andrea', 'londono', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora g-11 sistemas', NULL, 30394952, 0, 3105312798, 'palondono25@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(26, 'dairo de jesus', 'ganan gallo', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor diseno mecanico', NULL, 75089861, 0, 3108223340, 'dairog@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(27, 'roland', 'roth echeverry', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 75103320, 0, 3217369989, 'rolyroth@misena.edu.co', '/images/instructors/1503687450.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:57:30'),
(28, 'sandra milena', 'trujillo ortiz', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 30336710, 0, 3108491154, 'smtrujillo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(29, 'diego', 'giraldo ramirez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor electricidad virtual', NULL, 10250071, 0, 3206307217, 'dgr555@misena.edu.co', '/images/instructors/1503634106.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:08:26'),
(30, 'monica eugenia', 'montoya arias', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 30392935, 0, 3003108170, 'memontoya53@misena.edu.co', '/images/instructors/1503687293.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:54:53'),
(31, 'natalia', 'erazo becerra', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora electricidad virtual', NULL, 24334576, 0, 3134623938, 'nata_erazo@hotmail.com', '/images/instructors/1503687309.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:55:09'),
(32, 'claudia sonia', 'serna granada', NULL, 'planta selected=\"selected\"', NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 30322042, 0, 3116827825, 'cls0230@my.londonmet.ac.uk', '/images/instructors/1503633852.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:04:12'),
(33, 'carmen elena', 'hernandez rincon', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora etica', NULL, 24340753, 0, 3147917762, 'carelena@misena.edu.co', '/images/instructors/1503632862.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:47:42'),
(34, 'alexander', 'romero moreno', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 9975428, 0, 3113681557, 'aromero824@misena.edu.co', '/images/instructors/1503631625.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:27:05'),
(35, 'paula andrea', 'cruz mejia', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora calidad', NULL, 30396241, 0, 3176547111, 'paulaandreacruz@yahoo.es', '/images/instructors/1503687420.pdf', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:57:00'),
(36, 'maria beatriz', 'pava hurtado', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 30270825, 0, 3162559047, 'bpava@misena.edu.co', '/images/instructors/1503687128.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:52:08'),
(37, 'luisa fernanda', 'echeverri caballero', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora comunicaciones', NULL, 24335083, 0, 3146264428, 'lfecheverri38@misena.edu.co', '/images/instructors/1503687084.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:51:24'),
(38, 'luisa fernanda', 'castano calvo', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora cultura fisica', NULL, 30396654, 0, 3104329906, 'lfcalvo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(39, 'german', 'rodriguez valencia', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 10285068, 0, 3152735162, 'grodriguez86@misena.edu.co', '/images/instructors/1503685617.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:26:57'),
(40, 'oscar fernando', 'aristizabal cardona', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 9859602, 0, 3103972370, 'ofac@misena.edu.co', '/images/instructors/1503687351.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:55:51'),
(41, 'andres mauricio', 'jaramillo gonzalez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 75081636, 0, 3113837172, 'anmajago@misena.edu.co', '/images/instructors/1503632094.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:34:54'),
(42, 'jorge alberto', 'tamayo grisales', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 1053782472, 0, 3003267169, 'vabe9@hotmail.com', '/images/instructors/1503686247.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:37:27'),
(43, 'diego andres', 'serna velasquez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor diseno mecanico', NULL, 75096299, 0, 3146504873, 'daserna99@misena.edu.co', '/images/instructors/1503634163.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:09:23'),
(44, 'stharling melody', 'ramos giraldo', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora electricidad', NULL, 30397958, 0, 3163244180, 'smelodyrg@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(45, 'luis camilo', 'estrada patino', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 1085297027, 0, 3128488679, 'luis.23513230762@ucaldas.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(46, 'olga clemencia', 'marin henao', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 30395126, 0, 3147694939, 'ocmarinh@misena.edu.co', '/images/instructors/1503687338.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:55:38'),
(47, 'andres felipe', 'lopez chica', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 75090879, 0, 3206874025, 'felopez11@gmail.com', '/images/instructors/1503631781.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:29:41'),
(48, 'gladys francelly', 'cardona franco', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 30307343, 0, 3113364387, 'gladys.francelly@gmail.com', '/images/instructors/1503685647.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:27:27'),
(49, 'javier', 'ariza useche', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 79836769, 0, 3185272465, 'javier.ariza@misena.edu.co', '/images/instructors/1503685938.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:32:18'),
(50, 'jaime adolfo', 'fuentes sanchez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor motos', NULL, 11224476, 0, 3008115106, 'adolfofuentes@misena.edu.co', '/images/instructors/1503685825.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:30:25'),
(51, 'lorena patricia', 'valencia', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 30338297, 0, 3176171144, 'valencia.lp@misena.edu.co', '/images/instructors/1503686726.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:45:26'),
(52, 'fernando', 'arciniegas cordoba', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor calidad', NULL, 98392877, 0, 3162860686, 'fernandoac@misena.edu.co', '/images/instructors/1503685443.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:24:03'),
(53, 'jhon fredy', 'duque gallego', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 1053782759, 0, 3128850805, 'johnzegath@gmail.com', '/images/instructors/1503686060.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:34:20'),
(54, 'andres felipe', 'jurado patino', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor topografia', NULL, 1053770404, 0, 3015739296, 'afjurado40@misena.edu.co', '/images/instructors/1503631956.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:32:36'),
(55, 'angela marcela', 'castellanos ortegon', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 30398681, 0, 3008948200, 'amcastellanoso@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(56, 'camilo andres', 'arango munoz', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor mobiliario y maderas', NULL, 16077061, 0, 3206845171, 'camiaramo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:44:29'),
(57, 'yaneth', 'mejia rendon', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 1053811426, 0, 3045458490, 'ymejia624@misena.edu.co', '/images/instructors/1503687687.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 19:31:32'),
(58, 'daniel felipe', 'moncada cardona', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 1053777708, 0, 3163159109, 'danielmoncada@gmail.com', '/images/instructors/1503634016.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:06:56'),
(59, 'mario leandro', 'vanegas valencia', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 1053807619, 0, 3113005998, 'marlevan38@gmail.com', '/images/instructors/1503687259.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:54:19'),
(60, 'victor hugo', 'arias saldarriaga', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 10286879, 0, 3117268025, 'victorari17@gmail.com', '/images/instructors/1503687533.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:58:53'),
(61, 'mario', 'raigosa arango', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 10245454, 0, 3117581159, 'marioraigosaarango@gmail.com', '/images/instructors/1503687153.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:52:33'),
(62, 'jhonatan', 'franco arias', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor soldadura', NULL, 1053784021, 0, 3117848943, 'eltaja1053@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:36:02'),
(63, 'yamileth', 'erazo becerra', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 24333588, 0, 3103898510, 'yamierazo@misena.edu.co', '/images/instructors/1503687675.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 19:01:15'),
(64, 'andrea del pilar', 'alvarez camargo', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora trabajo alturas', NULL, 30405204, 0, 3146611226, 'aalvarez40@misena.edu.co', '/images/instructors/1503631756.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:29:16'),
(65, 'alexandra', 'naranjo cardona', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 30321612, 0, 3135217056, 'alexa_nc@misena.edu.co', '/images/instructors/1503631664.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:27:44'),
(67, 'lucila', 'norena arias', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 30310215, 0, 3176422121, 'lucilanorarias@misena.edu.co', '/images/instructors/1503686756.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:45:56'),
(68, 'jorge hernan', 'alzate buitrago', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 6108160, 0, 3122011383, 'pizcali1979@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:38:27'),
(69, 'john alexander', 'arenas noriega', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 75003878, 0, 3104681193, 'jaan821@misena.edu.co', '/images/instructors/1503686216.pdf', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:36:56'),
(70, 'diana eugenia', 'henao barragan', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora motocicletas', NULL, 1110506666, 0, 3115183802, 'dehenaob@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(71, 'andres julian', 'hoyos caicedo', NULL, 'planta selected=\"selected\"', NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 75097575, 0, 3107324131, 'ajhoyos@misena.edu.co', '/images/instructors/1503632072.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:34:32'),
(72, 'fernando', 'mejia lopez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 75096659, 0, 3207585520, 'fmejia@umanizales.edu.co', '/images/instructors/1503634275.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:11:15'),
(73, 'claudio alberto', 'valencia sanchez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 75073330, 0, 3148856871, 'cavalencia033@misena.edu.co', '/images/instructors/1503633873.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:04:33'),
(74, 'cesar augusto', 'ramirez ocampo', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor maderas', NULL, 10262514, 0, 3117733406, 'cauramirez@misena.edu.co', '/images/instructors/1503633756.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:02:36'),
(75, 'juan pablo', 'mejia ramirez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 75088893, 0, 3127917880, 'jpmejiar@hotmail.com', '/images/instructors/1503686572.JPG', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:42:52'),
(76, 'angela maria ', 'alzate ', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructora etica', NULL, 30395470, 0, 3117157455, 'alegnateza2@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(77, 'jhon kevin', 'florez pena', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor automotriz', NULL, 16073677, 0, 3105488749, 'lucas062@gmial.com', '/images/instructors/1503686137.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:35:37'),
(78, 'lina rocio', 'ospina duque', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora salud ocupacional', NULL, 42114871, 0, 3216265294, 'lirosduque@misena.edu.co', '/images/instructors/1503686710.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:45:10'),
(79, 'junsun', 'sunico consistente', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 281463, 0, 3016877061, 'jsunico@misena.edu.co', '/images/instructors/1503686604.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:43:24'),
(80, 'andres felipe', 'henao lopez', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor cultura fisica', NULL, 75107712, 0, 3117423635, 'andres_henao_03@hotmail.com', '/images/instructors/1503631936.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:32:16'),
(81, 'sara maria', 'clavijo arrubla', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora construccion', NULL, 1053806513, 0, 3166098393, 'sarah12340@gmail.com', '/images/instructors/1503687499.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:58:19'),
(82, 'nestor mauricio', 'pinto norena', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 75072443, 0, 3115858811, 'mauricioelectricista@gmail.com', '/images/instructors/1503687324.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:55:24'),
(83, 'karen viviana', 'lemos ceballos', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 31570114, 0, 3123042862, 'kvlemus@misena.edu.co', '/images/instructors/1503686641.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:44:01'),
(84, 'jorge augusto ', 'villada suaza ', NULL, 'contratista', NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 7534711, 0, 3164494488, 'jovisu@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', NULL),
(85, 'diana cristina', 'montoya hoyos', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 24347071, 0, 3113756986, 'crismajo10@gmail.com', '/images/instructors/1503634065.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:07:45'),
(86, 'luisa fernanda', 'callejas orrego', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 30232108, 0, 3007736768, 'lcallejaso@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:50:05'),
(87, 'carlos andres', 'henao lema', NULL, 'planta selected=\"selected\"', NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 75096428, 0, 3214514010, 'cahlema@hotmail.com', '/images/instructors/1503632761.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:46:01'),
(88, 'emilce silvana', 'ceron rosero', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora salud ocupacional', NULL, 27451978, 0, 3113684029, 'esilcero@hotmail.com', '/images/instructors/1503634220.JPG', 'disponible', '2017-08-10 06:27:32', '2017-08-25 04:10:20'),
(89, 'paola natalia', 'orozco orozco', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 1053780547, 0, 3108406371, 'pa.na.oro19@hotmail.com', '/images/instructors/1503687382.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:56:22'),
(90, 'asdrubal', 'gomez galeano', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 1053800692, 0, 3128820955, 'asdmax@hotmail.com', '/images/instructors/1503632218.jpg', 'disponible', '2017-08-10 06:27:32', '2017-08-25 03:36:58'),
(91, 'javier mauricio', 'cortes moreno', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor joyeria', NULL, 80870811, 0, 3103209980, 'maoco72@hotmail.com', '/images/instructors/1503685974.pdf', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:32:54'),
(92, 'jose uriel', 'gallego bernal', NULL, 'planta', NULL, NULL, NULL, NULL, 'instructor redes de gas', NULL, 75034645, 0, 3205245495, 'jurielg@misena.edu.co', '/images/instructors/1503686351.png', 'disponible', '2017-08-10 06:27:32', '2017-08-25 18:39:11');

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
(3, '2017_08_20_113259_create_table_instructors', 1),
(4, '2017_08_20_113444_create_table_class_groups', 1),
(5, '2017_08_20_113509_create_table_classrooms', 1),
(6, '2017_08_20_113524_create_table_history_records', 1);

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jaime palomino', 'jaime@mail.com', '$2y$10$u5cb2NbKWrLcjhrB6AS/V.zor8CwboOBG5Lg9rDvIabJn4hKgHmAS', '2gKXxVep7P5SJv5OspQii2g8gb0i4dqfeUXc7pnY2CZ5UFsOkLTirAic4npE', '2017-08-18 08:27:43', '2017-08-19 04:33:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_instructor_id_foreign` (`instructor_id`),
  ADD KEY `classrooms_classgroup_id_foreign` (`classgroup_id`);

--
-- Indices de la tabla `class_groups`
--
ALTER TABLE `class_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_groups_instructor_id_foreign` (`instructor_id`);

--
-- Indices de la tabla `history_records`
--
ALTER TABLE `history_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_records_instructor_id_foreign` (`instructor_id`),
  ADD KEY `history_records_classgroup_id_foreign` (`classgroup_id`);

--
-- Indices de la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_numero_documento_unique` (`numero_documento`),
  ADD UNIQUE KEY `instructors_email_unique` (`email`);

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
-- AUTO_INCREMENT de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `class_groups`
--
ALTER TABLE `class_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `history_records`
--
ALTER TABLE `history_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_classgroup_id_foreign` FOREIGN KEY (`classgroup_id`) REFERENCES `class_groups` (`id`),
  ADD CONSTRAINT `classrooms_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `class_groups`
--
ALTER TABLE `class_groups`
  ADD CONSTRAINT `class_groups_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `history_records`
--
ALTER TABLE `history_records`
  ADD CONSTRAINT `history_records_classgroup_id_foreign` FOREIGN KEY (`classgroup_id`) REFERENCES `class_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_records_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
