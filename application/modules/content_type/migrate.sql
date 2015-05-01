CREATE TABLE IF NOT EXISTS `content_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_module` varchar(512) DEFAULT NULL,
  `human_name` varchar(512) DEFAULT NULL,
  `seo_title` text,
  `seo_description` text,
  `seo_keywords` text,
  `template` varchar(512) DEFAULT NULL,
  `menu` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;