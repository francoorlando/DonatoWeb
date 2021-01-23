-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2019 a las 21:14:35
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donato3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `dni` int(11) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dateadd` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `dni`, `nombre`, `telefono`, `direccion`, `email`, `dateadd`, `usuario_id`, `estatus`) VALUES
(23, 56465446, 'Juan Carlos', 464565511, 'Salta 5555', 'juancarlos@gmail.com', '2019-10-31 15:31:37', 1, 1),
(24, 54654664, 'Pablo Sanchez', 464556466, 'Avellaneda 7777', 'pablosanchez@gmail.com', '2019-10-31 15:34:39', 1, 1),
(25, 42555666, 'Federico Martinez', 6555555, 'Salta 8888', 'Federicomartinez@gmail.com', '2019-10-31 15:48:28', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `codcontrato` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `cantpasajeros` int(11) DEFAULT NULL,
  `nhabitaciones` int(11) DEFAULT NULL,
  `cab` int(11) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL,
  `tipodepago` varchar(50) DEFAULT NULL,
  `fechaingreso` date DEFAULT NULL,
  `fechasalida` date DEFAULT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`codcontrato`, `descripcion`, `cliente`, `cantpasajeros`, `nhabitaciones`, `cab`, `importe`, `tipodepago`, `fechaingreso`, `fechasalida`, `date_add`, `usuario_id`, `estatus`) VALUES
(66, ' 124124', 23, 2, 4, 5, '124124.00', 'Credito', '2019-10-09', '2019-10-31', '2019-10-31 16:19:41', 1, 1),
(67, ' 125125', 24, 125, 5125, 0, '125125.00', 'Credito', '2019-10-01', '2019-10-30', '2019-10-31 16:20:18', 1, 1),
(68, ' prueba', 23, 6, 2, 0, '30000.00', 'Efectivo', '2019-10-25', '2019-10-27', '2019-10-31 16:22:45', 1, 1),
(69, ' 6546546', 25, 6, 6, 0, '5151511.00', 'Credito', '2019-10-28', '2019-10-31', '2019-10-31 16:35:59', 1, 1),
(70, ' 124124', 25, 65, 56, 0, '5450000.00', 'Efectivo', '2019-10-30', '2019-10-31', '2019-10-31 16:38:21', 1, 1),
(71, ' 456456', 25, 5, 5, 0, '5.00', 'Credito', '2019-10-11', '2019-10-31', '2019-10-31 16:50:35', 1, 1),
(72, ' 124124', 24, 124124, 124124, 0, '124124.00', 'Efectivo', '2019-10-29', '2019-10-31', '2019-10-31 16:51:37', 1, 1),
(73, ' 1241241', 23, 124, 124, 0, '124.00', 'Credito', '2019-10-30', '2019-10-31', '2019-10-31 16:53:54', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `dni` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `className` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `className`, `start`, `end`) VALUES
(1, 'Evento 1', 'bg-dark', '2019-10-31 06:00:00', '2019-11-21 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `codreserva` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `cantpasajeros` int(11) DEFAULT NULL,
  `nhabitaciones` int(11) DEFAULT NULL,
  `cab` int(11) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL,
  `tipodepago` varchar(50) DEFAULT NULL,
  `fechaingreso` date DEFAULT NULL,
  `fechasalida` date DEFAULT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `fechaingreso` datetime DEFAULT current_timestamp(),
  `fechasalida` datetime DEFAULT current_timestamp(),
  `usuario_id` int(11) NOT NULL,
  `date_add` int(11) DEFAULT current_timestamp(),
  `idturno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`fechaingreso`, `fechasalida`, `usuario_id`, `date_add`, `idturno`) VALUES
('2019-10-31 00:00:00', '2019-10-31 16:14:00', 28, 2147483647, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'Franco', 'fran@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 1, 1),
(28, 'Empleado1', 'empleado1@gmail.com', 'empleado1', '202cb962ac59075b964b07152d234b70', 2, 1),
(29, 'Administrador2', 'administrador2@gmail.com', 'admin2', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`codcontrato`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cliente` (`cliente`) USING BTREE;

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `turno` (`turno`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`codreserva`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cliente` (`cliente`) USING BTREE;

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idturno`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `codcontrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `codreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `idturno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
