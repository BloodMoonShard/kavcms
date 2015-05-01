CREATE TABLE IF NOT EXISTS `sidebar` (
`id_sidebar` int(11) NOT NULL,
  `name_sidebar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `sidebar_elements` (
`id_sidebar_elements` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `link` varchar(512) NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;