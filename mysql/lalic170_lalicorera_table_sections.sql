
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `private` tinyint(4) NOT NULL,
  `https` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `section`, `private`, `https`) VALUES
(1, 'Inicio', 0, 1),
(2, 'Mi cuenta', 1, 1),
(3, '404', 0, 1),
(4, 'Contrasena', 0, 1),
(5, 'Registro', 0, 1),
(6, 'Blog', 0, 1),
(7, 'Cocteles', 0, 1),
(8, 'Contacto', 0, 1),
(9, 'Productos', 0, 1),
(10, 'Checkout', 0, 1),
(11, 'Buscar', 0, 1),
(12, 'Admin', 1, 1),
(13, 'Lalicorera', 0, 1);
