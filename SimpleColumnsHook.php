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
 * @copyright  Lingo4you 2014
 * @author     Mario Müller <http://www.lingolia.com/>
 * @package    SimpleColumns
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

class SimpleColumnsHook extends Frontend
{
	public function myGetContentElement($objElement, $strBuffer)
	{
		/* defined in config/config.php */
		global $simpleColumnCounter, $simpleColumnRowspanCounter, $simpleColumnClose, $simpleColumnBeHtml;

		if ($objElement->simple_columns == '' && $simpleColumnRowspanCounter < 2)
		{
			return $strBuffer;
		}

		/**
		 * fix for site_export extension because rendering twice
		 */
		if (($this->Input->get('export') == '1' && $this->Input->get('layout') != '') && !isset($GLOBALS['SITE_EXPORT']))
		{
			return $strBuffer;
		}

		if ($objElement->simple_columns_wrapper || preg_match('~(.*?)(?!<[a-z]+ class="no-no)(<[a-z]+[^>]*>)(.*)~ism', $strBuffer, $match))
		#if ($objElement->simple_columns_wrapper || preg_match('~(.*?)(<[a-z]+[^>]*>)(.*)~ism', $strBuffer, $match))
		{
			if (!empty($GLOBALS['SIMPLECOLUMNS']['style']) && isset($GLOBALS['SIMPLECOLUMNS']['style'][$GLOBALS['TL_CONFIG']['simpleColumnsBoxSizing']]))
			{
				$GLOBALS['TL_CSS'][] = $GLOBALS['SIMPLECOLUMNS']['style'][$GLOBALS['TL_CONFIG']['simpleColumnsBoxSizing']];
				$GLOBALS['SIMPLECOLUMNS']['style'] = '';
			}

			if ($objElement->simple_columns != '' || $simpleColumnRowspanCounter > 1)
			{
				$startRowspan = false;
				$closeRowspan = false;
				$simpleColumnRowspan = false;

				if ($simpleColumnRowspanCounter > 2)
				{
					$simpleColumnRowspanCounter--;
					$simpleColumnRowspan = true;
				}
				elseif ($simpleColumnRowspanCounter == 2)
				{
					$closeRowspan = true;
					$simpleColumnRowspan = true;
					$simpleColumnRowspanCounter = 0;
				}
				elseif ($objElement->simple_columns_rowspan > 1)
				{
					$simpleColumnRowspanCounter = $objElement->simple_columns_rowspan;
					$simpleColumnClose = $objElement->simple_columns_close;
					$startRowspan = true;
					$simpleColumnRowspan = true;
				}

				$be_html = '<div>';

				$scClass = 'sc sc' . $objElement->simple_columns . ' sc-count'.$GLOBALS['SIMPLECOLUMNS']['count']++ . ($objElement->simple_columns_border?' sc-border':'');

				if ($objElement->simple_columns_autoheight)
				{
					if (!defined('SIMPLE_COLUMNS_JS_LINK'))
					{
						if ($GLOBALS['TL_CONFIG']['simpleColumnsFramework'] == 'mootools' ||
							($GLOBALS['TL_CONFIG']['simpleColumnsFramework'] == 'auto' && (version_compare(VERSION, '3', '<') || $objPage->hasMooTools)))
						{
							$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/simple_columns/assets/scripts/moo_simple_columns.js';
						}
						elseif ($GLOBALS['TL_CONFIG']['simpleColumnsFramework'] == 'jquery' || $objPage->hasJQuery)
						{
							$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/simple_columns/assets/scripts/jquery_simple_columns.js';
						}

						define('SIMPLE_COLUMNS_JS_LINK', 1);
					}

					$scClass .= ' sc-autoheight';
				}

				$columns = (strlen($objElement->simple_columns) == 1 ? (int)$objElement->simple_columns : (int)substr($objElement->simple_columns, 0, 1));
				$columnCount = (strlen($objElement->simple_columns) == 1 ? 1 : (int)substr($objElement->simple_columns, 2, 1));

				if (TL_MODE == 'BE')
				{
					for ($i=0; $i<$simpleColumnCounter[$columns]; $i++)
					{
						$be_html .= '<img src="system/modules/simple_columns/assets/images/empty.png" width="10" height="10" alt="" style="margin:2px 2px '.($simpleColumnRowspan?'12':'2').'px 2px">';
					}
	
					$be_html .= '<img src="system/modules/simple_columns/assets/images/column.png" width="'.($columnCount*10+($columnCount-1)*4).'" height="'.($simpleColumnRowspan?'20':'10').'" alt="" style="margin:2px">';

					if ($objElement->simple_columns_close)
					{
						$be_html .= '<img src="system/themes/default/images/close.gif" width="10" height="10" alt="" style="margin:2px">';
					}
					else
					{
						for ($i=$simpleColumnCounter[$columns]+$columnCount; $i<$columns; $i++)
						{
							$be_html .= '<img src="system/modules/simple_columns/assets/images/empty.png" width="10" height="10" alt="" style="margin:2px 2px '.($simpleColumnRowspan?'12':'2').'px 2px">';
						}
					}
				}


				if ($startRowspan)
				{
					$simpleColumnBeHtml = $be_html;
				}
				

				if (!$simpleColumnRowspan || $startRowspan)
				{
					if ($simpleColumnCounter[$columns] == 0)
					{
						$scClass .= ' sc-first sc' . $objElement->simple_columns . '-first';
						$simpleColumnCounter[$columns] += $columnCount;
					}
					elseif ($simpleColumnCounter[$columns] < $columns-$columnCount)
					{
						$simpleColumnCounter[$columns] += $columnCount;
					}
					else
					{
						$scClass .= ' sc-last sc' . $objElement->simple_columns . '-last';
						$objElement->simple_columns_close = true;
					}
				}
				elseif ($startRowspan)
				{
					$scClass = 'sc-rowspan '.$scClass;
				}

				if ($objElement->simple_columns_close)
				{
					$scClass .= ' sc-close';
					$simpleColumnCounter[$columns] = 0;
				}
				
				if (TL_MODE == 'FE')
				{
					if ($startRowspan)
					{
						$cssIdClass = deserialize($objElement->cssID);

						if (strlen($cssIdClass[1]))
						{
							$scClass .= ' '.$cssIdClass[1];
						}

						$strBuffer = '<div class="'.$scClass.'">'.$strBuffer;
					}
					elseif ($closeRowspan)
					{
						$strBuffer = $strBuffer.'</div>';
					}
					elseif (!$simpleColumnRowspan)
					{
						$count = 0;
						
						if ($objElement->simple_columns_wrapper)
						{
							$strBuffer = '<div class="'.$scClass.' sc-wrapper">'.$strBuffer.'</div>';
						}
						else
						{
							$match[2] = preg_replace('~(class="[^"]*)"~iU', '$1 '.$scClass.'"', $match[2], 1, $count);
							
							if ($count < 1)
							{
								$match[2] = str_replace('>', ' class="'.$scClass.'">', $match[2]);
							}
							
							$strBuffer = $match[1].$match[2].$match[3];
						}
					}

					if (!empty($GLOBALS['SIMPLECOLUMNS']['close']) && ($objElement->simple_columns_close || $simpleColumnClose) && (!$simpleColumnRowspan || $closeRowspan))
					{
						$strBuffer .= $GLOBALS['SIMPLECOLUMNS']['close'];
					}
				}
				
				if (TL_MODE == 'BE')
				{
					$strBuffer = ($simpleColumnRowspan ? $simpleColumnBeHtml : $be_html) . '</div>' . $strBuffer;
				}				
			}
			
			if ($closeRowspan)
			{
				$simpleColumnRowspan = false;
			}
		}
		
		return $strBuffer;
	}

}
