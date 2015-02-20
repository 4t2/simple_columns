<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * @copyright  Lingo4you 2015
 * @author     Mario Müller <https://www.lingolia.com/>
 * @package    SimpleColumns
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['simpleColumnCounter'] = array(2=>0, 3=>0, 4=>0, 5=>0, 6=>0);
$GLOBALS['simpleColumnRowspanCounter'] = 0;
$GLOBALS['simpleColumnClose'] = false;
$GLOBALS['simpleColumnBeHtml'] = '';

$GLOBALS['TL_CONFIG']['simpleColumnsFramework'] = 'auto';
$GLOBALS['TL_CONFIG']['simpleColumnsBoxSizing'] = 'content-box';

$GLOBALS['SIMPLECOLUMNS'] = array
(
	'count' => 0,
	'style' => array
	(
		'content-box' 	=> 'system/modules/simple_columns/assets/styles/simple_columns.css',
		'border-box' 	=> 'system/modules/simple_columns/assets/styles/simple_columns_bb.css'
	),
	'close' => '<div class="sc-clear"></div>');

/**
 * Hook
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('SimpleColumnsHook', 'myGetContentElement');
