-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2017 a las 22:24:52
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
  `tipo_ambiente` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movilidad` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activo',
  `cupo` int(11) NOT NULL,
  `disponibilidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'disponible',
  `borrowed_at` datetime DEFAULT NULL,
  `instructor_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `classrooms`
--

INSERT INTO `classrooms` (`id`, `nombre_ambiente`, `tipo_ambiente`, `movilidad`, `estado`, `cupo`, `disponibilidad`, `borrowed_at`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'sistemas 1', 'aula', 'fijo', 'activo', 60, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(2, 'sistemas 2', 'aula', 'fijo', 'activo', 40, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(3, 'ambiente lego', 'aula', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(4, 'auditorio procesos industriales y construccion', 'auditorio', 'fijo', 'activo', 200, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(5, 'autocad', 'laboratorio', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(6, 'automotriz', 'taller', 'fijo', 'activo', 90, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(7, 'confeccion', 'taller', 'fijo', 'activo', 60, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(8, 'diesel', 'taller', 'fijo', 'activo', 100, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(9, 'electricidad 1 ', 'taller', 'fijo', 'activo', 60, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(10, 'electricidad 2', 'taller', 'fijo', 'activo', 70, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(11, 'electricidad 3', 'aula', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(12, 'electricidad 4', 'taller', 'fijo', 'activo', 30, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(13, 'espacio deportivo para la practica del futbol baloncesto voleibol', 'campo deportivo', 'fijo', 'activo', 300, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(14, 'espacio para trabajo en alturas', 'taller', 'fijo', 'activo', 350, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(15, 'gas', 'taller', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(16, 'gimnasio regional caldas', 'aula', 'fijo', 'activo', 1000, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(17, 'maderas', 'taller', 'fijo', 'activo', 35, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(18, 'mantenimiento', 'taller', 'fijo', 'activo', 105, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(19, 'mecanizado', 'taller', 'fijo', 'activo', 80, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(20, 'metalografia', 'taller', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(21, 'motos cpi', 'taller', 'fijo', 'activo', 60, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(22, 'refrigeracion', 'taller', 'fijo', 'activo', 60, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(23, 'sistemas 3', 'aula', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(24, 'salud ocupacional', 'aula', 'fijo', 'activo', 70, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(25, 'soldadura', 'taller', 'fijo', 'activo', 75, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(26, 'tecnoparque procesos industriales', 'taller', 'fijo', 'activo', 50, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historical_records`
--

