-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2020 a las 12:32:04
-- Versión del servidor: 5.7.26-29-log
-- Versión de PHP: 7.3.25

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
  `fecha_usuario` datetime NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `estado_usuario` int(1) NOT NULL,
  `tiked_usuario` varchar(200) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `inscripcion_usuario` int(1) NOT NULL,
  `deposito_usuario` int(1) NOT NULL,
  `transferencia_usuario` int(1) NOT NULL,
  `factura_usuario` int(1) NOT NULL,
  `estadofactura_usuario` int(1) NOT NULL,
  `rfc_usuario` varchar(20) NOT NULL,
  `cfdi_usuario` varchar(50) NOT NULL,
  `domiciliofiscal_usuario` varchar(200) NOT NULL,
  `banco_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `pass_usuario`, `foto_usuario`, `fecha_usuario`, `correo_usuario`, `telefono_usuario`, `estado_usuario`, `tiked_usuario`, `tipo_usuario`, `inscripcion_usuario`, `deposito_usuario`, `transferencia_usuario`, `factura_usuario`, `estadofactura_usuario`, `rfc_usuario`, `cfdi_usuario`, `domiciliofiscal_usuario`, `banco_usuario`) VALUES
(1, 'Bles', 'Mar', 'x', '', '2020-12-05 13:49:04', 'x@gmail.com', '4514848451', 0, '', 1, 0, 0, 0, 0, 0, '', '', '', ''),
(2, 'Pedro', 'AB', 'p', '', '2020-12-05 13:50:20', 'p@gmail.com', '454545454545', 1, '4541', 2, 0, 0, 0, 0, 0, '', '', '', ''),
(3, 'Angel', 'Rz', 'a', '', '2020-12-05 13:50:48', 'a@gmail.com', '54685456465', 3, '8451', 99, 0, 0, 0, 0, 0, '', '', '', ''),
(4, 'David', 'Marez Cazarez', 'd', 'https://sociedadintelectualdelaguacatemexicano.com/upload/David-gTU09December2020152238119403493_3413678911988392_8248441450573387682_o.jpg', '2020-12-05 13:51:38', 'd@gmail.com', '415465456156', 1, '4812', 0, 1, 0, 1, 1, 1, '451da1', 'dasd', 'dadssd', ''),
(5, 'Ana', 'AB', '%~fDc(VJ', '', '2020-12-05 13:50:20', 'p_@gmail.com', '454545454545', 1, '4512', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(6, 'Diana', 'Rz', 'sXeP=U09', '', '2020-12-05 13:50:48', 'Rz@gmail.com', '54685456465', 1, '548515', 0, 1, 1, 0, 0, 0, '', '', '', ''),
(7, 'Tania', 'Marez Cazarez', 'q)I2gEel', '', '2020-12-05 13:51:38', 'MC@gmail.com', '415465456156', 1, '54451', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(8, 'asdadas', 'adad', 'O/dH6%qe', '', '2020-12-06 13:56:10', 'asd@gmail.com', '23123123', 0, '', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(9, 'David', 'Marez Cazarez', 'd', '', '2020-12-05 13:51:38', 'da@gmail.com', '415465456156', 1, '4451', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(10, 'Ana', 'AB', '%~fDc(VJ', '', '2020-12-05 13:50:20', 'p_@gmail.com', '454545454545', 1, '4512', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(11, 'Diana', 'Rz', 'sXeP=U09', '', '2020-12-05 13:50:48', 'Rz@gmail.com', '54685456465', 3, '5412', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(12, 'Tania', 'Marez Cazarez', 'q)I2gEel', '', '2020-12-05 13:51:38', 'MC@gmail.com', '415465456156', 1, '54451', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(13, 'asdadas', 'adad', 'O/dH6%qe', '', '2020-12-06 13:56:10', 'asd@gmail.com', '23123123', 0, '', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(14, 'cliente', 'prueba', 'cp', 'https://sociedadintelectualdelaguacatemexicano.com/upload/cliente-pIo10December2020065157119403493_3413678911988392_8248441450573387682_o.jpg', '2020-12-10 12:49:38', 'an@gmail.com', '4521441689', 0, '', 0, 1, 1, 0, 1, 0, '1234567891234', '123456789123', 'San José de la mina #42 Col Huertas', ''),
(15, 'Angel', 'Ruiz', '!Q$h)EJf', '', '2020-12-10 13:07:48', '5angelsidohpubg@gmail.com', '4521263233', 0, '', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(16, 'Angel', 'jkdkalsd', 'zAFnOnjL', '', '2020-12-10 13:10:39', 'anddd@gmail.com', '455155', 0, '', 0, 0, 0, 0, 0, 0, '', '', '', ''),
(17, 'José Angel', 'Ruiz Chávez', '(KHOGvd)', '', '2020-12-11 20:22:39', 'joseangelrdddduizchavez@gmail.com', '4518451545', 0, '', 0, 1, 1, 0, 1, 0, 'jaoasdasd5151', 'iuajsdijas45151', 'san jose de la mina', ''),
(18, 'José', 'Jimenez Chávez', 'bMa$&%Ks', 'https://sociedadintelectualdelaguacatemexicano.com/upload/José-frG11December2020152030hombre.jpg', '2020-12-11 21:17:20', 'joseangjjhavez@gmail.com', '4521441689', 0, '', 0, 1, 0, 1, 0, 0, '', '', '', ''),
(19, 'Jesica', 'Martinez Guizar', 'RCvV5KI~', 'https://sociedadintelectualdelaguacatemexicano.com/upload/Jesica-RuS11December2020152914mujer.png', '2020-12-11 21:22:35', 'joseangelruizchavez@gmail.com', '6353881291', 1, '598421', 0, 1, 0, 1, 1, 0, 'SJSKASDJKASJD', 'ASDJKAJSDKJKASD', 'Uruapan Mich. San José de la Mina #42 Col. San José de la Mina', 'Banamex');

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
