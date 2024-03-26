-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql305.byetcluster.com
-- Tiempo de generación: 25-03-2024 a las 15:13:56
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_35301374_youtube05`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata`
--

CREATE TABLE `userdata` (
  `screen_name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `date_joined` varchar(1000) NOT NULL,
  `login_token` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata_old`
--

CREATE TABLE `userdata_old` (
  `screen_name` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `date_joined` varchar(1000) NOT NULL,
  `login_token` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videodata`
--

CREATE TABLE `videodata` (
  `video_id` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date_added` varchar(1000) NOT NULL,
  `uploader` varchar(1000) NOT NULL,
  `file_extension` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videodata_old`
--

CREATE TABLE `videodata_old` (
  `video_id` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date_added` varchar(1000) NOT NULL,
  `uploader` varchar(1000) NOT NULL,
  `file_extension` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD UNIQUE KEY `screen_name` (`screen_name`),
  ADD UNIQUE KEY `login` (`login_token`);

--
-- Indices de la tabla `userdata_old`
--
ALTER TABLE `userdata_old`
  ADD UNIQUE KEY `screen_name` (`screen_name`),
  ADD UNIQUE KEY `login` (`login_token`);

--
-- Indices de la tabla `videodata`
--
ALTER TABLE `videodata`
  ADD UNIQUE KEY `video_id` (`video_id`);

--
-- Indices de la tabla `videodata_old`
--
ALTER TABLE `videodata_old`
  ADD UNIQUE KEY `video_id` (`video_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
