
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_modules`
--

CREATE TABLE `section_modules` (
  `id` int(11) NOT NULL,
  `sections_id` int(11) NOT NULL,
  `modules_id` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `section_modules`
--

INSERT INTO `section_modules` (`id`, `sections_id`, `modules_id`, `pos`, `active`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 1, 1),
(3, 3, 1, 1, 1),
(4, 4, 1, 1, 1),
(5, 1, 2, 6, 1),
(6, 2, 2, 6, 1),
(7, 3, 2, 6, 1),
(8, 4, 2, 6, 1),
(9, 4, 3, 4, 1),
(10, 3, 5, 4, 1),
(11, 5, 4, 4, 1),
(12, 5, 1, 1, 1),
(13, 5, 2, 6, 1),
(14, 1, 6, 2, 1),
(15, 9, 6, 2, 1),
(16, 1, 7, 3, 1),
(17, 1, 8, 4, 1),
(18, 1, 9, 5, 1),
(19, 9, 1, 1, 1),
(20, 9, 7, 3, 1),
(21, 9, 10, 4, 1),
(22, 9, 9, 5, 1),
(23, 9, 2, 6, 1),
(24, 7, 1, 1, 1),
(25, 7, 6, 2, 1),
(26, 7, 7, 3, 1),
(27, 7, 11, 4, 1),
(28, 7, 9, 5, 1),
(29, 7, 2, 6, 1),
(30, 5, 6, 2, 1),
(31, 5, 7, 3, 1),
(32, 5, 9, 5, 1),
(33, 10, 1, 1, 1),
(34, 10, 6, 2, 1),
(35, 10, 7, 3, 1),
(36, 10, 12, 4, 1),
(37, 10, 9, 5, 1),
(38, 10, 2, 6, 1),
(39, 4, 6, 2, 1),
(40, 4, 7, 3, 1),
(41, 4, 9, 5, 1),
(42, 3, 6, 2, 1),
(43, 3, 7, 3, 1),
(44, 3, 9, 5, 1),
(45, 6, 1, 1, 1),
(46, 6, 6, 2, 1),
(47, 6, 7, 3, 1),
(48, 6, 13, 4, 1),
(49, 6, 9, 5, 1),
(50, 6, 2, 6, 1),
(51, 8, 1, 1, 1),
(52, 8, 6, 2, 1),
(53, 8, 7, 3, 1),
(54, 8, 14, 4, 1),
(55, 8, 9, 5, 1),
(56, 8, 2, 6, 1),
(57, 11, 1, 1, 1),
(58, 11, 6, 2, 1),
(59, 11, 7, 3, 1),
(60, 11, 15, 4, 1),
(61, 11, 9, 5, 1),
(62, 11, 2, 6, 1),
(63, 2, 6, 2, 1),
(64, 2, 7, 3, 1),
(65, 2, 16, 4, 1),
(66, 2, 9, 5, 1),
(67, 12, 1, 1, 1),
(68, 12, 6, 2, 1),
(69, 12, 7, 3, 1),
(70, 12, 17, 4, 1),
(71, 12, 9, 5, 1),
(72, 12, 2, 6, 1),
(73, 13, 1, 1, 1),
(74, 13, 18, 4, 1),
(75, 13, 2, 6, 1),
(76, 13, 6, 2, 1),
(77, 13, 9, 5, 1),
(78, 13, 7, 3, 1);