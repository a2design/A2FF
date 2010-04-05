	// Create the tooltips only on document load
	$(document).ready(function() 
	{
  // qtip id para cada th **********************************************************************
	$("th strong").each(function(index, element){$(element).attr("id", index);});

	   // qtip **********************************************************************
	   $('th strong').qtip(
	   {
      content: {
         text: false // Use each elements title attribute
      },
	style: { 
			tip: 'leftMiddle',
			border: {
					 width: 3,
					 radius: 3,
				  },
			name: 'light' // Inherit from preset style
	   },
		position: {
			  corner: {
		     target: 'rightMiddle',
		     tooltip: 'leftMiddle'

			  }
		   }
	   });
	});
	   // qtip fim **********************************************************************	


