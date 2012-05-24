<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Lingo4you 2011
 * @author     Mario Müller <http://www.lingo4u.de/>
 * @package    SimpleColumns
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
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

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $palette)
{
	$strPalette = '{simple_columns_legend},simple_columns,simple_columns_close';

	if (!is_array($palette))
	{
		if (strpos($palette, '{expert_legend:hide}') !== FALSE)
		{
			$GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace('{expert_legend:hide}', $strPalette.';{expert_legend:hide}', $palette);
		}
		elseif (strpos($palette, '{protected_legend:hide}') !== FALSE)
		{
			$GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace('{protected_legend:hide}', $strPalette.';{protected_legend:hide}', $palette);
		}
		else
		{
			$GLOBALS['TL_DCA']['tl_content']['palettes'][$key] .= ';'.$strPalette;
		}
	}
}
