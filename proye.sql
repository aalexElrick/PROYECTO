-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 23:44:11
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proye`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idPaciente` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Edad` varchar(3) NOT NULL,
  `Estatura` varchar(10) NOT NULL,
  `Fecha` varchar(15) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `Doctor` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idPaciente`, `Nombre`, `Apellidos`, `Edad`, `Estatura`, `Fecha`, `Hora`, `Doctor`, `Correo`, `deleted_at`) VALUES
(6, 'alejandro ', 'hernandez ', '19', '1.68', '09/12/29', '14:30', 'Carlos Alberto Becerra Laguna', 'alex@gmail.com', NULL),
(7, 'emmanuel', 'rosas', '19', '1.60', '01/01/21', '08:30', 'Jesus Arturo Moyers Arevalo', 'emma@gmail.com', NULL),
(8, 'edwin', 'medina', '19', '1.60', '15/12/20', '10:30', 'Jesus Arturo Moyers Arevalo', 'edwin@gmail.com', NULL),
(11, 'ricardo', 'chavez', '23', '1.70', '3/03/21', '17:00', 'Carlos Alberto Becerra Laguna', 'richi@gmail.com', NULL),
(23, 'pedro', 'aguilar', '30', '1.80', '10/12/20', '15:30', 'Jesus Arturo Moyers Arevalo', 'Pedro@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `idPregunta` int(11) NOT NULL,
  `Pregunta` varchar(200) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`idPregunta`, `Pregunta`, `deleted_at`) VALUES
(1, '¿Como se llama el hospital?', NULL),
(2, '¿ya no hay consultas que puedo hacer?', NULL),
(3, '¿cuantos consultorios hay?', NULL),
(4, '¿ Cuanto cuesta la consulta?', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Contraseña`, `deleted_at`) VALUES
(6, 'alejandro ', 'Hernandez', 'alex@gmail.com', 2147483647, 'papaya', NULL),
(12, 'alejandro ', 'Hernandez', 'edwin@gmail.com', 2147483647, 'asdasdas', NULL),
(13, 'MANUEL', 'perez', 'manuel@gmail.com', 77121212, 'holaa', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
