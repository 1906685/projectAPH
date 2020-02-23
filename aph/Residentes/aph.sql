
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `residentes`
--
ALTER TABLE `residentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `residente`
--
ALTER TABLE `residentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
