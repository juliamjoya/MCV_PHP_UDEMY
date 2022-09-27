-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 15:28:42
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_mvc_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_product`
--

CREATE TABLE `tm_product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `prod_desc` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_upd` datetime DEFAULT NULL,
  `date_dele` datetime DEFAULT NULL,
  `prod_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_product`
--

INSERT INTO `tm_product` (`prod_id`, `prod_name`, `prod_desc`, `date_create`, `date_upd`, `date_dele`, `prod_status`) VALUES
(1, 'Auriculares', 'Ninguna', '2022-08-28 10:54:21', NULL, NULL, 1),
(2, 'Mouse', 'Ninguna', '2022-08-28 18:19:48', NULL, '2022-09-27 08:25:28', 0),
(3, 'Teclado', 'Ninguna', '2022-08-28 18:20:02', NULL, '2022-09-27 08:25:22', 0),
(4, 'Monitor', 'Ninguna', '2022-08-29 00:51:39', NULL, '2022-09-13 09:31:07', 0),
(5, 'Parlantes', 'Ninguna', '2022-09-13 16:30:17', NULL, '2022-09-13 09:32:19', 0),
(6, 'Home Theater', 'Marca LogiTech con potencia de 20W', '2022-09-21 07:56:23', '2022-09-27 08:25:14', NULL, 1),
(14, 'Hub puertos USB', 'Ninguna', '2022-09-21 08:05:20', NULL, NULL, 1),
(15, 'Funda teclado', 'Ninguna', '2022-09-27 07:44:25', '2022-09-27 07:54:35', NULL, 1),
(16, 'Cargador para laptop', 'Ninguna', '2022-09-27 07:54:08', NULL, NULL, 1),
(17, 'Estabilizador de voltaje', 'Ayuda a regular el voltaje y proteje a los equipos de una descarga electrica.', '2022-09-27 08:24:31', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_product`
--
ALTER TABLE `tm_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_product`
--
ALTER TABLE `tm_product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
