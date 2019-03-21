
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `active` smallint(6) NOT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `url`, `active`, `alt`) VALUES
(2, 'http://www.lalicorera.com/productos/cerveza/corona-12-unidades', 0, 'Cerveza Corona a Domicilio'),
(4, 'http://m.me/lalicoreraco', 0, 'Aguardiente a Domicilio'),
(5, 'http://m.me/lalicoreraco', 0, 'Aguardiente a Domicilio'),
(6, 'http://m.me/lalicoreraco', 0, 'Aguardiente a Domicilio'),
(7, 'http://m.me/lalicoreraco', 0, 'Aguardiente a Domicilio'),
(8, 'http://m.me/lalicoreraco', 0, 'Aguardiente a Domicilio'),
(18, 'http://www.lalicorera.com', 0, 'Licor a Domicilio'),
(19, 'https://www.lalicorera.com/productos/ginebra/beefeater', 0, 'Licor a Domicilio en Bogota'),
(14, 'http://https://www.lalicorera.com/productos/cerveza/corona-six-pack-cerveza', 0, 'Cerveza Corona a Domicilio'),
(16, 'http://https://www.lalicorera.com', 0, 'LICOR A DOMICILIO'),
(17, 'http://https://www.lalicorera.com', 0, 'gerencia@lalicorera.com'),
(20, 'http://https://www.lalicorera.com/productos/ginebra/beefeater', 0, 'Licor a domicilio'),
(24, 'https://www.lalicorera.com/productos/whisky/chivas-extra', 0, 'Licor a Domicilio'),
(23, 'https://www.lalicorera.com/productos/whisky/chivas-extra', 0, 'Domicilios Licores Bogota'),
(25, 'https://www.lalicorera.com/productos/whisky/old-parr', 0, 'Whisky Old Parr a Domicilio'),
(26, 'https://www.lalicorera.com/buscar/glenfiddich', 0, 'Licor a Domicilio'),
(29, 'https://www.lalicorera.com/buscar/diamujer', 0, 'LICOR A DOMICILIO'),
(28, 'https://www.lalicorera.com', 0, 'Feliz Navidad Licores'),
(30, 'https://www.lalicorera.com/productos/whisky/jameson-whiskey', 0, 'LICOR A DOMICILIO BOGOTA'),
(33, 'https://goo.gl/5pZYVE', 0, 'LICOR A DOMICILIO BOGOTA'),
(34, 'https://goo.gl/ivkaYp', 0, 'LICOR A DOMICILIO BOGOTA'),
(35, 'https://www.lalicorera.com/buscar/fiesta%2Bde%2Bhalloween', 0, 'gerencia@lalicorera.com'),
(36, 'https://www.lalicorera.com/productos/promociones/2-old-parr-boleta-jaloguin-andres', 0, 'Domicilios Bogota'),
(37, 'https://www.lalicorera.com/productos/promociones/johnnie-walker-red-cosquin-rock', 0, 'Domicilios Bogota'),
(38, 'https://www.lalicorera.com/productos/black-week', 0, 'gerencia@lalicorera.com'),
(39, 'https://www.lalicorera.com/productos/whisky/jameson-whiskey', 0, 'gerencia@lalicorera.com'),
(40, 'https://www.lalicorera.com/productos/cerveza/budweiser-6-unidades-botella', 0, 'LICOR A DOMICILIO BOGOTA'),
(41, 'https://www.lalicorera.com/productos/aguardiente/vodka-smirnoff-x1-lulo', 0, 'gerencia@lalicorera.com'),
(43, 'http://https://www.lalicorera.com/productos/whisky/baileys', 0, 'Domicilios Bogota'),
(45, 'https://www.lalicorera.com/productos/whisky/white-walker-by-johnnie-walker-edicion-game-of-thrones', 1, 'Domicilios Bogota');
