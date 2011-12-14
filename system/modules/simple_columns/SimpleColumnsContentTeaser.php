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

class SimpleColumnsPageTeaser extends ContentTeaser
{

	public function generate()
	{
		$strTemplate = parent::generate();

		if (($this->simple_columns != '') && !empty($GLOBALS['SIMPLECOLUMNS']['style']))
		{
			$GLOBALS['TL_CSS'][] = $GLOBALS['SIMPLECOLUMNS']['style'];
		}

		if ($this->simple_columns_close && !empty($GLOBALS['SIMPLECOLUMNS']['close']))
		{
			return $strTemplate . $GLOBALS['SIMPLECOLUMNS']['close'];
		}
		else
		{
			return $strTemplate;
		}
	}


	protected function compile()
	{
		parent::compile();

		if ($this->simple_columns != '')
		{
			global $simpleColumnCounter;

			if (!is_array($simpleColumnCounter))
			{
				$simpleColumnCounter = array(2=>0, 3=>0, 4=>0, 5=>0, 6=>0);
			}

			$this->arrData['cssID'][1] .= ' sc sc' . $this->simple_columns;

			$columns = (strlen($this->simple_columns) == 1 ? (int)$this->simple_columns : (int)substr($this->simple_columns, 0, 1));
			$columnCount = (strlen($this->simple_columns) == 1 ? 1 : (int)substr($this->simple_columns, 2, 1));

			if ($simpleColumnCounter[$columns] == 0)
			{
				$this->arrData['cssID'][1] .= ' sc-first sc' . $this->simple_columns . '-first';
				$simpleColumnCounter[$columns] += $columnCount;
			}
			elseif ($simpleColumnCounter[$columns] < $columns-$columnCount)
			{
				$simpleColumnCounter[$columns] += $columnCount;
			}
			else
			{
				$this->arrData['cssID'][1] .= ' sc-last sc' . $this->simple_columns . '-last';
				$simpleColumnCounter[$columns] = 0;
				$this->simple_columns_close = true;
			}
			
			if ($this->simple_columns_close)
			{
				$this->arrData['cssID'][1] .= ' sc-close';
			}
		}
	}

}

?>