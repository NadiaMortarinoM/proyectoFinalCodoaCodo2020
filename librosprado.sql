-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2020 a las 15:58:22
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreriaprado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `librosprado`
--

CREATE TABLE `librosprado` (
  `id_Libro` int(50) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Editorial` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `librosprado`
--

INSERT INTO `librosprado` (`id_Libro`, `Titulo`, `Autor`, `Editorial`, `ISBN`) VALUES
(1, 'La Momia', 'Anne Rice', 'S.A. EDICIONES B', '9788466617772'),
(2, 'El jardin de los venenos', 'Cristina Bajo', 'Sudamericana', '9500726548'),
(3, 'Las horas mas oscuras', 'Anthony McCarten', 'Planeta pub corp', '9786077474746'),
(4, 'Dracula', 'Bram Stoker', 'Granica', '9788415618836'),
(5, 'La hojarasca', 'Gabriel Garcia Marquez', 'Sudamericana', '9789500700870'),
(6, 'Mujeres del Alma Mia', 'Isabel Allende', 'Sudamericana', '9789500764896');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `librosprado`
--
ALTER TABLE `librosprado`
  ADD PRIMARY KEY (`id_Libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `librosprado`
--
ALTER TABLE `librosprado`
  MODIFY `id_Libro` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
