-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2020 a las 01:49:44
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activities`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `estimate_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `employee_id`, `title`, `description`, `estimate_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'Creación base de datos', 'Crear modelo logico, script', '2020-05-28 00:00:00', '1', '2020-05-28 04:07:18', '2020-05-28 09:07:18', NULL),
(2, 3, 'Desarrollar propuesta a cliente', 'Crear documento base, estimación tiempos', '2020-05-30 15:00:00', '0', '2020-05-28 04:40:57', '2020-05-28 09:40:57', NULL),
(3, 4, 'Gestion de hoja de trabajo', 'Plan de trabajo', '2020-05-29 18:00:00', '0', '2020-05-28 06:23:01', '2020-05-28 11:23:01', NULL),
(4, 2, 'Documentacion Tecnica', 'Desarrollo de Manuales Tecnicos', '2020-05-31 12:00:00', '0', '2020-05-28 11:21:14', '2020-05-28 11:21:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `position` char(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `code`, `name`, `lastname`, `sex`, `position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1127350009', 'Franklin', 'Archila', 'M', '2', '2020-05-28 05:37:20', '2020-05-28 05:37:20', NULL),
(2, '1127350008', 'Jose', 'Rojas', 'M', '2', '2020-05-28 01:26:11', '2020-05-28 06:26:11', NULL),
(3, '1127350007', 'Maria', 'Ortiz', 'F', '3', '2020-05-28 05:43:32', '2020-05-28 05:43:32', NULL),
(4, '1127350006', 'Pedro', 'Parra', 'M', '4', '2020-05-28 05:45:04', '2020-05-28 05:45:04', NULL),
(5, '1127000001', 'Hector', 'Moreno', 'O', '0', '2020-05-28 05:05:38', '2020-05-28 10:05:38', '2020-05-28 10:05:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_Fk1` (`employee_id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_Un1` (`code`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
