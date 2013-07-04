(function($)
{

jQuery(function($)
{

	rowHeight = 0;
	
	row = new Array();

	$('.sc').each(function(index, column)
	{
		row.push(column);

		if ((height = $(column).height()) > rowHeight)
		{
			rowHeight = height;
		}

		if ($(column).hasClass('sc-close'))
		{
			$(row).each(function(index, rowColumn)
			{
				columnHeight = $(rowColumn).height();

				if ($(rowColumn).hasClass('sc-autoheight') && (columnHeight < rowHeight))
				{
					$(rowColumn).height(rowHeight);
				}
			});

			row = new Array();
			rowHeight = 0;
		}
	});

});

})(document.id);
