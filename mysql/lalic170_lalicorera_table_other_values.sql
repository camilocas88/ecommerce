
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other_values`
--

CREATE TABLE `other_values` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` float NOT NULL,
  `text_content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `other_values`
--

INSERT INTO `other_values` (`id`, `name`, `value`, `text_content`) VALUES
(1, 'delivery', 5000, ''),
(2, 'top-for-free', 100000, ''),
(4, 'min-price', 25000, ''),
(5, 'open-store', 1, ''),
(6, 'dollar', 2700, ''),
(7, 'national_delivery', 25000, ''),
(8, 'delivery_time', 1, '30 minutos');
