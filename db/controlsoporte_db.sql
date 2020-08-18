-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2020 a las 13:12:23
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlsoporte_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(100) NOT NULL,
  `nom_area` varchar(100) NOT NULL,
  `desc_area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nom_area`, `desc_area`) VALUES
(1, 'Contabilidad', 'Contadores de la empresa'),
(3, 'Oficina de Tecnologia y Comunicaciones', 'Oficina de informatica'),
(4, 'Of. de Recursos Humanas', 'Recursos Humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asig` int(100) NOT NULL,
  `fecha_asig` date NOT NULL,
  `cantidad_asig` int(100) NOT NULL,
  `ubicacion_asig` varchar(100) NOT NULL,
  `responsable_asig` varchar(100) NOT NULL,
  `id_equipo` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asig`, `fecha_asig`, `cantidad_asig`, `ubicacion_asig`, `responsable_asig`, `id_equipo`, `id_emp`) VALUES
(1, '2020-02-12', 1, '1', '4', 1, 2),
(1, '2020-02-12', 1, '1', '4', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(100) NOT NULL,
  `nom_cargo` varchar(100) NOT NULL,
  `desc_cargo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nom_cargo`, `desc_cargo`) VALUES
(1, 'Practicante', 'Recien egresados de la U'),
(2, 'Tercero', 'Contratado por externo'),
(3, 'Tecnico de Redes y Comunicaciones', 'area de soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(100) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `desc_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `desc_categoria`) VALUES
(1, 'Desktop', 'Equipos de Escritorio'),
(2, 'Laptop', 'Equipos portatiles'),
(3, 'Mouse', 'Mouse para pc'),
(4, 'Impresora', 'Equipos de impresion'),
(5, 'Teclado', 'Teclado'),
(6, 'Monitor', 'Pantalla de PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dominio`
--

CREATE TABLE `dominio` (
  `id_dominio` int(100) NOT NULL,
  `nom_dominio` varchar(50) NOT NULL,
  `ip_dominio` varchar(15) NOT NULL,
  `mac_dominio` varchar(20) NOT NULL,
  `id_gerencia` int(100) NOT NULL,
  `id_cargo` int(100) NOT NULL,
  `id_equipo` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(100) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `ape_emp` varchar(40) NOT NULL,
  `estado_emp` int(10) NOT NULL,
  `id_cargo` int(100) NOT NULL,
  `id_area` int(100) NOT NULL,
  `id_gerencia` int(100) NOT NULL,
  `id_sede` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `nom_emp`, `ape_emp`, `estado_emp`, `id_cargo`, `id_area`, `id_gerencia`, `id_sede`) VALUES
(2, 'Franz', 'Cruz Ucharico', 1, 1, 3, 1, 1),
(3, 'Daniel', 'Ticona chura', 1, 1, 3, 1, 1),
(4, 'Elizabeth', 'Quispe Chambilla', 1, 1, 3, 1, 1),
(5, 'Jose Luis', 'Parihuana', 1, 3, 3, 1, 1),
(6, 'Jose Richard', 'Torres Quispe', 1, 1, 1, 0, 0),
(7, 'feliz tea', 'mamani carpio', 1, 1, 1, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(100) NOT NULL,
  `serie_equipo` varchar(20) NOT NULL,
  `marca_equipo` varchar(20) NOT NULL,
  `modelo_equipo` varchar(50) NOT NULL,
  `af_equipo` varchar(20) NOT NULL,
  `af2_equipo` varchar(20) NOT NULL,
  `descripcion_equipo` varchar(100) NOT NULL,
  `estado_equipo` varchar(15) NOT NULL,
  `cantidad_equipo` int(100) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_presentacion` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `serie_equipo`, `marca_equipo`, `modelo_equipo`, `af_equipo`, `af2_equipo`, `descripcion_equipo`, `estado_equipo`, `cantidad_equipo`, `id_categoria`, `id_presentacion`) VALUES
(1, '12234556', 'HP', 'XT-1212', 'AF 232323', '', 'Laptop HP ProBook', '1', 0, 2, 2),
(2, 'MJL1234', 'LENOVO', 'TX-1212', 'AF122345', '', 'Probook', '1', 1, 1, 1),
(3, 'AFVGRTYH', 'HP', '', 'AF 120012', '', 'Mouse Optico', '1', 0, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencia`
--

CREATE TABLE `gerencia` (
  `id_gerencia` int(100) NOT NULL,
  `nom_gerencia` varchar(100) NOT NULL,
  `desc_gerencia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerencia`
--

INSERT INTO `gerencia` (`id_gerencia`, `nom_gerencia`, `desc_gerencia`) VALUES
(1, 'Gerencia General', 'Gerencia principal de la empresa'),
(3, 'Gerencia Comercial', 'Gerencia comercial'),
(4, 'Gerencia de Operaciones', 'Gerencia de operaciones en sede Para');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `id_move` int(100) NOT NULL,
  `fecha_move` date NOT NULL,
  `origen_destino` int(100) NOT NULL,
  `destino_move` int(100) NOT NULL,
  `observacion_move` varchar(200) NOT NULL,
  `id_equipo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `id_presentacion` int(100) NOT NULL,
  `nom_presentacion` varchar(50) NOT NULL,
  `desc_presentacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`id_presentacion`, `nom_presentacion`, `desc_presentacion`) VALUES
(1, 'Sonda 2018', 'Equupos de Sonda 2018'),
(2, 'Propios', 'Equipos propios de la empresa'),
(3, 'Corte Ingles', 'Contrato Corte Ingles'),
(4, 'Sonda 2016', 'Equipos Sonda 2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(100) NOT NULL,
  `nom_sede` varchar(100) NOT NULL,
  `desc_sede` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nom_sede`, `desc_sede`) VALUES
(1, '28 de Julio', 'Sede principal'),
(3, 'Sede Av. Leguia', 'Donde se ubica la gerencia comercial'),
(4, 'Sede Para Av. Ejercito', 'Ubicada en Para Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(100) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `pass_user` varchar(100) NOT NULL,
  `estado_user` varchar(20) NOT NULL,
  `tipo_user` varchar(20) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nom_user`, `pass_user`, `estado_user`, `tipo_user`, `id_emp`) VALUES
(1, 'predes', 'admin', 'activo', 'administrador', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `dominio`
--
ALTER TABLE `dominio`
  ADD PRIMARY KEY (`id_dominio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  ADD PRIMARY KEY (`id_gerencia`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`id_presentacion`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dominio`
--
ALTER TABLE `dominio`
  MODIFY `id_dominio` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  MODIFY `id_gerencia` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `id_presentacion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
