<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = str_replace('{text_legend},text;', '{text_legend},text;{simple_columns_legend},simple_columns,simple_columns_close;', $GLOBALS['TL_DCA']['tl_content']['palettes']['text']);

$GLOBALS['TL_DCA']['tl_content']['palettes']['list'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['list']);

$GLOBALS['TL_DCA']['tl_content']['palettes']['table'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['table']);

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['image']);

$GLOBALS['TL_DCA']['tl_content']['palettes']['teaser'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['teaser']);

$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['headline']);

#$GLOBALS['TL_DCA']['tl_content']['palettes']['module'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['module']);

if (isset($GLOBALS['TL_DCA']['tl_content']['palettes']['page_teaser']))
{
	$GLOBALS['TL_DCA']['tl_content']['palettes']['page_teaser'] = str_replace('{expert_legend:hide}', '{simple_columns_legend},simple_columns,simple_columns_close;{expert_legend:hide}', $GLOBALS['TL_DCA']['tl_content']['palettes']['page_teaser']);
}


$GLOBALS['TL_DCA']['tl_content']['fields']['simple_columns'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['simple_columns']['title'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => array('2', '3', '3-2', '4', '4-2', '4-3', '5', '5-2', '5-3', '5-4'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['simple_columns']['reference'],
	'eval'                    => array('includeBlankOption'=>true, 'maxlength'=>3, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['simple_columns_close'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['simple_columns_close'],
	'exclude'                 => true,
	'inputType'		=> 'checkbox',
	'eval'			=> array('tl_class'=>'w50 m12')
);


?>