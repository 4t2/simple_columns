$(document).ready(function()
{
	// bugfix, see: http://stv.whtly.com/2010/01/04/jquery-document-ready-bug-in-safari-webkit/
	isSafari = (navigator.userAgent.indexOf('Safari') != -1);

	if (isSafari && document.readyState != "complete")
	{
		setTimeout(arguments.callee, 100);
		return;
	}

	rowHeight = 0;	
	row = new Array();

	$('.sc').each(function(index, column)
	{
		row.push(column);

		if ($(column).hasClass('sc-wrapper'))
		{
			columnHeight = $(column).children().first().height();
		}
		else
		{
			columnHeight = $(column).height();
		}

		if (columnHeight > rowHeight)
		{
			rowHeight = columnHeight;
		}

		if ($(column).hasClass('sc-close'))
		{
			$(row).each(function(index, rowColumn)
			{
				if ($(rowColumn).hasClass('sc-wrapper'))
				{
					columnHeight = $(rowColumn).children().first().height();
				}
				else
				{
					columnHeight = $(rowColumn).height();
				}

				if ($(rowColumn).hasClass('sc-autoheight') && (columnHeight < rowHeight))
				{
					if ($(rowColumn).hasClass('sc-wrapper'))
					{
						$(rowColumn).children().first().height(rowHeight);
					}
					else
					{
						$(rowColumn).height(rowHeight);
					}
				}
			});

			row = new Array();
			rowHeight = 0;
		}
	});

});