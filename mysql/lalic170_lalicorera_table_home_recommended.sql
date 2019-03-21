
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_recommended`
--

CREATE TABLE `home_recommended` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `home_recommended`
--

INSERT INTO `home_recommended` (`id`, `product_id`, `text`, `pos`, `active`) VALUES
(14, 104, 'Licores a Domicilio. Ron La Hechicera del Caribe Colombiano para el mundo.', 9, 0),
(15, 68, 'Licor a Domicilio. Jagermeister, deja salir el cazador que habita en ti', 8, 1),
(5, 4, 'Una pequeÃ±a pruebÃ¡', 5, 1),
(8, 18, 'Sorprenda su paladar con uno de los mejores rones del mundo', 3, 0),
(13, 6, 'Las palabras y descripciÃ³n sobran, la botella habla por si misma. ', 10, 0),
(23, 105, 'Para elaborar el perfecto Gin&amp;Tonic', 2, 0),
(56, 511, 'El Kit Mundialista', 2, 0),
(19, 174, 'Excelente promociÃ³n que no puedes dejar pasar', 4, 0),
(20, 173, 'Compra 1 y te regalamos 2 picos de Vino Corinto', 3, 0),
(22, 183, '1.75 LITROS - Celebra en grande con uno de los mejores', 5, 0),
(27, 294, 'A domicilio SUPER PROMO', 4, 0),
(25, 28, 'El Mejor Regalo ', 5, 0),
(26, 11, 'Beefeater a Domicilio y en Pack', 1, 0),
(29, 136, 'Unica con 19 BotÃ¡nicos en el mercado', 1, 0),
(30, 315, 'Whiskey Bourbon Artesanal', 7, 1),
(31, 369, 'El Mejor Regalo ', 2, 0),
(32, 371, 'Comparte en Familia ', 5, 0),
(33, 1, 'La Mejor Idea Para Amor y Amistad', 3, 0),
(34, 375, 'Ginebra Beefeater a Domicilio y en Combo', 2, 0),
(35, 394, 'Whisky Chivas - La Pareja Ideal', 4, 0),
(36, 384, 'Regalo Ideal Para Amor y Amistad', 1, 0),
(37, 396, 'Disfruta tu Margarita como se debe', 4, 0),
(38, 395, 'Un duo inseparable', 6, 0),
(39, 398, 'Tequila a Domicilio', 5, 0),
(40, 397, 'Whisky a Domicilio', 2, 0),
(41, 30, 'El Obsequio Ideal', 1, 0),
(43, 33, 'El mejor Single Malt', 2, 0),
(46, 404, 'El Mejor Whisky Single Malt', 7, 0),
(45, 399, 'Old Parr a Domicilio x 2', 3, 0),
(47, 384, 'El Mejor Regalo Corporativo', 4, 0),
(48, 394, 'Chivas 12 + Mix Madurados', 4, 0),
(49, 409, 'Super Promo', 2, 0),
(50, 383, 'Elabora tu Gin and Tonic', 2, 0),
(51, 410, 'Edicion limitada a Domicilio', 5, 1),
(52, 384, 'Deleitate con es nuevo integrante', 2, 0),
(53, 413, 'Celebra el Scotch Day', 1, 0),
(54, 417, 'La Familia Walker a Domicilio', 1, 0),
(55, 500, 'Disfruta de un buen Mojito', 1, 0),
(57, 28, 'El regalo perfecto', 6, 0),
(58, 29, 'EdiciÃ³n limitada con canister metÃ¡lico', 5, 0),
(59, 518, 'AÃ±ejado en Barricas de Vino', 4, 1),
(60, 14, 'Disfruta tu gin&amp;tonic con una copa de lujo', 1, 0),
(61, 520, 'Aguardiente Ultra Premium Colombiano', 3, 0),
(62, 212, 'Un Whisky Premium a un Excelente Precio', 1, 1),
(63, 519, 'Exquisito Sabor Artesanal', 2, 0),
(64, 275, 'Perfecto para regalar', 3, 0),
(65, 161, 'La combinaciÃ³n perfecta', 4, 0),
(66, 545, 'La mejor ginebra del mundo', 2, 1),
(67, 367, 'EnfrÃ­a tu bebida favorita de una manera original', 3, 1),
(68, 273, 'Considerado el Roll Royce del Whisky a nivel Mundial', 1, 1),
(69, 305, 'Wisky Single Malt de excelente calidad', 5, 1),
(70, 621, 'WHISKY WHITE WALKER EN PRE-VENTA', 1, 1),
(71, 619, 'Vuelve Rosa tu bebida favorita', 2, 1);
