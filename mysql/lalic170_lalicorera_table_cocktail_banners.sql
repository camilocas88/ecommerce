
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocktail_banners`
--

CREATE TABLE `cocktail_banners` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `alt` varchar(200) NOT NULL,
  `target` varchar(50) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cocktail_banners`
--

INSERT INTO `cocktail_banners` (`id`, `url`, `alt`, `target`, `pos`, `active`) VALUES
(1, 'http://www.lalicorera.com/productos/vodka', 'alt coctel banner 1', '', 2, 1),
(2, 'http://www.lalicorera.com/blog', 'alt coctel banner 2', '_blank', 2, 0),
(3, 'http://www.lalicorera.com/cocteles', 'Receta de cocteles con amigos', '', 3, 1),
(4, 'http://www.lalicorera.com/cocteles/sex-on-the-beach', 'Recetas de cocteles y licor a domicilio', '_blank', 4, 1),
(5, 'http://https://www.lalicorera.com/cocteles', 'LICOR A DOMICILIO BOGOTA', '', 1, 1);
