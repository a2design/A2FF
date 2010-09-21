<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>gMap - Google Maps Plugin For jQuery | Examples</title>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAFE3CliSENUGw3s1qlQV8DBRQrCljJYSymNWxbbSUejvtBXUsFhTOf5Q-HwBFZvPIxjz-LDvZzqqgog" type="text/javascript"></script>
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="../js/jquery.gmap-1.1.0-min.js"></script>

	<script type="text/javascript">
	$(function()
	{
		
		$("#map1").gMap({ markers: [{ latitude: 47.670553,
									  longitude: 9.588479 }] });
		
		$("#map2").gMap({ maptype: G_PHYSICAL_MAP });
		
		$("#map3").gMap({ markers: [{ latitude: 47.670553,
									  longitude: 9.588479,
									  html: "Tettnang, Germany",
									  popup: true }],
						  zoom: 6 });
		
		$("#map5").gMap({ controls: true,
                  		  scrollwheel: false,
	                  	  latitude: -23.529596,
	                      longitude: -46.67353,
	                      zoom: 16 ,
	                      popup: true,
                          markers: [
                                    { latitude: -23.528908,
		                              longitude: -46.673037,
		                              html: "Rua Doutor Costa Júnior, 465,  CEP 05002-000",		                                                           
		                              icon: { image: "../img/gmap_pin_orange.png",                	  				  
		                              		  iconsize: [26, 46],
		                              		  iconanchor: [12,46],
		                              		  infowindowanchor: [12, 0] }},

		  		                    { latitude: -23.529596,
		                              longitude: -46.67353,
		                              html: "Rua Doutor Costa Júnior, 365,  CEP 05002-000", 
		                              icon: { image: "../img/gmap_pin_grey.png",
		                              		  iconsize: [26, 46],
		                              		  iconanchor: [12,46],
		                              		  infowindowanchor: [12, 0] }},
		                              
		                            { latitude: -23.527584,
	          	                      longitude: -46.671002,
	          	                   	  html: "Bar e Lanchonete Matarazzo Ltda",
		                              icon: { image: "../img/gmap_pin.png", 
					                          iconsize: [26, 46],
					                          iconanchor: [12, 46],
					                          infowindowanchor: [12, 0] }
					                }
		  					        ]
		                             
                 			 
	                          });
        
		$("#map4").gMap({ markers: [{ latitude: 47.651968,
                              longitude: 9.478485,
                              html: "_latlng" },
                            { address: "Tettnang, Germany",
                              html: "The place I live" },
                            { address: "Langenargen, Germany",
                              html: "_address" }],
                  address: "Braitenrain, Germany",
                  zoom: 10 });
	});
	</script>
</head>
<body id="top">
	<div id="center">
		<div id="content">
			
			<!-->div id="map2" style="width: 547px; height: 320px; border: 2px solid #eee; padding:5px; margin: 5px; overflow: hidden;"></div>
			
			<div id="map3" style="width: 547px; height: 320px; border: 2px solid #eee; padding:5px; margin: 5px; overflow: hidden;"></div>
			
			<div id="map4" style="width: 547px; height: 320px; border: 2px solid #eee; padding:5px; margin: 5px; overflow: hidden;"></div-->
			
			<div id="map5" style="width: 800px; height: 520px; border: 2px solid #eee; padding:5px; margin: 5px; overflow: hidden;"></div>


		</div>
	</div>

</body>
</html>