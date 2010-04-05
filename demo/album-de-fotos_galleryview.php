<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>teste</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/album-de-fotos_galleryview.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="teste RSS" href="#" />	
	
	<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>	
	<script type="text/javascript" src="../js/jquery.galleryview-1.1.js"></script>
	<script type="text/javascript" src="../js/jquery.timers-1.1.2.js"></script>
	
	<script type="text/javascript">
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
	</script>


</head>
<body id="teste">

<h2 class="section_title">Título para as informações de galeria de imagens</h2>
<div id="album_view" class="figure galleryview">
  <div class="panel">
     <img src="../img/modelo01.jpg" /> 
    <div class="panel-overlay">
      <h2>Effet du soleil sur le paysage</h2>
      <p>Photo by <a href="http://www.sxc.hu/profile/tomharry" target="_blank">tomharry</a>.  View full-size photo <a href="http://www.sxc.hu/photo/158829" target="_blank">here</a>.</p>
    </div>
  </div>

  <div class="panel">
     <img src="../img/modelo01.jpg" /> 
    <div class="panel-overlay">
      <h2>Eden</h2>
      <p>Photo by <a href="http://www.sxc.hu/profile/emsago" target="_blank">emsago</a>.  View full-size photo <a href="http://www.sxc.hu/photo/152865" target="_blank">here</a>.</p>
    </div>

  </div>
  <div class="panel">
     <img src="../img/modelo01.jpg" /> 
    <div class="panel-overlay">
      <h2>Snail on the Corn</h2>
      <p>Photo by <a href="http://www.sxc.hu/profile/baines" target="_blank">baines</a>.  View full-size photo <a href="http://www.sxc.hu/photo/34453" target="_blank">here</a>.</p>

    </div>
  </div>
  <div class="panel">
     <img src="../img/modelo01.jpg" /> 
    <div class="panel-overlay">
      <h2>Snail on the Corn</h2>
      <p>Photo by <a href="http://www.sxc.hu/profile/baines" target="_blank">baines</a>.  View full-size photo <a href="http://www.sxc.hu/photo/34453" target="_blank">here</a>.</p>

    </div>
  </div>  
  <ul class="filmstrip">
    <li><img src="http://spaceforaname.com/img/gallery/frame-01.jpg" alt="Effet du soleil" title="Effet du soleil" /></li>
    <li><img src="http://spaceforaname.com/img/gallery/frame-02.jpg" alt="Eden" title="Eden" /></li>
    <li><img src="http://spaceforaname.com/img/gallery/frame-03.jpg" alt="Snail on the Corn" title="Snail on the Corn" /></li>
    <li><img src="http://spaceforaname.com/img/gallery/frame-04.jpg" alt="Flowers" title="Flowers" /></li>
  </ul>
</div>



</body>
</html>

