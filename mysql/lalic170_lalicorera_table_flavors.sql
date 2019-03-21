
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flavors`
--

CREATE TABLE `flavors` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flavors`
--

INSERT INTO `flavors` (`id`, `product_id`, `pos`, `active`) VALUES
(8, 76, 1, 0),
(9, 3, 2, 1),
(10, 68, 3, 1),
(11, 4, 4, 1),
(12, 67, 5, 1),
(13, 78, 6, 1),
(14, 412, 1, 1),
(15, 545, 1, 1);
