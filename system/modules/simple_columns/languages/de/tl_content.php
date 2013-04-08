<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['simple_columns_legend'] = 'Spalteneinstellungen';
$GLOBALS['TL_LANG']['tl_content']['simple_columns_legend_ignore'] = 'Spalteneinstellungen <span style="color:#c00">(wird wegen vorherigem Element ignoriert)</span>';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['simple_columns']['title'] = array('Spalten', 'Anzahl der Spalten');
$GLOBALS['TL_LANG']['tl_content']['simple_columns']['reference'] = array(
	'2' => '2-spaltig',
	'3' => '3-spaltig',
	'3-2' => '→ über 2 Spalten',
	'4' => '4-spaltig',
	'4-2' => '→ über 2 Spalten',
	'4-3' => '→ über 3 Spalten',
	'5' => '5-spaltig',
	'5-2' => '→ über 2 Spalten',
	'5-3' => '→ über 3 Spalten',
	'5-4' => '→ über 4 Spalten'
);

$GLOBALS['TL_LANG']['tl_content']['simple_columns_rowspan']['title'] = array('Spaltenhöhe', 'Mehreren Elemente in einer Spalte zusammenfassen.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_rowspan']['reference'] = array(
	'0' => '-',
	'2' => 'Spalte umfasst 2 Elemente',
	'3' => 'Spalte umfasst 3 Elemente',
	'4' => 'Spalte umfasst 4 Elemente',
	'5' => 'Spalte umfasst 5 Elemente',
	'6' => 'Spalte umfasst 6 Elemente',
	'7' => 'Spalte umfasst 7 Elemente',
	'8' => 'Spalte umfasst 8 Elemente',
	'9' => 'Spalte umfasst 9 Elemente',
	'10' => 'Spalte umfasst 10 Elemente'	
);

$GLOBALS['TL_LANG']['tl_content']['simple_columns_close'] = array('Zeile manuell schließen', 'Zeile manuell schließen und nächste Spalte in einer neuen Zeile anfangen.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_wrapper'] = array('Umschlag-Element hinzufügen', 'Um das Element wird ein DIV hinzugefügt. Wird bei Modulen benötigt.');
$GLOBALS['TL_LANG']['tl_content']['simple_columns_autoheight'] = array('Gleiche Spaltenhöhe', 'Das Element wird so hoch wie das höchste Element in der Zeile.');
