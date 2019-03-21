
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`id`, `name`) VALUES
(1, 'Header'),
(2, 'Footer'),
(3, 'LostPass'),
(4, 'Register'),
(5, 'NotFound'),
(6, 'SideMenu'),
(7, 'Banners'),
(8, 'Home'),
(9, 'Cart'),
(10, 'Products'),
(11, 'Cocktails'),
(12, 'Checkout'),
(13, 'Blogs'),
(14, 'Contact'),
(15, 'Search'),
(16, 'Account'),
(17, 'Admin'),
(18, 'Lalicorera');
