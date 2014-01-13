<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['simple_columns_legend'] = 'Simple Columns Settings';


$GLOBALS['TL_LANG']['tl_settings']['simpleColumnsFramework'] = array
(
	'title' => array('JavaScript Framework', 'Which JavaScript Framework should be used.'),
	'reference' => array
	(
		'auto' => 'auto detect',
		'mootools' => 'MooTools',
		'jquery' => 'jQuery'
	)
);

$GLOBALS['TL_LANG']['tl_settings']['simpleColumnsBoxSizing'] = array
(
	'title' => array('Box Sizing Model', 'Which CSS Box Sizing Model should be used for column width.'),
	'reference' => array
	(
		'content-box' => 'content-box',
		'border-box' => 'border-box'
	)
);
