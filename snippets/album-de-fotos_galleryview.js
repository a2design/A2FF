/*
	category: A2 Multimidia
	name: Album de fotos (Gallery View) [JS]
	toolTip: Album de fotos (Gallery View) [JS]
*/	
	//Chamadas para os scripts jQuery///////////////////////////////////////////////	
	//<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>	
	//<script type="text/javascript" src="../js/jquery.galleryview-1.1.js"></script>
	//<script type="text/javascript" src="../js/jquery.timers-1.1.2.js"></script>
	
	//<script type="text/javascript">
		$(document).ready(function(){
			$('#photos').galleryView({
				panel_width: 300,
				panel_height: 219,
				frame_width: 100,
				frame_height: 100
			});
			$('#album_view').galleryView({
				panel_width: 460,
				panel_height: 335,
				frame_width: 100,
				frame_height: 100
			});		
		});
	//</script>