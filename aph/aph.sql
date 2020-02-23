
--
-- Base de datos: `aph`
--

CREATE DATABASE aph;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE `residentes` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apartamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`id`, `identificacion`, `nombre`, `apartamento`) VALUES
(3, '003', 'Mariana', '303'),
(4, '002', 'Fulanito', '202'),
(5, '001', 'Esperanza', '101');

--
-- Estructura de tabla para la tabla `trabajadores`
--

 CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `identificacion`, `nombre`, `cargo`) VALUES
(3, '003', 'Mariana', '303'),
(4, '002', 'Fulanito', '202'),
(5, '001', 'Esperanza', '101');

--
-- Estructura de tabla para la tabla `alquiler`
--

 CREATE TABLE `alquiler` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id`, `identificacion`, `nombre`, `cargo`) VALUES
(3, '003', 'Mariana', '303'),
(4, '002', 'Fulanito', '202'),
(5, '001', 'Esperanza', '101');

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `identificacion`, `nombre`, `cargo`) VALUES
(3, '003', 'Mariana', '303'),
(4, '002', 'Fulanito', '202'),
(5, '001', 'Esperanza', '101');

--
-- Estructura de tabla para la tabla `usuario`
--

 CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indices de la tabla `residentes`
--

ALTER TABLE `residentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--

ALTER TABLE 'trabajadores'
  ADD PRIMARY KEY ('id');

--
-- Indices de la tabla `alquiler`
--

ALTER TABLE 'alquiler'
  ADD PRIMARY KEY ('id');

--
-- Indices de la tabla `mascotas`
--

ALTER TABLE 'mascotas'
  ADD PRIMARY KEY ('id');

--
-- Indices de la tabla `usuario`
--

ALTER TABLE 'usuario'
  ADD PRIMARY KEY ('id');




--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `residente`
--

ALTER TABLE `residentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--

ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
