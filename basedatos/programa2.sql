-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 15:12:24
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
  `ponente_programa` varchar(180) NOT NULL,
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
(7, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Importancia del análisis de fertilidad del suelo; análisis foliar; previo a la fertilización', '2021-01-22 18:00:00', 'Nutrición y prácticas de fertilización en el cultivo de aguacate', 'Dr. Joel Pineda Pineda Universidad Autónoma Chapingo', '18:00:00', '19:00:00', '2021-01-22'),
(8, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Época adecuada para fertilizar; cómo fertilizar en suelo, riego y foliar', '2021-01-23 08:00:00', 'Nutrición y prácticas de fertilización en el cultivo de aguacate', 'Dr. Joel Pineda Pineda Universidad Autónoma Chapingo', '08:00:00', '11:00:00', '2021-01-23'),
(9, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Abonos orgánicos; características, ventajas y desventajas', '2021-01-23 11:00:00', 'Nutrición y prácticas de fertilización en el cultivo de aguacate', 'Dr. Joel Pineda Pineda Universidad Autónoma Chapingo', '11:00:00', '13:00:00', '2021-01-23'),
(10, 'Módulo II. Prácticas de campo', 'Traslado al huerto de aguacate', '2021-01-30 08:00:00', 'Visita a “Huerta Santa María 1” en Toreo el Alto, Uruapan, Michoacán', 'Camino a Práctica', '08:00:00', '08:30:00', '2021-01-30'),
(11, 'Módulo II. Prácticas de campo', 'Observación y análisis de podas realizadas en huerto de 50 años de edad', '2021-01-30 09:00:00', 'Visita a “Huerta Santa María 1” en Toreo el Alto, Uruapan, Michoacán', 'Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate', '09:00:00', '11:00:00', '2021-01-30'),
(12, 'Módulo II. Prácticas de campo', 'Transporte del personal a la ciudad de Uruapan, Michoacán', '2021-01-30 13:00:00', 'Visita a “Huerta Santa María 1” en Toreo el Alto, Uruapan, Michoacán', 'Camino a ciudad de Uruapan Mich.', '13:00:00', '13:30:00', '2021-01-30'),
(13, 'Módulo II. Prácticas de campo', 'Traslado al huerto de aguacate', '2021-02-06 08:00:00', 'Visita a “Huerta Viejo Cuchatácuaro” en Tiamba, Uruapan, Michoacán', 'Camino a Práctica', '08:00:00', '08:30:00', '2021-02-06'),
(14, 'Módulo II. Prácticas de campo', 'Respuesta de diferentes edades de árboles; manejo de prácticas agrícolas: monitoreo de plagas y enfermedades; fertilización sólida al suelo; fertirriego; aspersión foliar. Podas; inyecciones al tallo', '2021-02-06 09:00:00', 'Visita a “Huerta Viejo Cuchatácuaro” en Tiamba, Uruapan, Michoacán', 'Lic. Alejandro Ascencio Mc Entire Propietario, Ing. Leopoldo Adame Espinoza UMSNH, Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate y M.C. Heladio Santacruz Ulibarri UMSNH', '09:00:00', '13:00:00', '2021-02-06'),
(15, 'Módulo II. Prácticas de campo', 'Transporte del personal a la ciudad de Uruapan, Michoacán', '2021-02-06 13:00:00', 'Visita a “Huerta Santa María 1” en Toreo el Alto, Uruapan, Michoacán', 'Camino a ciudad de Uruapan Mich.', '13:00:00', '13:30:00', '2021-02-06'),
(16, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Prácticas para la conservación del suelo', '2021-02-12 17:00:00', 'Manejo y uso eficiente de los recursos naturales', 'M.C. Oscar Fernando Universidad Autónoma Chapingo', '17:00:00', '19:00:00', '2021-02-12'),
(17, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Sistemas de riego, implementación, ventajas, necesidades de agua por hectárea con relación a la edad del árbol', '2021-02-13 08:00:00', 'Manejo y uso eficiente de los recursos naturales', 'Ing. Rigoberto Navarrete Arteaga Asesor Técnico de Aguacate, área Tacámbaro', '08:00:00', '11:00:00', '2021-02-13'),
(18, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Época y etapa fenológica de riego; decisión del\r\nriego en campo\r\n', '2021-02-13 11:00:00', 'Manejo y uso eficiente de los recursos naturales', 'Ing. Rigoberto Navarrete Arteaga Asesor Técnico de Aguacate, área Tacámbaro', '11:00:00', '13:00:00', '2021-02-13'),
(19, 'Módulo II. Fertilización, uso de agua y suelo y agricultura de precisión', 'Estaciones meteorológicas para el manejo del cultivo y uso de drones\r\n', '2021-02-19 17:00:00', 'Agricultura de precisión aplicada a la producción de aguacate', 'M.C. Alejandro Sosa Sales Centro de Innovación Tecnológica y\r\nDesarrollo Agroalimentario de Michoacán A.C.\r\n', '17:00:00', '19:00:00', '2021-02-19'),
(20, 'Módulo III. Podas, manejo de estrés y floración', 'Podas de formación en árboles jóvenes; poda en árboles con 3 a 9 años de edad\r\n', '2021-02-20 08:00:00', 'Podas', 'Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate\r\n', '08:00:00', '10:00:00', '2021-02-20'),
(21, 'Módulo III. Podas, manejo de estrés y floración', 'Podas para árboles de 10 a 45 años de edad', '2021-02-20 10:00:00', 'Podas', 'Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate\r\n', '10:00:00', '12:00:00', '2021-02-20'),
(22, 'Módulo III. Podas, manejo de estrés y floración', 'Podas fitosanitarias y de rejuvenecimiento', '2021-02-20 12:00:00', 'Podas', 'Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate\r\n', '12:00:00', '13:00:00', '2021-02-20');

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
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
