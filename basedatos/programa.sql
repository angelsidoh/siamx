-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2020 a las 18:01:47
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
  `tema_programa` varchar(180) NOT NULL,
  `ponente_programa` varchar(200) NOT NULL,
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
(22, 'Módulo III. Podas, manejo de estrés y floración', 'Podas fitosanitarias y de rejuvenecimiento', '2021-02-20 12:00:00', 'Podas', 'Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate\r\n', '12:00:00', '13:00:00', '2021-02-20'),
(23, 'Módulo III. Podas, manejo de estrés y floración', 'Fisiología de Floración', '2021-02-26 17:00:00', 'Fisiología del aguacate y manejo de la\r\nfloración\r\n', 'Ing. Angel Chao Mendoza. Asesor Independiente\r\n', '17:00:00', '19:00:00', '2021-02-26'),
(24, 'Módulo III. Podas, manejo de estrés y floración', 'Reguladores y bioestimuladores del crecimiento', '2021-02-27 08:00:00', 'Fisiología del aguacate y manejo de la\r\nfloración\r\n', 'Ing. Angel Chao Mendoza. Asesor Independiente\r\n', '08:00:00', '13:00:00', '2021-02-27'),
(25, 'Módulo III. Podas, manejo de estrés y floración', 'Polinización', '2021-03-05 17:00:00', 'Uso de polinizadores\r\n', 'INECOL\r\n', '17:00:00', '19:00:00', '2021-03-05'),
(26, 'Módulo III. Podas, manejo de estrés y floración', 'Polinización natural', '2021-03-06 08:00:00', 'Uso de polinizadores\r\n', 'INECOL\r\n', '08:00:00', '10:00:00', '2021-03-06'),
(27, 'Módulo III. Podas, manejo de estrés y floración', 'Manejo integrado de plagas', '2021-03-06 10:00:00', 'Uso de polinizadores\r\n', 'Ing. Leopoldo Adame Espinoza UMSNH\r\n', '10:00:00', '13:00:00', '2021-03-06'),
(28, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Plagas cuarentenarias', '2021-03-06 10:01:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'Ing. Leopoldo Adame Espinoza UMSNH\r\n', '10:01:00', '13:01:00', '2021-03-06'),
(29, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Identificación, control y monitoreo de trips, ácaros y lepidópteros.', '2021-03-13 08:00:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'Dr. Armando Equihua Martínez COLPOS Campus Montecillos\r\n', '08:00:00', '13:00:00', '2021-03-13'),
(30, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Identificación, monitoreo y control de mosquita\r\nblanca, chicharrita, gusanos, escama ostión, minador y araña blanca.\r\n', '2021-03-19 17:00:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'Dr. Héctor González Hernández COLPOS Campus Montecillos', '17:00:00', '19:00:00', '2021-03-19'),
(31, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Control biológico de plagas mediante insectos\r\n', '2021-03-20 08:00:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'Dra. Edith G. Estrada Venegas COLPOS Campus Montecillos\r\n', '08:00:00', '10:30:00', '2021-03-20'),
(32, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Control	biológico de plagas mediante entomopatógenos\r\n', '2021-03-20 10:30:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'M.C. Heladio Santacruz Ulibarri UMSNH\r\n', '10:30:00', '13:00:00', '2021-03-20'),
(33, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Manejo de la resistencia a insecticidas y acaricidas\r\n\r\n', '2021-03-26 17:00:00', 'Manejo fitosanitario del aguacate; plagas, enfermedades y malezas; su impacto en la producción\r\n', 'M.C. Agustín Uribe Treviño UMSNH\r\n\r\n', '17:00:00', '19:00:00', '2021-03-26'),
(34, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Tristeza del aguacatero y Rhizoctonia\r\n\r\n', '2021-03-27 08:00:00', 'Monitoreo, identificación y medidas de control de las principales enfermedades del aguacatero\r\n\r\n', 'Dra. Ma. Blanca Nieves Lara Chávez UMSNH\r\n\r\n', '08:00:00', '13:00:00', '2021-03-27'),
(35, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Antracnosis y roña en el fruto de aguacate\r\n\r\n', '2021-04-09 17:00:00', 'Monitoreo, identificación y medidas de control de las principales enfermedades del aguacatero\r\n\r\n', 'M.C. Heladio Santacruz Ulibarri UMSNH\r\n\r\n', '17:00:00', '19:00:00', '2021-04-09'),
(36, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Ganoderma y Armillaria\r\n\r\n', '2021-04-10 08:00:00', 'Monitoreo, identificación y medidas de control de las principales enfermedades del aguacatero\r\n\r\n', 'Dr. Ricardo Valenzuela Garza Instituto Politécnico Nacional\r\n\r\n', '08:00:00', '11:00:00', '2021-04-10'),
(37, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Complejo Ambrosiales\r\n\r\n', '2021-04-10 11:00:00', 'Monitoreo, identificación y medidas de control de las principales enfermedades del aguacatero\r\n\r\n', 'Dr. Salvador Ochoa Ascencio UMSNH\r\n\r\n', '11:00:00', '13:00:00', '2021-04-10'),
(38, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Marchitez del laurel\r\n', '2021-04-16 17:00:00', 'Monitoreo, identificación y medidas de control de las principales enfermedades del aguacatero\r\n\r\n', 'Dr. Salvador Ochoa Ascencio UMSNH\r\n\r\n', '17:00:00', '19:00:00', '2021-04-16'),
(39, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Control de plantas arvenses (malezas)\r\n', '2021-04-17 08:00:00', 'Plantas arvenses (malezas)', 'M.C. Jordán Ordaz Gallegos UMSNH\r\n\r\n', '08:00:00', '10:00:00', '2021-04-17'),
(40, 'Módulo IV. Control de plagas, enfermedades y malezas', 'Uso eficiente de insumos fitosanitarios Uso eficiente de cobres', '2021-04-17 10:00:00', 'Plantas arvenses (malezas)', 'Ing. Luis Leobardo García Meza Desarrollo Técnico Zona Occidente y Norte México. ADAMA\r\n\r\n', '10:00:00', '13:00:00', '2021-04-17'),
(41, 'Módulo V. Cosecha y comercialización', 'Cosecha', '2021-04-23 17:00:00', 'Cosecha y manejo PostCosecha', 'Ing. Jorge Ceja Espinoza Asesor técnico en huertas y empaques de aguacate\r\n\r\n\r\n', '17:00:00', '19:00:00', '2021-04-23'),
(42, 'Módulo V. Cosecha y comercialización', 'Postcosecha', '2021-04-24 08:00:00', 'Cosecha y manejo PostCosecha', 'Ing. Jorge Ceja Espinoza Asesor técnico en huertas y empaques de aguacate\r\n\r\n\r\n', '08:00:00', '11:00:00', '2021-04-24'),
(43, 'Módulo V. Cosecha y comercialización', 'Importancia de planificar, organizar y ejecutar actividades en el proceso de empacado para exportación', '2021-04-24 11:00:00', 'Cosecha y manejo PostCosecha', 'Ing. Jorge Ceja Espinoza Asesor técnico en huertas y empaques de aguacate\r\n\r\n\r\n', '11:00:00', '13:00:00', '2021-04-24'),
(44, 'Módulo V. Cosecha y comercialización', 'Traslado al empaque de aguacate', '2021-05-01 08:00:00', 'Práctica de empacado en el municipio de Uruapan, Michoacán', '\r\n\r\n\r\n', '08:00:00', '08:30:00', '2021-05-01'),
(45, 'Módulo V. Cosecha y comercialización', 'Pendiente: Empaque por definir', '2021-05-01 09:00:00', 'Práctica de empacado en el municipio de Uruapan, Michoacán', 'Ing. Jorge Ceja Espinoza Asesor técnico en huertas y empaques de aguacate\r\n\r\n', '09:00:00', '13:00:00', '2021-05-01'),
(46, 'Módulo V. Cosecha y comercialización', 'Principales países importadores y exportadores  de aguacate (mercados, superficie cultivada, volumen de producción y rendimientos)', '2021-05-07 17:00:00', 'Importancia de la producción de aguacate a nivel mundial, nacional y estatal\r\n', 'Ramón Paz Vega Paz-Mendoza y Asociados\r\n\r\n\r\n', '17:00:00', '19:00:00', '2021-05-07'),
(47, 'Módulo V. Cosecha y comercialización', 'Participación de Michoacán y México en el  mercado mundial', '2021-05-08 08:00:00', 'Importancia de la producción de aguacate a nivel mundial, nacional y estatal\r\n', 'Ramón Paz Vega Paz-Mendoza y Asociados\r\n\r\n\r\n', '08:00:00', '11:00:00', '2021-05-08'),
(48, 'Módulo V. Cosecha y comercialización', 'Riesgos y oportunidades (nuevos mercados en el mundo, mercado nacional y la producción en otros estados)', '2021-05-08 11:00:00', 'Importancia de la producción de aguacate a nivel mundial, nacional y estatal\r\n', 'Ramón Paz Vega Paz-Mendoza y Asociados\r\n\r\n\r\n', '11:00:00', '13:00:00', '2021-05-08'),
(49, 'Módulo V. Cosecha y comercialización', 'Requerimientos para exportar a los principales mercados consumidores de aguacate en el mundo. Estados Unidos, Europa, Japón y otros', '2021-05-14 17:00:00', 'Importancia de la producción de aguacate a nivel mundial, nacional y estatal\r\n', 'Ramón Paz Vega Paz-Mendoza y Asociados\r\n\r\n\r\n', '17:00:00', '19:00:00', '2021-05-14'),
(50, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Traslado al huerto de aguacate', '2021-05-15 08:00:00', 'Práctica de campo huerta “Hacienda Zumpimito” en Uruapan, Michoacán\r\n\r\n', '\r\n\r\n\r\n', '08:00:00', '08:30:00', '2021-05-15'),
(51, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Respuesta de poda al incremento de producción; manejo de prácticas agrícolas: fertirriego, monitoreo de plagas y enfermedades', '2021-05-15 09:00:00', 'Práctica de campo huerta “Hacienda Zumpimito” en Uruapan, Michoacán\r\n\r\n', 'Ing. Francisco Flores Mendoza Asesor Técnico en Aguacate, Ing. Leopoldo Adame Espinoza UMSNH, Ing. José Luis Gudiño Juárez Asesor Técnico en Aguacate Y M.C. Heladio Santacruz Ulibarri UMSNH', '09:00:00', '13:00:00', '2021-05-15'),
(52, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Buenas prácticas en la industria del aguacate', '2021-05-21 17:00:00', 'Inocuidad en la producción de aguacate\r\n\r\n', 'Ing. Miguel Ángel Salgado Bedolla Comité Estatal de Sanidad Vegetal en Michoacán', '17:00:00', '19:00:00', '2021-05-21'),
(53, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Buenas prácticas agrícolas', '2021-05-22 08:00:00', 'Inocuidad en la producción de aguacate\r\n\r\n', 'Ing. Miguel Ángel Salgado Bedolla Comité Estatal de Sanidad Vegetal en Michoacán', '08:00:00', '10:00:00', '2021-05-22'),
(54, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Buen uso y manejo de plaguicidas', '2021-05-22 10:00:00', 'Inocuidad en la producción de aguacate', 'Ing. Miguel Ángel Salgado Bedolla Comité Estatal de Sanidad Vegetal en Michoacán', '10:00:00', '12:00:00', '2021-05-22'),
(55, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Buenas prácticas de manejo y empaque', '2021-05-22 12:00:00', 'Inocuidad en la producción de aguacate', 'M.C. Trinidad Zamora Magdaleno UMSNH', '12:00:00', '13:00:00', '2021-05-22'),
(56, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Buenas prácticas de cosecha', '2021-05-28 17:00:00', 'Inocuidad en la producción de aguacate', 'Ing. Fabiola Ruíz Rodríguez Técnico independiente\r\nReducción de Riesgos y Esquemas de certificación\r\n', '17:00:00', '19:00:00', '2021-05-28'),
(57, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Esquema de certificación de unidades de producción, cuadrillas, cosecha y empaques', '2021-05-29 08:00:00', 'Inocuidad en la producción de aguacate', 'Ing. Fabiola Ruíz Rodríguez Técnico independiente Reducción de Riesgos y Esquemas de certificación', '08:00:00', '10:30:00', '2021-05-29'),
(58, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Esquema de certificación de cuadrillas de cosecha y empaque', '2021-05-29 10:30:00', 'Inocuidad en la producción de aguacate', 'Ing. Gabriela Sarahí Santacruz Torres Evaluadora de conformidad SQF\r\n', '10:30:00', '13:00:00', '2021-05-29'),
(59, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Producción sostenible', '2021-06-04 17:00:00', 'Producción sostenible y responsabilidad social en la industria del aguacate\r\n', 'M.C. Fernando Ochoa Ambriz ININEE-UMSNH\r\n', '17:00:00', '19:00:00', '2021-06-04'),
(60, 'Módulo VI. Inocuidad y producción sostenible en el rendimiento del aguacate', 'Responsabilidad social en la cadena de producción de aguacate', '2021-06-05 08:00:00', 'Producción sostenible y responsabilidad social en la industria del aguacate\r\n', 'M.C. Fernando Ochoa Ambriz ININEE-UMSNH\r\n', '08:00:00', '13:00:00', '2021-06-05'),
(61, 'Módulo VII. La tesis profesional y titulación en la Facultad de Agrobiología “Presidente Juárez”', 'Responsabilidad para realizar la tesis profesional y optar por la titulación de Ingeniero Agrónomo', '2021-06-12 08:00:00', '¿Porqué hacer la tesis para lograr la titulación? A qué se refiere con elaborar una tesina; como examen general de conocimientos; para lograr la titulación (3 años de egreso)\r\n\r\n', 'Dra. Ana Tztziqui Chávez Bárcenas UMSNH', '08:00:00', '13:00:00', '2021-06-12'),
(63, 'Módulo VII. La tesis profesional y titulación en la Facultad de Agrobiología “Presidente Juárez”', 'Instrumentación para elaborar una tesina. Como sustentar Examen General de Conocimientos. Y requisitos para optar por la titulación de Ingeniero Agrónomo', '2021-06-19 08:00:00', '¿Porqué hacer la tesis para lograr la titulación? A qué se refiere con elaborar una tesina; como examen general de conocimientos; para lograr la titulación (3 años de egreso)\r\n\r\n', 'Dra. Ana Tztziqui Chávez Bárcenas UMSNH', '08:00:00', '13:00:00', '2021-06-19'),
(64, 'Módulo VIII. Examen general de conocimientos del primer diplomado para la profesionalización del cul', 'Examen General de Conocimientos', '2021-06-26 08:00:00', 'Clausura', 'Profesores de la Faculta de Agrobiología\r\n', '08:00:00', '13:00:00', '2021-06-26');

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
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
