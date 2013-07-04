<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['simple_columns_legend'] = 'Simple-Columns-Einstellungen';


$GLOBALS['TL_LANG']['tl_settings']['simpleColumnsFramework'] = array
(
	'title' => array('JavaScript Framework', 'Welches JavaScript Framework wird für Simple Columns verwendet.'),
	'reference' => array
	(
		'auto' => 'automatische Erkennung',
		'mootools' => 'MooTools',
		'jquery' => 'jQuery'
	)
);

$GLOBALS['TL_LANG']['tl_settings']['simpleColumnsBoxSizing'] = array
(
	'title' => array('Box Sizing Model', 'Welches CSS Box Sizing Model wird für die Spaltengröße verwendet.'),
	'reference' => array
	(
		'content-box' => 'content-box',
		'border-box' => 'border-box'
	)
);