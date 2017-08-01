-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2017 a las 01:52:18
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
-- Estructura de tabla para la tabla `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_ambiente` varchar(128) COLLATE utf8_bin NOT NULL,
  `tipo_ambiente` varchar(64) COLLATE utf8_bin NOT NULL,
  `movilidad` varchar(15) COLLATE utf8_bin NOT NULL,
  `estado` varchar(128) COLLATE utf8_bin NOT NULL,
  `cupo` int(11) NOT NULL,
  `imagen` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `disponibilidad` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `borrowed_at` datetime DEFAULT NULL,
  `instructor_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `classrooms`
--

INSERT INTO `classrooms` (`id`, `nombre_ambiente`, `tipo_ambiente`, `movilidad`, `estado`, `cupo`, `imagen`, `disponibilidad`, `borrowed_at`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'sistemas 1', 'aula', 'fijo', 'reparacion', 60, 'images/classrooms/1501619214.jpg', 'no disponible', '2017-07-31 11:51:15', 10, NULL, '2017-08-01 20:26:54'),
(2, 'sistemas 2', 'aula', 'fijo', 'inactivo', 40, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(3, 'ambiente lego', 'aula', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(4, 'auditorio procesos industriales y construccion', 'auditorio', 'fijo', '', 200, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(5, 'autocad', 'laboratorio', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(6, 'automotriz', 'taller', 'fijo', '', 90, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(7, 'confeccion', 'taller', 'fijo', '', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(8, 'diesel', 'taller', 'fijo', '', 100, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(9, 'electricidad1', 'taller', 'fijo', '', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(10, 'electricidad 2', 'taller', 'fijo', '', 70, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(11, 'electricidad 3', 'aula', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(12, 'electricidad 4', 'taller', 'fijo', '', 30, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(13, 'espacio deportivo para la practica del futbol baloncesto voleibol', 'campo deportivo', 'fijo', '', 300, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(14, 'espacio para trabajo en alturas', 'taller', 'fijo', '', 350, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(15, 'gas', 'taller', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(16, 'gimnasio regional caldas', 'aula', 'fijo', '', 1000, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(17, 'maderas', 'taller', 'fijo', '', 35, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(18, 'mantenimiento', 'taller', 'fijo', '', 105, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(19, 'mecanizado', 'taller', 'fijo', '', 80, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(20, 'metalografia', 'taller', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(21, 'motos cpi', 'taller', 'fijo', '', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(22, 'refrigeracion', 'taller', 'fijo', '', 60, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(23, 'sistemas 3', 'aula', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(24, 'salud ocupacional', 'aula', 'fijo', '', 70, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(25, 'soldadura', 'taller', 'fijo', '', 75, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(26, 'tecnoparque procesos industriales', 'taller', 'fijo', '', 50, NULL, 'disponible', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00 00:00:00'),
(27, 'dadasd', 'aula', 'fijo', 'activo', 12, 'images/classrooms/1501618809.png', NULL, NULL, NULL, '2017-08-01 20:20:09', '2017-08-01 20:20:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_classroom_loans`
--

CREATE TABLE `historial_classroom_loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `instructor_id` int(10) UNSIGNED NOT NULL,
  `classroom_id` int(10) UNSIGNED NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `novedad` varchar(1000) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `historial_classroom_loans`
--

INSERT INTO `historial_classroom_loans` (`id`, `instructor_id`, `classroom_id`, `borrowed_at`, `delivered_at`, `novedad`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2017-07-31 08:10:02', NULL, '', '2017-07-31 13:10:09', '2017-07-31 13:10:09'),
(2, 2, 2, '2017-07-31 08:52:06', '2017-07-31 08:52:25', '', '2017-07-31 13:52:19', '2017-07-31 13:52:35'),
(3, 9, 1, '2017-07-31 11:28:48', NULL, '', '2017-07-31 16:29:01', '2017-07-31 16:29:01'),
(4, 4, 1, '2017-07-31 11:29:18', '2017-07-31 11:29:26', '', '2017-07-31 16:29:22', '2017-07-31 16:29:34'),
(5, 10, 1, '2017-07-31 11:51:15', NULL, '', '2017-07-31 16:51:23', '2017-07-31 16:51:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructors`
--

