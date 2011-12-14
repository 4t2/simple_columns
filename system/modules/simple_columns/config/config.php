<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');


$GLOBALS['TL_CTE']['texts']['text'] = 'SimpleColumnsContentText';
$GLOBALS['TL_CTE']['texts']['list'] = 'SimpleColumnsContentList';
$GLOBALS['TL_CTE']['texts']['table'] = 'SimpleColumnsContentTable';
$GLOBALS['TL_CTE']['images']['image'] = 'SimpleColumnsContentImage';
$GLOBALS['TL_CTE']['texts']['headline'] = 'SimpleColumnsContentHeadline';
#$GLOBALS['TL_CTE']['includes']['module'] = 'SimpleColumnsContentModule';

if ($GLOBALS['TL_CTE']['includes']['teaser'] == 'ArticlePageTeaser')
{
	$GLOBALS['TL_CTE']['includes']['teaser'] = 'SimpleColumnsArticlePageTeaser';
}
else
{
	$GLOBALS['TL_CTE']['includes']['teaser'] = 'SimpleColumnsContentTeaser';
}

if (isset($GLOBALS['TL_CTE']['includes']['page_teaser']))
{
	$GLOBALS['TL_CTE']['includes']['page_teaser'] = 'SimpleColumnsPageTeaser';
}

$GLOBALS['SIMPLECOLUMNS'] = array
(					
	'style' => 'system/modules/simple_columns/html/css/simple_columns.css',
	'close' => '<div class="sc-clear"></div>'
);

?>