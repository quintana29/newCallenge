-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2022 a las 06:37:34
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `challenge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2'),
(3, 'Categoria 3'),
(4, 'Categoria 4'),
(5, 'Categoria 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `documento` float NOT NULL,
  `nombres` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `premio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `id` int(10) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `op1` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `op2` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `op3` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `op4` varchar(2000) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`id`, `idPregunta`, `idCategoria`, `op1`, `op2`, `op3`, `op4`) VALUES
(1, 1, 1, 'a-Paradigma de programación que facilita la reutilización y mantenimiento del código.', 'b-Iteración de una secuencia de instrucciones.', 'c-Paradigma donde la ejecución se lee de forma estructurada.', 'd-Ninguna de las anteriores.'),
(2, 2, 1, 'a-Espacio de almacenamiento dentro de la memoria del computador.', 'b-Valor numérico', 'c-Palabra reservada var.', 'd-Instanciar la clase.'),
(3, 3, 1, 'a-Invocar la función cost.', 'b-Invocar el constructor de la clase.', 'c-Genera un numero aleatorio..', 'd-Heredar parámetros a una subclase.'),
(4, 4, 1, 'a-Centrar texto.', 'b-Hacer un comentario al documento HTML', 'c-Mostrar un título.', 'd-Almacenar la dirección de una imagen'),
(5, 5, 1, 'a-Sistema manejador de bases de datos.', 'b-Sistema migrado de bases de datos..', 'c-a y b son correctas.', 'd-Ninguna de las anteriores'),
(6, 1, 2, 'a-1878.', 'b-1912.', 'c-1995.', 'd-2000.'),
(7, 2, 2, 'a-Cascading Style Sheets.', 'b-Hoja estilo de estructura.', 'c-Cascading Style sale.', 'd-Todas las anteriores.'),
(8, 3, 2, 'a-Conjunto de instrucciones para comunicar al programador con la máquina.', 'b-Símbolos para alcanzar objetivos.', 'c-Almacenar información en variables.', 'd-Palabras claves sin sintaxis.'),
(9, 4, 2, 'a-Ceros y unos ejecutados por el compilador.', 'b-Lenguaje que interpreta el programador.', 'c-Lenguaje que facilita el trabajo del programador.', 'd-Utiliza un intérprete.'),
(10, 5, 2, 'a-Lenguaje con rígido formato de instrucciones.', 'b-Lenguaje muy cercano al utilizado por los humanos.', 'c-Lenguaje que utiliza instrucciones más fáciles de entender.', 'd-Todas las anteriores.'),
(11, 1, 3, 'a-Pasar datos de una clase a otra.', 'b-Definir clases basadas en otras ya existentes.', 'c-Definir clases a partir de objetos.', 'd-Concepto de POO que utiliza la palabra DISTINCT.'),
(12, 2, 3, 'a-Base:', 'b-Super.', 'c-Abstractas. ', 'd-Extends.'),
(13, 3, 3, 'a-Se utiliza para comunicar dos clases abstractas.', 'b-Se emplea para validar los parámetros de salida de un método con retorno.', 'c-Para generar una inicialización de nuevos objetos.', 'd-Todas las anteriores.'),
(14, 4, 3, 'a-Solo el constructor vacío.', 'b-Tres métodos constructores.', 'c-Los que disponga el programador.', 'd-Todas las anteriores.'),
(15, 5, 3, 'a-Java, C# y Python.', 'b-C++, HTML, CSS', 'c-Angular, NodeJS.', 'd-SQL, PHP, JSP.'),
(16, 1, 4, 'a-Select * from empeado where id = 1', 'b-Select * from empleado', 'c-Select e.id from empleado e', 'd-Select nombre empleado where id = 2.'),
(17, 2, 4, 'a-Bases de datos estructuradas.', 'b-Bases de datos jerárquicas.', 'c-Bases de datos relacionales.', 'd-Bases de datos NoSQL.'),
(18, 3, 4, 'a-Include(‘conexión.js’).', 'b-PDO.', 'c-Conexión.', 'd-Echo ‘conectar’.'),
(19, 4, 4, 'a-Select * from empleado', 'b-Select  * from empleado where id = 1.', 'c-Select  * from empleado inner  nomina.', 'd-Ninguna de las anteriores'),
(20, 5, 4, 'a-Include(‘clase/empleado.php’).', 'b-Import * empleado.', 'c-Header.', 'd-Base:.'),
(21, 1, 5, 'a-7.', 'b-8.', 'c-4.', 'd-12.'),
(22, 2, 5, 'a-30.', 'b-15.', 'c-60.', 'd-20.'),
(23, 3, 5, 'a-Responsabilidad única.', 'b-Abierto cerrado.', 'c-Segregación de la interfaz.', 'd-Clases con múltiples responsabilidades.'),
(24, 4, 5, 'a-Convertir un valor a NULL.', 'b-Iterar datos.', 'c-Ejecutar una instrucción si se cumple la sentencia.', 'd-Todas las anteriores.'),
(25, 5, 5, 'a-Alterar la tabla película.', 'b-Alterar la tabla actor.', 'c-Crear una relación entre ambas tablas por medio de una FK.', 'd-Ninguna de las anteriores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `solucion` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `categoria`, `descripcion`, `solucion`) VALUES
(1, 1, '¿Qué es la programación orientada a objetos?', 'a'),
(1, 2, '¿En qué año se comercializo por primera vez Java?', 'c'),
(1, 3, '¿Qué es la herencia en POO?', 'b'),
(1, 4, '¿Qué tipo de sentencia SQL trae todos los registros de una tabla?', 'b'),
(1, 5, 'La siguiente operación 2 % 5 + 3 * 2 da como resultado:', 'b'),
(2, 1, '¿Una variable en programación es?', 'a'),
(2, 2, 'CSS hace referencia a:', 'a'),
(2, 3, 'Para declarar una herencia en Java se utiliza la palabra reservada:', 'd'),
(2, 4, 'CouchDB pertenece a las bases de datos:', 'd'),
(2, 5, 'La siguiente operación 10 % 5 + 30 * 2 da como resultado:', 'c'),
(3, 1, '¿Cómo se instancia una clase?', 'b'),
(3, 2, '¿Qué es un lenguaje de programación?', 'a'),
(3, 3, '¿Para que se utiliza un método constructor?', 'c'),
(3, 4, '¿Qué objeto de PHP se puede utilizar para generar una conexión a una base de datos?', 'b'),
(3, 5, '¿Cuál de los siguientes no es un principio SOLID?', 'd'),
(4, 1, '¿Qué función cumple la etiqueta <title></title>?', 'c'),
(4, 2, '¿Qué es un lenguaje maquina?', 'a'),
(4, 3, '¿Cuántos métodos constructores puede contener una clase en POO?', 'd'),
(4, 4, '¿Qué sentencia SQL trae todos los registros de una base de datos mongoDB?', 'd'),
(4, 5, 'La sentencia IF/ELSE se utiliza para:', 'c'),
(5, 1, 'Un DBMS es:', 'a'),
(5, 2, '¿Qué es un lenguaje de alto nivel?', 'b'),
(5, 3, '¿Cuáles son lenguajes de programación orientados a objetos?', 'a'),
(5, 4, '¿Qué instrucción PHP hace referencia a otra clase?', 'a'),
(5, 5, 'El siguiente comando SQL” ALTER TABLE actor ADD FOREIGN KEY (id) ', 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE `premio` (
  `id` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ronda`
--

CREATE TABLE `ronda` (
  `id` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idJugador` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `premio` (`premio`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`id`,`idPregunta`,`idCategoria`),
  ADD KEY `idPregunta` (`idPregunta`,`idCategoria`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`,`categoria`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ronda`
--
ALTER TABLE `ronda`
  ADD PRIMARY KEY (`id`,`idPregunta`,`idCategoria`,`idJugador`),
  ADD KEY `idJugador` (`idJugador`),
  ADD KEY `idPregunta` (`idPregunta`,`idCategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `premio`
--
ALTER TABLE `premio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ronda`
--
ALTER TABLE `ronda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`premio`) REFERENCES `premio` (`id`);

--
-- Filtros para la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD CONSTRAINT `opcion_ibfk_1` FOREIGN KEY (`idPregunta`,`idCategoria`) REFERENCES `pregunta` (`id`, `categoria`);

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `ronda`
--
ALTER TABLE `ronda`
  ADD CONSTRAINT `ronda_ibfk_1` FOREIGN KEY (`idJugador`) REFERENCES `jugador` (`documento`),
  ADD CONSTRAINT `ronda_ibfk_2` FOREIGN KEY (`idPregunta`,`idCategoria`) REFERENCES `pregunta` (`id`, `categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
