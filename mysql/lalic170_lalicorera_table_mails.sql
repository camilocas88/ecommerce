
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `allusers` smallint(6) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `lastcount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
