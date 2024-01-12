-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 08:59:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`titulo`, `subtitulo`, `enlace`) VALUES
('The Office: Dwight renuncia a la Matrix en el final censurado', 'Este final nunca antes visto de The Office, que involucra a la película Matrix y a Dwight, es lo mejor que podrás ver para recordar la serie.', 'https://www.rockandpop.cl/2021/01/matrix-the-office/'),
('«The Office» fue la serie más vista en los servicios de streaming en 2020', 'Con más de 57 mil millones de minutos reproducidos, la popular comedia superó con creces los minutos reproducidos de los hits más recientes.', 'https://www.futuro.cl/2021/01/the-office-fue-la-serie-mas-vista-en-los-servicios-de-streaming-en-2020/'),
('“THE OFFICE”: JOHN KRASINSKI SE REUNIRÁ CON STEVE CARELL EN NUEVA COMEDIA', 'La dupla de la serie de comedia participará en nueva película llamada \"IF\", junto a Ryan Reynolds y Phoebe Waller-Bridge, a estrenar en 2023', 'https://los40.cl/2022/the-office-john-krasinski-se-reunira-con-steve-carell-en-nueva-comedia-105219.html');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
