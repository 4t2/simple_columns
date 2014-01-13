window.addEvent('domready', function()
{

(function($) {

	rowHeight = 0;
	
	row = new Array();

	$$('.sc').each(function(column, index)
	{
		row.push(column);
		
		if ((height = column.getComputedSize().totalHeight) > rowHeight)
		{
			rowHeight = height;
		}

		if (column.hasClass('sc-close'))
		{
			row.each(function(rowColumn, index)
			{
				size = rowColumn.getComputedSize();

				if (rowColumn.hasClass('sc-autoheight') && (size.totalHeight < rowHeight))
				{
					rowColumn.setStyle('padding-bottom', rowHeight - size.totalHeight + size['padding-bottom']);
				}
			});

			row = new Array();
			rowHeight = 0;
		}
	});

})(document.id);

});