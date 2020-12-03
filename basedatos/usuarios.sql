-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 16:26:46
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(16) NOT NULL,
  `apellido_usuario` varchar(16) NOT NULL,
  `pass_usuario` varchar(16) NOT NULL,
  `foto_usuario` varchar(200) NOT NULL,
  `fecha_usuario` date NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `qr_usuario` varchar(200) NOT NULL,
  `pedidos_usuario` varchar(200) NOT NULL,
  `tipo_usuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `pass_usuario`, `foto_usuario`, `fecha_usuario`, `correo_usuario`, `telefono_usuario`, `qr_usuario`, `pedidos_usuario`, `tipo_usuario`) VALUES
(1, 'José Angel', 'Ruiz Chávez', 'hyok5', 'aa', '2020-11-30', 'angelsidohpubg@gmail.com', '0', 'a', 'inscripcion a pagina pruebas', 1),
(3, 'aB', '', '', '', '0000-00-00', '', '0', '', '', 0),
(4, 'aB', '', '', '', '0000-00-00', '', '0', '', '', 0),
(5, 'aB', '', '', '', '0000-00-00', '', '0', '', '', 0),
(6, 'aB', '', 'YCe0!u6Z', '', '2020-12-02', 'angel._ruiz@hotmail.com', '0', '', '', 0),
(7, 'aB', '', 'YNBQ$d+I', '', '2020-12-02', 'angel._ruizA@hotmail.com', '0', '', '', 0),
(8, 'aB', '', 'Nm&apdTh', '', '2020-12-02', 'angel._ruizAA@hotmail.com', '0', '', '', 0),
(9, 'ac', '', 'qNXsMXEb', '', '2020-12-03', 'angell._ruiz@hotmail.com', '0', '', '', 0),
(10, 'angel', '', 'ZVfCP/ka', '', '2020-12-03', 'angel._rssuiz@hotmail.com', '0', '', '', 0),
(11, 'angel', 'ruiz', 'ptO&t-y%', '', '2020-12-03', 'angel._rauiz@hotmail.com', '0', '', '', 0),
(12, 'angel', 'ruiz', 'a(270(0v', '', '2020-12-03', 'angel._raauiz@hotmail.com', '0', '', '', 0),
(13, 'angel', 'ruiz', '%vHm#z7n', '', '2020-12-03', 'angel._raaauiz@hotmail.com', '4521441688', '', '', 0),
(14, 'angel', 'ruiz', 'OTldg6M(', '', '2020-12-03', 'angel._raaaauiz@hotmail.com', '4521441689', '', '', 0),
(15, 'angel', 'ruiz', 'u#8Bsx1P', '', '2020-12-03', 'angel._raaaauiz@gmail.com', '4521441689', '', '', 0),
(16, 'angel', 'ruiz', 'TCSuo6uf', '', '2020-12-03', 'angel._raaaauiz@outlook.com', '4521441689', '', '', 0),
(17, 'angel', 'ruiz', '2Ag&co1L', '', '2020-12-03', 'angel._raaaaauiz@gmail.com', '4521441689', '', '', 0),
(18, 'angel', 'ruiz', 'v)YNs&5R', '', '2020-12-03', 'angel._raaaaz@gmail.com', '4521441689', '', '', 0),
(19, 'José Angel', 'Ruiz Chávez', 'pHp1/PcI', '', '2020-12-03', 'angel@gmail.com', '', '', '', 0),
(20, 'José Angel', 'Ruiz Chávez', '0!d4NT-s', '', '2020-12-03', 'aaangel@gmail.com', '4521121232', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