CREATE TABLE `historical_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
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
  `numero_documento` int(11) NOT NULL,
  `area` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` bigint(20) NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructors`
--

INSERT INTO `instructors` (`id`, `nombre`, `apellidos`, `numero_documento`, `area`, `ip`, `telefono`, `celular`, `email`, `instructor_type_id`, `created_at`, `updated_at`) VALUES
(1, 'alexander ', 'garcia vasquez', 7684828, 'instructor  g-19 mantenimiento', 62500, 0, 3148515827, 'agarciavasquez@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(2, 'aparicio', 'mejia rendon', 75091846, 'instructor g-16 construccion', 0, 0, 3014160504, 'apariciomejia@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(3, 'consuelo', 'garcia escobar ', 24318223, 'instructora  g-20 emprendimiento', 0, 0, 3113076751, 'cgarciae@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(4, 'cristian mauricio', 'toro', 16071103, 'instructor g-6 soldadura', 0, 0, 3136501532, 'mtorov@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(5, 'diego alexander', 'grajales perez', 75096903, 'instructor g-11 mantenimiento', 0, 0, 3163965678, 'dagrajales@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(6, 'elver', 'valencia', 75064699, 'instructor g- 14 soldadura', 0, 0, 3117385100, 'elvervalencia@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(7, 'fernando', 'rodriguez valencia ', 10232014, 'equipo tecnico pedagogico instructor g-20', 62263, 0, 3122588689, 'ferrodriguezv@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(8, 'francisco javier', 'vargas   ', 10243995, 'instructor g-16 mantenimiento', 0, 0, 3104707065, 'fjvargas@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(9, 'guillermo antonio', 'valencia velasquez', 10279010, 'instructor g-13 electricidad', 0, 0, 3137656579, 'guivalen@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(10, 'jaime', 'giraldo orrego', 10286761, 'instructor g-19 electricidad', 0, 0, 3136443404, 'jagio13@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(11, 'jaime', 'trejos londono', 10274114, 'instructor g-16 electricidad', 0, 0, 3147392470, 'jtrejos@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(12, 'jhon fredy', 'cortes soto', 10279373, 'instructor g-11 mantenimiento', 0, 0, 3103598404, 'jfrecos@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(13, 'jhon jairo', 'cardenas romero', 10279651, 'instructor g-20 -gestor red de conocimiento automotor\n', 62093, 0, 3117784659, 'jotajota@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(14, 'jose alirio', 'londono rivera ', 10241219, 'instructor g-13 mantenimiento', 0, 0, 3122972801, 'alonri@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(15, 'jose fernando', 'vergara gallego ', 10271981, 'instructor g-17 metalmecanica', 0, 0, 3217068789, 'jfvergara@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(16, 'juan carlos', 'arango arbelaez', 79274609, 'instructor g-12 automotriz', 0, 0, 3137169379, 'jcarango@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(17, 'juan carlos', 'lopez morales', 94283555, 'instructor g-10 electricidad', 0, 0, 3122430542, 'juanclopez10@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(18, 'juan carlos', 'ruge osorio', 10286847, 'instructor g-20 calidad- evaluador competencias laborales', 62097, 0, 3108326255, 'juanruge@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(19, 'luis enrique', 'bravo cardona', 15903478, 'instructor g-20 saludo ocupacional', 0, 0, 3137485587, 'lebravocardona@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(20, 'luz de fatima', 'alvarez osorio ', 25232397, 'instructora g-20 confeccion', 0, 0, 3113851917, 'lfalvarez@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(21, 'miriam claudina', 'garcia naranjo ', 30287195, 'instructora  g-20 electricidad', 0, 0, 3104931245, 'mcgarcian@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(22, 'roberto', 'estrada herrera ', 10248388, 'instructor g-12 sistemas', 0, 0, 3002024140, 'restradah@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(23, 'ruby ', 'vargas ruiz', 30292725, 'instructora g-14 confeccion', 0, 0, 3168756222, 'ruvaruiz@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(24, 'victor mauricio', 'acevedo correa', 9817289, 'instructor mecanica automotriz', 0, 0, 3137086769, 'vmacevedo@misena.edu.co ', 1, '2017-08-06 22:27:32', NULL),
(25, 'paula andrea', 'londono', 30394952, 'instructora g-11 sistemas', 0, 0, 3105312798, 'palondono25@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(26, 'dairo de jesus', 'ganan gallo', 75089861, 'instructor diseno mecanico', 0, 0, 3108223340, 'dairog@misena.edu.co', 1, '2017-08-06 22:27:32', NULL),
(27, 'roland', 'roth echeverry', 75103320, 'instructor ingles', 0, 8916865, 3217369989, 'rolyroth@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(28, 'sandra milena', 'trujillo ortiz', 30336710, 'instructora confeccion', 0, 8844865, 3108491154, 'smtrujillo@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(29, 'diego  ', 'giraldo ramirez', 10250071, 'instructor electricidad virtual', 0, 0, 3206307217, 'dgr555@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(30, 'monica eugenia', 'montoya arias', 30392935, 'instructora seguridad ocupacional', 0, 8909366, 3003108170, 'memontoya53@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(31, 'natalia', 'erazo becerra', 24334576, 'instructora electricidad virtual', 0, 0, 3134623938, 'nata_erazo@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(32, 'claudia sonia', 'serna granada', 30322042, 'instructora ingles', 0, 8924439, 3116827825, 'cls0230@my.londonmet.ac.uk', 2, '2017-08-06 22:27:32', NULL),
(33, 'carmen elena', 'hernandez rincon', 24340753, 'instructora etica', 0, 8913001, 3147917762, 'carelena@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(34, 'alexander', 'romero moreno', 9975428, 'instructor trabajo en alturas', 0, 0, 3113681557, 'aromero824@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(35, 'paula andrea ', 'cruz mejia ', 30396241, 'instructora calidad', 0, 8833661, 3176547111, 'paulaandreacruz@yahoo.es', 2, '2017-08-06 22:27:32', NULL),
(36, 'maria beatriz', 'pava hurtado', 30270825, 'instructora ingles', 0, 8863858, 3162559047, 'bpava@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(37, 'luisa fernanda', 'echeverri caballero', 24335083, 'instructora comunicaciones', 0, 8908320, 3146264428, 'lfecheverri38@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(38, 'luisa fernanda', 'castano calvo', 30396654, 'instructora cultura fisica', 0, 8922916, 3104329906, 'lfcalvo@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(39, 'german', 'rodriguez valencia', 10285068, 'instructor construccion', 0, 8761933, 3152735162, 'grodriguez86@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(40, 'oscar fernando', 'aristizabal cardona', 9859602, 'instructor sistemas', 0, 8748350, 3103972370, 'ofac@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(41, 'andres mauricio', 'jaramillo gonzalez', 75081636, 'instructor mecanica automotriz', 0, 8746175, 3113837172, 'anmajago@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(42, 'jorge alberto', 'tamayo grisales', 1053782472, 'instructor construccion', 0, 8901584, 3003267169, 'vabe9@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(43, 'diego andres', 'serna velasquez', 75096299, 'instructor diseno mecanico', 0, 0, 3146504873, 'daserna99@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(44, 'stharling melody', 'ramos giraldo', 30397958, 'instructora electricidad', 0, 0, 3163244180, 'smelodyrg@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(45, 'luis camilo', 'estrada patino', 1085297027, 'instructor mecanica automotriz', 0, 0, 3128488679, 'luis.23513230762@ucaldas.edu.co', 2, '2017-08-06 22:27:32', NULL),
(46, 'olga clemencia', 'marin henao', 30395126, 'instructora seguridad ocupacional', 0, 8770270, 3147694939, 'ocmarinh@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(47, 'andres felipe', 'lopez chica', 75090879, 'instructor ambiental', 0, 0, 3206874025, 'felopez11@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(48, 'gladys francelly', 'cardona franco', 30307343, 'instructora confeccion', 0, 8876390, 3113364387, 'gladys.francelly@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(49, 'javier', 'ariza useche', 79836769, 'instructor trabajo en alturas', 0, 8911282, 3185272465, 'javier.ariza@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(50, 'jaime adolfo', 'fuentes sanchez', 11224476, 'instructor motos', 0, 0, 3008115106, 'adolfofuentes@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(51, 'lorena patricia', 'valencia', 30338297, 'instructora seguridad ocupacional', 0, 8887450, 3176171144, 'valencia.lp@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(52, 'fernando', 'arciniegas cordoba', 98392877, 'instructor calidad', 0, 8914167, 3162860686, 'fernandoac@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(53, 'jhon fredy', 'duque gallego', 1053782759, 'instructor construccion', 0, 0, 3128850805, 'johnzegath@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(54, 'andres felipe ', 'jurado patino ', 1053770404, 'instructor topografia', 0, 8738457, 3015739296, 'afjurado40@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(55, 'angela marcela', 'castellanos ortegon', 30398681, 'instructora ingles', 0, 8901383, 3008948200, 'amcastellanoso@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(56, 'camilo andres', 'arango munoz', 16077061, 'instructor mobiliario y maderas', 0, 8760492, 3206845171, 'camiaramo@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(57, 'yaneth', 'mejia rendon ', 1053811426, 'instructora sistemas', 0, 8854979, 3045458490, 'ymejia624@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(58, 'daniel felipe ', 'moncada cardona ', 1053777708, 'instructor construccion', 0, 0, 3163159109, 'danielmoncada@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(59, 'mario leandro', 'vanegas valencia', 1053807619, 'instructor electricidad', 0, 0, 3113005998, 'marlevan38@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(60, 'victor hugo', 'arias saldarriaga', 10286879, 'instructor trabajo en alturas', 0, 8746838, 3117268025, 'victorari17@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(61, 'mario', 'raigosa arango', 10245454, 'instructor construccion', 0, 0, 3117581159, 'marioraigosaarango@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(62, 'jhonatan', 'franco arias', 1053784021, 'instructor soldadura', 0, 0, 3117848943, 'eltaja1053@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(63, 'yamileth', 'erazo becerra', 24333588, 'instructora sistemas', 0, 8892523, 3103898510, 'yamierazo@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(64, 'andrea del pilar', 'alvarez camargo', 30405204, 'instructora trabajo alturas', 0, 0, 3146611226, 'aalvarez40@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(65, 'alexandra ', 'naranjo cardona ', 30321612, 'instructora ingles', 0, 0, 3135217056, 'alexa_nc@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(66, 'adalberto', 'acevedo telles', 75091293, 'instructor mecanica industrial', 0, 8739185, 3206585210, 'bettoa0202@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(67, 'lucila', 'norena arias', 30310215, 'instructora confeccion', 0, 0, 3176422121, 'lucilanorarias@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(68, 'jorge hernan', 'alzate buitrago', 6108160, 'instructor construccion', 0, 0, 3122011383, 'pizcali1979@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(69, 'john alexander', 'arenas noriega', 75003878, 'instructor construccion', 0, 0, 3104681193, 'jaan821@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(70, 'diana eugenia', 'henao barragan', 1110506666, 'instructora motocicletas', 0, 0, 3115183802, 'dehenaob@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(71, 'andres julian', 'hoyos caicedo', 75097575, 'instructor sistemas', 0, 8780047, 3107324131, 'ajhoyos@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(72, 'fernando', 'mejia lopez ', 75096659, 'instructor trabajo en alturas', 0, 0, 3207585520, 'fmejia@umanizales.edu.co', 2, '2017-08-06 22:27:32', NULL),
(73, 'claudio alberto', 'valencia sanchez', 75073330, 'instructor electricidad', 0, 0, 3148856871, 'cavalencia033@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(74, 'cesar augusto', 'ramirez ocampo', 10262514, 'instructor maderas', 0, 0, 3117733406, 'cauramirez@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(75, 'juan pablo', 'mejia ramirez', 75088893, 'instructor ambiental', 0, 0, 3127917880, 'jpmejiar@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(76, 'angela maria ', 'alzate ', 30395470, 'instructora etica', 0, 0, 3117157455, 'alegnateza2@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(77, 'jhon kevin', 'florez pena', 16073677, 'instructor automotriz', 0, 0, 3105488749, 'lucas062@gmial.com', 2, '2017-08-06 22:27:32', NULL),
(78, 'lina rocio', 'ospina duque', 42114871, 'instructora salud ocupacional', 0, 0, 3216265294, 'lirosduque@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(79, 'junsun', 'sunico consistente', 281463, 'instructor ingles', 0, 0, 3016877061, 'jsunico@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(80, 'andres felipe', 'henao lopez', 75107712, 'instructor cultura fisica', 0, 0, 3117423635, 'andres_henao_03@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(81, 'sara maria', 'clavijo arrubla ', 1053806513, 'instructora construccion', 0, 0, 3166098393, 'sarah12340@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(82, 'nestor mauricio', 'pinto norena', 75072443, 'instructor electricidad', 0, 8926627, 3115858811, 'mauricioelectricista@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(83, 'karen viviana ', 'lemos ceballos ', 31570114, 'instructora confeccion', 0, 0, 3123042862, 'kvlemus@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(84, 'jorge augusto ', 'villada suaza ', 7534711, 'instructor sistemas', 0, 0, 3164494488, 'jovisu@misena.edu.co', 2, '2017-08-06 22:27:32', NULL),
(85, 'diana cristina ', 'montoya hoyos ', 24347071, 'instructora sistemas', 0, 0, 3113756986, 'crismajo10@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(86, 'luisa fernanda', 'callejas orrego ', 30232108, 'instructora sistemas', 0, 0, 3007736768, 'lcallejaso@gmail.com', 2, '2017-08-06 22:27:32', NULL),
(87, 'carlos andres', 'henao lema ', 75096428, 'instructor ambiental', 0, 0, 3214514010, 'cahlema@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(88, 'emilce silvana ', 'ceron rosero ', 27451978, 'instructora salud ocupacional', 0, 0, 3113684029, 'esilcero@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(89, 'paola natalia ', 'orozco orozco ', 1053780547, 'instructora ingles', 0, 0, 3108406371, 'pa.na.oro19@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(90, 'asdrubal ', 'gomez galeano ', 1053800692, 'instructor ingles', 0, 8721220, 3128820955, 'asdmax@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(91, 'javier mauricio', 'cortes moreno', 80870811, 'instructor joyeria', 0, 0, 3103209980, ' maoco72@hotmail.com', 2, '2017-08-06 22:27:32', NULL),
(92, 'jose uriel', 'gallego bernal', 75034645, 'instructor redes de gas', 0, 8825684, 3205245495, 'jurielg@misena.edu.co', 2, '2017-08-06 22:27:32', NULL);

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
(6, '2017_08_05_230819_create_table_historical_records', 1);

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
(1, 'Jaime Palomino', 'jaime@mail.com', '$2y$10$iaiAanRa5J.p4vAe/NiCt.neEhXnHvjDOPFKOmfvN1DRGLgmhks22', NULL, '2017-08-06 20:23:28', '2017-08-06 20:23:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classrooms_instructor_id_foreign` (`instructor_id`);

--
-- Indices de la tabla `historical_records`
--
ALTER TABLE `historical_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historical_records_instructor_id_foreign` (`instructor_id`),
  ADD KEY `historical_records_classroom_id_foreign` (`classroom_id`);

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
-- AUTO_INCREMENT de la tabla `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `historical_records`
--
ALTER TABLE `historical_records`
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
  ADD CONSTRAINT `classrooms_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `historical_records`
--
ALTER TABLE `historical_records`
  ADD CONSTRAINT `historical_records_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`),
  ADD CONSTRAINT `historical_records_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_instructor_type_id_foreign` FOREIGN KEY (`instructor_type_id`) REFERENCES `instructor_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
