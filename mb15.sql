-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2015 a las 17:15:35
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mb15`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'fecha del artículo',
  `titulo` varchar(250) NOT NULL DEFAULT 'Sin titulo' COMMENT 'título del articulo',
  `id_usuario` int(11) NOT NULL,
  `contenido` text NOT NULL COMMENT 'descripción del articulo',
  `url_foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `fecha`, `titulo`, `id_usuario`, `contenido`, `url_foto`) VALUES
(8, '2015-03-16 16:15:35', 'Nuevo articulo sobre peces', 3, '				  						  						  						  		Los peces (con nombre cientÃ­fico Pisces) son animales vertebrados acuÃ¡ticos, generalmente ectotÃ©rmicos,(regulan su temperatura a partir del medio ambiente) la mayorÃ­a de ellos recubiertos por escamas, y dotados de aletas, que permiten su movimiento continuo en los medios acuÃ¡ticos, y branquias, con las que captan el oxÃ­geno disuelto en el agua. Pisces es una superclase siendo un grupo parafilÃ©tico.\r\n\r\nLos peces son abundantes tanto en agua salada como en agua dulce, pudiÃ©ndose encontrar especies desde los arroyos de montaÃ±a (por ejemplo, el gobio), asÃ­ como en lo mÃ¡s profundo del ocÃ©ano (por ejemplo, anguilas tragonas).\r\n\r\nLos alimentos preparados con pescado son una importante fuente de nutriciÃ³n para los seres humanos. Pueden ser pescados a partir de ejemplares silvestres, o criados de manera similar al ganado (vÃ©ase acuicultura). Hoy en dÃ­a la llamada pesca deportiva cada 			  					  					  					  					  	', 'uploads/Chrysanthemum.jpg'),
(9, '2015-03-16 16:17:15', 'PHP un lenguaje anarkiko', 1, 'bla vla bla bla ....', ''),
(13, '2015-03-26 09:12:09', 'Billabong xxl ', 1, 'bla vla bla bla ....', ''),
(14, '2015-03-26 09:14:18', 'Nuevo articulo333', 1, 'bla vla bla bla ....', ''),
(17, '2015-03-26 09:32:27', 'sssseeeerrr', 1, 'bla vla bla bla ....', ''),
(18, '2015-03-26 09:33:41', 'Java mola mucho', 3, 'bla vla bla bla ....', ''),
(19, '2015-03-26 09:38:32', 'Recien creado', 1, 'bla vla bla bla ....', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `rol` int(1) NOT NULL DEFAULT '1' COMMENT '0=Administrador  1=usuario',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `nombre`, `rol`) VALUES
(1, 'auraga@ipartek.com', '123456', 'Ander', 0),
(2, 'tu@email.com', '123456', 'dummy', 1),
(3, 'agerbat@gmail.com', '123456', 'Ager12', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_necesita_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
