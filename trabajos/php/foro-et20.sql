-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 09:07:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foro-et20`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusion: milanesa de carne vs milanesa de pollo`
--

CREATE TABLE `discusion: milanesa de carne vs milanesa de pollo` (
  `ID` int(11) NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `Comentario` varchar(3000) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusion: programacion de paginas`
--

CREATE TABLE `discusion: programacion de paginas` (
  `ID` int(11) NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `Comentario` varchar(3000) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discusion: sobre ser programador`
--

CREATE TABLE `discusion: sobre ser programador` (
  `ID` int(11) NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `Comentario` varchar(3000) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `ID` int(11) NOT NULL,
  `Tema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`ID`, `Tema`) VALUES
(1, 'Porque la milanesa de carne es mejor que la de pollo'),
(2, 'Razones por la que no ser programador'),
(3, 'Discusion sobre la programacion de Pagina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discusion: milanesa de carne vs milanesa de pollo`
--
ALTER TABLE `discusion: milanesa de carne vs milanesa de pollo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `discusion: programacion de paginas`
--
ALTER TABLE `discusion: programacion de paginas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `discusion: sobre ser programador`
--
ALTER TABLE `discusion: sobre ser programador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discusion: milanesa de carne vs milanesa de pollo`
--
ALTER TABLE `discusion: milanesa de carne vs milanesa de pollo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discusion: programacion de paginas`
--
ALTER TABLE `discusion: programacion de paginas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discusion: sobre ser programador`
--
ALTER TABLE `discusion: sobre ser programador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
