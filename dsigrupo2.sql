-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2017 a las 15:18:46
-- Versión del servidor: 5.6.31
-- Versión de PHP: 5.6.24-1~dotdeb+7.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dsigrupo2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

CREATE TABLE IF NOT EXISTS `actividads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_ac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_ac` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividads_id_ac_foreign` (`id_ac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `descripcion_ac`, `id_ac`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Desarrollo Personal', 2, NULL, '2017-07-13 08:51:41', '2017-07-15 07:17:36'),
(14, 'Introduccion a Desarrollo Personal', 1, NULL, '2017-07-13 22:49:13', '2017-07-15 07:18:08'),
(15, 'Pasantia a lugares historicos', 2, NULL, '2017-07-13 22:49:27', '2017-07-15 07:18:49'),
(20, 'Casas abiertas', 4, NULL, '2017-07-15 05:08:49', '2017-07-15 07:38:38'),
(21, 'Estudiantes y Universidades', 4, NULL, '2017-07-15 05:12:32', '2017-07-15 07:39:05'),
(22, 'Convalidaciones de ramos', 2, NULL, '2017-07-15 07:26:36', '2017-07-15 07:26:36'),
(23, 'Aumentar su nivel de idioma', 2, NULL, '2017-07-15 07:28:04', '2017-07-15 07:28:04'),
(24, 'Investigacion y desarrollo ', 3, NULL, '2017-07-15 07:32:51', '2017-07-15 07:32:51'),
(25, 'Desarrollo de tesis', 3, NULL, '2017-07-15 07:35:17', '2017-07-15 07:35:17'),
(26, 'Temas de tesis', 3, NULL, '2017-07-15 07:35:52', '2017-07-15 07:35:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE IF NOT EXISTS `convenios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cord` int(10) unsigned NOT NULL,
  `tipo_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_con` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechini_con` date NOT NULL,
  `fechter_con` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `convenios`
--

INSERT INTO `convenios` (`id`, `id_cord`, `tipo_con`, `area_con`, `estado_con`, `nombre_con`, `descripcion_con`, `numero_con`, `fechini_con`, `fechter_con`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Colaboración', 'Desarrollo', 'Activado', 'Programas de intervención', 'Desarrollo de programas de intervención con enfoque inclusivo', 'E131', '2014-07-22', '2017-07-29', NULL, '2017-07-07 00:03:30', '2017-07-15 07:24:35'),
(2, 0, 'Movilidad', 'Becas', 'Activado', 'Movilidad estudiantil', 'Beca de pasantia al extrangero', 'E132', '2016-07-04', '2022-07-05', NULL, '2017-07-07 00:04:05', '2017-07-15 07:21:01'),
(3, 0, 'Investigación', 'Estudio', 'Activado', 'Investigación de Formación en Educación ', 'Participación con expertos de varias facultades', 'E133', '2014-10-21', '2021-07-19', NULL, '2017-07-07 02:11:14', '2017-07-15 07:31:09'),
(4, 0, 'Marco', 'Movilidad', 'Activado', 'Fortalecimiento Institucional', 'Relaciones con otras instituciones para su fortalecimiento', 'E134', '2010-04-14', '2022-07-13', NULL, '2017-07-15 04:51:27', '2017-07-15 07:37:51'),
(5, 0, 'fdsfdsfsd', 'fdsfds', 'fdfdsfdsfdsf', '-----', 'fdsfs', 'fdsfdsfdsfds', '2017-07-17', '2017-02-07', NULL, '2017-07-17 21:36:07', '2017-07-17 21:36:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucions`
--

CREATE TABLE IF NOT EXISTS `institucions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_inst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_inst` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_con` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `institucions_id_con_foreign` (`id_con`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `institucions`
--

INSERT INTO `institucions` (`id`, `nombre_inst`, `descripcion_inst`, `id_con`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Universidad del biobio', 'Publica y estatal', 2, NULL, '2017-07-13 05:30:59', '2017-07-13 05:30:59'),
(3, 'Universidad San Sebastian', 'Privada', 2, NULL, '2017-07-13 05:32:27', '2017-07-13 05:46:35'),
(4, 'Universidad del MAR', 'Privada', 1, NULL, '2017-07-13 05:43:22', '2017-07-13 05:43:22'),
(5, 'Universidad del Macondo', 'Privada', 3, NULL, '2017-07-15 07:33:27', '2017-07-15 07:33:27'),
(6, 'Universidad de Chile', 'Estatal', 4, NULL, '2017-07-15 07:39:39', '2017-07-15 07:39:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_07_06_032036_create_convenios_table', 1),
('2017_07_06_032125_create_objetivos_table', 1),
('2017_07_06_032104_create_institucion_table', 2),
('2017_07_10_202244_create_actividades_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_obj` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_con` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `objetivos_id_con_foreign` (`id_con`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id`, `descripcion_obj`, `id_con`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Desarrollo Personal', 2, NULL, '2017-07-13 06:27:23', '2017-07-13 06:27:23'),
(2, 'Desarrollos de Tesis', 1, NULL, '2017-07-13 06:27:57', '2017-07-15 07:42:36'),
(4, 'Intervencion social', 1, NULL, '2017-07-13 06:32:06', '2017-07-15 07:42:14'),
(5, 'experiencia académica en el extragero', 2, NULL, '2017-07-15 07:25:47', '2017-07-15 07:25:47'),
(6, 'Estudios Internacionales', 2, NULL, '2017-07-15 07:27:25', '2017-07-15 07:27:25'),
(7, 'Aumentar Formaicion atravez de la investigacion', 3, NULL, '2017-07-15 07:34:37', '2017-07-15 07:34:37'),
(8, 'Formaciones estrategicas', 3, NULL, '2017-07-15 07:34:51', '2017-07-15 07:34:51'),
(9, 'Mejorar Convivencia', 4, NULL, '2017-07-15 07:40:14', '2017-07-15 07:40:14'),
(10, 'Mejorar desarrollo institucional', 4, NULL, '2017-07-15 07:40:26', '2017-07-15 07:40:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dante Perez A.', 'dantes.alfredo@gmail.com', 'administrador', '$2y$10$Z6gMSkTqyr1ffCxvylEDOul.S2.sXetnpSj6v1JtY8tF7xgWhfS.m', 'ibAEYTKfWNRCObwgph1xKnSolzraYL43DjrpyxKyp4xaKE4WXKnsdVPQzuki', '2017-07-06 05:59:51', '2017-07-19 04:38:10'),
(2, 'Omar vega', 'omvega@gmail.com', 'cordinador', '$2y$10$59lo5cx4S0i/ORA9.lbS3OI8Ky0zjkUalz5017bkgcQd21FokyE3a', 'RiKNw3s27vzlPvPNgnk9hCakLCdaLwkoeDOyuRa8E0ZvDrUb8ZgNQjgxUjVl', '2017-07-14 02:05:17', '2017-07-15 07:11:45'),
(3, 'Brandon Veloso', 'bveloso@gmail.com', 'usuario', '$2y$10$uqa9Paf1vacV7nDGp2UoAeX0r7bLT/fo/vRa2BVnwM1d204izWn2G', 'ikGoubdi5YQT1oCIIxLsUOaWwRGhlyv0R4WyKs3ecb0x7ed4BbB8xfReOsoL', '2017-07-15 05:16:10', '2017-07-15 07:11:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
