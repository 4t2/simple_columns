-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------


-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `simple_columns` char(3) NOT NULL default '',
  `simple_columns_rowspan` int(10) unsigned NOT NULL default '0',
  `simple_columns_close` char(1) NOT NULL default '',
  `simple_columns_wrapper` char(1) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

