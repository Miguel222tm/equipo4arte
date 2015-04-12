-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2015 a las 04:32:25
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `arteycultura4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `nombreObra` varchar(100) NOT NULL,
  `fechaObra` varchar(30) NOT NULL,
  `linkObra` varchar(200) NOT NULL,
  `tecnica` varchar(60) NOT NULL,
  `soporte` varchar(60) NOT NULL,
  `corriente` varchar(60) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `nombreAlumno` varchar(80) NOT NULL,
  `idObra` int(10) NOT NULL AUTO_INCREMENT,
  `confirmado` int(2) NOT NULL,
  `codigo` varchar(60) NOT NULL,
  PRIMARY KEY (`idObra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`nombreObra`, `fechaObra`, `linkObra`, `tecnica`, `soporte`, `corriente`, `descripcion`, `matricula`, `nombreAlumno`, `idObra`, `confirmado`, `codigo`) VALUES
('arrow', '1902', 'uploads/A00515783arrow_ltr.png', 'edd', 'pí', 'lel', 'D:', 'A00515783', 'miguel treviño', 1, 0, ''),
('arrow', '1902', 'uploads/A00515783arrow_ltr.png', 'edd', 'pí', 'lel', 'D:', 'A00515783', 'miguel treviño', 2, 0, ''),
('jojiji', 'jiji', 'uploads/A0051578315386_935994149778623_6271361871767276115_n.jpg', 'iij', 'jiji', 'jiji', 'jiji', 'A00515783', ' xd', 3, 0, 'BMmjc3nPJas5OPVzwfEes9'),
('jojiji', 'jiji', 'uploads/A005157836ZpTsny68TqAhIQjrAaLKJ15386_935994149778623_6271361871767276115_n.jpg', 'iij', 'jiji', 'jiji', 'jiji', 'A00515783', ' xd', 4, 0, 'eTLQnbCarASpMADNe9u19K'),
('jojiji', 'jiji', 'uploads/A005157830HeOeVHYGlnDJpnZd6hKsT15386_935994149778623_6271361871767276115_n.jpg', 'iij', 'jiji', 'jiji', 'jiji', 'A00515783', ' xd', 5, 0, 'cakJIW96WhLYqVxOj4iAas'),
('huevo', '1092', 'uploads/A00515783lSALRAnmpk4G5lvHtl1RHx13506_800393836715122_8958732761683053984_n.jpg', '44499', '4444', '489489898', '2939939', 'A00515783', 'miguel treviño', 6, 1, 's8kEb1tU0sH1iV8cTolb8j'),
('dd', 'dd', 'uploads/A00515783sbRG1UqXaBF6tWVA1b3nr214387_1559355354323789_8091225919318469477_n.jpg', 'ijij', 'jiji', 'iji', 'iji', 'A00515783', 'xd', 7, 1, 'oXMHMhGVzPcUByWndV0xfW');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
