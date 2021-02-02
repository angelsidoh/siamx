-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 02:45:15
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbkwkacrwe84ac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `modulo_programa` varchar(100) NOT NULL,
  `subtema_programa` varchar(250) NOT NULL,
  `fecha_programa` datetime NOT NULL,
  `tema_programa` varchar(100) NOT NULL,
  `ponente_programa` varchar(60) NOT NULL,
  `hora_programa` time NOT NULL,
  `finhora_programa` time NOT NULL,
  `dia_programa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `modulo_programa`, `subtema_programa`, `fecha_programa`, `tema_programa`, `ponente_programa`, `hora_programa`, `finhora_programa`, `dia_programa`) VALUES
(1, 'Módulo I: Manejo de viveros y sistemas de Producción', 'Importancia y elección de portainjerto', '2021-01-08 17:00:00', 'Propagación y manejo de viveros', 'Dr. Alejandro Barrientos Priego  Colegio de Postgraduados', '17:00:00', '19:00:00', '2021-01-08'),
(2, 'Módulo I: Manejo de viveros y sistemas de Producción', 'Variedades de aguacate en México y el Mundo ', '2021-01-09 08:00:00', 'Variedades Importantes', 'Dr. Alejandro Barrientos Priego  Colegio de Postgraduados', '08:00:00', '13:00:00', '2021-01-09'),
(3, 'Módulo I: Manejo de viveros y sistemas de Producción', 'Factores ecológicos para el desarrollo del cultivo', '2021-01-15 17:00:00', 'Establecimiento del cultivo y sistemas de producción', 'M.C. Heladio Santacruz Ulibarri UMSNH', '17:00:00', '19:00:00', '2021-01-15'),
(4, 'Módulo I: Manejo de viveros y sistemas de Producción', 'Altas densidades: ventajas y desventajas.\r\n\r\n', '2021-01-16 08:00:00', 'Establecimiento del cultivo y sistemas de producción', 'Ing. Gonzalo Cano Lobos.  Asesor Rep. Chile  San Tadeo', '08:00:00', '10:00:00', '2021-01-16'),
(5, 'Módulo I: Manejo de viveros y sistemas de Producción', 'Sistemas de producción con diferentes densidades de plantación, comparación de costos, rendimientos y generación de ingresos.\r\n\r\n', '2021-01-16 10:00:00', 'Establecimiento del cultivo y sistemas de producción', 'Ing. Gonzalo Cano Lobos.  Asesor Rep. Chile  San Tadeo', '10:00:00', '13:00:00', '2021-01-16'),
(6, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Principales nutrientes, funciones y relaciones en el crecimiento; síntomas de deficiencias', '2021-01-22 17:00:00', 'Nutrición y prácticas de fertilización en el cultivo de aguacate', 'Dr. Joel Pineda Pineda Universidad Autónoma Chapingo', '17:00:00', '18:00:00', '2021-01-22'),
(7, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Importancia del análisis de fertilidad del suelo; análisis foliar; previo a la fertilización', '2021-01-22 18:00:00', 'Nutrición y prácticas de fertilización en el cultivo de aguacate', 'Dr. Joel Pineda Pineda Universidad Autónoma Chapingo', '18:00:00', '19:00:00', '2021-01-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
