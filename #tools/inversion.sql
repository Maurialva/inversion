-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2021 a las 05:17:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inversion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balances`
--

CREATE TABLE `balances` (
  `id_balance` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `id_inversion` int(11) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `balances`
--

INSERT INTO `balances` (`id_balance`, `monto`, `id_inversion`, `concepto`, `id_usuario`) VALUES
(1, '9900', 16, 'Bitcoins', 1),
(2, '1100', 17, 'Etherium', 1),
(3, '34800', 18, 'Dolares', 1),
(4, '14900', 19, 'Jamon', 1),
(5, '57500', 20, 'jamon crudo', 1),
(6, '0', 21, 'jamon', 4),
(7, '0', 22, 'sssssss', 4),
(8, '0', 23, 'sadasdasda', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversiones`
--

CREATE TABLE `inversiones` (
  `id_inversion` int(11) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inversiones`
--

INSERT INTO `inversiones` (`id_inversion`, `concepto`, `id_usuario`) VALUES
(16, 'Bitcoins', 1),
(17, 'Etherium', 1),
(18, 'Dolares', 1),
(19, 'Jamon', 1),
(20, 'jamon crudo', 1),
(21, 'jamon', 4),
(22, 'sssssss', 4),
(23, 'sadasdasda', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montos`
--

CREATE TABLE `montos` (
  `monto_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(10,0) NOT NULL,
  `diferencia` decimal(10,0) DEFAULT NULL,
  `id_inversion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `montos`
--

INSERT INTO `montos` (`monto_id`, `fecha`, `monto`, `diferencia`, `id_inversion`) VALUES
(20, '2021-11-20 19:56:52', '100', NULL, 16),
(21, '2021-11-20 19:58:19', '150', '50', 16),
(22, '2021-11-20 19:58:23', '10000', '9850', 16),
(23, '2021-11-20 19:58:43', '100', NULL, 17),
(24, '2021-11-20 19:58:55', '1200', '1100', 17),
(25, '2021-11-20 19:59:15', '200', NULL, 18),
(26, '2021-11-20 19:59:24', '25000', '24800', 18),
(27, '2021-11-20 19:59:39', '100', NULL, 19),
(30, '2021-11-20 20:04:24', '15000', '14900', 19),
(31, '2021-11-20 23:14:53', '2500', NULL, 20),
(32, '2021-11-20 23:15:08', '60000', '57500', 20),
(33, '2021-11-21 00:14:32', '500', NULL, 21),
(34, '2021-11-21 00:17:37', '150', NULL, 22),
(35, '2021-11-21 00:20:21', '1520', NULL, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tema` varchar(6) NOT NULL DEFAULT 'claro',
  `ultlogin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `email`, `tema`, `ultlogin`) VALUES
(1, 'admin', '1234', 'mauri.mdp87@gmail.com', 'claro', '2021-11-21 00:52:55'),
(4, 'mauri', '121212', 'mauri.mdp87@gmail.com', 'claro', '2021-11-20 23:50:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id_balance`);

--
-- Indices de la tabla `inversiones`
--
ALTER TABLE `inversiones`
  ADD PRIMARY KEY (`id_inversion`);

--
-- Indices de la tabla `montos`
--
ALTER TABLE `montos`
  ADD PRIMARY KEY (`monto_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balances`
--
ALTER TABLE `balances`
  MODIFY `id_balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inversiones`
--
ALTER TABLE `inversiones`
  MODIFY `id_inversion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `montos`
--
ALTER TABLE `montos`
  MODIFY `monto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
