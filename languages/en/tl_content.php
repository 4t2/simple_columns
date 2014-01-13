<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['simple_columns_legend'] = 'Column settings';
$GLOBALS['TL_LANG']['tl_content']['simple_columns_legend_ignore'] = 'Column settings <span style="color:#c00">(ignored because preceding element)</span>';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['simple_columns']['title'] = array('Columns', 'Number of columns');
$GLOBALS['TL_LANG']['tl_content']['simple_columns']['reference'] = array(
	'2' => '2 columns',
	'3' => '3 columns',
	'3-2' => '→ span 2 columns',
	'4' => '4 columns',
	'4-2' => '→ span 2 columns',
	'4-3' => '→ span 3 columns',
	'5' => '5 columns',
	'5-2' => '→ span 2 columns',
	'5-3' => '→ span 3 columns',
	'5-4' => '→ span 4 columns'
);

$GLOBALS['TL_LANG']['tl_content']['simple_columns_rowspan']['title'] = array('Row span', 'Some elements in one column.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_rowspan']['reference'] = array(
	'0' => '-',
	'2' => 'Column contains 2 elements',
	'3' => 'Column contains 3 elements',
	'4' => 'Column contains 4 elements',
	'5' => 'Column contains 5 elements',
	'6' => 'Column contains 6 elements',
	'7' => 'Column contains 7 elements',
	'8' => 'Column contains 8 elements',
	'9' => 'Column contains 9 elements',
	'10' => 'Column contains 10 elements'	
);

$GLOBALS['TL_LANG']['tl_content']['simple_columns_close'] = array('Force to close row', 'Close the row and start next on new row.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_wrapper'] = array('Add a wrapper element', 'Add a DIV as wrapper element. Need on modules.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_border'] = array('Right border', 'Draw a right border for the element (CSS class sc-border). Works only on box sizing model border-box.');
