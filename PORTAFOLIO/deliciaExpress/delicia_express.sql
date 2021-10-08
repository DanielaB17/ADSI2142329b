-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2021 a las 18:28:26
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delicia_express`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `IdAdministrador` int(100) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`IdAdministrador`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`) VALUES
(2, 'Jhon', 'Cortes', 'admin1@deliciaexpress.com', 'e00cf25ad42683b3df678c61f42c6bda'),
(3, 'Daniela', 'Benitez', 'admin2@deliciaexpress.com', 'c84258e9c39059a89ab77d846ddab909'),
(1, 'Juan', 'Doncel', 'admin@deliciaexpress.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdClientes` int(50) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdClientes`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`) VALUES
(1, 'Helen Daniela', 'Benitez Hipolito', 'hedabehi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocineros`
--

CREATE TABLE `cocineros` (
  `IdEmpleados` int(11) NOT NULL,
  `IdCocineros` int(20) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `NombreEps` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cocineros`
--

INSERT INTO `cocineros` (`IdEmpleados`, `IdCocineros`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`, `NombreEps`) VALUES
(0, 1, 'Jhon Alexander', 'Cortes Pedraza', 'jhon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Famisanar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliarios`
--

CREATE TABLE `domiciliarios` (
  `IdDomiciliarios` int(20) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `NombreEps` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domiciliarios`
--

INSERT INTO `domiciliarios` (`IdDomiciliarios`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`, `NombreEps`) VALUES
(1, 'Juan Pablo', 'Doncel Gutierrez', 'juanp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Sanitas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `IdUsuarios` int(20) NOT NULL,
  `IdEmpleados` int(20) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `NombreEps` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IdUsuarios`, `IdEmpleados`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`, `NombreEps`, `cargo`) VALUES
(0, 2, 'Jhon Alexander', 'Cortes Pedraza', 'jhon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Famisanar', 'cocinero'),
(0, 1, 'Juan Pablo', 'Doncel Gutierrez', 'juanp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Sanitas', 'domiciliario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descricpion` mediumtext NOT NULL,
  `Precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Descricpion`, `Precio`) VALUES
(1, 'Hamburguesa Tradicional', '150 grs de carne de la\r\ncasa,queso mozzarella,\r\ncebolla encurtida,\r\ntomate, lechuga, pan de la abuela.', '6000'),
(2, 'Hamburguesa Especial', '150 grs de carne de la\r\ncasa,tocineta,\r\njamon ahumado,queso\r\nmozzarella, cebolla encurtida,\r\ntomate, lechuga, pan de la abuela.', '10000'),
(3, 'Hamburguesa Criolla', '150 grs de carne de la\r\ncasa,maiz tierno,\r\npatacones,huevo frito,\r\nqueso mozzarella,cebolla encurtida,tomate, lechuga, pan de la abuela.', '13000'),
(4, 'Hamburguesa Parrillera', '150 grs de carne de la\r\ncasa,tocineta,\r\nfilete de pechuga,lomo\r\nde cerdo,queso chedar,cebolla encurtida, tomate, lechuga, pan de la abuela.', '22000'),
(5, 'Hamburguesa Pollo Champiñon', '150 grs de carne de la\r\ncasa, pollo desmechado,\r\nchampiñon, tocineta,\r\nsalsa de la casa, queso mozzarella, cebolla encurtida, tomate, lechuga, pan de la abuela.', '14000'),
(6, 'Hamburguesa Mexicana', '150 grs de carne de la\r\ncasa, tocineta, guacamole\r\nfrijol re frito, pico de\r\ngallo, jalapeños, nachos, queso mozzarella, tomate, lechuga, pan de la abuela.', '13000'),
(7, 'Hamburguesa Ranchera', '150 grs de carne de la\r\ncasa, maiz tierno,\r\ntocineta, chorizo,\r\nchicharron, cebolla encurtida, tomate, lechuga, pan de la abuela.', '13000'),
(8, 'Hamburguesa Doble Carne', '300 grs de carne de la\r\ncasa, doble jamón\r\nahumado, doble tocineta,\r\ncebolla encurtida encurtida, tomate, lechuga, pan de la abuela.', '17000'),
(9, 'Hamburguesa Todo terreno', '150 grs de carne de la\r\ncasa, aros de cebolla,\r\npepinillos, tocineta,\r\nhuevo frito, tomate, lechuga, pan de la abuela.', '16000'),
(10, 'Pizza Burguer', '150 grs de carne de la\r\ncasa, papa a la francesa,\r\njamón ahumado, queso\r\nmozzarella, tocineta, cebolla encurtida, tomate, lechuga, pan de la abuela.\r\n(hawaiana,ranchera,mexicana,pollo champiñon, criolla)', '20000'),
(11, 'Hamburguesa Suculenta', 'Carne de la casa, filete de res, filete de pechuga, chorizo, 3 porciones de papa\r\na la francesa, tocineta, jamón ahumado, queso mozzarella, cebolla encurtida,\r\ntomate, lechuga, pan de la abuela, gasesosa 1.5 lts.', '45000'),
(12, 'Perro caliente tradicional', 'Salchicha Zenu, queso\r\nmozzarella, papa chip,\r\ncebolla caramelizada,\r\nhuevo de codorniz, pan de la abuela.', '6000'),
(13, 'Perro caliente especial', 'Salchicha Zenu, tocineta,\r\njamón ahumado, papa\r\nchip, queso mozzarella,\r\nhuevo de codorniz, cebolla caramelizada, pan de la abuela.', '9000'),
(14, 'Perro caliente criollo', 'Salchicha Zenu, huevo\r\nfrito, maiz tierno,\r\npatacones, queso\r\nmozzarella, huevo de codorniz, cebolla caramelizada, pan de la abuela.', '11000'),
(15, 'Perro caliente ranchero', 'Salchicha Zenu, tocineta,\r\nchicharron, maiz tierno,\r\nchorizo, queso\r\nmozzarella, cebolla caramelizada, huevo de codorniz, pan de la abuela.', '11000'),
(16, 'Perro caliente pollo champiñon', 'Salchicha Zenu, pollo\r\ndesmechado, champiñon,\r\nsalsa de la casa, tocineta\r\nqueso mozzarella, cebolla caramelizada, huevo de codorniz, pan de la abuela.', '11000'),
(17, 'Perro caliente mexicano', 'Salchicha Zenu,\r\nguacamole, pico de gallo,\r\nnachos, jalapeños, queso\r\nmozzarella, huevo de codorniz, pan de la abuela.', '11000'),
(18, 'Perro caliente poderoso', 'Salchicha Zenu, costillas BBQ, tocineta, jamón ahumado, queso mozzarella,\r\nhuevo de codorniz, cebolla caramelizada, tres porciones de papa a la francesa,\r\npan de la abuela, gaseosa 1.5 lts.', '45000'),
(19, 'Pizza Hawaiana', 'Piña, jamón, bocadillo,\r\nqueso.', '20000'),
(20, 'Pizza pollo champiñon', 'Pollo desmechado,\r\nchampiñon, queso,\r\noregano.', '20000'),
(21, 'Pizza de carnes', 'Cabano, salami, tocineta,\r\nqueso, salsa de la casa.', '20000'),
(22, 'Pizza criolla', 'Pollo, carne, maiz tierno,\r\nhogao, platano maduro,\r\ncilantro.', '20000'),
(23, 'Pizza pollo BBQ', 'Pollo salteado a la BBQ,\r\ntocineta, cebolla\r\ncaramelizada, queso.', '20000'),
(24, 'Pizza ranchera', 'Carne desmechada,\r\nchorizo, chicharron,\r\ncebolla caramelizada,\r\nqueso, salsa BBQ.', '20000'),
(25, 'Pizza de la casa', 'carne desmechada, pollo desmechado, tocineta, salami , salsa de la casa, queso.', '20000'),
(26, 'Mazorcada', 'Maiz tierno, carne desmechada, pollo desmechado, papa chip, queso\r\nmozzarella, huevo de codorniz.\r\n2 ingredientes\r\n*Chorizo *Jalapeños *Tocineta\r\n*Chicharron *Jamón ahumado', '12000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `IdRestaurante` int(100) NOT NULL,
  `NombresDue` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NumeroDue` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `TipoPersona` varchar(100) NOT NULL,
  `NIT` varchar(100) NOT NULL,
  `NomRes` varchar(100) NOT NULL,
  `CelularRes` varchar(100) NOT NULL,
  `Barrio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`IdRestaurante`, `NombresDue`, `Email`, `NumeroDue`, `Contrasena`, `TipoPersona`, `NIT`, `NomRes`, `CelularRes`, `Barrio`) VALUES
(1, 'karen', 'karen@gmail.com', '3124567858', '827ccb0eea8a706c4c34a16891f84e7b', 'Natural', '25745245245', 'Stereo Pizza', '3124587587', 'San Mateo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuarios` int(20) NOT NULL,
  `NombreUsuario` varchar(50) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuarios`, `NombreUsuario`, `Apellido`, `Email`, `Contrasena`, `rol`) VALUES
(6, 'Jhon', 'Cortes', 'admin1@deliciaexpress.com', 'e00cf25ad42683b3df678c61f42c6bda', 'administrador'),
(7, 'Daniela', 'Benitez', 'admin2@deliciaexpress.com', 'c84258e9c39059a89ab77d846ddab909', 'administrador'),
(5, 'Juan', 'Doncel', 'admin@deliciaexpress.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador'),
(1, 'Helen Daniela', 'Benitez Hipolito', 'hedabehi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'cliente'),
(3, 'Jhon Alexander', 'Cortes Pedraza', 'jhon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'cocinero'),
(2, 'Juan Pablo', 'Doncel Gutierrez', 'juanp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'domiciliario'),
(4, 'karen', '', 'karen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'restaurante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdAdministrador` (`IdAdministrador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdClientes` (`IdClientes`);

--
-- Indices de la tabla `cocineros`
--
ALTER TABLE `cocineros`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdCocineros` (`IdCocineros`);

--
-- Indices de la tabla `domiciliarios`
--
ALTER TABLE `domiciliarios`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdDomiciliarios` (`IdDomiciliarios`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdEmpleados` (`IdEmpleados`),
  ADD KEY `IdUsuarios` (`IdUsuarios`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`IdRestaurante`,`Email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `IdUsuarios` (`IdUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `IdAdministrador` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdClientes` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cocineros`
--
ALTER TABLE `cocineros`
  MODIFY `IdCocineros` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `domiciliarios`
--
ALTER TABLE `domiciliarios`
  MODIFY `IdDomiciliarios` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `IdEmpleados` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `IdRestaurante` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuarios` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
