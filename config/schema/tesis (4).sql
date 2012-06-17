-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2012 a las 17:45:50
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `nombre`, `ubicacion`, `mision`, `vision`, `faculty_id`, `video1`, `video2`) VALUES
(1, 'Lic. en Educacion Basica con Enfasis Humanidades - Ingles', 'bloque 33 3er piso tercera puerta a la izquierda oficina del fondo', 'La misión de la Licenciatura en Educación Básica con énfasis en Humanidades -Inglés, es servir de medio al sistema educativo Colombiano para dar cumplimiento a la Ley General de Educación Ley 115 de 1994, en sus Artículos 21, 22 y 23. La misión implica entonces responder a la creciente demanda de docentes de Inglés para el Departamento de Córdoba y la Región, con calidad en el manejo de la competencia pedagógica, axiológicas investigativa y socio-cultural en la enseñanza de una segunda lengua.', 'La Licenciatura en Educación Básica con énfasis en Humanidades -Inglés aportará al sistema educativo, un licenciado estructurado y competitivo en lo académico, pedagógico e investigativo y con un sistema de valores que le permita interpretar y transformar su propia realidad en la búsqueda de un desarrollo humano integrado y sostenible', 2, 'http://www.youtube.com/embed/Om9rp1gJgL4', 'http://www.youtube.com/embed/L0arzOIc2xw'),
(2, 'Lic. en Informatica y Medios Audiovisuales', 'bloque 33 2do piso oficina de fondo  ', 'El programa de Licenciatura en Informática y Medios Audiovisuales, tiene como misión la formación integral de profesionales de la Educación que ejerzan el liderazgo, en el proceso de desarrollo científico, tecnológico para alcanzar en la educación altos niveles de calidad, mediante la apropiación con sentido crítico de la interactividad, virtualidad y conectividad, atributos de los materiales y medios informáticos y de comunicación audiovisual de manera que se promuevan las TIC''s (Tecnologías de la Información y la Comunicación) en los campos educativo e investigativo a nivel local, regional y nacional con proyección Internacional.', 'El talento humano formado en la Licenciatura En informática y Medios Audiovisuales, en las dimensiones, ética pedagógica, científica y tecnológica, será el soporte de los paradigmas cambiantes en Educación y Cultural en una sociedad que busca alcanzar el desarrollo humano, la equidad y la competitividad, al enseñar la informática y la computación como objetos y herramientas de ampliación de capacidades humanas y utilizar los Medios Audiovisuales como soportes o apoyo de la administración curricular en los ambientes de aprendizaje.\r\n\r\n El modelo de formación docente con enfoque curricular interdisciplinario contribuirá a su desempeño como analista, asesor y forjador creativo comprometido con el futuro de los entornos educativos colombianos.', 2, 'http://www.youtube.com/embed/Om9rp1gJgL4', 'http://www.youtube.com/embed/L0arzOIc2xw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependences`
--

CREATE TABLE IF NOT EXISTS `dependences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `funcion` text NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dependences`
--

INSERT INTO `dependences` (`id`, `nombre`, `ubicacion`, `funcion`, `video1`, `video2`) VALUES
(1, 'Oficina Plan padrino', 'detras del auditorio cultural diagonal edificio administrativo ', 'Liderar la consecución de los recursos económicos para cubrir los gastos de estudios como son: matricula, transporte y fotocopias de los estudiantes de estratos 1 y 2 de la población estudiantil de la Universidad de Córdoba que permitan el sostenimiento integral de sus estudios en la perspectiva de la excelencia académica de la institución, contribuyendo al desarrollo social, económico y cultural de la región.', 'http://www.youtube.com/embed/JNOrCNBgBDI', 'http://www.youtube.com/embed/3WS7zMwKeZg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `decano` varchar(255) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `faculties`
--

INSERT INTO `faculties` (`id`, `nombre`, `ubicacion`, `decano`, `mision`, `vision`, `video1`, `video2`) VALUES
(1, 'FACULTAD DE EDUCACION Y CIENCIAS HUMANAS', 'bloque 35, 2do piso tercera puerta a la izquierda  ', 'GILMAR SANTAFE PATIÑO', 'Formar profesionales integrales para que lideren el desarrollo de la región mediante procesos de generación, comunicación, transformación y aplicación del conocimiento de las ciencias puras y aplicadas, planteando soluciones a los problemas sociales, científicos, culturales, productivos y ambientales del entorno nacional e internacional', 'La Facultad de Ciencias Básicas de la Universidad de Córdoba será reconocida por su liderazgo en la investigación y desarrollo de las ciencias puras y aplicadas; por su aporte al desarrollo de la región y por estar acreditada nacional e internacionalmente.', 'http://www.youtube.com/embed/YuL9Oi2oZW0', 'http://www.youtube.com/embed/RtabO2cxU1A'),
(2, 'Educación y Ciencias Humanas  ', 'bloque 33, 2do piso segunda puerta a la izquierda  ', 'Nohemy Carracal Torres', 'Es la formación integral de profesionales de la educación comprometidos con el desarrollo educativo, espiritual, económico, social y ambiental de la comunidad regional y nacional, como sujetos y agentes creativos para el cambio, contando para ello con recurso humano calificado, tecnología adecuada, promoviendo la investigación en la actividad académica mediante programas presénciales, semipresenciales y a distancia en los niveles de pregrado y postgrado.\r\n', 'La Facultad de Educación Y Ciencias Humanas ofrece programas de pregrado y postgrado en diferentes modalidades de atención y áreas del conocimiento, cursos de formación pedagógica para docentes, profesionales no licenciados y educación no formal e informal en distintas subsedes del departamento de Córdoba, mediante la práctica profesional, la investigación, la consultaría y la venta de servicios, contando para ello con un cuerpo docente integrado hasta en un 80 % pro profesores de tiempo completo, especializados en su saber especifico, con titulo de Maestría y Doctorado', 'http://www.youtube.com/embed/Om9rp1gJgL4', 'http://www.youtube.com/embed/L0arzOIc2xw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratories`
--

CREATE TABLE IF NOT EXISTS `laboratories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `video1` varchar(255) NOT NULL,
  `video2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cedula`, `nombres`, `apellidos`, `email`, `username`, `password`) VALUES
(1, '1067883707', 'Eduardo', 'Aguirre', 'eduardo_8906@hotmail.com', 'ed000', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
