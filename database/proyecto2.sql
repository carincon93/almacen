-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2017 a las 18:20:30
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

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
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_ambiente` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponibilidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'disponible',
  `centro` text COLLATE utf8mb4_unicode_ci,
  `tipo_ambiente` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movilidad` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `cupo` int(11) NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestado_en` datetime DEFAULT NULL,
  `instructor_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `classrooms`
--

INSERT INTO `classrooms` (`id`, `nombre_ambiente`, `descripcion`, `disponibilidad`, `centro`, `tipo_ambiente`, `movilidad`, `estado`, `cupo`, `imagen`, `prestado_en`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'sistemas 1', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 60, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(2, 'sistemas 2', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 40, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(3, 'ambiente lego', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(4, 'auditorio procesos industriales y construccion', NULL, 'disponible', NULL, 'auditorio', 'fijo', 'activo', 200, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(5, 'autocad', NULL, 'disponible', NULL, 'laboratorio', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '2017-08-15 05:20:10'),
(6, 'automotriz', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 90, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(7, 'confeccion', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 60, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(8, 'diesel', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 100, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(9, 'electricidad 1 ', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 60, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(10, 'electricidad 2', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 70, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(11, 'electricidad 3', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(12, 'electricidad 4', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 30, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(13, 'espacio deportivo para la practica del futbol baloncesto voleibol', NULL, 'disponible', NULL, 'campo deportivo', 'fijo', 'activo', 300, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(14, 'espacio para trabajo en alturas', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 350, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(15, 'gas', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(16, 'gimnasio regional caldas', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 1000, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(17, 'maderas', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 35, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(18, 'mantenimiento', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 105, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(19, 'mecanizado', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 80, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(20, 'metalografia', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(21, 'motos cpi', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 60, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(22, 'refrigeracion', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 60, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(23, 'sistemas 3', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(24, 'salud ocupacional', NULL, 'disponible', NULL, 'aula', 'fijo', 'activo', 70, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(25, 'soldadura', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 75, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(26, 'tecnoparque procesos industriales', NULL, 'disponible', NULL, 'taller', 'fijo', 'activo', 50, NULL, '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class_groups`
--

CREATE TABLE `class_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ficha` int(11) NOT NULL,
  `nombre_ficha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_lectiva` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `horario` text COLLATE utf8mb4_unicode_ci,
  `tipo_formacion` varchar(91) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `class_groups`
--

INSERT INTO `class_groups` (`id`, `id_ficha`, `nombre_ficha`, `especialidad`, `instructor`, `fecha_inicio`, `fecha_lectiva`, `fecha_final`, `horario`, `tipo_formacion`, `created_at`, `updated_at`) VALUES
(2, 1132816, 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2016-04-11', '2017-10-12', '2018-04-11', 'Mixta', '', NULL, NULL),
(3, 1323395, 'Analisis y Desarrollo de Sistemas de Informacion', 'Informatica', 'Yaneth Mejia', '2017-04-17', '0000-00-00', '2019-04-17', 'Diurna', '', NULL, NULL),
(4, 1368665, 'ESPECIALIZACION TECNOLOGICA METODOLOÃAS DE CALIDAD PARA EL DESARROLLO DE SOFTWARE', 'Informatica', 'Yaneth Mejia', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(14, 1375843, 'AUX. TRABAJADOR DE LA MADERA', 'Construccion', 'CAMILO ANDRES ARANGO', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna', '', NULL, NULL),
(15, 1132770, 'DESARROLLO GRÃFICO DE PROYECTOS DE ARQUITECTURA E INGENIERÃA', 'Construccion', 'JORGE GUTIERREZ', '0001-01-01', '0000-00-00', '2017-10-17', 'Nocturna', '', NULL, NULL),
(21, 1094381, 'TOPOGRAFÃA', 'Construccion', 'AndrÃ©s Felipe Jurado ', '0000-00-00', '0000-00-00', '2017-07-27', 'Diurna', '', NULL, NULL),
(22, 1261608, 'TECNOLOGO EN CONSTRUCCION', 'Construccion', 'MARIO RAIGOSA ARANGO', '0000-00-00', '0000-00-00', '2018-08-26', 'Diurna', '', NULL, NULL),
(23, 1261604, 'TGO  DESARROLLO GRAFICO DE PROYECTOS DE ARQUITECTURA E INGENIERIA', 'Construccion', 'APARICIO MEJIA ', '0000-00-00', '0000-00-00', '2018-04-26', 'Diurna', '', NULL, NULL),
(24, 1301351, 'Mantenimiento y ReparaciÃ³n de Edificaciones', 'Construccion', 'MARIO RAIGOZA', '2016-10-10', '0000-00-00', '2017-12-11', 'Diurna', '', NULL, NULL),
(25, 1368569, 'TGO  DESARROLLO GRAFICO DE PROYECTOS DE ARQUITECTURA E INGENIERIA', 'Construccion', 'JORGE ALBERTO TAMAYO GRISALES', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(26, 1075391, 'TOPOGRAFIA', 'Construccion', 'Andres Felipe Jurado', '0000-00-00', '0000-00-00', '2017-09-28', 'Diurna', '', NULL, NULL),
(27, 1323382, 'TECNOLOGO EN TOPOGRAFIA', 'Construccion', 'FELIPE JURADO', '2017-01-23', '0000-00-00', '2019-07-23', 'Diurna', '', NULL, NULL),
(28, 1368604, 'Tgo en Obras Civiles', 'Construccion', 'Aparicio Mejia', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(29, 1132795, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'DIEGO ALEXANDER GRAJALES', '0000-00-00', '0000-00-00', '2017-10-11', 'Diurna', '', NULL, NULL),
(30, 1132701, 'SOLDADURA DE PRODUCTOS METALICOS (PLATINA)', 'Eectricidad', 'Cristian Mauricio Toro', '0000-00-00', '0000-00-00', '0000-00-00', 'Nocturna', '', NULL, NULL),
(31, 1182104, 'MECANIZADO DE PRODUCTOS METALMECANICOS ', 'Mecanica', ' JOSE FERNANDO VERGARA', '0000-00-00', '0000-00-00', '2017-07-11', 'Nocturna-Dual', '', NULL, NULL),
(32, 1197616, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'JHON FREDDY CORTES ', '2016-07-11', '0000-00-00', '2018-01-11', 'Mixta', '', NULL, NULL),
(33, 1368653, 'MANTENIMIENTO MECANICO INDUSTRIAL', 'Mecanica', 'ADALBERTO ACEVEDO', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna', '', NULL, NULL),
(34, 1132756, 'TGO ELECTRICIDAD INDUSTRIAL', 'Seleccione una opcion...', 'Guillermo Antonio Valencia', '0000-00-00', '2017-10-12', '0000-00-00', 'Diurna', '', NULL, NULL),
(35, 1197544, 'MANTENIMIENTO ELECTROMECANICO INDUSTRIAL', 'Eectricidad', 'MYRIAM CLAUDINA GARCIA NARANJO ', '0000-00-00', '0000-00-00', '2018-01-11', 'Mixta', '', NULL, NULL),
(36, 1197576, 'ELCTRICIDAD INDUSTRIAL ', 'Eectricidad', 'JUAN CARLOS LOPEZ', '0000-00-00', '2018-01-11', '0000-00-00', 'Mixta', '', NULL, NULL),
(37, 1368673, 'TECNOLOGO EN ELECTRICIDAD  INDUSTRIAL', 'Eectricidad', 'CLAUDIO ALBERTO VALENCIA SÃNCHEZ', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(38, 1368529, 'Tc En Electricidad Residencial', 'Eectricidad', 'CLAUDIO ALBERTO VALENCIA SÃNCHEZ', '2017-04-17', '0000-00-00', '0000-00-00', 'Nocturna', '', NULL, NULL),
(39, 1323358, 'Tgo SupervisiÃ³n De Redes De DistribuciÃ³n De EnergÃ­a ElÃ©ctrica', 'Eectricidad', 'MELODY RAMOS GIRALDO', '2017-01-23', '2019-07-23', '0000-00-00', 'Diurna', '', NULL, NULL),
(40, 1367722, 'MANTENIMIENTO ELECTROMECANICO INDUSTRIAL', 'Mecanica', 'MYRIAM CLAUDINA GARCIA NARANJO  ', '2017-04-13', '2018-09-13', '0000-00-00', 'Diurna', '', NULL, NULL),
(41, 1114874, 'MANTENIMIENTO MECATRONICO DE AUTOMOTORES', 'Automotriz', 'ANDRES MAURICIO JARAMILLO', '0000-00-00', '0000-00-00', '2017-11-17', 'Mixta', '', NULL, NULL),
(42, 1343933, 'TC MANTENIMIENTO DE LAS MOTOCICLETAS', 'Mecanica', 'Jaime Adolfo Fuentes', '0000-00-00', '2016-11-17', '2017-05-17', 'Diurna', '', NULL, NULL),
(43, 1368501, 'Tco En Mantenimiento De Motores DiÃ©sel', 'Mecanica', 'LUIS CAMILO ESTRADA PATIÃ‘O', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(44, 1368642, 'Tgo En Mantenimiento MecatrÃ³nico De Automotores', 'Mecanica', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(45, 1368642, 'Tgo En Mantenimiento MecatrÃ³nico De Automotores (B)', 'Seleccione una opcion...', 'VICTOR MAURICIO ACEVEDO CORREA', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(46, 1306630, 'Tc  EN SEGURIDAD VIAL, CONTROL DE TRANSITO Y TRANSPORTE', 'Automotriz', 'JHON KEVIN FLOREZ PEÃ‘A', '2017-10-03', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(47, 1368498, 'Tco En Mantenimiento De Motores DiÃ©sel', 'Mecanica', 'JHON KEVIN FLOREZ PEÃ‘A', '2017-04-17', '0000-00-00', '0000-00-00', 'Mixta', '', NULL, NULL),
(48, 1197693, 'GESTION INTEGRADA DE SISTEMAS DE CALIDAD, AMBIENTAL, SEGURIDAD Y SALUD OCUPACIONAL  HSEQ', 'Ambiental', 'CARLOS VALENCIA ', '2016-07-11', '2018-01-11', '2018-07-11', 'Nocturna', '', NULL, NULL),
(49, 1261575, 'TECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-11', '0000-00-00', '2018-03-26', 'Nocturna', '', NULL, NULL),
(50, 1261575, 'ECNOLOGO EN GESTIÃ“N INTEGRADA DE LA CALIDAD, MEDIO AMBIENTE, SEGURIDAD Y SALUD OCUPACIONAL (B)', 'Salud Ocupacionak', 'CARLOS ARTURO VALENCIA', '2016-09-26', '2018-03-26', '2018-09-26', 'Nocturna', '', NULL, NULL),
(51, 1369525, 'Tc PATRONAJE INDUSTRIAL DE PRENDAS DE VESTIR (A)', 'Confeccion', 'Gladys Francelly Cardona', '2017-04-17', '0000-00-00', '2018-06-17', 'Nocturna', '', NULL, NULL),
(52, 1369525, 'Tc PATRONAJE INDUSTRIAL DE PRENDAS DE VESTIR (B)', 'Confeccion', 'Gladys Frencelli', '0000-00-00', '0000-00-00', '0000-00-00', 'Nocturna', '', NULL, NULL),
(53, 1368558, 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (A)', 'Salud Ocupacionak', 'FERNANDO ARCINIEGAS', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(54, 1368558, 'Tgo En GestiÃ³n Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional (B)', 'Seleccione una opcion...', 'FERNANDO ARCINIEGAS', '2017-04-17', '0000-00-00', '0000-00-00', 'Diurna', '', NULL, NULL),
(55, 1343983, 'MANTENIMIENTO ELÃ‰CTRICO Y ELECTRÃ“NICO EN AUTOMOTORES', 'Automotriz', 'ANDRES MAURICIO JARAMILLO', '0000-00-00', '0000-00-00', '2017-11-16', 'Mixta', '', NULL, NULL),
(56, 1374264, 'Operario en Confeccion Industrial', 'Confeccion', 'Ruby Vargas', '2017-02-20', '2017-05-20', '2017-08-20', 'Diurna', '', NULL, NULL),
(57, 1362328, 'Operario en Confeccion Industrial', 'Confeccion', 'Luz de Fatima Alvarez', '2017-02-06', '2017-05-06', '2017-08-06', 'Diurna', '', NULL, NULL),
(58, 1343061, ' Tc Mantenimiento de Motocicletas', 'Mecanica', 'Diana Eugenia Henao', '2016-11-15', '2017-05-15', '2017-09-15', 'Diurna', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_records`
--

CREATE TABLE `history_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `prestado_en` datetime NOT NULL,
  `entregado_en` datetime DEFAULT NULL,
  `novedad` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructors`
--

CREATE TABLE `instructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vinculacion1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoplanta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipocontrato` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidadhoras` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actadministrativas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centro` text COLLATE utf8mb4_unicode_ci,
  `instructor_type_id` int(10) UNSIGNED NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
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

INSERT INTO `instructors` (`id`, `nombre`, `apellidos`, `especialidad`, `vinculacion1`, `tipoplanta`, `tipocontrato`, `cantidadhoras`, `actadministrativas`, `area`, `centro`, `instructor_type_id`, `numero_documento`, `ip`, `celular`, `email`, `imagen`, `disponibilidad`, `created_at`, `updated_at`) VALUES
(1, 'alexander ', 'garcia vasquez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor  g-19 mantenimiento', NULL, 1, 7684828, 62500, 3148515827, 'agarciavasquez@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(2, 'aparicio', 'mejia rendon', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-16 construccion', NULL, 1, 75091846, 0, 3014160504, 'apariciomejia@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(3, 'consuelo', 'garcia escobar ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora  g-20 emprendimiento', NULL, 1, 24318223, 0, 3113076751, 'cgarciae@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(4, 'cristian mauricio', 'toro', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-6 soldadura', NULL, 1, 16071103, 0, 3136501532, 'mtorov@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(5, 'diego alexander', 'grajales perez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-11 mantenimiento', NULL, 1, 75096903, 0, 3163965678, 'dagrajales@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(6, 'elver', 'valencia', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g- 14 soldadura', NULL, 1, 75064699, 0, 3117385100, 'elvervalencia@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(7, 'fernando', 'rodriguez valencia ', NULL, NULL, NULL, NULL, NULL, NULL, 'equipo tecnico pedagogico instructor g-20', NULL, 1, 10232014, 62263, 3122588689, 'ferrodriguezv@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(8, 'francisco javier', 'vargas   ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-16 mantenimiento', NULL, 1, 10243995, 0, 3104707065, 'fjvargas@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(9, 'guillermo antonio', 'valencia velasquez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-13 electricidad', NULL, 1, 10279010, 0, 3137656579, 'guivalen@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(10, 'jaime', 'giraldo orrego', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-19 electricidad', NULL, 1, 10286761, 0, 3136443404, 'jagio13@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(11, 'jaime', 'trejos londono', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-16 electricidad', NULL, 1, 10274114, 0, 3147392470, 'jtrejos@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(12, 'jhon fredy', 'cortes soto', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-11 mantenimiento', NULL, 1, 10279373, 0, 3103598404, 'jfrecos@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(13, 'jhon jairo', 'cardenas romero', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-20 -gestor red de conocimiento automotor\n', NULL, 1, 10279651, 62093, 3117784659, 'jotajota@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(14, 'jose alirio', 'londono rivera ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-13 mantenimiento', NULL, 1, 10241219, 0, 3122972801, 'alonri@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(15, 'jose fernando', 'vergara gallego ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-17 metalmecanica', NULL, 1, 10271981, 0, 3217068789, 'jfvergara@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(16, 'juan carlos', 'arango arbelaez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-12 automotriz', NULL, 1, 79274609, 0, 3137169379, 'jcarango@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(17, 'juan carlos', 'lopez morales', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-10 electricidad', NULL, 1, 94283555, 0, 3122430542, 'juanclopez10@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(18, 'juan carlos', 'ruge osorio', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-20 calidad- evaluador competencias laborales', NULL, 1, 10286847, 62097, 3108326255, 'juanruge@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(19, 'luis enrique', 'bravo cardona', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-20 saludo ocupacional', NULL, 1, 15903478, 0, 3137485587, 'lebravocardona@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(20, 'luz de fatima', 'alvarez osorio ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora g-20 confeccion', NULL, 1, 25232397, 0, 3113851917, 'lfalvarez@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(21, 'miriam claudina', 'garcia naranjo ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora  g-20 electricidad', NULL, 1, 30287195, 0, 3104931245, 'mcgarcian@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(22, 'roberto', 'estrada herrera ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor g-12 sistemas', NULL, 1, 10248388, 0, 3002024140, 'restradah@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(23, 'ruby ', 'vargas ruiz', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora g-14 confeccion', NULL, 1, 30292725, 0, 3168756222, 'ruvaruiz@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(24, 'victor mauricio', 'acevedo correa', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 1, 9817289, 0, 3137086769, 'vmacevedo@misena.edu.co ', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(25, 'paula andrea', 'londono', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora g-11 sistemas', NULL, 1, 30394952, 0, 3105312798, 'palondono25@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(26, 'dairo de jesus', 'ganan gallo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor diseno mecanico', NULL, 1, 75089861, 0, 3108223340, 'dairog@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(27, 'roland', 'roth echeverry', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 2, 75103320, 0, 3217369989, 'rolyroth@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(28, 'sandra milena', 'trujillo ortiz', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 2, 30336710, 0, 3108491154, 'smtrujillo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(29, 'diego  ', 'giraldo ramirez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor electricidad virtual', NULL, 2, 10250071, 0, 3206307217, 'dgr555@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(30, 'monica eugenia', 'montoya arias', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 2, 30392935, 0, 3003108170, 'memontoya53@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(31, 'natalia', 'erazo becerra', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora electricidad virtual', NULL, 2, 24334576, 0, 3134623938, 'nata_erazo@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(32, 'claudia sonia', 'serna granada', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 2, 30322042, 0, 3116827825, 'cls0230@my.londonmet.ac.uk', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(33, 'carmen elena', 'hernandez rincon', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora etica', NULL, 2, 24340753, 0, 3147917762, 'carelena@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(34, 'alexander', 'romero moreno', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 2, 9975428, 0, 3113681557, 'aromero824@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(35, 'paula andrea ', 'cruz mejia ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora calidad', NULL, 2, 30396241, 0, 3176547111, 'paulaandreacruz@yahoo.es', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(36, 'maria beatriz', 'pava hurtado', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 2, 30270825, 0, 3162559047, 'bpava@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(37, 'luisa fernanda', 'echeverri caballero', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora comunicaciones', NULL, 2, 24335083, 0, 3146264428, 'lfecheverri38@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(38, 'luisa fernanda', 'castano calvo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora cultura fisica', NULL, 2, 30396654, 0, 3104329906, 'lfcalvo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(39, 'german', 'rodriguez valencia', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 10285068, 0, 3152735162, 'grodriguez86@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(40, 'oscar fernando', 'aristizabal cardona', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 2, 9859602, 0, 3103972370, 'ofac@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(41, 'andres mauricio', 'jaramillo gonzalez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 2, 75081636, 0, 3113837172, 'anmajago@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(42, 'jorge alberto', 'tamayo grisales', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 1053782472, 0, 3003267169, 'vabe9@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(43, 'diego andres', 'serna velasquez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor diseno mecanico', NULL, 2, 75096299, 0, 3146504873, 'daserna99@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(44, 'stharling melody', 'ramos giraldo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora electricidad', NULL, 2, 30397958, 0, 3163244180, 'smelodyrg@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(45, 'luis camilo', 'estrada patino', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor mecanica automotriz', NULL, 2, 1085297027, 0, 3128488679, 'luis.23513230762@ucaldas.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(46, 'olga clemencia', 'marin henao', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 2, 30395126, 0, 3147694939, 'ocmarinh@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(47, 'andres felipe', 'lopez chica', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 2, 75090879, 0, 3206874025, 'felopez11@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(48, 'gladys francelly', 'cardona franco', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 2, 30307343, 0, 3113364387, 'gladys.francelly@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(49, 'javier', 'ariza useche', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 2, 79836769, 0, 3185272465, 'javier.ariza@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(50, 'jaime adolfo', 'fuentes sanchez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor motos', NULL, 2, 11224476, 0, 3008115106, 'adolfofuentes@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(51, 'lorena patricia', 'valencia', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora seguridad ocupacional', NULL, 2, 30338297, 0, 3176171144, 'valencia.lp@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(52, 'fernando', 'arciniegas cordoba', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor calidad', NULL, 2, 98392877, 0, 3162860686, 'fernandoac@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(53, 'jhon fredy', 'duque gallego', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 1053782759, 0, 3128850805, 'johnzegath@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(54, 'andres felipe ', 'jurado patino ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor topografia', NULL, 2, 1053770404, 0, 3015739296, 'afjurado40@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(55, 'angela marcela', 'castellanos ortegon', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 2, 30398681, 0, 3008948200, 'amcastellanoso@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(56, 'camilo andres', 'arango munoz', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor mobiliario y maderas', NULL, 2, 16077061, 0, 3206845171, 'camiaramo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(57, 'yaneth', 'mejia rendon ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 2, 1053811426, 0, 3045458490, 'ymejia624@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(58, 'daniel felipe ', 'moncada cardona ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 1053777708, 0, 3163159109, 'danielmoncada@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(59, 'mario leandro', 'vanegas valencia', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 2, 1053807619, 0, 3113005998, 'marlevan38@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(60, 'victor hugo', 'arias saldarriaga', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 2, 10286879, 0, 3117268025, 'victorari17@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(61, 'mario', 'raigosa arango', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 10245454, 0, 3117581159, 'marioraigosaarango@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(62, 'jhonatan', 'franco arias', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor soldadura', NULL, 2, 1053784021, 0, 3117848943, 'eltaja1053@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(63, 'yamileth', 'erazo becerra', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 2, 24333588, 0, 3103898510, 'yamierazo@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(64, 'andrea del pilar', 'alvarez camargo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora trabajo alturas', NULL, 2, 30405204, 0, 3146611226, 'aalvarez40@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(65, 'alexandra ', 'naranjo cardona ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 2, 30321612, 0, 3135217056, 'alexa_nc@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(66, 'adalberto', 'acevedo telles', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor mecanica industrial', NULL, 2, 75091293, 0, 3206585210, 'bettoa0202@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(67, 'lucila', 'norena arias', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 2, 30310215, 0, 3176422121, 'lucilanorarias@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(68, 'jorge hernan', 'alzate buitrago', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 6108160, 0, 3122011383, 'pizcali1979@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(69, 'john alexander', 'arenas noriega', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor construccion', NULL, 2, 75003878, 0, 3104681193, 'jaan821@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(70, 'diana eugenia', 'henao barragan', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora motocicletas', NULL, 2, 1110506666, 0, 3115183802, 'dehenaob@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(71, 'andres julian', 'hoyos caicedo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 2, 75097575, 0, 3107324131, 'ajhoyos@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(72, 'fernando', 'mejia lopez ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor trabajo en alturas', NULL, 2, 75096659, 0, 3207585520, 'fmejia@umanizales.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(73, 'claudio alberto', 'valencia sanchez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 2, 75073330, 0, 3148856871, 'cavalencia033@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(74, 'cesar augusto', 'ramirez ocampo', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor maderas', NULL, 2, 10262514, 0, 3117733406, 'cauramirez@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(75, 'juan pablo', 'mejia ramirez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 2, 75088893, 0, 3127917880, 'jpmejiar@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(76, 'angela maria ', 'alzate ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora etica', NULL, 2, 30395470, 0, 3117157455, 'alegnateza2@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(77, 'jhon kevin', 'florez pena', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor automotriz', NULL, 2, 16073677, 0, 3105488749, 'lucas062@gmial.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(78, 'lina rocio', 'ospina duque', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora salud ocupacional', NULL, 2, 42114871, 0, 3216265294, 'lirosduque@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(79, 'junsun', 'sunico consistente', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 2, 281463, 0, 3016877061, 'jsunico@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(80, 'andres felipe', 'henao lopez', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor cultura fisica', NULL, 2, 75107712, 0, 3117423635, 'andres_henao_03@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(81, 'sara maria', 'clavijo arrubla ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora construccion', NULL, 2, 1053806513, 0, 3166098393, 'sarah12340@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(82, 'nestor mauricio', 'pinto norena', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor electricidad', NULL, 2, 75072443, 0, 3115858811, 'mauricioelectricista@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(83, 'karen viviana ', 'lemos ceballos ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora confeccion', NULL, 2, 31570114, 0, 3123042862, 'kvlemus@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(84, 'jorge augusto ', 'villada suaza ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor sistemas', NULL, 2, 7534711, 0, 3164494488, 'jovisu@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(85, 'diana cristina ', 'montoya hoyos ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 2, 24347071, 0, 3113756986, 'crismajo10@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(86, 'luisa fernanda', 'callejas orrego ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora sistemas', NULL, 2, 30232108, 0, 3007736768, 'lcallejaso@gmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(87, 'carlos andres', 'henao lema ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ambiental', NULL, 2, 75096428, 0, 3214514010, 'cahlema@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(88, 'emilce silvana ', 'ceron rosero ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora salud ocupacional', NULL, 2, 27451978, 0, 3113684029, 'esilcero@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(89, 'paola natalia ', 'orozco orozco ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructora ingles', NULL, 2, 1053780547, 0, 3108406371, 'pa.na.oro19@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(90, 'asdrubal ', 'gomez galeano ', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor ingles', NULL, 2, 1053800692, 0, 3128820955, 'asdmax@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(91, 'javier mauricio', 'cortes moreno', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor joyeria', NULL, 2, 80870811, 0, 3103209980, ' maoco72@hotmail.com', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL),
(92, 'jose uriel', 'gallego bernal', NULL, NULL, NULL, NULL, NULL, NULL, 'instructor redes de gas', NULL, 2, 75034645, 0, 3205245495, 'jurielg@misena.edu.co', '/images/perdefault.png', 'disponible', '2017-08-08 19:27:32', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor_types`
--

CREATE TABLE `instructor_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_instructor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructor_types`
--

INSERT INTO `instructor_types` (`id`, `tipo_instructor`, `created_at`, `updated_at`) VALUES
(1, 'planta', NULL, NULL),
(2, 'contratista', NULL, NULL);

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
(3, '2017_08_05_230526_create_table_instructor_types', 1),
(4, '2017_08_05_230719_create_table_instructors', 1),
(5, '2017_08_05_230736_create_table_classrooms', 1),
(6, '2017_08_14_194800_create_table_history_records', 1),
(7, '2017_08_14_200817_create_table_class_groups', 1),
(8, '2017_08_14_215344_create_table_admins', 1);

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
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_instructor_id_foreign` (`instructor_id`);

--
-- Indices de la tabla `class_groups`
--
ALTER TABLE `class_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `history_records`
--
ALTER TABLE `history_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_records_instructor_id_foreign` (`instructor_id`),
  ADD KEY `history_records_classroom_id_foreign` (`classroom_id`);

--
-- Indices de la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_email_unique` (`email`),
  ADD KEY `instructors_instructor_type_id_foreign` (`instructor_type_id`);

--
-- Indices de la tabla `instructor_types`
--
ALTER TABLE `instructor_types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `class_groups`
--
ALTER TABLE `class_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `history_records`
--
ALTER TABLE `history_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `instructor_types`
--
ALTER TABLE `instructor_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `history_records`
--
ALTER TABLE `history_records`
  ADD CONSTRAINT `history_records_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_records_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_instructor_type_id_foreign` FOREIGN KEY (`instructor_type_id`) REFERENCES `instructor_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