CREATE TABLE `instructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(64) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(64) COLLATE utf8_bin NOT NULL,
  `numero_documento` int(10) NOT NULL,
  `area` varchar(128) COLLATE utf8_bin NOT NULL,
  `ip` int(5) NOT NULL,
  `telefono` int(7) DEFAULT NULL,
  `celular` bigint(10) NOT NULL,
  `email` varchar(64) COLLATE utf8_bin NOT NULL,
  `instructor_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `instructors`
--

INSERT INTO `instructors` (`id`, `nombre`, `apellidos`, `numero_documento`, `area`, `ip`, `telefono`, `celular`, `email`, `instructor_type_id`, `created_at`, `updated_at`) VALUES
(1, 'alexander ', 'garcia vasquez', 7684828, 'instructor  g-19 mantenimiento', 62500, 0, 2147483647, 'agarciavasquez@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(2, 'aparicio', 'mejia rendon', 75091846, 'instructor g-16 construccion', 0, 0, 2147483647, 'apariciomejia@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(3, 'consuelo', 'garcia escobar ', 24318223, 'instructor  g-20 emprendimiento', 0, 0, 2147483647, 'cgarciae@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(4, 'cristian mauricio', 'toro', 16071103, 'instructor g-6 soldadura', 0, 0, 2147483647, 'mtorov@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(5, 'diego alexander', 'grajales perez', 75096903, 'instructor g-11 mantenimiento', 0, 0, 2147483647, 'dagrajales@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(6, 'elver', 'valencia', 75064699, 'instructor g- 14 soldadura', 0, 0, 2147483647, 'elvervalencia@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(7, 'fernando', 'rodriguez valencia ', 10232014, 'equipo tecnico pedagogico instructor g-20', 62263, 0, 2147483647, 'ferrodriguezv@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(8, 'francisco javier', 'vargas   ', 10243995, 'instructor g-16 mantenimiento', 0, 0, 2147483647, 'fjvargas@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(9, 'guillermo antonio', 'valencia velasquez', 10279010, 'instructor g-13 electricidad', 0, 0, 2147483647, 'guivalen@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(10, 'jaime', 'giraldo orrego', 10286761, 'instructor g-19 electricidad', 0, 0, 2147483647, 'jagio13@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(11, 'jaime', 'trejos londono', 10274114, 'instructor g-16 electricidad', 0, 0, 2147483647, 'jtrejos@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(12, 'jhon fredy', 'cortes soto', 10279373, 'instructor g-11 mantenimiento', 0, 0, 2147483647, 'jfrecos@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(13, 'jhon jairo', 'cardenas romero', 10279651, 'instructor g-20 -gestor red de conocimiento automotor\n', 62093, 0, 2147483647, 'jotajota@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(14, 'jose alirio', 'londono rivera ', 10241219, 'instructor g-13 mantenimiento', 0, 0, 2147483647, 'alonri@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(15, 'jose fernando', 'vergara gallego ', 10271981, 'instructor g-17 metalmecanica', 0, 0, 2147483647, 'jfvergara@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(16, 'juan carlos', 'arango arbelaez', 79274609, 'instructor g-12 automotriz', 0, 0, 2147483647, 'jcarango@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(17, 'juan carlos', 'lopez morales', 94283555, 'instructor g-10 electricidad', 0, 0, 2147483647, 'juanclopez10@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(18, 'juan carlos', 'ruge osorio', 10286847, 'instructor g-20 calidad- evaluador competencias laborales', 62097, 0, 2147483647, 'juanruge@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(19, 'luis enrique', 'bravo cardona', 15903478, 'instructor g-20 saludo ocupacional', 0, 0, 2147483647, 'lebravocardona@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(20, 'luz de fatima', 'alvarez osorio ', 25232397, 'instructora g-20 confeccion', 0, 0, 2147483647, 'lfalvarez@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(21, 'miriam claudina', 'garcia naranjo ', 30287195, 'instructora  g-20 electricidad', 0, 0, 2147483647, 'mcgarcian@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(22, 'roberto', 'estrada herrera ', 10248388, 'instructor g-12 sistemas', 0, 0, 2147483647, 'restradah@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(23, 'ruby ', 'vargas ruiz', 30292725, 'instructora g-14 confeccion', 0, 0, 2147483647, 'ruvaruiz@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(24, 'victor mauricio', 'acevedo correa', 9817289, 'instructor mecanica automotriz', 0, 0, 2147483647, 'vmacevedo@misena.edu.co ', 1, '2017-07-28 01:19:47', NULL),
(25, 'paula andrea', 'londono', 30394952, 'instructora g-11 sistemas', 0, 0, 2147483647, 'palondono25@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(26, 'dairo de jesus', 'ganan gallo', 75089861, 'instructor diseno mecanico', 0, 0, 2147483647, 'dairog@misena.edu.co', 1, '2017-07-28 01:19:47', NULL),
(27, 'roland', 'roth echeverry', 75103320, 'instructor ingles', 0, 8916865, 2147483647, 'rolyroth@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(28, 'sandra milena', 'trujillo ortiz', 30336710, 'instructor confeccion', 0, 8844865, 2147483647, 'smtrujillo@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(29, 'diego  ', 'giraldo ramirez', 10250071, 'instructor electricidad virtual', 0, 0, 2147483647, 'dgr555@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(30, 'monica eugenia', 'montoya arias', 30392935, 'instructor seguridad ocupacional', 0, 8909366, 2147483647, 'memontoya53@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(31, 'natalia', 'erazo becerra', 24334576, 'instructor electricidad virtual', 0, 0, 2147483647, 'nata_erazo@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(32, 'claudia sonia', 'serna granada', 30322042, 'instructora ingles', 0, 8924439, 2147483647, 'cls0230@my.londonmet.ac.uk', 2, '2017-07-28 01:19:47', NULL),
(33, 'carmen elena', 'hernandez rincon', 24340753, 'instructora etica', 0, 8913001, 2147483647, 'carelena@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(34, 'alexander', 'romero moreno', 9975428, 'instructor trabajo en alturas', 0, 0, 2147483647, 'aromero824@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(35, 'paula andrea ', 'cruz mejia ', 30396241, 'instructor calidad', 0, 8833661, 2147483647, 'paulaandreacruz@yahoo.es', 2, '2017-07-28 01:19:47', NULL),
(36, 'maria beatriz', 'pava hurtado', 30270825, 'instructor ingles', 0, 8863858, 2147483647, 'bpava@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(37, 'luisa fernanda', 'echeverri caballero', 24335083, 'instructor comunicaciones', 0, 8908320, 2147483647, 'lfecheverri38@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(38, 'luisa fernanda', 'castano calvo', 30396654, 'instructor cultura fisica', 0, 8922916, 2147483647, 'lfcalvo@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(39, 'german', 'rodriguez valencia', 10285068, 'instructor construccion', 0, 8761933, 2147483647, 'grodriguez86@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(40, 'oscar fernando', 'aristizabal cardona', 9859602, 'instructor sistemas', 0, 8748350, 2147483647, 'ofac@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(41, 'andres mauricio', 'jaramillo gonzalez', 75081636, 'instructor mecanica automotriz', 0, 8746175, 2147483647, 'anmajago@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(42, 'jorge alberto', 'tamayo grisales', 1053782472, 'instructor construccion', 0, 8901584, 2147483647, 'vabe9@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(43, 'diego andres', 'serna velasquez', 75096299, 'instructor diseno mecanico', 0, 0, 2147483647, 'daserna99@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(44, 'stharling melody', 'ramos giraldo', 30397958, 'instructor electricidad', 0, 0, 2147483647, 'smelodyrg@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(45, 'luis camilo', 'estrada patino', 1085297027, 'instructor mecanica automotriz', 0, 0, 2147483647, 'luis.23513230762@ucaldas.edu.co', 2, '2017-07-28 01:19:47', NULL),
(46, 'olga clemencia', 'marin henao', 30395126, 'instructor seguridad ocupacional', 0, 8770270, 2147483647, 'ocmarinh@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(47, 'andres felipe', 'lopez chica', 75090879, 'instructo ambiental', 0, 0, 2147483647, 'felopez11@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(48, 'gladys francelly', 'cardona franco', 30307343, 'instructora confeccion', 0, 8876390, 2147483647, 'gladys.francelly@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(49, 'javier', 'ariza useche', 79836769, 'instructor trabajo en alturas', 0, 8911282, 2147483647, 'javier.ariza@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(50, 'jaime adolfo', 'fuentes sanchez', 11224476, 'instructor motos', 0, 0, 2147483647, 'adolfofuentes@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(51, 'lorena patricia', 'valencia', 30338297, 'instructora seguridad ocupacional', 0, 8887450, 2147483647, 'valencia.lp@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(52, 'fernando', 'arciniegas cordoba', 98392877, 'instructor calidad', 0, 8914167, 2147483647, 'fernandoac@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(53, 'jhon fredy', 'duque gallego', 1053782759, 'instructor construccion', 0, 0, 2147483647, 'johnzegath@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(54, 'andres felipe ', 'jurado patino ', 1053770404, 'instructor topografia', 0, 8738457, 2147483647, 'afjurado40@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(55, 'angela marcela', 'castellanos ortegon', 30398681, 'instructora ingles', 0, 8901383, 300, 'amcastellanoso@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(56, 'camilo andres', 'arango munoz', 16077061, 'instructor mobiliario y maderas', 0, 8760492, 2147483647, 'camiaramo@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(57, 'yaneth', 'mejia rendon ', 1053811426, 'instructora sistemas', 0, 8854979, 2147483647, 'ymejia624@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(58, 'daniel felipe ', 'moncada cardona ', 1053777708, 'instructor construccion', 0, 0, 2147483647, 'danielmoncada@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(59, 'mario leandro', 'vanegas valencia', 1053807619, 'instructor electricidad', 0, 0, 2147483647, 'marlevan38@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(60, 'victor hugo', 'arias saldarriaga', 10286879, 'instructor trabajo en alturas', 0, 8746838, 2147483647, 'victorari17@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(61, 'mario', 'raigosa arango', 10245454, 'instructor construccion', 0, 0, 2147483647, 'marioraigosaarango@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(62, 'jhonatan', 'franco arias', 1053784021, 'instructor soldadura', 0, 0, 2147483647, 'eltaja1053@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(63, 'yamileth', 'erazo becerra', 24333588, 'instructor sistemas', 0, 8892523, 2147483647, 'yamierazo@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(64, 'andrea del pilar', 'alvarez camargo', 30405204, 'instructora trabajo alturas', 0, 0, 2147483647, 'aalvarez40@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(65, 'alexandra ', 'naranjo cardona ', 30321612, 'instructora ingles', 0, 0, 2147483647, 'alexa_nc@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(66, 'adalberto', 'acevedo telles', 75091293, 'instructor mecanica industrial', 0, 8739185, 2147483647, 'bettoa0202@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(67, 'lucila', 'norena arias', 30310215, 'instructora confeccion', 0, 0, 2147483647, 'lucilanorarias@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(68, 'jorge hernan', 'alzate buitrago', 6108160, 'instructor construccion', 0, 0, 2147483647, 'pizcali1979@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(69, 'john alexander', 'arenas noriega', 75003878, 'instructor construccion', 0, 0, 2147483647, 'jaan821@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(70, 'diana eugenia', 'henao barragan', 1110506666, 'instructor motocicletas', 0, 0, 2147483647, 'dehenaob@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(71, 'andres julian', 'hoyos caicedo', 75097575, 'instructor sistemas', 0, 8780047, 2147483647, 'ajhoyos@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(72, 'fernando', 'mejia lopez ', 75096659, 'instructor trabajo en alturas', 0, 0, 2147483647, 'fmejia@umanizales.edu.co', 2, '2017-07-28 01:19:47', NULL),
(73, 'claudio alberto', 'valencia sanchez', 75073330, 'instructor electricidad', 0, 0, 2147483647, 'cavalencia033@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(74, 'cesar augusto', 'ramirez ocampo', 10262514, 'instructor maderas', 0, 0, 2147483647, 'cauramirez@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(75, 'juan pablo', 'mejia ramirez', 75088893, 'instructor ambiental', 0, 0, 2147483647, 'jpmejiar@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(76, 'angela maria ', 'alzate ', 30395470, 'instructora etica', 0, 0, 2147483647, 'alegnateza2@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(77, 'jhon kevin', 'florez pena', 16073677, 'instructor automotriz', 0, 0, 2147483647, 'lucas062@gmial.com', 2, '2017-07-28 01:19:47', NULL),
(78, 'lina rocio', 'ospina duque', 42114871, 'instructora salud ocupacional', 0, 0, 2147483647, 'lirosduque@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(79, 'junsun', 'sunico consistente', 281463, 'instructor ingles', 0, 0, 2147483647, 'jsunico@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(80, 'andres felipe', 'henao lopez', 75107712, 'instructor cultura fisica', 0, 0, 2147483647, 'andres_henao_03@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(81, 'sara maria', 'clavijo arrubla ', 1053806513, 'instructor construccion', 0, 0, 2147483647, 'sarah12340@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(82, 'nestor mauricio', 'pinto norena', 75072443, 'instructor electricidad', 0, 8926627, 2147483647, 'mauricioelectricista@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(83, 'karen viviana ', 'lemos ceballos ', 31570114, 'instructora confeccion', 0, 0, 2147483647, 'kvlemus@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(84, 'jorge augusto ', 'villada suaza ', 7534711, 'instructor sistemas', 0, 0, 2147483647, 'jovisu@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(85, 'diana cristina ', 'montoya hoyos ', 24347071, 'instructor sistemas', 0, 0, 2147483647, 'crismajo10@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(86, 'luisa fernanda', 'callejas orrego ', 30232108, 'instructor sistemas', 0, 0, 2147483647, 'lcallejaso@gmail.com', 2, '2017-07-28 01:19:47', NULL),
(87, 'carlos andres', 'henao lema ', 75096428, 'instructor ambiental', 0, 0, 2147483647, 'cahlema@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(88, 'emilce silvana ', 'ceron rosero ', 27451978, 'instructora salud ocupacional', 0, 0, 2147483647, 'esilcero@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(89, 'paola natalia ', 'orozco orozco ', 1053780547, 'instructora ingles', 0, 0, 2147483647, 'pa.na.oro19@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(90, 'asdrubal ', 'gomez galeano ', 1053800692, 'instrucotr ingles', 0, 8721220, 2147483647, 'asdmax@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(91, 'javier mauricio', 'cortes moreno', 80870811, 'instructor joyeria', 0, 0, 2147483647, ' maoco72@hotmail.com', 2, '2017-07-28 01:19:47', NULL),
(92, 'jose uriel', 'gallego bernal', 75034645, 'instructor redes de gas', 0, 8825684, 2147483647, 'jurielg@misena.edu.co', 2, '2017-07-28 01:19:47', NULL),
(93, 'jaij', 'aokj', 484545454, 'jaojsijs', 54545, 787878, 5654454, 'jaime97@hotmail.com', 1, '2017-08-01 22:09:18', '2017-08-01 22:17:03'),
(94, 'jaij', 'aokj', 484545454, 'jaojsijs', 54545, 787878, 5654454, 'jaime@hotmail.com', 1, '2017-08-01 22:09:43', '2017-08-01 22:09:43'),
(95, 'ja', 'j', 1053860569, 'jaj', 55548, 8741573, 320793564, 'jaime.palomino97@hotmail.com', 1, '2017-08-01 22:30:31', '2017-08-01 22:31:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor_types`
--

CREATE TABLE `instructor_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_instructor` varchar(20) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `migration` varchar(191) COLLATE utf8_bin NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_27_213717_create_instructor_types_table', 1),
(4, '2017_07_27_213837_create_instructors_table', 1),
(5, '2017_07_27_220000_create_classrooms_table', 1),
(6, '2017_07_27_224223_create_historial_classroom_loans_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(64) COLLATE utf8_bin NOT NULL,
  `token` varchar(191) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `email` varchar(64) COLLATE utf8_bin NOT NULL,
  `password` varchar(191) COLLATE utf8_bin NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Camilo', 'camilo@mail.com', '$2y$10$gDRWdhYlLVF0G9ifXxynKuY2nuGaq.Q3FDDqL8WGdaQd5VFjeUSwO', NULL, '2017-08-01 19:32:52', '2017-08-01 19:32:52');

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
-- Indices de la tabla `historial_classroom_loans`
--
ALTER TABLE `historial_classroom_loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historial_classroom_loans_instructor_id_foreign` (`instructor_id`),
  ADD KEY `historial_classroom_loans_classroom_id_foreign` (`classroom_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `historial_classroom_loans`
--
ALTER TABLE `historial_classroom_loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
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
-- Filtros para la tabla `historial_classroom_loans`
--
ALTER TABLE `historial_classroom_loans`
  ADD CONSTRAINT `historial_classroom_loans_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`),
  ADD CONSTRAINT `historial_classroom_loans_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`);

--
-- Filtros para la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_instructor_type_id_foreign` FOREIGN KEY (`instructor_type_id`) REFERENCES `instructor_types` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
