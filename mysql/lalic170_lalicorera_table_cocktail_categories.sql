
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocktail_categories`
--

CREATE TABLE `cocktail_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cocktail_categories`
--

INSERT INTO `cocktail_categories` (`id`, `name`, `pos`, `active`) VALUES
(7, 'Fuertes', 3, 1),
(8, 'Refrescantes', 4, 1),
(9, 'Infaltables', 5, 1),
(6, 'RomÃ¡nticos', 2, 1),
(10, 'Shots', 6, 1),
(11, 'Destapa y Disfruta', 1, 1);
